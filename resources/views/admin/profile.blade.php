@extends('layout.master')

@section('title', 'profile')

@section('content')

            <div class="profile" >
                <h2 style="text-align: center;margin-bottom: 70px; color: #1e7e34">Faridpur polytechnic Institute</h2>
                <div class="row">
                    <div class="col-md-6 left_profile"><br>
                        <p> Name (English) :<span> {{$data->e_name}}</span></p>
                        <p> Name (Bangla) : <span> {{$data->b_name}}</span></p>
                        <p> Roll : <span>{{$data->roll}}</span></p>
                        <p> Reg  : <span>{{$data->reg}}</span></p>
                    </div>
                    <div class="col-md-6">
                        <img  src="../public/files/{{$data->image}}" style="width: 120px; height: 120px; margin-left: 150px;">
                    </div>

                </div>
                <div class="row ">
                    <div class="col-8">
                        <p> Class : <span>{{$data->class}}</span></p>
                        <p> Section :<span> {{$data->section}}</span></p>
                        <p> Shift : <span>{{$data->shift}}</span></p>
                        <p> Sesssion : <span>{{$data->session}}</span></p>
                        <p> Father Name : <span>{{$data->f_name}}</span></p>
                        <p> Mother Name : <span>{{$data->m_name}}</span></p>
                        <p> Guardian NID : <span>{{$data->g_nid}}</span></p>

                    </div>
                    <div class="col-4">
                        <p> Gender : <span>{{$data->gender}}</span></p>
                        <p> Birth date : <span>{{$data->dob}}</span></p>
                        <p> Blood : <span>{{$data->blood}}</span></p>
                        <p> Religion : <span>{{$data->religion}}</span></p>
                        <p> Mobaile : <span>{{$data->std_phone}}</span></p>
                        <p> Address : <span>{{$data->address}}</span></p>
                    </div>
                </div>
        </div>

@endsection