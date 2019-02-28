<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\QuestionType;
use App\Question;
use App\QuestionSet;
use App\Event;
use App\EventStatus;
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
        // $this->beforeFilter('csrf', array('on' => 'post'));

        $rules = array(
            'event_name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'duration' => 'required',
            'number_of_questions' => 'required',
            'status' => 'required'
        );

        $messages = array(
            'event_name.required' => 'Please enter event name!',
            'start_at.required' => 'Please enter event start time!', 
            'end_at.required' => 'Please enter event end time!',
            'duration.required' => 'Please enter event duration!',
            'number_of_questions.required' => 'Please enter number of questions!',
            'status.required' => 'Please select status type!'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('events/create')
                ->withErrors($validator)
                ->withInput($request->all());
        } 

        $event = new Event;
        $event->event_name = $request->event_name;
        $event->start_at = $request->start_at;
        $event->end_at = $request->end_at;
        $event->duration = $request->duration;
        $event->number_of_questions = $request->number_of_questions;
        $event->status = $request->status;
        $event->created_at = date("y-m-d");
        $event->created_by = 1;
        
        if ($event->save()) {
            Session::flash('success', "Event has been created successfully");
            return Redirect::to('events/create');
        } else {
            Session::flash('error', "event could not be created");
            return Redirect::to('events/create');
        }

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

    //Todo get list of events
    public function getEvents()
    {
        $getData=Event::select('*')->get();
        return Response::json(array('success' => TRUE, 'data' => $getData), 200);
    }

    //Todo store the event status in the database
    public function saveEventStatus(Request $request)
    {
        $eventStatus = new EventStatus;
        $eventStatus->id_users = $request->idUsers;
        $eventStatus->id_events = $request->idEvents;
        $eventStatus->correct_answer = $request->correctAnswer;
        $eventStatus->incorrect_answer = $request->incorrectAnswer;
        $eventStatus->finished_at = $request->finished_at;


        if($eventStatus->save()){
			return Response::json(array('success' => TRUE, 'message' => 'Successfully Inserted!'), 200);
		}else{
			return Response::json(array('success' => FALSE, 'message' => 'Insertion Failed!'), 400);
		}


    }

    //Todo get event history from database ,which is already finished
    public function getEventHistoryByEventId(Request $request)
    {
        //$historyData=DB::select(DB::raw('SELECT id_category,count(id_category) as totalCategory FROM `practices_history` where id_users=1 group by(id_category)'));
       //$eventHistoryList=DB::select(DB::raw("SELECT * FROM `event_status`,events where event_status.id_events=1 and event_status.id_events=events.id_events ORDER BY correct_answer DESC,finished_at ASC"));

    //    $eventHistoryList=DB::select(DB::raw("SELECT  event_status.*,events.*,users.name,users.email FROM `event_status`,events,users where  event_status.id_events=1 and event_status.id_events=events.id_events and
    //    users.id=event_status.id_users
    //    ORDER BY correct_answer DESC,finished_at ASC"));

        $query= EventStatus::leftJoin('events','events.id_events','=','event_status.id_events')
        ->leftJoin('users','users.id','=','event_status.id_users')
        ->select('users.name','users.email','events.*','event_status.*')
        ->where('event_status.id_events',$request->idEvents)
        ->orderBy('event_status.correct_answer','DESC')
        ->orderBy('event_status.finished_at','ASC')
        ->get();
       return Response::json(array('success' => TRUE, 'data' => $query), 200);
    }






  
    

}
