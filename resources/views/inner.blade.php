@extends('base')

@section('content')
    <div class="content-header">
        <h1 class="text-center">Dashboard Overview</h1>
        <p class="text-center lead">Welcome to your dashboard {{ Auth::user()->name }}. Here you can manage everything.</p>
    </div>

    <div class="row">
        <h2 class="text-center"> Welcome to your inner page</h2>
    </div>
@endsection
