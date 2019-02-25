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
       $historyData=PracticesHistory::select('*')->where('id_category', $request->idCategory)
       ->where('id_users',$request->idUsers)
       ->get();
       return Response::json(array('success' => TRUE, 'data' => $historyData,'totalQuestions' => $historyData->count()), 200);
   }

   function saveHistory(Request $request)
   {
        //$allCategory=Category::select('*')->get();
        $historyModel=new PracticesHistory;
        $historyModel->id_users=$request->idUsers;
        $historyModel->id_category=$request->idCategory;
        $historyModel->id_questions=$request->idQuestions;
        $historyModel->answer=$request->answer;

        if($historyModel->save()){
            return Response::json(array('success' => TRUE, 'data' => $historyModel), 200);
        }else{
            return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'History could not be Inserted!'), 400);
        }
    }
}