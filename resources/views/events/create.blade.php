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
                        <span class="caption-subject bold uppercase">Create a Event</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                <div class="row">
                     {!! Form::open(['url' => '/events',  'method'=>'post'], ['class' => 'form-horizontal form-row-seperated']) !!}

                    <div class="col-md-12">
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('event_name', 'Event Name <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-9">
                                {!! Form::text("event_name", Request::old('event_name'), ['class' => 'form-control input-inline input-large']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('start_at', 'Start At <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-9">
                                {!! Form::text("start_at", Request::old('start_at'), ['class' => 'form-control input-inline input-large']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('end_at', 'End At <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-9">
                                {!! Form::text("end_at", Request::old('end_at'), ['class' => 'form-control input-inline input-large']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('duration', 'Duration <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-9">
                                {!! Form::text("duration", Request::old('duration'), ['class' => 'form-control input-inline input-large']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('no_questions', 'No Questions <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-9">
                                {!! Form::text("number_of_questions", Request::old('no_questions'), ['class' => 'form-control input-inline input-large']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! htmlspecialchars_decode(Form::label('status', 'Status <span class="required">*</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-4">
                                {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), ['class' => 'bs-select form-control']) !!}
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="col-md-offset-4 col-md-4">
                            {!! Form::submit('Submit', ['class' => 'btn purple btn-outline  btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@stop