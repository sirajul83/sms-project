@extends('layout.master')
@section('title', 'View student')
@section('content')
    <h2 style="text-align: center;margin-top: 20px;">View Students</h2>
    <table class="table table-striped ">
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Reg</th>
            <th>Class</th>
            <th>Session</th>
            <th>Picture</th>
            <th co>Action</th>
        </tr>
      <?php $sl=1; ?>
        @foreach($data as $student)

        <tr>
            <td> {{ $sl++ }}</td>
            <td> <a href="{{route('student.show', $student->id)}}" class="">{{ $student->e_name }}</a></td>
            <td>  {{ $student->roll }}</td>
            <td>  {{ $student->reg }}</td>
            <td>  {{ $student->class }}</td>
            <td>  {{ $student->session }}</td>
            <td><img  src="public/files/{{$student->image}}" height="50px" width="60px"></td>
            <td>

                <a href="{{route('student.edit', $student->id)}}" class="btn btn-success" style="height: 35px">Edit</a>
                {!! Form::open(array('route' => ["student.destroy",$student->id],'method'=>'DELETE')) !!}
                <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" style="margin-left: 70px;margin-top: -70px"><i class="ion ion-ios-trash-outline">Delete</i></button>

                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

    {{$data->links()}}
@endsection