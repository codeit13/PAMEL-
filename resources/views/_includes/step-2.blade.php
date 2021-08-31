<div class="row setup-content" id="step-2">
        <input type="hidden" value="0" id="activities-count">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
        <div class="d-flex flex-row align-items-center mb-4">        
          <h3 class="mt-2 mb-2"> Activity Description </h3>
          <div class="d-flex flex-row-reverse" style="flex: auto">
            <div class="">
                <a id="add-new-activity" class="btn btn-primary">Add New Activity</a>
            </div>
            <div class="">
                <input type="text" class="form-control" id="no-of-activitis-to-add">
            </div>
        </div>
        </div>
          <div class="form-group" id="step-2-template-insert-here">
            
          </div>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>

<script id="step-2-template" type="text/template">
    <div class="d-flex justify-content-between">
        <div class="form-group">
            <label class="control-label mt-4" style="font-weight:bold">Activity activity_no</label>
        </div>
        <div class="form-group">
            <label class="control-label">Start Time</label>
            <input class="form-control activity-lesson-start-time" data-index="activity_no" type="time">
        </div>
        <div class="form-group">
            <label class="control-label">End Time</label>
            <input class="form-control activity-lesson-end-time" data-index="activity_no" type="time">
        </div>
        <div class="form-group">
            <label class="control-label">Activity Type</label>
            <select class="form-control activity-type" data-index="activity_no">
                <option>Choose Type</option>
                <option value="individual">Individual</option>
                <option value="group">Group</option>
                <option value="collaborate">Collaborate</option>
            </select>
        </div>
    </div>
</script>