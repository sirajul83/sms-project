@extends('layout.master')
@section('title', 'View student')
@section('content')
    <h2 style="text-align: center;margin-top: 20px;">View Addmission</h2>
    <table class="table table-striped ">
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Class</th>
            <th>year</th>
            <th>Mobaile</th>
            <th>Picture</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $addmission)

            <tr>
                <td> {{ $sl++ }}</td>
                <td> <a href="{{route('addmission.show', $addmission->id)}}" class="">{{ $addmission->e_name }}</a></td>
                <td>  {{ $addmission->class }}</td>
                <td>  {{ $addmission->year}}</td>
                <td>  {{ $addmission->mobile }}</td>
                <td><img  src="public/files/{{$addmission->image}}" height="50px" width="60px"></td>
                <td>

                    <a href="{{route('student.edit', $addmission->id)}}" class="btn btn-success" style="height: 35px">Edit</a>
                    {!! Form::open(array('route' => ["student.destroy",$addmission->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" style="margin-left: 70px;margin-top: -70px"><i class="ion ion-ios-trash-outline">Delete</i></button>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection