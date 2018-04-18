@extends('layout.master')

@section('title', 'view teacher')

@section('content')
    <h3 style="width:300px; padding: 5px; text-align: center; margin: 0 auto; margin-top: 20px; margin-bottom: 30px;color: #1e7e34;background-color: #c6c8ca">View Teacher </h3>
    <div class="teacher">
        <table class="table table-bordered">
            <tr>
                <th> SL</th>
                <th> Teacher Name</th>
                <th> Teacher ID</th>
                <th> Mobaile number</th>
                <th> Picture</th>
                <th> Action</th>
            </tr>
    <?php $sl=1;?>
        @foreach($data as $teacher)
            <tr>
                <td>{{ $sl++ }}</td>
                <td> <a href="{{route('teacher.show', $teacher->id)}}" >{{$teacher->t_name}}</a></td>
                <td>{{ $teacher->t_id }}</td>
                <td>{{ $teacher->t_phone }}</td>
                <td><img  src="public/files/{{$teacher->image}}" height="50px" width="60px"></td>
                <td>

                    <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-success" style="height: 35px">Edit</a>
                    {!! Form::open(array('route' => ["teacher.destroy",$teacher->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteConfirm()" style="margin-left: 70px;margin-top: -70px"><i class="ion ion-ios-trash-outline">Delete</i></button>

                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

    </div>
@endsection