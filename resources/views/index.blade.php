@extends('layouts.main')
@section('main-section')
<div class="container d-flex justify-content-center mt-5">
  <div class=" ms-5   m-5 p-5 border border-black shadow">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form  method="POST" action="{{url('login')}}" id="form" >
            @csrf
            <h2 class='text-primary text-center'>Login</h2>
            <div class="row mt-5">
                <div class="col">
                    <input type="email" name="email" id="email" class="form-control"   placeholder="Email">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <input type="Password" class="form-control" placeholder="Password" name="password" Id="password"  aria-label="Name">
                </div>
            </div>

                <button type="submit" class="btn btn-primary mt-3">Log In</button>
                <a href="{{url('registration')}}" class="btn btn-primary mt-3 ms-3">Register Now</a>
        </form>
    </div>
    </div>
</div>
@endsection
