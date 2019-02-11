<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;
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

    public function getCategoriesList()
    {

        $allCategory=Category::select('*')->get();
        $count=Category::select('*')->get()->count();
        return Response::json(array('success' => TRUE, 'data' => ['count' => $count,'categories' => $allCategory]), 200);
    }
    //get questions by user selected category id
    public function getQuestionByCategoryId($idCategory,Request $request)
    {

        $getQuestions=Question::select('*')->where('id_category',$idCategory)
        ->skip($request->limit*$request->offset)->take($request->limit)->get();
        $count=Question::select('*')->get()->count();
        return Response::json(array('success' => TRUE, 'data' => ['count' => $count,'Questions' => $getQuestions]), 200);
    }

    //Create new category
    public function saveCategory(Request $request)
    {
        //$allCategory=Category::select('*')->get();
        $categoryModel=new Category;
        $categoryModel->category_name=$request->categoryName;
        $categoryModel->created_at=$request->createdAt;
        $categoryModel->updated_at=$request->updatedAt;
        $categoryModel->created_by=$request->createdBy;

        if($categoryModel->save()){
            return Response::json(array('success' => TRUE, 'data' => $categoryModel), 200);
        }else{
            return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Category could not be created!'), 400);
        }
    }

}
