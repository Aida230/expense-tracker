<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
