@extends('layouts.app')

@section('content')
<div class="text-center">
    <img src="{{ asset('images/welcome.jpg') }}" alt="" height="400" width="800">
</div>
<div class="text-center">
<a href="{{ url('contacts') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Go To CRUD App</a>
</div>


@endsection
