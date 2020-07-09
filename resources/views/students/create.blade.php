@extends('layout.app')
@section('page_title', 'Add Student')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Register a new student</h1>
                    <form action="{{ route('students.store') }}" method="post">
                        @csrf {{-- IMPORTANTE --}}
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" name="name" class="form-control" id="name" placeholder="Student name">
                        </div>
                        <div class="form-group">
                           <label for="lastname">Surname</label>
                           <textarea type="text" name="lastname" class="form-control" id="lastname" placeholder="Surname"></textarea>
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <label for="number">Registration Number</label>
                           <input type="text" name="registration_number" class="form-control" id="number" placeholder="Registration Number">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
