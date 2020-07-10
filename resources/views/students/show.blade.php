@extends('layout.app')
@section('page_title', 'Student Details')

@section('content')
    <a href="{{route('students.index')}}" class="btn btn-danger" style="display: block;
    text-align: center; width: 150px; margin: 20px auto;">Go back to list</a>
    <h1 style="margin: auto; text-align: center;">{{$data->name . ' ' . $data->lastname}}</h1>
    <ul style="margin: auto; text-align: center; padding: 20px; list-style-type: none;">
        <li>Email: {{ $data->email }} </li>
        <li>Registration Number:  {{ $data->registration_number }} </li>
    </ul>
    <div class="container">
        <div class="row" style="display: flex;justify-content: center;">
            <a href="{{ route('students.edit', ['student' => $data->id ]) }}" class="btn btn-warning" style="color:white;">Edit</a>
        </div>
    </div>
@endsection
