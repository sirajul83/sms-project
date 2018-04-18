@extends('layout.master')

@section('title','View mark')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>SL</th>
            <th>Student ID</th>
            <th>Subject ID</th>
            <th>Exam ID</th>
            <th>Mark</th>
            <th>Year</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1;?>
    @foreach($data as $mark)
        <tr>
            <td>{{$sl++}}</td>
            <td>{{$mark->std_id}}</td>
            <td>{{$mark->sub_id}}</td>
            <td>{{$mark->mark}}</td>
            <td>{{$mark->exam_id}}</td>
            <td>{{$mark->year}}</td>
            <td>
                <a href="{{route('mark.edit', $mark->id)}}" class="btn btn-success">Edit</a>
            </td>
            <td>
                {!! Form::open(array('route' => ["mark.destroy",$mark->id],'method'=>'DELETE')) !!}
                <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" ><i class="ion ion-ios-trash-outline">Delete</i></button>

                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
@endsection