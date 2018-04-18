@extends('layout.master')

@section('title', 'view Exam')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>SL</th>
            <th>Exam Name</th>
            <th>Exam ID</th>
            <th>Held on Year </th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $exam)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$exam->exam_name}}</td>
                <td>{{$exam->exam_id}}</td>
                <td>{{$exam->held_date}}</td>
                <td>
                    <a href="{{route('exam.edit', $exam->id)}}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route' => ["exam.destroy",$exam->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" ><i class="ion ion-ios-trash-outline">Delete</i></button>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
