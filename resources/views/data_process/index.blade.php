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
                <a href="add-new-case" class="btn btn-primary">Add a New Case</a>
                </div>
            </div>
            <!-- <img class="card-img-top" src="{{ asset('images/arcd.png') }}" alt="About Image"> -->
            <div class="card-body">
            <div class="container">
                
            </div>
            </div>
        </div>
    </div>
</div>

<script id="step-2-template" type="text/template">
    <div class="d-flex flex-row">
        <div class="form-group">
            <label class="control-label">Activity activity_no</label>
        </div>
        <div class="form-group">
            <label class="control-label">Lesson Start Time</label>
            <input class="form-control activity-lesson-start-time" data-index="activity_no" type="date">
        </div>
        <div class="form-group">
            <label class="control-label">Lesson End Time</label>
            <input class="form-control activity-lesson-end-time" data-index="activity_no" type="date">
        </div>
        <div class="form-group">
            <label class="control-label">Activity Type</label>
            <select class="form-control activity-type" data-index="activity_no">
                <option value="individual">Individual</option>
                <option value="group">Group</option>
                <option value="collaborate">Collaborate</option>
            </select>
        </div>
        <div class="form-group">
        <label class="control-label">Timezone</label>
        <input class="form-control activity-time-zone" data-index="activity_no" type="text">
        </div>
    </div>
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="/js/multiform.js"></script>
<script src="/js/datap.js"></script>
@endsection
