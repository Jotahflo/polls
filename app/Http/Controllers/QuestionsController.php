<?php

namespace polls\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function getAll() {
        $questions = Question::all();
        return view('poll', ['questions' => $questions]);
      }
}
