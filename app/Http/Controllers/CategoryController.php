<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return $this->success($this->categoryService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        return $this->success($this->categoryService->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        return $this->success($this->categoryService->find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $this->categoryService->update($id, $request->all());
        return $this->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $this->categoryService->delete($id);
        return $this->noContent();
    }
}
