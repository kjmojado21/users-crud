@extends('layouts.app')


@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="mb-3">
            @error('name')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="name" value="{{ old('name') }}"  id="" class="form-control">
            <div class="form-text">Enter fullname</div>
        </div>
        <div class="mb-3">
            @error('username')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="username" id="" class="form-control">
            <div class="form-text">Enter Username</div>
        </div>
        {{-- <input type="text" name="uuid" value="{{ uuid::generate() }}"> --}}
        <div class="mb-3">
            @error('password')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="password" name="password" id="" class="form-control">
            <div class="form-text">Enter Password</div>
        </div>
        <div class="mb-3">
            @error('contact')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="contact" id="" class="form-control">
            <div class="form-text">Enter Contact</div>
        </div>
        <div class="mb-3">
            @error('location')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="location" id="" class="form-control">
            <div class="form-text">Enter Location</div>
        </div>
        <div class="mb-3">
            @error('age')
                <p class="small text-danger">{{ $message }} *</p>
            @enderror
            <input type="text" name="age" id="" class="form-control">
            <div class="form-text">Enter Age</div>
        </div>
        <button type="submit" class="btn btn-success px-5">Save</button>
    </form>

    <div class="mt-5">
        @if ($users->isNotEmpty())
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-6">
                        <div class="card shadow my-3">
                            <div class="card-header">
                                <span class="small text-muted">Created at:
                                     {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}  </span> <br>
                                     {{-- {{  $user->created_at->diffForHumans() }} --}}
                                <span class="small text-muted">Updated at:
                                    {{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}  </span>
                            </div>
                            <div class="card-body">
                                <span class="fw-light">Fullname:</span> &nbsp; &nbsp; {{ $user->name }} <br>
                                <span class="fw-light"> Username: &nbsp; </span>{{ $user->username }} <br>
                                <span class="fw-light"> Contact: &nbsp; &nbsp;&nbsp;&nbsp;</span> {{ $user->contact }} <br>
                                <span class="fw-light"> Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span>{{ $user->location }} <br>
                                <span class="fw-light"> Age:
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                {{ $user->age }} <br>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('users.edit',$user) }}" class="btn btn-warning float-start">edit</a>


                                <form action="{{ route('users.destroy',$user) }}" method="post" class="float-end">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            {{ $users->links() }}
        @endif

    </div>
@endsection
