@extends('layout.master')

@section('title', 'view attendance')
@section('content')
    <table class="table table-bordered">
        <tr>
            <th>SL</th>
            <th>Student ID</th>
            <th>Student Roll</th>
            <th>Class  </th>
            <th>Section  </th>
            <th>In-time  </th>
            <th>Out-time  </th>
            <th>Year   </th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $attendance)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$attendance->std_id}}</td>
                <td>{{$attendance->std_roll}}</td>
                <td>{{$attendance->class}}</td>
                <td>{{$attendance->section}}</td>
                <td>{{$attendance->in_time}}</td>
                <td>{{$attendance->out_time}}</td>
                <td>{{$attendance->a_date}}</td>
                <td>
                    <a href="{{route('attendance.edit', $attendance->id)}}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route' => ["attendance.destroy",$attendance->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" ><i class="ion ion-ios-trash-outline">Delete</i></button>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
