<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\PracticesHistory;
use DB;
use Response;

class HistoryController extends Controller
{
   function getHistoryList(Request $request)
   {
       //$historyData=DB::row('select count(id_practices_history) from ')
       $historyData=PracticesHistory::select('*')->where('id_category', $request->idCategory)->get();
       return Response::json(array('success' => TRUE, 'data' => $historyData,'totalQuestions' => $historyData->count()), 200);
   }
}