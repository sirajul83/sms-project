@extends('layout.master')

@section('title', 'teacher profile')

@section('content')
    <div class="container teacher_profile">
        <h4 style="text-align: center; margin-bottom: 50px; color: #1e7e34"> Teacher Profile </h4>
        <div class="row col-md-12">

                <div class="col-md-6">
                    <p>Name : <span>{{$data->t_name}}</span></p>
                    <p>Teacher ID : <span>{{$data->t_id}}</span></p>
                    <p>Birth date : <span>{{$data->dob}}</span></p>
                    <p>Join Date : <span>{{$data->j_date}}</span></p>
                    <p>Phone number : <span>{{$data->t_phone}}</span></p>
                    <p>Address : <span>{{$data->t_address}}</span></p>


                </div>
                <div class="col-md-6 " >
                    <img src='{{asset("public/files/$data->image")}}' ><br>
                    <p>Gender : <span>{{$data->gender}}</span></p>
                    <p>Teacher NID : <span>{{$data->t_nid}}</span></p>
                    <p>Teacher Email : <span>{{$data->email}}</span></p>

                </div>
            </div>
    </div>

@endsection