@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            <p>Selamat datang, <b>{{Auth::user()->name}}</b></p>
        </div>
    </div>
</div>
@endsection
