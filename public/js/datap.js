$(document).ready(function () {
	add_new_activity();
	
	$('#add-the-case').click(function() {
		console.log("Submit Button Clicked");
		
		// Step 1 Values
		let case_title = $('#case-title').val();
		let mmla_goal = $('#mmla-goal').val();
		let lesson_case_date = $('#lesson-case-date').val();
		let lesson_case_start_time = $('#lesson-case-start-time').val();
		let lesson_case_end_time = $('#lesson-case-end-time').val();

		// Step 2 Values
		let activities_start_times = $('.activity-lesson-start-time');
		let activities_end_times = $('.activity-lesson-end-time');
		let activites_types = $('.activity-type');
		let activites_time_zones = $('.activity-time-zone');
	});

	$('#add-new-activity').click(add_new_activity);

	function add_new_activity() {
		let activities_count  = $('#activities-count').val();

		let step_2_template = document.getElementById("step-2-template");
		let step_2_template_Html = step_2_template.innerHTML;

		let newHtml = step_2_template_Html.replace(/activity_no/g, (parseInt(activities_count)+1));

		$("#step-2-template-insert-here").append(newHtml);

		$('#activities-count').val(parseInt(activities_count)+1);

		return 'LOL';
	}
});
