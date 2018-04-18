@extends('layout.master')

@section('title', 'Add teacher')
@section('content')

    <div class="col-md-offset-9">


        <h3 style="text-align: center;margin-top: 20px; margin-bottom: 20px">Add Teacher </h3>
        {!! Form::open(array('route'=> ['teacher.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="wrapper">

            <div class="row col-md-12 {{ $errors->has('t_name') ? 'has-error' : '' }} ">
                {{ Form::label('t_name', ' Teacher Name :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('t_name', $data->t_name, array('class'=>'col-md-8 form-control', 'placeholder'=>' Teacher Name '))}}
                @if($errors->has('e_name'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('t_name') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('t_id') ? 'has-error' : '' }} ">
                {{ Form::label('t_id', ' Teacher ID :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('t_id', $data->t_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Teacher ID  '))}}
                @if($errors->has('t_id'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('t_id') }}</strong>
                   </span>
                @endif

            </div><br>

            <div class="row col-md-12 {{ $errors->has('Gender') ? 'has-error' : '' }} ">
                {{ Form::label('gender', ' Gender  :', array('class'=>'control-label col-md-2'))}}
                {{ Form::select('gender', ['Male'=>'Male', 'Female'=>'Female'],$data->gender, array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('gender'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
                @endif

                {{ Form::label('blood', ' Blood :', array('class'=>'control-label col-md-2'))}}
                {{ Form::select('blood', ['null'=>'Select Blood', 'A+'=>'A+','B+'=>'B+'],$data->blood, array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('blood'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('dob') ? 'has-error' : '' }} ">
                {{ Form::label('dob', ' Date of birth  :', array('class'=>'control-label col-md-2'))}}
                {{ Form::date('dob', $data->dob, array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('dob'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
                @endif

                {{ Form::label('religion', ' Religion :', array('class'=>'control-label col-md-2'))}}
                {{ Form::select('religion', ['null'=>'Select religion', 'Islam'=>'Islam','Hindu'=>'Hindu'],$data->religion, array('class'=>'col-md-3 form-control' ))}}
                @if($errors->has('religion'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('religion') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('b_name') ? 'has-error' : '' }} ">
                {{ Form::label('t_phone', ' Phone number:', array('class'=>'control-label col-md-2'))}}
                {{ Form::number('t_phone', $data->t_phone, array('class'=>'col-md-8 form-control', 'placeholder'=>' Phone number'))}}
                @if($errors->has('t_phone'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('t_phone') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('email') ? 'has-error' : '' }} ">
                {{ Form::label('email', ' Email :', array('class'=>'control-label col-md-2'))}}
                {{ Form::email('email', $data->email, array('class'=>'col-md-8 form-control', 'placeholder'=>' Email '))}}
                @if($errors->has('email'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('email') }}</strong>
                   </span>
                @endif

            </div><br>
            <div class="row col-md-12 {{ $errors->has('t_nid') ? 'has-error' : '' }} ">
                {{ Form::label('t_nid', ' Teacher NID :', array('class'=>'control-label col-md-2'))}}
                {{ Form::number('t_nid', $data->t_nid, array('class'=>'col-md-8 form-control', 'placeholder'=>'  Teacher NID  '))}}
                @if($errors->has('t_nid'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('t_nid') }}</strong>
                   </span>
                @endif

            </div><br>
            <img  src='{{asset("public/files/$data->image")}}' style="width: 70px; height: 70px; margin-left: 175px">
            <div class="row col-md-12 {{ $errors->has('image') ? 'has-error' : '' }} ">
                {{ Form::label('image', ' Picture  :', array('class'=>'control-label col-md-2'))}}
                {{ Form::file('image' , array('class'=>'col-md-3  ' ))}}
                @if($errors->has('image'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('image') }}</strong>
                   </span>

                @endif
                {{ Form::label('j_date', ' Join Date :', array('class'=>'control-label col-md-2'))}}
                {{ Form::text('j_date', $data->j_date, array('class'=>'col-md-3 form-control', 'placeholder'=>'  Join date  '))}}
                @if($errors->has('j_date'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('j_date') }}</strong>
                   </span>
                @endif

            </div><br>

            <div class="row col-md-12">
                <div class="col-md-2"></div>
                {{Form::submit('update', array('class'=>'btn btn-success col-md-2'))}}
            </div><br>

        </div>
    </div>

    {!! Form::close() !!}

@endsection