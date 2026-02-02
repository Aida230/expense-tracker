<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = $request->user()
            ->categories()
            ->orderBy('name')
            ->get();
            
        return response()->json($categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $request->user()
            ->categories()
            ->create($request->validated());
        
            return response()->json($category, 201);
    }
}
