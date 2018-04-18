@extends('layout.master')
@section('title', 'View subject')
@section('content')
    <h2 style="text-align: center;margin-top: 20px;">View Subject</h2>
    <table class="table table-striped ">
        <tr>
            <th>Sl</th>
            <th>Subject ID  </th>
            <th>Subject Name </th>
            <th> Class </th>
            <th>Full Mark </th>
            <th>Teacher ID </th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>
        @foreach($data as $subject)
       <tr>
           <td> {{ $sl++ }}</td>
           <td> {{ $subject->sub_id }}</td>
           <td> {{ $subject->sub_name }}</td>
           <td> {{ $subject->class }}</td>
           <td> {{ $subject->full_mark }}</td>
           <td> {{ $subject->teacher_id }}</td>
           <td>

               <a href="{{route('subject.edit', $subject->id)}}" class="btn btn-success">Edit</a>
               {!! Form::open(array('route' => ["subject.destroy",$subject->id],'method'=>'DELETE')) !!}
               <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" style="margin-left: 70px;margin-top: -35px"><i class="ion ion-ios-trash-outline">Delete</i></button>

               {!! Form::close() !!}
           </td>
       </tr>
        @endforeach
    </table>
@endsection mn  /v `