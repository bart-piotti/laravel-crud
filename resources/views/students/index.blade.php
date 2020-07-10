@extends('layout.app')
@section('page_title', 'Students List')
@section('content')
    <h1 style="text-align: center; padding: 20px 0;">Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary" style="position: absolute;right: 150px;top: 30px;">Register a new student</a>
    <table style="width:85%; margin: auto; text-align: center;">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Registration Number</th>
      </tr>
      @foreach ($data as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->registration_number}}</td>
        <td>
            <a href="{{ route('students.show', ['student' => $student->id ]) }}" class="btn btn-info">Show details</a>
            <a href="{{ route('students.edit', ['student' => $student->id ]) }}" class="btn btn-warning" style="color:white;">Edit</a>
            <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post" style="display:inline-block;">
                @method('DELETE')
                @csrf
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </table>
@endsection
