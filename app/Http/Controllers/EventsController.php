<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\QuestionType;
use App\Question;
use App\QuestionSet;
use App\EventResult;
use DB;
use Response;
use Validator;
use Redirect;
use Session;

class EventsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //Get question for specific events

    public function getQuestionList()
    {

        
            // $getQuestions=Question::select('*')->get();
            // return Response::json(array('success' => TRUE, 'data' => $getQuestions), 200);


            // $getQuestions=Question::leftJoin('question_set','question_set.id_questions','=','questions.id_questions')
            // ->select('question_set.*','questions.*')
            // ->get();
            // return Response::json(array('success' => TRUE, 'data' => $getQuestions), 200);

           
    }
    public function saveEventResults(Request $request)
    {
        $eventResult = new EventResult;
        $eventResult->id_users = $request->id_users;
        $eventResult->id_events = $request->id_events;
        $eventResult->id_questions = $request->id_questions;
        $eventResult->answer = $request->answer;
        $eventResult->finished_at = $request->finished_at;
        
        if($eventResult->save()){
			return Response::json(array('success' => TRUE, 'message' => 'Successfully Inserted!'), 200);
		}else{
			return Response::json(array('success' => FALSE, 'message' => 'Insertion Failed!'), 400);
		}
    }


  
    

}
