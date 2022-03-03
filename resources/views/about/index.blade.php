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
                PAMEL consists of three major components - “Fetchers”, “Configuration File” and “PAMEL Manager”. Fetchers are used to fetch the data files from a set of data repositories that store the collected heterogeneous datasets from a set of tools used in a learning situation. Configuration File stores the teacher provided contextual information with data requirement specifications in machine-readable rules format. The rules are used for defining the behavior of data processing activities defined in the PAMEL Manager component. The expansion of PAMEL Manager can be seen in the following figure. The main components are “Preparation Core”, “Organization Core”, “Fusion Core”, and “Output Formatters”. Preparation Core is used to make data files ready to go into the data processing pipeline by following different data processing activities - ‘Synchronizer’, ‘Time Homogenizer’, ‘Denoiser’, and ‘Aggregator’. Similarly, Organization Core is used to arrange the data files through the activities - ‘Variable Excluder’, ‘Case Excluder’, and ‘Transformer’. Fusion Core fuses the data files to get the integrated data file by going through the activities - ‘Mapper’, ‘Joiner’ and ‘Integrator’. Finally, “Output Formatter” component exports the fused data file in the required data file format. It can also be seen that all the required rules that define the behavior of all the components are fetched from the Configuration File.                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
