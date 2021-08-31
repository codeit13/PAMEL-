<div class="row setup-content" id="step-3">
        <input type="hidden" value="0" id="platforms-count">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
        <div class="d-flex flex-row align-items-center mb-4">        
          <h3 class="mt-2 mb-2"> Platform/ Tools Description</h3>
          <div class="d-flex flex-row-reverse" style="flex: auto">
            <div class="">
                <a id="add-new-platform" class="btn btn-primary">Add New Platform</a>
            </div>
            <div class="">
                <input type="text" class="form-control" id="no-of-platforms-to-add">
            </div>
        </div>
        </div>
          <div class="form-group" id="step-3-template-insert-here">
            
          </div>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>

    <script id="step-3-template" type="text/template">
    <div class="d-flex">
                    <div class="form-group">
                        <label class="control-label pr-4 mt-2" style="font-weight:bold">Platform Tool platform_no</label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">App Name</label>
                        <select class="app-name form-control" data-index="platform_no">
                            <option>Choose</option>
                            <option value="Google_form">Google_form</option>
                            <option value="OpenSpace_video">OpenSpace_video</option>
                            <option value="Graasp">Graasp</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Activity Type</label>
                        <select class="platform-type form-control" data-index="platform_no">
                            <option>Choose</option>
                            <option value="Post Activity">Post Activity</option>
                            <option value="Pre Lesson">Pre Lesson</option>
                            <option value="Post Lesson">Post Lesson</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Frequency</label>
                        <input type="number" class="platform-frequency form-control" data-index="platform_no" min="1" max="5">
                    </div>
                    <div class="form-group">
                        <label class="control-label pl-4">Timezone</label>
                        <select class="platform-timezone form-control" name="timezone">
                            <option>Choose Timezone</option>
                            <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                            <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                            <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                            <option value="US/Alaska">(GMT-09:00) Alaska</option>
                            <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                            <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                            <option value="US/Arizona">(GMT-07:00) Arizona</option>
                            <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                            <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                            <option value="America/Managua">(GMT-06:00) Central America</option>
                            <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                            <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                            <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                            <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                            <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                            <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                            <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                            <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                            <option value="America/Manaus">(GMT-04:00) Manaus</option>
                            <option value="America/Santiago">(GMT-04:00) Santiago</option>
                            <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                            <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                            <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                            <option value="America/Godthab">(GMT-03:00) Greenland</option>
                            <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                            <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                            <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                            <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                            <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                            <option value="Etc/Greenwich">(GMT+00:00) Dublin, Edinburgh, Lisbon, London</option>
                            <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome,Vienna</option>
                            <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest,Prague</option>
                            <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                            <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                            <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                            <option value="Asia/Amman">(GMT+02:00) Amman</option>
                            <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                            <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                            <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                            <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                            <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                            <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                            <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                            <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                            <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                            <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                            <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                            <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                            <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                            <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                            <option value="Asia/Baku">(GMT+04:00) Baku</option>
                            <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                            <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                            <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                            <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                            <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                            <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                            <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                            <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                            <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                            <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                            <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                            <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                            <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                            <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                            <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                            <option value="Australia/Perth">(GMT+08:00) Perth</option>
                            <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                            <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                            <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                            <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                            <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                            <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                            <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                            <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                            <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                            <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                            <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                            <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                            <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                            <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                            <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Data Files</label>
                        <input type="number" class="platform-files-count form-control" data-index="platform_no">
                    </div>
                    <div class="form-group">
                        <label class="control-label">File Relation</label>
                        <select class="platform-file-corresponds form-control" data-index="platform_no">
                            <option>Choose</option>
                            <option value="All Students/Activity">All Students/Activity</option>
                            <option value="One student/activity">One student/activity</option>
                            <option value="One student/lesson">One student/lesson</option>
                            <option value="All student/lesson">One student/lesson</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Repo Type</label>
                        <select class="platform-repo-type form-control" data-index="platform_no">
                            <option>Choose</option>          
                            <option value="API">API</option>
                            <option value="Gdrive">Gdrive</option>
                            <option value="Local_system">Local_system</option>
                        </select>
                    </div>
                    
            </div>
    </script>