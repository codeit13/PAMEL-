@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">{{ __('About Us') }}</div>
            <img class="card-img-top" src="{{ asset('images/arcd.png') }}" alt="About Image">
            <div class="card-body">
                <p class="card-text">
                Processing Architecture for Multimodal Evidence of Learning (PAMEL) is a service-oriented architecture following the adapter-pattern. The service-oriented, adapters-based architectures have two main advantages: being extensible to fetch data from additional physical and digital data sources (crucial to cope with current variety and future evolution of authentic settings); and supporting reusability in additional learning situations at a reduced development cost, as long as data is structured as per their specification. The resulting PAMEL is a service-oriented architecture following the Adapter pattern. PAMEL is designed to build MMLA solutions to support evidence-based decision making of multiple stakeholders like students, teachers and researchers, by taking the contextual information into account of the local (authentic) learning situation. PAMEL carries out three data processing activities. The decisions which need to be taken in these three activities need the contextual information of the learning situation.
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
