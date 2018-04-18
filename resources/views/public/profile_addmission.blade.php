@extends('layout.master')

@section('title', 'profile admission')

@section('content')

    <div class="profile" >
        <h2 style="text-align: center;margin-bottom: 70px; color: #1e7e34">admission profile</h2>
        <div class="row">
            <div class="col-md-6 left_profile"><br>
                <p> Name (English) :<span> {{$data->e_name}}</span></p>
                <p> Name (Bangla) : <span> {{$data->b_name}}</span></p>
                <p> Class : <span>{{$data->class}}</span></p>
                <p> Gender : <span>{{$data->gender}}</span></p>



            </div>
            <div class="col-md-6">
                <img  src="../public/files/{{$data->image}}" style="width: 120px; height: 120px; margin-left: 150px;">
            </div>

        </div>
        <div class="row ">
            <div class="col-8">
                <p> Birth date : <span>{{$data->dob}}</span></p>
                <p> Year : <span>{{$data->year}}</span></p>
                <p> Father Name : <span>{{$data->f_name}}</span></p>
                <p> Mother Name : <span>{{$data->m_name}}</span></p>
                <p> Guardian NID : <span>{{$data->g_nid}}</span></p>
                <p> Father occation : <span>{{$data->f_occation}}</span></p>
                <p> Mother occation : <span>{{$data->m_occation}}</span></p>
                <p> Present address : <span>{{$data->present_address}}</span></p>

            </div>
            <div class="col-4">

                <p> Gurardian Name : <span>{{$data->g_name}}</span></p>
                <p> Gurardian NID : <span>{{$data->g_nid}}</span></p>
                <p> Blood : <span>{{$data->blood}}</span></p>
                <p> Religion : <span>{{$data->religion}}</span></p>
                <p> Mobaile : <span>{{$data->std_phone}}</span></p>
                <p> Parmanent Address : <span>{{$data->parmanent_address}}</span></p>
                <p> phone : <span>{{$data->std_phone}}</span></p>
                <p> previous Schhol: <span>{{$data->pre_school}}</span></p>
            </div>
        </div>
    </div>

@endsection