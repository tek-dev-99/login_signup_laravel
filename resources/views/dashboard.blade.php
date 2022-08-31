@extends('layouts.main')
@section('main-section')
<div class="text-end mt-3">
    <a href="{{url('logout')}}" class="btn btn-primary">Logout</a>
</div>
<div class="text-center mt-5">
    <h2 class="mb-3">Dashboard</h2>
     <h2> Welcome to {{ $users->name}}</h2>
</div>

@endsection
