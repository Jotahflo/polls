<?php

namespace polls\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use polls\Charts\AmountUsers;
use polls\Answer;
use polls\User;

class ReportsController extends Controller
{
    public function index() {
        $users = User::all();

        $answersUsers = array();
        foreach ($users as $user){
            $answerUser = array();
            $answers = Answer::where('id_user', '=', $user->id)->select('content')->get();

            array_push($answerUser, $user->full_name);
            foreach ($answers as $answer){
                array_push($answerUser, $answer->content);
            }
            array_push($answersUsers, $answerUser);
        }

        return view('report', ['answersUsers' => $answersUsers]);
    }

    public function exportReport() {
        Excel::create('Poll_Report', function($excel) {
            $excel->sheet('Poll', function($sheet) {
                $users = User::all();
                
                $answersUsers = array();
                foreach ($users as $user){
                    $answerUser = array();
                    $answers = Answer::where('id_user', '=', $user->id)->select('content')->get();
                    
                    array_push($answerUser, $user->full_name);
                    foreach ($answers as $answer){
                        array_push($answerUser, $answer->content);
                    }
                    array_push($answersUsers, $answerUser);
                }

                $sheet->row(1, ['Nombre', 'Genero', 'Hobby', 'Horas Hobby']);
                
                foreach($answersUsers as $index => $answerU) {
                    $sheet->row($index+2, $answerU); 
                }

                $sheet->cells('A1:D1', function($cells) {
                    $cells->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                    ));
                });

            });
        })->export('xlsx');
    }
}
