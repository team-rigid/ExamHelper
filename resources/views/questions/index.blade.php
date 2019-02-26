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
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Question Name</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Correct Answer</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($question as $value)
                            <tr>
                                <td>{{ $value->id_questions }}</td>
                                <td>{{ $value->question_name }}</td>
                                <td>{{ $value->option_1 }}</td>
                                <td>{{ $value->option_2 }}</td>
                                <td>{{ $value->option_3 }}</td>
                                <td>{{ $value->option_4 }}</td>
                                <td>{{ $value->answer }}</td>
                                <td> <a href="questions" class="btn btn-outline blue-sharp btn-xs bold uppercase"><i class="fa fa-pencil"></i> Edit</a> 
                                     <a href="questions/value.id_questions" class="btn btn-danger btn-xs bold uppercase"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@stop