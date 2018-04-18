@extends('layout.master')

@section('title','Edit mark')
@section('content')
    <div class="wrapper">
        <h2 style="text-align: center;margin-top: 10px; margin-bottom: 10px;">Add Mark </h2><br>
        {!! Form::open(array('route'=> ['mark.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}
        <div class="row col-md-12 {{ $errors->has('std_id') ? 'has-error' : '' }}">
            {{ Form::label('std_id', ' Student ID :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('std_id', $data->std_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Student ID '))}}
            @if($errors->has('std_id'))
                <span class="help-block" style="display:block">
                    <strong>{{ $errors->first('std_id') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('sub_id') ? 'has-error' : '' }}">
            {{ Form::label('sub_id', ' Subject ID :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('sub_id', $data->sub_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Subject ID '))}}
            @if($errors->has('sub_id'))
                <span class="help-block" style="display:block">
                    <strong>{{ $errors->first('sub_id') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12" {{ $errors->has('exam_id') ? 'has-error' : '' }}>
            {{ Form::label('exam_id', ' Exam ID  :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('exam_id', $data->exam_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Exam ID '))}}
            @if($errors->has('exam_id'))
                <span class="help-block" style="display:block">
                    <strong>{{ $errors->first('exam_id') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12 {{ $errors->has('year') ? 'has-error' : '' }} ">
            {{ Form::label('year', ' Year :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('year',  ['null'=>'Select Year', '2018'=>'2018','2017'=>'2017','2016'=>'2016','2015'=>'2015'],$data->year, array('class'=>'col-md-3 form-control' ))}}
            @if($errors->has('year'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('year') }}</strong>
                   </span>
            @endif

            {{ Form::label('mark', ' Mark :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('mark', $data->mark, array('class'=>'col-md-3 form-control', 'placeholder'=>' mark ' ))}}
            @if($errors->has('mark'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('mark') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12">
            <div class="col-md-2"></div>
            {{Form::submit('update', array('class'=>'btn btn-success col-md-2'))}}
        </div><br>
        {!! Form::close() !!}
    </div>
@endsection
