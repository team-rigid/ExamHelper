<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\QuestionType;
use App\Question;
use App\QuestionSet;
use DB;
use Response;
use Validator;
use Redirect;
use Session;


class QuestionsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questionName = '';
        $questionName = $request->question_name;
        
        $question = Question::leftJoin('question_type', 'question_type.id_question_type', '=', 'questions.question_type')
        ->select('questions.*')
        ->addSelect('question_type.type_name');
        
        if(!empty($questionName)){
            $question = $question->where('question_name','LIKE',"%{$questionName}%");
        }

        $question = $question->paginate(10);

        

        // echo '<pre>';
        // print_r($question);
        // echo '</pre>';

        return view('questions.index',compact('question','questionName'));
    
    }

    public function filter(Request $request){
        $questionName = $request->question_name;
        return Redirect::to('questions?question_name='.$questionName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Get Category types
        $categorytypes = Category::get()->pluck('category_name', 'id_category');
       
        //Get question types
        $questionTypes = QuestionType::get()->pluck('type_name', 'id_question_type');
        // echo '<pre>';
        // print_r($categorytypes);
        // echo '</pre>';
        return view('questions.create', compact('categorytypes','questionTypes'));
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
            'id_category' => 'required',
            'id_question_type' => 'required',
            'question_name' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required'
        );

        $messages = array(
            'id_category.required' => 'Please Select The Category Type!',
            'id_question_type.required' => 'Please Select The Question Type!', 
            'question_name.required' => 'Please Enter The Question Name',
            'option_1.required' => 'Please Enter Option 1',
            'option_2.required' => 'Please Enter Option 2',
            'option_3.required' => 'Please Enter Option 3',
            'option_4.required' => 'Please Enter Option 4',
            'answer.required' => 'Please Enter Correct Answer'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('questions/create')
                ->withErrors($validator)
                ->withInput($request->all());
        } 
        // echo "<pre>";
        // print_r($request->all());
        // exit;

        $question = new Question;
        $question->id_category = $request->id_category;
        $question->question_type = $request->id_question_type;
        $question->question_name = $request->question_name;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->answer = $request->answer;
        $question->created_at = date("y-m-d");
        $question->created_by = 2;
        
        if ($question->save()) {
            Session::flash('success', "Question has been created successfully!");
            return Redirect::to('questions');
        } else {
            Session::flash('error', "Question could not be created!");
            return Redirect::to('questions/create');
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
        $categorytypes = Category::get()->pluck('category_name', 'id_category');
        $questionTypes = QuestionType::get()->pluck('type_name', 'id_question_type');
        $question = Question::find($id);
        // echo "<pre>";
        // print_r($question->id_questions);exit;
        return view('questions.edit',compact('question','categorytypes','questionTypes'));
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
        $question = Question::find($id);
        // echo "<pre>";
        // print_r($request->id_questions);exit;
        $question->id_questions =  $id;
        $question->id_category = $request->id_category;
        $question->question_type = $request->id_question_type;
        $question->question_name = $request->question_name;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->answer = $request->answer;
        $question->created_at = date("y-m-d");
        $question->created_by = 2;

        if ($question->save()) {
            echo "Done";
            Session::flash('success', "Question has been Updated successfully!");
            return Redirect::to('questions');
        } else {
            Session::flash('error', "Question could not be Updated!");
            return Redirect::to('questions');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id)->delete();
        return Redirect::to('questions');
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


  
    

}
