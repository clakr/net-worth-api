<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\NetWorthResource;
use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $data = UserResource::collection($users);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role' => $request->input('role'),
                'password' => $request->input('password', 'password'),
            ]);
            $data = new UserResource($user);

            DB::commit();

            return response([
                'data' => $data
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = new UserResource($user);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            DB::beginTransaction();

            $user = tap($user)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role' => $request->input('role'),
            ]);
            $data = new UserResource($user);

            DB::commit();

            return response([
                'data' => $data
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    // TODO: deleting user errors, sqlstate[23000]
    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();

            $user->delete();

            DB::commit();

            return response(status: Response::HTTP_NO_CONTENT);
        } catch (\Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function getNetWorth(User $user)
    {
        $netWorth = $user->netWorth
            ->load([
                'transactions' => fn ($query) => $query->orderBy('created_at', 'desc')->limit(10)
            ]);
        $data = new NetWorthResource($netWorth);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }
}
