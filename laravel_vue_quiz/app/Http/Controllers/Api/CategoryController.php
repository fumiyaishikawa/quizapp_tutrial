<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Categoryモデルからidとnameカラムの全てのデータを取得する
        $category = Category::select('id', 'name')->get();

        return $category;
    }
}
