@extends('layout.app')
@section('page_title', 'Add Student')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('students.index')}}" class="btn btn-danger" style="display: block;text-align: center; width: 150px; margin: 20px auto;">Go back to list</a>
                <h1>Edit student data</h1>
                    <form action="{{ route('students.update', ['student' => $data->id]) }}" method="post">
                    @method('PUT') {{-- IMPORTANTE, no parametri put/patch nel form.method --}}
                        @csrf {{-- IMPORTANTE --}}
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" name="name" class="form-control" id="name" placeholder="Student name" value="{{ old('name', $data->name) }} ">
                           @error ('name')
                               <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="lastname">Surname</label>
                           <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Surname" value="{{ old('lastname', $data->lastname) }} "></input>
                           @error ('lastname')
                               <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $data->email) }} ">
                           @error ('email')
                               <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="number">Registration Number</label>
                           <input type="text" name="registration_number" class="form-control" id="number" placeholder="Registration Number" value="{{ old('registration_number', $data->registration_number) }} ">
                           @error ('registration_number')
                               <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
