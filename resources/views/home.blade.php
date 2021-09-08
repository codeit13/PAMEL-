@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/pamel.png') }}" alt="About Image">
            <div class="card-header">{{ __('Brief Description') }}</div>
            <div class="card-body">
                <p class="card-text">
                PAMEL is a data fusion architecture that supports the development of MMLA systems that can process multimodal evidence of learning - collected and stored in heterogeneous data sources by taking contextual information of the learning situation into account. This infrastructure can process multimodal data collected from a set of learning tools/platforms - . Prior to the processing of the multimodal evidence, it also allows multi-stakeholders to enter the contextual information of the learning situation!!
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
