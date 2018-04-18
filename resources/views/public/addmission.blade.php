<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Addmission </title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <div class="container" style="width: 90%; margin: auto;">
        <h3 style="text-align: center;margin-top: 20px; margin-bottom: 20px">Addmission  here </h3>
    <div class="wrapper">
        {!! Form::open(array('route'=> 'addmission.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12 {{ $errors->has('e_name') ? 'has-error' : '' }} ">
            {{ Form::label('e_name', ' Name (English) :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('e_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Name English'))}}
            @if($errors->has('e_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('e_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('b_name') ? 'has-error' : '' }} ">
            {{ Form::label('b_name', ' Name (Bangali) :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('b_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Name Bangla'))}}
            @if($errors->has('b_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('b_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('class') ? 'has-error' : '' }} ">
            {{ Form::label('class', ' Class :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('class', ['null'=>' class','six'=>'six', 'seven'=>'seven','Eight'=>'Eight'], array('class'=>'col-md-3 select_btn' ))}}
            @if($errors->has('class'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
            @endif

            {{ Form::label('year', ' Year :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('year', ['null'=>' Select Year', '2018'=>'2018','2017'=>'2017','2016'=>'2016','2015'=>'2015'], array('class'=>'col-md-3 select_btn' ))}}
            @if($errors->has('year'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('year') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12 {{ $errors->has('S') ? 'has-error' : '' }} ">
            {{ Form::label('gender', ' Gender :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('gender', ['null'=>' gender','Male'=>'Male', 'Female'=>'Female'], array('class'=>'col-md-3 select_btn' ))}}
            @if($errors->has('gender'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
            @endif

            {{ Form::label('blood', ' Blood group :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('blood', ['null'=>'Select blood', 'A+'=>'A+','B+'=>'B+','O+'=>'O+','O-'=>'O-','Ab+'=>'Ab+'], array('class'=>'col-md-3 select_btn' ))}}
            @if($errors->has('blood'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('dob') ? 'has-error' : '' }} ">
            {{ Form::label('dob', ' Birth Date :', array('class'=>'control-label col-md-2'))}}
            {{ Form::date('dob',' ', array('class'=>'col-md-3 form-control' ))}}
            @if($errors->has('dob'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
            @endif

            {{ Form::label('religion', ' Religion :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('religion', ['null'=>' religion', 'Muslim'=>'Muslim','Hindu'=>'Hindu','Boddo'=>'Boddo','Chistan'=>'Chistan'], array('class'=>'col-md-3 select_btn' ))}}
            @if($errors->has('religion'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('religion') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('std_phone') ? 'has-error' : '' }} ">
            {{ Form::label('std_phone', ' Student phone:', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('std_phone', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Mobaile no'))}}
            @if($errors->has('std_phone'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('std_phone') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('pre_school') ? 'has-error' : '' }} ">
            {{ Form::label('previous school name', ' Student phone:', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('pre_school', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' previous school name'))}}
            @if($errors->has('pre_school'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('pre_school') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('f_name') ? 'has-error' : '' }} ">
            {{ Form::label('f_name', 'Father Name:', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('f_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Father name'))}}
            @if($errors->has('f_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('f_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('m_name') ? 'has-error' : '' }} ">
            {{ Form::label('m_name', 'Mother Name:', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('m_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Mother name'))}}
            @if($errors->has('m_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('m_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('f_occation') ? 'has-error' : '' }} ">
            {{ Form::label('f_occation', 'Father Occation :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('f_occation', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Father Occation '))}}
            @if($errors->has('f_occation'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('f_occation') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('m_occation') ? 'has-error' : '' }} ">
            {{ Form::label('m_occation', 'Father Occation :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('m_occation', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Mother Occation '))}}
            @if($errors->has('m_occation'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('m_occation') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('g_name') ? 'has-error' : '' }} ">
            {{ Form::label('g_name', 'Gurdian Name :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('g_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Gurdian Name'))}}
            @if($errors->has('g_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('g_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('g_nid') ? 'has-error' : '' }} ">
            {{ Form::label('g_nid', 'Gardian NID :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('g_nid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Gardian NID no'))}}
            @if($errors->has('g_nid'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('g_nid') }}</strong>
                   </span>
            @endif

        </div><br>


    </div><br>
    <div class="row col-md-12 {{ $errors->has('present_address') ? 'has-error' : '' }} ">
        {{ Form::label('present_address', 'Present address  :', array('class'=>'control-label col-md-2'))}}
        {{ Form::textarea('present_address', '', array('class'=>'col-md-3 form-control', 'placeholder'=>' address'))}}
        @if($errors->has('present_address'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('present_address') }}</strong>
                   </span>
        @endif
        {{ Form::label('parmanent_address', 'Parmanent Address  :', array('class'=>'control-label col-md-2'))}}<br>
        {{ Form::textarea('parmanent_address', '', array('class'=>'col-md-3 form-control', 'placeholder'=>' address'))}}
        @if($errors->has('parmanent_address'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('parmanent_address') }}</strong>
                   </span>
        @endif

    </div><br>
    <div class="{{ $errors->has('image') ? 'has-error' : '' }} row col-md-12 ">

        {{ Form::label('image', ' Image', array('class'=>'control-label col-md-2 '))}}
        {{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

        @if($errors->has('image'))
            <span class="help-block" style="display:block">
        <strong>{{ $errors->first('image') }}</strong>
        </span>
        @endif
    </div><br>
    <div class="row col-md-12 check_box">
        <div class="col-md-2">
            {{ Form::label('quota', ' Quota :', array('class'=>'control-label col-md-2'))}}

        </div>
        <div class="col-md-8">
            <div class="">
                {{Form::checkbox('quata','freedom fiter'), array('class'=>' ')}} freedom fiter
            </div>
            <div class="">
                {{Form::checkbox('quata','Female'), array('class'=>' ')}} Female
            </div>
            <div class="">
                {{Form::checkbox('quata','upojati'), array('class'=>' ')}} upojati
            </div>
        </div>


    </div><br>
    <div class="row col-md-12">
        <div class="col-md-2"></div>
        {{Form::submit('submit', array('class'=>'btn btn-success col-md-2'))}}
    </div><br>
    {!! Form::close() !!}
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
</body>
</body>
</html>