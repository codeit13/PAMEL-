@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <img class="card-img-top" src="{{ asset('images/pamel1.png') }}" alt="About Image">
            <div class="card-header">{{ __('Brief Description') }}</div>
            <div class="card-body">
                <p class="card-text">
                Processing Architecture for Multimodal Experience of Learning (PAMEL) is an MMLA architecture that supports the development of MMLA solutions. PAMEL is designed by following Separation-of-Concerns (SoC) architectural design principle. It supports modularity and modifiability features that help developers to develop such MMLA solutions that are context-aware in nature. It follows a standard data processing pipeline that deals with each of the concerns involved in processing multimodal educational data by considering contextual information. It has different modules that help in achieving the objective of fusing multimodal educational data to generate multimodal experience of learning. through different modules. Finally, each of the modules are modifiable that help developers to reuse the developed modules in one solution with minor modifications in another solution.
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
