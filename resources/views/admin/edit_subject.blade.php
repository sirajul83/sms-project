@extends('layout.master')

@section('title','edit subject')

@section('content');
<h2 style="text-align: center;margin-top: 10px; margin-bottom: 10px;">Edit subject </h2><br>
{!! Form::open(array('route'=> ['subject.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

<div class="wrapper">

    <div class="row col-md-12 {{ $errors->has('sub_id') ? 'has-error' : '' }} ">
        {{ Form::label('sub_id', ' Subject ID :', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('sub_id', $data->sub_id, array('class'=>'col-md-8 form-control', 'placeholder'=>' Subject ID '))}}
        @if($errors->has('sub_id'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('sub_id') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="row col-md-12 {{ $errors->has('section') ? 'has-error' : '' }} ">
        {{ Form::label('sub_name', ' Subject Name :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('sub_name',  ['null'=>'Select Subject', 'Bangla'=>'Bangla','English'=>'English','Social'=>'Social','Phychis'=>'Phychis'],$data->sub_name, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('sub_name'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('sub_name') }}</strong>
                   </span>
        @endif

        {{ Form::label('class', ' Class :', array('class'=>'control-label col-md-2'))}}
        {{ Form::select('class', ['null'=>'Select Class', 'Six'=>'Six','Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine'],$data->class, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('class'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
        @endif

    </div><br>

    <div class="row col-md-12 {{ $errors->has('full_mark') ? 'has-error' : '' }} ">
        {{ Form::label('full_mark', ' Full mark :', array('class'=>'control-label col-md-2'))}}
        {{ Form::number('full_mark',  $data->full_mark, array('class'=>'col-md-3 form-control' ))}}
        @if($errors->has('full_mark'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('full_mark') }}</strong>
                   </span>
        @endif

        {{ Form::label('teacher_id', '  Teacher ID  :', array('class'=>'control-label col-md-2'))}}
        <select name="teacher_id">
           @foreach($data_teacher as $teacher)
                <option value=" {{$teacher->t_id}}">  {{$teacher->t_name}} </option>
           @endforeach

        </select>
    </div><br>



    <div class="row col-md-12">
        <div class="col-md-2"></div>
        {{Form::submit('update', array('class'=>'btn btn-success col-md-2'))}}
    </div><br>

</div>

{!! Form::close() !!}
@endsection

