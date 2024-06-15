<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\NetWorthResource;
use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\TransactionType;
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
            $validated = $request->validated();

            DB::beginTransaction();

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
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
            $validated = $request->validated();

            DB::beginTransaction();

            $user = tap($user)->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
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

    // TODO: extract this to a separate controller
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

    // TODO: extract this to a separate controller
    public function getTransactions(User $user)
    {
        $transactions = $user
            ->netWorth
            ->transactions
            ->sortByDesc('created_at')
            ->load('subCategory');
        $data = TransactionResource::collection($transactions);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    // TODO: extract this to a separate controller
    public function storeTransaction(StoreTransactionRequest $request, User $user)
    {
        try {
            $validated = $request->validated();

            DB::beginTransaction();

            $transaction = $user->netWorth->transactions()->create([
                'type' => $request->input('type') === 'expense' ? TransactionType::EXPENSE : TransactionType::INCOME,
                'name' => $validated['name'],
                'description' => $validated['description'],
                'sub_category_id' => $validated['subCategoryId'],
                'amount' => $validated['amount'],
                'created_at' => $validated['createdAt'],
                'updated_at' => $validated['createdAt'],
            ]);
            $data = new TransactionResource($transaction);

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
}
