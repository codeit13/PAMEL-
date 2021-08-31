@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">{{ __('Blog') }}</div>
            <!-- <img class="card-img-top" src="{{ asset('images/arcd.png') }}" alt="About Image"> -->
            <div class="card-body">
                <p class="card-text">
                Blog Text
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
