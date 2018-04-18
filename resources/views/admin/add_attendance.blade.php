@extends('layout.master')

@section('title','Add attendance')
@section('content')
    @extends('layout.master')

@section('title','Add mark')

@section('content')
    <div class="wrapper">
        <h3 style="text-align: center;margin-top: 20px; margin-bottom: 20px">Add Attendance </h3>
        {!! Form::open(array('route'=> 'attendance.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="wrapper">

            <div class="row col-md-12 {{ $errors->has('std_id') ? 'has-error' : '' }} ">
                {{ Form::label('std_id', ' Student ID :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('std_id', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'  Student ID  '))}}
                @if($errors->has('std_id'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('std_id') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('std_roll') ? 'has-error' : '' }} ">
                {{ Form::label('std_roll', ' Student Roll :', array('class'=>'control-label col-md-2'))}}
                {{ Form::number('std_roll', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Student Roll'))}}
                @if($errors->has('std_roll'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('std_roll') }}</strong>
                   </span>
                @endif

            </div><br>

            <div class="row col-md-12 {{ $errors->has('section') ? 'has-error' : '' }} ">
                {{ Form::label('class', ' Class :', array('class'=>'control-label col-md-2'))}}
                {{ Form::select('class', ['null'=>'Select Class', 'Six'=>'Six','Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine'], array('class'=>'col-md-3 select_btn' ))}}
                @if($errors->has('class'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>

                @endif

                {{ Form::label('section', ' Section :', array('class'=>'control-label col-md-2'))}}
                {{ Form::select('section',  ['null'=>'Select section', 'A'=>'section A','B'=>'section B'], array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('section'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('section') }}</strong>
                   </span>
                @endif

            </div><br>

            <div class="row col-md-12 {{ $errors->has('section') ? 'has-error' : '' }} ">
                {{ Form::label('in_time', ' In-time :', array('class'=>'control-label col-md-2'))}}
                {{ Form::time('in_time', ' ', array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('in_time'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('in_time') }}</strong>
                   </span>

                @endif

                {{ Form::label('out_time', ' Out-time :', array('class'=>'control-label col-md-2'))}}
                {{ Form::time('out_time',  ' ', array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('out_time'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('out_time') }}</strong>
                   </span>
                @endif

            </div><br>

            <div class="row col-md-12 {{ $errors->has('a_date') ? 'has-error' : '' }} ">
                {{ Form::label('a_date', ' Date :', array('class'=>'control-label col-md-2'))}}
                {{ Form::date('a_date', ' ', array('class'=>'col-md-3 form-control ' ))}}
                @if($errors->has('a_date'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('a_date') }}</strong>
                   </span>

                @endif

                {{ Form::label('a_status', 'Status :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('a_status', '', array('class'=>'col-md-3 form-control', 'placeholder'=>' Status  '))}}

                @if($errors->has('a_status'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('a_status') }}</strong>
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
@endsection