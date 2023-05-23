@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <a href="/add_cars"><button class="m-1 btn btn-info">Add cars</button></a>
            <a href="/cars_list"><button class="m-1 btn btn-info">Show cars list</button></a>
            <a href="/api/user"><button class="m-1 btn btn-info">Show user data</button></a>
        </div>
    </div>
</div>
@endsection
