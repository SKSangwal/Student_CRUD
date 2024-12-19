@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col">
                        @if($stu)
                        <h1>Update Student</h1>
                        <form method="POST" action="{{route('update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$stu->id}}">
                            <input type="text" name="studentId" value="{{$stu->studentId}}" required/>
                            <input type="text" name="name" value="{{$stu->name}}" required/>
                            <input type="submit" value="Submit">
                        </form>
                        @else
                        <h1>Create Student</h1>
                        <form method="POST" action="{{route('create')}}">
                            @csrf
                            <input type="text" name="studentId" placeholder="studentid" required/>
                            <input type="text" name="name" placeholder="student name" required/>
                            <input type="submit" value="Submit">
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
