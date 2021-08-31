$(document).ready(function () {
	add_new_activity();
	add_new_platform();

	add_new_trim_row();
	add_new_trim_column();

	$('#add-the-case').click(function () {
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

		$('.activity-lesson-start-time').each(function (i, obj) {
			activities.push({
				'start_time': $(obj).val()
			});
		});

		$('.activity-lesson-end-time').each(function (i, obj) {
			activities[i]['end_time'] = $(obj).val();
		});

		$('.activity-type').each(function (i, obj) {
			activities[i]['activity_time'] = $(obj).val();
		});

		console.log(activities);

		// Step 3 Values
		let platforms = [];
		$('.app-name').each(function (i, obj) {
			platforms.push({
				'name': $(obj).val()
			});
		});

		$('.platform-type').each(function (i, obj) {
			platforms[i]['type'] = $(obj).val();
		});

		$('.platform-frequency').each(function (i, obj) {
			platforms[i]['frequency'] = $(obj).val();
		});

		$('.platform-timezone').each(function (i, obj) {
			platforms[i]['timezone'] = $(obj).val();
		});

		$('.platform-files-count').each(function (i, obj) {
			platforms[i]['data_files'] = $(obj).val();
		});

		$('.platform-file-corresponds').each(function (i, obj) {
			platforms[i]['file_relation'] = $(obj).val();
		});

		$('.platform-repo-type').each(function (i, obj) {
			platforms[i]['repo_type'] = $(obj).val();
		});

		console.log(platforms);

		// Step 4 Values

		// Step 5 Values
		let preparation = [];
		preparation['sync'] = [];

		preparation['sync'] = preparation['time_homo_gen'] = preparation['data_trimming'] = preparation['data_denoising'] = [];
		preparation['sync']['status'] = $('input[name="Video1"]:checked').val();
		preparation['sync']['rule'] = $('#sync-rule').val();

		preparation['time_homo_gen'] = [];
		preparation['time_homo_gen']['status'] = $('input[name="Video2"]:checked').val();
		preparation['time_homo_gen']['from'] = $('#time-homo-gen-from').val();
		preparation['time_homo_gen']['to'] = $('#time-homo-gen-to').val();

		preparation['data_trimming'] = [];
		preparation['data_trimming']['status'] = $('input[name="Video3"]:checked').val();
		preparation['data_trimming']['rows'] = [];
		$('.preparation-data-trimming-rows-from').each(function (i, obj) {
			preparation['data_trimming']['rows'].push({
				'from': $(obj).val()
			});
		});
		$('.preparation-data-trimming-rows-to').each(function (i, obj) {
			preparation['data_trimming']['rows'][i]['to'] = $(obj).val();
		});

		preparation['data_trimming']['cols'] = [];
		$('.preparation-data-trimming-columns-from').each(function (i, obj) {
			preparation['data_trimming']['cols'].push({
				'from': $(obj).val()
			});
		});
		$('.preparation-data-trimming-columns-to').each(function (i, obj) {
			preparation['data_trimming']['cols'][i]['to'] = $(obj).val();
		});

		preparation['data_denoising'] = [];
		preparation['data_denoising']['status'] = $('input[name="Video4"]:checked').val();
		preparation['data_denoising']['duplicates'] = $('preparation-denoising-duplicates').prop('checked');
		preparation['data_denoising']['rule'] = $('#preparation-data-denoising-rule').val();


		console.log(preparation);


	});

	function add_new_activity() {
		let activities_count = $('#activities-count').val();

		let step_2_template = document.getElementById("step-2-template");
		let step_2_template_Html = step_2_template.innerHTML;

		let newHtml = step_2_template_Html.replace(/activity_no/g, (parseInt(activities_count) + 1));

		$("#step-2-template-insert-here").append(newHtml);

		$('#activities-count').val(parseInt(activities_count) + 1);

		return 'LOL';
	}

	function add_new_platform() {
		let platforms_count = $('#platforms-count').val();

		let step_3_template = document.getElementById("step-3-template");
		let step_3_template_Html = step_3_template.innerHTML;

		let newHtml = step_3_template_Html.replace(/platform_no/g, (parseInt(platforms_count) + 1));

		$("#step-3-template-insert-here").append(newHtml);

		$('#platforms-count').val(parseInt(platforms_count) + 1);

		return 'LOL';
	}

	function add_new_insert_files() {
		let insert_files_count = $('#insert-files-count').val();

		let step_4_template = document.getElementById("step-4-template");
		let step_4_template_Html = step_4_template.innerHTML;

		let newHtml = step_4_template_Html.replace(/insert_files_no/g, (parseInt(insert_files_count) + 1));

		$("#step-4-template-insert-here").append(newHtml);

		$('#insert-files-count').val(parseInt(insert_files_count) + 1);

		return 'LOL';
	}

	function add_new_trim_row() {
		let preparation_rows_count = $('#preparation-rows-count').val();

		let step_5_template = document.getElementById("step-5-add-new-row-column");
		let step_5_template_Html = step_5_template.innerHTML;

		let newHtml = step_5_template_Html.replace(/ddtypedd/g, "rows");

		$("#step-5-add-new-row-insert-here").append(newHtml);

		$('#preparation-rows-count').val(parseInt(preparation_rows_count) + 1);

		return 'LOL';
	}

	function add_new_trim_column() {
		let preparation_columns_count = $('#preparation-columns-count').val();

		let step_5_template = document.getElementById("step-5-add-new-row-column");
		let step_5_template_Html = step_5_template.innerHTML;

		let newHtml = step_5_template_Html.replace(/ddtypedd/g, "columns");

		$("#step-5-add-new-column-insert-here").append(newHtml);

		$('#preparation-columns-count').val(parseInt(preparation_columns_count) + 1);

		return 'LOL';
	}

	$('#add-new-activity').click(function () {
		let no_of_activities_to_add = $('#no-of-activitis-to-add').val();

		for (i = 0; i < no_of_activities_to_add; i++) {
			add_new_activity();
		}

	});

	$('#add-new-platform').click(function () {
		let no_of_platforms_to_add = $('#no-of-platforms-to-add').val();

		for (i = 0; i < no_of_platforms_to_add; i++) {
			add_new_platform();
		}

	});

	$('.insert-files-next').click(function () {
		let number_of_repo = 0;

		$('.platform-files-count').each(function (i, obj) {
			number_of_repo += parseInt($(obj).val());
		});

		for (i = 0; i < number_of_repo; i++) {
			add_new_insert_files();
		}
	});

	$('#preparation-add-new-row').click(add_new_trim_row);
	$('#preparation-add-new-column').click(add_new_trim_column);

	$('input[name="Video1"]').change(function () {
		if ($('input[name="Video1"]:checked').val() == 'Yes') {
			$('#requires-sync-div').removeClass('f-d-none');
		} else {
			$('#requires-sync-div').addClass('f-d-none');
		}
	});

	$('input[name="Video2"]').change(function () {
		if ($('input[name="Video2"]:checked').val() == 'Yes') {
			$('#requires-time-homo-gen-div').removeClass('f-d-none');
		} else {
			$('#requires-time-homo-gen-div').addClass('f-d-none');
		}
	});

	$('input[name="Video3"]').change(function () {
		if ($('input[name="Video3"]:checked').val() == 'Yes') {
			$('#requires-data-trimming-div').removeClass('f-d-none');
		} else {
			$('#requires-data-trimming-div').addClass('f-d-none');
		}
	});

	$('input[name="Video4"]').change(function () {
		if ($('input[name="Video4"]:checked').val() == 'Yes') {
			$('#requires-data-denoising-div').removeClass('f-d-none');
		} else {
			$('#requires-data-denoising-div').addClass('f-d-none');
		}
	});

});
