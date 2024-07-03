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
                    <hr>
                    <a href="{{ route('usersendmail.index') }}">Mail Send</a><hr>
                    <a href="{{ route('usersendmail.tracker.list') }}">Tracker List</a><hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
