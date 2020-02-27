<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::orderby('id', 'desc')->get();  // id降順でデータを取得

        return $informations;
    }
}
