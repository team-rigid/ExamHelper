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



       $historyData=PracticesHistory::selectRaw('count(id_category) as totalCategory ,id_category ')->where('id_users',$request->idUsers)->groupBy("id_category")
       ->get();

       //$historyData=DB::select(DB::raw('SELECT id_category,count(id_category) as totalCategory FROM `practices_history` where id_users=1 group by(id_category)'));
      // return $historyData;
       return Response::json(array('success' => TRUE, 'data' => $historyData,'totalQuestions' => count($historyData)), 200);
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