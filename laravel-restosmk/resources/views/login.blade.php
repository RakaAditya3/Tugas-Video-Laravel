@extends('front')

@section('content')

<div class="row">
    <div class="col-6">
        <form action="{{ url('/postlogin') }}" method="post">
            @csrf

            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            <di class="mt-2"v>
                <label class="form-label" for="">Email</label>
                <input class="form-control" value="{{ old('email') }}" type="email" name="email" id="">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </di>
            <div class="mt-2">
                <label class="form-label" for="">Password</label>
                <input class="form-control" type="text" name="password" id="">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <button class="btn btn-danger mt-4" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection