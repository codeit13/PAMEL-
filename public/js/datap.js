$(document).ready(function () {
	add_new_activity();
	add_new_platform();

	// add_new_trim_row();
	// add_new_trim_column();

	$('#add-the-case').click(function () {
		let case_data = [];

		// Step 1 Values
		let case_details = [];
		case_details['title'] = $('#case-title').val();
		case_details['mmla_goal'] = $('#mmla-goal').val();
		case_details['lesson-case-date'] = $('#lesson-case-date').val();
		case_details['lesson-start-time'] = $('#lesson-case-start-time').val();
		case_details['lesson-end-time'] = $('#lesson-case-end-time').val();

		case_data['details'] = case_details;

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

		case_data['activities'] = activities;

		// Step 3 Values
		let platforms = [];
		$('.app-name').each(function (i, obj) {
			platforms.push({
				'name': $(obj).val()
			});
		});

		$('.app-type').each(function (i, obj) {
			platforms.push({
				'ds-type': $(obj).val()
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

		case_data['platforms'] = platforms;

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


		case_data['preparation'] = preparation;

		// Step 6 Values
		let organization = [];
		organization['transform'] = [];
		organization['transform']['status'] = $('input[name="Requires_Transformation"]:checked').val();
		organization['transform']['transform-rule'] = $('#sync-rule').val();

		organization['actor'] = [];
		organization['actor']['number'] = $('#actor-number').val();
		organization['actor']['rule'] = $('#actor-rule').val();

		organization['verb'] = [];
		organization['verb']['number'] = $('#verb-number').val();
		organization['verb']['rule'] = $('#verb-rule').val();

		organization['object'] = [];
		organization['object']['number'] = $('#object-number').val();
		organization['object']['rule'] = $('#object-rule').val();

		organization['variables-excluder-1'] = [];
		organization['variables-excluder-1']['number'] = $('#variables-excluder-number').val();
		organization['variables-excluder-1']['rule'] = $('#variables-excluder-rule').val();

		organization['variables-excluder-2'] = [];
		organization['variables-excluder-2']['number'] = $('#variables-excluder-number2').val();
		organization['variables-excluder-2']['rule'] = $('#variables-excluder-rule2').val();

		organization['case-excluder'] = [];
		organization['case-excluder']['from'] = $('#case-excluder-from').val();
		organization['case-excluder']['to'] = $('#case-excluder-to').val();
		organization['case-excluder']['rule'] = $('#case-excluder-rule').val();

		organization['case-aggregator'] = [];
		organization['case-aggregator']['status'] = $('input[name="Requires_Case_Aggregator"]:checked').val();
		organization['case-aggregator']['rule'] = $('#Case-Aggregator-rule').val();

		
		case_data['organization'] = organization;
		console.log(case_data);


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

	function add_new_insert_files(e) {
		
		let insert_files_count = $('#insert-files-count').val();

		let step_4_template = document.getElementById("step-4-template");
		let step_4_template_Html = step_4_template.innerHTML;

		let newHtml = step_4_template_Html.replace(/insert_files_no/g, (parseInt(insert_files_count) + 1));

		$("#step-4-template-insert-here").append(newHtml);

		$('#insert-files-count').val(parseInt(insert_files_count) + 1);
		// e.stopPropagation();
		return 'LOL';
	}

	function add_new_trim_row(i) {
		let preparation_rows_count = $('#preparation-rows-count'+i).val();

		let step_5_template = document.getElementById("step-5-add-new-row-column");
		let step_5_template_Html = step_5_template.innerHTML;

		let newHtml = step_5_template_Html.replace(/ddtypedd/g, "rows");

		$("#step-5-add-new-row-insert-here"+i).append(newHtml);

		$('#preparation-rows-count'+i).val(parseInt(preparation_rows_count) + 1);

		return 'LOL';
	}

	function add_new_trim_column(i) {
		let preparation_columns_count = $('#preparation-columns-count'+i).val();

		let step_5_template = document.getElementById("step-5-add-new-row-column");
		let step_5_template_Html = step_5_template.innerHTML;

		let newHtml = step_5_template_Html.replace(/ddtypedd/g, "columns");

		$("#step-5-add-new-column-insert-here"+i).append(newHtml);

		$('#preparation-columns-count'+i).val(parseInt(preparation_columns_count) + 1);

		return 'LOL';
	}

	function add_step5_row(ds_name, index) {
		// let step_5_preparation_count = $('#step5-preparation-count').val();

		let step_5_template = document.getElementById("step-5-template");
		let step_5_template_Html = step_5_template.innerHTML;

		let newHtml = step_5_template_Html.replace(/_step_5_preparation_count_/g, index)
										  .replace(/ds_name/g, ds_name);

		$("#step-5-template-insert-here").append(newHtml);

		console.log(index, " done");

		// $('#step5-preparation-count').val(parseInt(step_5_preparation_count) + 1);

		return 'LOL';
	}

	function add_step6_row(ds_name, index) {
		let step_6_template = document.getElementById("step-6-template");
		let step_6_template_Html = step_6_template.innerHTML;

		let newHtml = step_6_template_Html.replace(/_step_6_preparation_count_/g, index)
										  .replace(/ds_name/g, ds_name);

		$("#step-6-template-insert-here").append(newHtml);

		console.log(index, "done");


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

	$('.insert-files-next').click(function (event) {
		
		let number_of_repo = 0;

		$('.platform-files-count').each(function (i, obj) {
			number_of_repo += parseInt($(obj).val());
			console.log("Type" + number_of_repo);
		});

		for (i = 0; i < number_of_repo; i++) {
			add_new_insert_files();
		}
	});

	$('.step-5-start').click(function () {
		$('.app-name').each(function (i, obj) {
				let ds_name  = $(obj).val();
				// let index = $(obj).data('index');

				console.log(ds_name);
				add_step5_row(ds_name, i)

				$('input[name="Video1' + i + '"]').change(function () {
					if ($('input[name="Video1' + i + '"]:checked').val() == 'Yes') {
						$('#requires-sync-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-sync-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video2' + i + '"]').change(function () {
					if ($('input[name="Video2' + i + '"]:checked').val() == 'Yes') {
						$('#requires-time-homo-gen-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-time-homo-gen-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video3' + i + '"]').change(function () {
					if ($('input[name="Video3' + i + '"]:checked').val() == 'Yes') {
						$('#requires-data-trimming-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-data-trimming-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video4' + i + '"]').change(function () {
					if ($('input[name="Video4' + i + '"]:checked').val() == 'Yes') {
						$('#requires-data-denoising-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-data-denoising-div' + i + '').addClass('f-d-none');
					}
				});

				$('#preparation-add-new-row' + i).click(function() {
					add_new_trim_row(i);
				});
				$('#preparation-add-new-column' + i).click(function() {
					add_new_trim_column(i);
				});
		});
	});

	$('.step-6-start').click(function () {
		$('.app-name').each(function (i, obj) {
				let ds_name  = $(obj).val();

				console.log(ds_name);
				add_step6_row(ds_name, i)

				$('input[name="Video1' + i + '"]').change(function () {
					if ($('input[name="Video1' + i + '"]:checked').val() == 'Yes') {
						$('#requires-sync-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-sync-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video2' + i + '"]').change(function () {
					if ($('input[name="Video2' + i + '"]:checked').val() == 'Yes') {
						$('#requires-time-homo-gen-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-time-homo-gen-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video3' + i + '"]').change(function () {
					if ($('input[name="Video3' + i + '"]:checked').val() == 'Yes') {
						$('#requires-data-trimming-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-data-trimming-div' + i + '').addClass('f-d-none');
					}
				});
			
				$('input[name="Video4' + i + '"]').change(function () {
					if ($('input[name="Video4' + i + '"]:checked').val() == 'Yes') {
						$('#requires-data-denoising-div' + i + '').removeClass('f-d-none');
					} else {
						$('#requires-data-denoising-div' + i + '').addClass('f-d-none');
					}
				});

				$('#preparation-add-new-row' + i).click(function() {
					add_new_trim_row(i);
				});
				$('#preparation-add-new-column' + i).click(function() {
					add_new_trim_column(i);
				});
		});
	});

});
