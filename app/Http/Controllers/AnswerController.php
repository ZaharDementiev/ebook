<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        return Answer::create([
            'answer' => $request->input('answer'),
            'number' => $request->input('number'),
            'book_id' => $request->input('book_id'),
            'sub_number' => $request->input('sub_number'),
        ]);
    }
}
