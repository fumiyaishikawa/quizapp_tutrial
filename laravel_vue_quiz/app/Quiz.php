<?php

namespace App;

use App\Answer;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // テーブル名を指定
    protected $table = 'quizzes';

    // リレーションを明示する hasOneは一対一の関係
    public function answer()
    {
        // Quizモデルのanswers_idとAnswerモデルのidを紐付ける
        return $this->hasOne('App\Answer', 'id', 'answers_id');
    }
    public function category()
    {
        // Quizモデルのcategories_idとCategoryモデルのidを紐付ける
        return $this->hasOne('App\Category', 'id', 'categories_id');
    }
}
