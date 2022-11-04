@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-o text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="car-body">
                    <p class="mb-0">
                        @if ($user->roles_id == 1)
                        Admin
                        @else
                        user
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop