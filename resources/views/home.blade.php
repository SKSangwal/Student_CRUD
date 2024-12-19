@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col">
                        <h1>Students</h1>
                        <button onclick="window.location.href='{{route('view')}}'">Add Student</button>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>StudentId</th>
                                <th>Student Name</th>
                                <th>Action</th>
                            </tr>
                            @if($students)
                                @foreach($students as $stu)
                                <tr>
                                    <td>
                                        {{$stu->id}}
                                    </td>
                                    <td>
                                        {{$stu->studentId}}
                                    </td>
                                    <td>
                                        {{$stu->name}}
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-success" onclick="window.location.href='{{route('view',$stu->id)}}'">Update</button>
                                        <button class="btn btn-sm btn-danger" onclick="window.location.href='{{route('delete',$stu->id)}}'">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
