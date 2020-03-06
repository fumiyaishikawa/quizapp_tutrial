<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        // categoriesをリクエストから取得する
        $category = $request->input('categories');

        if($category) {
            // stringで受け取るので、arrayに変換する
            $category = explode(',', $category);
        } else {
            return [];
        }

        // withを用いて、関連するテーブルも取得可能(ここではQuizモデルと一緒にAnswerやCategoryモデルも取得している)
        $quiz = Quiz::with(['answer', 'category'])
            ->wherein('quizzes.categories_id', $category)   // 絞り込み
            ->inRandomOrder()   // 順番をランダムにする
            ->limit(10)
            ->get();

        return $quiz;
    }
}
