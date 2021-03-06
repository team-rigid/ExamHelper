@extends('layouts.default')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Blank Page</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Page Layouts</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PORTLET-->
    @include('templates.flash')
    <!-- END PORTLET-->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Edit Question</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['url' => '/questions/'.$question->id_questions, 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        {!! Form::label('category_type', 'Select Category Type')  !!}
                        {!! Form::select('id_category', $categorytypes,['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('id_category') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('question_type', 'Select Question Type')  !!}
                        {!! Form::select('id_question_type', $questionTypes, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('id_question_type') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('question_name', 'Question Name')  !!}
                        {!! Form::text("question_name", $question->question_name, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('question_name') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('option_1', 'Options 1')  !!}
                        {!! Form::text("option_1",$question->option_1, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('option_1') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('option_2', 'Options 2')  !!}
                        {!! Form::text("option_2",$question->option_2, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('option_2') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('option_3', 'Options 3')  !!}
                        {!! Form::text("option_3",$question->option_3, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('option_3') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('option_4', 'Options 4')  !!}
                        {!! Form::text("option_4",$question->option_4, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('option_4') }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('answer', 'Correct Answer')  !!}
                        {!! Form::text("answer", $question->answer, ['class' => 'form-control']) !!}
                        <span class="help-block text-danger"> {{ $errors->first('answer') }}</span>
                    </div>
                        
                    {!! Form::submit('Update', ['class' => 'btn btn-info pull-left']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@stop