<?php

namespace App\Http\Controllers;

use App\Services\Transaction\Data\TransactionListData;
use App\Services\Transaction\TransactionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct(private TransactionService $transactionService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = TransactionListData::from($request);
        return $this->success($this->transactionService->getAll($data));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        return $this->success($this->transactionService->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        return $this->success($this->transactionService->find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $this->transactionService->update($id, $request->all());
        return $this->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $this->transactionService->delete($id);
        return $this->noContent();
    }
}
