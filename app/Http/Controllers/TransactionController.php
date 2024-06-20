<?php

namespace App\Http\Controllers;

use App\CategoryType;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $transactions = $request->user()
            ->netWorth
            ->transactions
            ->sortByDesc('created_at')
            ->load('subCategory');
        $data = TransactionResource::collection($transactions);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        try {
            DB::beginTransaction();

            $transaction = $request->user()
                ->netWorth
                ->transactions()
                ->create([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'sub_category_id' => $request->input('subCategoryId'),
                    'amount' => $request->input('amount'),
                    'created_at' => $request->input('createdAt'),
                    'updated_at' => $request->input('createdAt'),
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

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function getSum(Request $request)
    {
        $data = [];

        [
            'amount' => $amount,
            'transactions' => $transactions,
        ] = $request->user()->netWorth;

        $transactions->each(function (Transaction $transaction) use (&$data) {
            [
                'amount' => $tAmount,
                'subCategory' => ['category' => [
                    'type' => $cType,
                    'name' => $cName,
                ]]
            ] = $transaction;

            if ($cType === CategoryType::EXPENSE) {
                $amount = match (Arr::exists($data, $cName)) {
                    false => $tAmount,
                    true => $data[$cName] + $tAmount,
                };

                data_set($data, $cName, $amount);
            }
        });

        data_set($data, 'Undocumented', $amount - array_sum($data));

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }
}
