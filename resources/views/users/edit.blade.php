@extends('layouts.app')

@section('content')
    <h1 class="text-center display-6">
        EDIT USER DATA
    </h1>
    <form action="{{ route('users.update',$user) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            @error('name')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="name" id="" value="{{ old('name',$user->name) }}" class="form-control">
            <div class="form-text">Enter fullname</div>
        </div>
        <div class="mb-3">
            @error('username')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="username" value="{{ old('username',$user->username) }}" id="" class="form-control">
            <div class="form-text">Enter Username</div>
        </div>
        <div class="mb-3">
            @error('password')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="password" name="password" value="{{ old('password',$user->password) }}" id="" class="form-control">
            <div class="form-text">Enter Password</div>
        </div>
        <div class="mb-3">
            @error('contact')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="contact" id="" value="{{ old('contact',$user->contact) }}" class="form-control">
            <div class="form-text">Enter Contact</div>
        </div>
        <div class="mb-3">
            @error('location')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="location" id="" value="{{ old('location',$user->location) }}"  class="form-control">
            <div class="form-text">Enter Location</div>
        </div>
        <div class="mb-3">
            @error('age')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="age" id="" value="{{ old('age',$user->name) }}" class="form-control">
            <div class="form-text">Enter Age</div>
        </div>
        <button type="submit" class="btn btn-success px-5">Save</button>
    </form>
@endsection
