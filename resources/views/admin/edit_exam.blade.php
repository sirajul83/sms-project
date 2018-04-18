@extends('layout.master')

@section('title','edit mark')

@section('content')
    <div class="wrapper">
        <h3 style="text-align: center;margin-top: 20px; margin-bottom: 20px">Edit Exam </h3>
        {!! Form::open(array('route'=> ['exam.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="wrapper">

            <div class="row col-md-12 {{ $errors->has('e_name') ? 'has-error' : '' }} ">
                {{ Form::label('exam_name', ' Exam Name :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('exam_name', $data->exam_name, array('class'=>'col-md-8 form-control', 'placeholder'=>'  Exam Name '))}}
                @if($errors->has('exam_name'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('exam_name') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('exam_id') ? 'has-error' : '' }} ">
                {{ Form::label('exam_id', ' Exam ID :', array('class'=>'control-label col-md-2'))}}
                {{ Form::number('exam_id', $data->exam_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Exam ID '))}}
                @if($errors->has('exam_id'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('exam_id') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('held_date') ? 'has-error' : '' }} ">
                {{ Form::label('held_date', ' Helod one Year:', array('class'=>'control-label col-md-2'))}}
                {{ Form::date('held_date', $data->held_date, array('class'=>'col-md-8 form-control'))}}
                @if($errors->has('held_date'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('held_date') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12">
                <div class="col-md-2"></div>
                {{Form::submit('Submit', array('class'=>'btn btn-success col-md-2'))}}
            </div><br>

        </div>

        {!! Form::close() !!}
    </div>
@endsection