@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/datap.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row">
                        <div class="flex-grow-1">
                            {{ __('Data Processing') }}
                        </div>
                        <a href="add-new-case" class="btn btn-primary" @click="addNewCase_POST">Add a New Case</a>
                    </div>
                </div>
                <!-- <img class="card-img-top" src="{{ asset('images/arcd.png') }}" alt="About Image"> -->
                <div class="card-body">
                    <div class="container">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Case Title</th>
                                    <th scope="col">Preparation File</th>
                                    <th scope="col">Organised File</th>
                                    <th scope="col">Fused File</th>
                                    <th scope="col">Config File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>BS Case 1</td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>BS Case 2</td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                    <td> <button class="btn btn-sm btn-primary">Download</button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'>
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="/js/multiform.js"></script>
    <!-- <script src="/js/datap.js"></script> -->
    @endsection
