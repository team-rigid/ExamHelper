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
    <!-- END PAGE BAR -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Questions</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                {!! Form::open(['url' => '/filter',  'method'=>'post']) !!}
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('questionName', 'Question Name')  !!}
                            {!! Form::text("question_name", $questionName, ['class' => 'form-control','id' => 'questionName']) !!}
                        </div>
                    </div>
                    {!! Form::submit('Search', ['class' => 'btn btn-info pull-left']) !!}
                {!! Form::close() !!}

                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Question Name</th>
                                <th>Question Type</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Answer</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($question as $key => $que)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $que->question_name }}</td>
                                <td>{{ $que->type_name }}</td>
                                <td>{{ $que->option_1 }}</td>
                                <td>{{ $que->option_2 }}</td>
                                <td>{{ $que->option_3 }}</td>
                                <td>{{ $que->option_4 }}</td>
                                <td>{{ $que->answer }}</td>
                                <td> 
                                    <a href="{{ route('questions.edit',$que->id_questions) }}" class="btn btn-outline blue-sharp btn-xs bold uppercase"><i class="fa fa-pencil"></i> Edit</a> 
                                    <!-- <a href="{{ route('questions.destroy',$que->id_questions) }}" class="btn btn-danger btn-xs bold uppercase"><i class="fa fa-trash"></i> Delete</a> -->
                                    {!! Form::open(['url' => '/questions/'.$que->id_questions, 'method'=>'DELETE']) !!}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs bold uppercase')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $question->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@stop