<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Response;

class CategoryController extends Controller
{
    
    // public function getUsers(Request $request)
    // {
    //     $categoryId = $request->category_id;
    //     $questions = DB::table('question')->select('category_id')->where('category_id', $categoryId)->get();
    //     $questions = DB::table('question')->select('category_id')->where('category_id', $categoryId)->get();
    //     //UserRole::select('*')->where('id', $request_user_id)->get();
    //     return Response::json(array('success' => TRUE, 'data' => $questions), 200);
    // }

    public function getCategory()
    {
        $allCategory=Category::select('*'))->get();
        return Response::json(array('success' => TRUE, 'data' => $allCategory), 200);
    }

}
