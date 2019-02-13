<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;
use App\Event;
use DB;
use Response;

class ExamController extends Controller
{

    public function getActiveEventList()
    {
        $dt = date("Y-m-d H:i:s");
        $getEvents= Event::with('questionSet.question')->whereRaw('"'.$dt.'" between `events`.`start_at` and `events`.`end_at`')->where('events.status', 'Active')->get();

        return Response::json(array('success' => TRUE, 'data' => $getEvents), 200);


        // return Response::json(array('success' => TRUE, 'data' => $getQuestions), 200);
    }
}