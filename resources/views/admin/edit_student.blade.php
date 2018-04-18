@extends('layout.master')

@section('title','Add student')

@section('content')

{!! Form::open(array('route'=> ['student.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}
<div class="wrapper">

    <div class="row col-md-12 {{ $errors->has('e_name') ? 'has-error' : '' }} ">
        {{ Form::label('e_name', ' Name (English) :', array('class'=>'control-label col-md-2'))}}
        {{ Form::text('e_name',$data->e_name, array('class'=>'col-md-8 form-control', 'placeholder'=>' Name English'))}}
        @if($errors->has('e_name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('e_name') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('b_name') ? 'has-error' : '' }} ">
        {{ Form::label('b_name', ' Name (English) :', array('class'=>'control-label col-md-2'))}}
        {{ Form::text('b_name', $data->b_name, array('class'=>'col-md-8 form-control', 'placeholder'=>' Name Bangla'))}}
        @if($errors->has('b_name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('b_name') }}</strong>
                   </span>
        @endif

    </div><br>

    <div class="row col-md-12 {{ $errors->has('roll') ? 'has-error' : '' }} ">
        {{ Form::label('roll', ' Roll :', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('roll', $data->roll, array('class'=>'col-md-3 form-control', 'placeholder'=>' Roll No'))}}
        @if($errors->has('roll'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('roll') }}</strong>
                   </span>
        @endif

        {{ Form::label('reg', ' Reg :', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('reg', $data->reg, array('class'=>'col-md-3 form-control', 'placeholder'=>' REg No'))}}
        @if($errors->has('reg'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('reg') }}</strong>
                   </span>
        @endif

    </div><br>

    <div class="row col-md-12 {{ $errors->has('section') ? 'has-error' : '' }} ">
        {{ Form::label('section', ' Section :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('section', [ 'A Section'=>'A Section', 'B Section'=>'B Section'],$data->section, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('section'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('section') }}</strong>
                   </span>
        @endif

        {{ Form::label('session', ' Session :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('session', [ '2017-18'=>'2017-18','2016-17'=>'2016-17'],$data->session, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('session'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('session') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('dob') ? 'has-error' : '' }} ">
        {{ Form::label('dob', 'Date:',array('class'=>'control-label col-md-2')) }}
        {{ Form::date('dob',$data->dob, array('class'=>'control-label col-md-3')) }}
        @if($errors->has('dob'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
        @endif

        {{ Form::label('shift', ' Shift :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('shift', ['1st shift'=>'1st shift','2nd shift'=>'2nd shift'],$data->shift, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('shift'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('shift') }}</strong>
                   </span>
        @endif

    </div><br>

    <div class="row col-md-12 {{ $errors->has('S') ? 'has-error' : '' }} ">
        {{ Form::label('gender', ' Gender :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('gender', ['Male'=>'Male', 'Female'=>'Female'],$data->gender, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('gender'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
        @endif

        {{ Form::label('blood', ' Blood group :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('blood', ['A+'=>'A+','B+'=>'B+','O+'=>'O+','O-'=>'O-','Ab+'=>'Ab+'],$data->blood, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('blood'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('class') ? 'has-error' : '' }} ">
        {{ Form::label('class', ' Class :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('class', ['six'=>'six', 'seven'=>'seven'],$data->class, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('class'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
        @endif

        {{ Form::label('religion', ' Religion :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('religion', ['Muslim'=>'Muslim','Hindu'=>'Hindu','Boddo'=>'Boddo','Chistan'=>'Chistan'],$data->religion, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('religion'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('religion') }}</strong>
                   </span>
        @endif

    </div><br>

    <div class="row col-md-12 {{ $errors->has('std_phone') ? 'has-error' : '' }} ">
        {{ Form::label('std_phone', ' Student phone:', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('std_phone', $data->std_phone, array('class'=>'col-md-8 form-control', 'placeholder'=>' Mobaile no'))}}
        @if($errors->has('std_phone'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('std_phone') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('f_name') ? 'has-error' : '' }} ">
        {{ Form::label('f_name', 'Father Name:', array('class'=>'control-label col-md-2'))}}
        {{ Form::text('f_name', $data->f_name, array('class'=>'col-md-8 form-control', 'placeholder'=>' Father name'))}}
        @if($errors->has('f_name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('f_name') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('m_name') ? 'has-error' : '' }} ">
        {{ Form::label('m_name', 'Mother Name:', array('class'=>'control-label col-md-2'))}}
        {{ Form::text('m_name', $data->m_name, array('class'=>'col-md-8 form-control', 'placeholder'=>' Mother name'))}}
        @if($errors->has('m_name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('m_name') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('g_nid') ? 'has-error' : '' }} ">
        {{ Form::label('g_nid', 'Gardian NID :', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('g_nid',$data->g_nid, array('class'=>'col-md-8 form-control', 'placeholder'=>' Gardian NID no'))}}
        @if($errors->has('g_nid'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('g_nid') }}</strong>
                   </span>
        @endif

    </div><br>
</div><br>
<div class="row col-md-12 {{ $errors->has('address') ? 'has-error' : '' }} ">
    {{ Form::label('address', 'Address  :', array('class'=>'control-label col-md-2'))}}
    {{ Form::textarea('address', $data->address, array('class'=>'col-md-8 form-control', 'placeholder'=>' address'))}}
    @if($errors->has('address'))
        <span class="help-block" style="display:block">
          <strong>{{ $errors->first('address') }}</strong>
                   </span>
    @endif

</div><br>
<img  src="../public/files/{{$data->image}}" style="width: 70px; height: 70px; margin-left: 175px">

<div class="{{ $errors->has('image') ? 'has-error' : '' }} row col-md-12 ">

    {{ Form::label('image', ' Image', array('class'=>'control-label col-md-2 '))}}
    {{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

    @if($errors->has('image'))
        <span class="help-block" style="display:block">
        <strong>{{ $errors->first('image') }}</strong>
        </span>
    @endif
</div><br>
<div class="row col-md-12">
    <div class="col-md-2"></div>
    {{Form::submit('Registration', array('class'=>'btn btn-success col-md-2'))}}
</div><br>

</div>

{!! Form::close() !!}
@endsection

