$(document).ready(function () {
	add_new_activity();
	add_new_platform();

	let number_of_repo = 0;
	
	$('#add-the-case').click(function() {
		console.log("Submit Button Clicked");
		
		// Step 1 Values
		let case_details = [];
		case_details['title'] = $('#case-title').val();
		case_details['mmla_goal'] = $('#mmla-goal').val();
		case_details['lesson-case-date'] = $('#lesson-case-date').val();
		case_details['lesson-start-time'] = $('#lesson-case-start-time').val();
		case_details['lesson-end-time'] = $('#lesson-case-end-time').val();

		console.log(case_details);

		// Step 2 Values
		let activities = [];
			
		$('.activity-lesson-start-time').each(function(i, obj) {
			activities.push({
				'start_time': $(obj).val()
			});
		});

		$('.activity-lesson-end-time').each(function(i, obj) {
			activities[i]['end_time'] = $(obj).val();
		});

		$('.activity-type').each(function(i, obj) {
			activities[i]['activity_time'] = $(obj).val();
		});

		console.log(activities);

		// Step 3 Values
		let platforms = [];
		$('.app-name').each(function(i, obj) {
			platforms.push({
				'name': $(obj).val()
			});
		});
		
		$('.platform-type').each(function(i, obj) {
			platforms[i]['type'] = $(obj).val();
		});

		$('.platform-frequency').each(function(i, obj) {
			platforms[i]['frequency'] = $(obj).val();
		});

		$('.platform-timezone').each(function(i, obj) {
			platforms[i]['timezone'] = $(obj).val();
		});

		$('.platform-files-count').each(function(i, obj) {
			platforms[i]['data_files'] = $(obj).val();
			number_of_repo += platforms[i]['data_files'];
		});

		$('.platform-file-corresponds').each(function(i, obj) {
			platforms[i]['file_relation'] = $(obj).val();
		});

		$('.platform-repo-type').each(function(i, obj) {
			platforms[i]['repo_type'] = $(obj).val();
		});

		console.log(platforms);

	});

	function add_new_activity() {
		let activities_count  = $('#activities-count').val();

		let step_2_template = document.getElementById("step-2-template");
		let step_2_template_Html = step_2_template.innerHTML;

		let newHtml = step_2_template_Html.replace(/activity_no/g, (parseInt(activities_count)+1));

		$("#step-2-template-insert-here").append(newHtml);

		$('#activities-count').val(parseInt(activities_count)+1);

		return 'LOL';
	}

	function add_new_platform() {
		let platforms_count  = $('#platforms-count').val();

		let step_3_template = document.getElementById("step-3-template");
		let step_3_template_Html = step_3_template.innerHTML;

		let newHtml = step_3_template_Html.replace(/platform_no/g, (parseInt(platforms_count)+1));

		$("#step-3-template-insert-here").append(newHtml);

		$('#platforms-count').val(parseInt(platforms_count)+1);

		return 'LOL';
	}

	$('#add-new-activity').click(function() {
		let no_of_activities_to_add = $('#no-of-activitis-to-add').val();

		for(i=0; i<no_of_activities_to_add; i++) {
			add_new_activity();
		}

	});

	$('#add-new-platform').click(function() {
		let no_of_platforms_to_add = $('#no-of-platforms-to-add').val();

		for(i=0; i<no_of_platforms_to_add; i++) {
			add_new_platform();
		}

	});

	

});
