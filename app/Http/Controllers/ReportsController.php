<?php

namespace polls\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use polls\Answer;
use polls\User;

class ReportsController extends Controller
{
    public function index() {
        $users = User::all();

        $answersUsers = array();
        foreach ($users as $user){
            $answerUser = array();
            $answers = Answer::where('id_user', '=', $user->id)->select('id_question','content')->get();

            array_push($answerUser, $user->full_name);
            foreach ($answers as $answer){
                array_push($answerUser, $answer->content);
            }
            array_push($answersUsers, $answerUser);
        }

        $dataQuestion1 = User::select(DB::raw('full_name, count(full_name) as amount'))->groupBy('full_name')->get();
        $dataQuestion2 = Answer::where('id_question', '=', 2)->select(DB::raw('content, count(content) as amount'))->groupBy('content')->get();
        $dataQuestion3 = Answer::where('id_question', '=', 3)->select(DB::raw('content, count(content) as amount'))->groupBy('content')->get();
        $dataQuestion4 = Answer::where('id_question', '=', 4)->select(DB::raw('content, count(content) as amount'))->groupBy('content')->get();

        $labelsQuestion1Chart = array();
        $dataQuestion1Chart = array();

        $labelsQuestion2Chart = array();
        $dataQuestion2Chart = array();

        $labelsQuestion3Chart = array();
        $dataQuestion3Chart = array();

        $labelsQuestion4Chart = array();
        $dataQuestion4Chart = array();

        foreach ($dataQuestion1 as $amountName){
            array_push($labelsQuestion1Chart, $amountName->full_name);
            array_push($dataQuestion1Chart, $amountName->amount);
        }

        foreach ($dataQuestion2 as $contentAmount){
            array_push($labelsQuestion2Chart, $contentAmount->content);
            array_push($dataQuestion2Chart, $contentAmount->amount);
        }

        foreach ($dataQuestion3 as $contentAmount){
            array_push($labelsQuestion3Chart, $contentAmount->content);
            array_push($dataQuestion3Chart, $contentAmount->amount);
        }

        foreach ($dataQuestion4 as $contentAmount){
            array_push($labelsQuestion4Chart, $contentAmount->content);
            array_push($dataQuestion4Chart, $contentAmount->amount);
        }

        return view('report', ['answersUsers' => $answersUsers,'labelsQuestion1Chart' => $labelsQuestion1Chart,'dataQuestion1Chart' => $dataQuestion1Chart,'labelsQuestion2Chart' => $labelsQuestion2Chart,'dataQuestion2Chart' => $dataQuestion2Chart,'labelsQuestion3Chart' => $labelsQuestion3Chart,'dataQuestion3Chart' => $dataQuestion3Chart,'labelsQuestion4Chart' => $labelsQuestion4Chart,'dataQuestion4Chart' => $dataQuestion4Chart]);
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
