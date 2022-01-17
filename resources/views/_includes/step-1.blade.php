<div class="row setup-content" id="step-1">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12 d-flex-row">
            <h3> Lesson Description</h3>
            <div class="form-group">
                <label class="control-label">Case Title</label>
                <input v-model="config.lesson.caseTitle" maxlength="100" type="text" required="required" class="form-control"
                    placeholder="Enter the Case Title">
            </div>
            <div class="form-group">
                <label class="control-label">MMLA Goal</label>
                <textarea v-model="config.lesson.mmlaGoal" id="mmla-goal" id="" cols="30" rows="5" class="form-control"
                    placeholder="MMLA Goal"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Lesson Date</label>
                <input v-model="config.lesson.date" type="date" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">Lesson Start Time</label>
                <input v-model="config.lesson.startTime" type="time" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">Lesson End Time</label>
                <input v-model="config.lesson.endTime" type="time" required="required" class="form-control">
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
    </div>
</div>
