<?php

namespace polls\Http\Controllers;

use Illuminate\Http\Request;
use polls\Question;
use polls\User;
use polls\Answer;

class PollsController extends Controller
{
    public function index() {
        $questions = Question::all();
        return view('questions', ['questions' => $questions]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'fullName' => 'required|max:50',
            'gender' => 'required',
            'hobby' => 'required|max:50',
            'hrsHobby' => 'required',
        ]);

        $fullName = $request->input('fullName');
        User::create(['full_name' => $fullName]);

        $users = User::all();
        $idLastUser = $users->last()->id;
            
        $answers = $request->all();        
        unset($answers['fullName']);
        unset($answers['_token']);
        
        $countIdQuestion = 2;
        foreach ($answers as $answer) {
            Answer::create(['id_question' => $countIdQuestion,'id_user' => $idLastUser,'content' => $answer]);
            $countIdQuestion++;
        }
                
        return redirect('report');
    }
}
