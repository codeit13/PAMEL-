<div class="row setup-content" id="step-5">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 class="mb-2"> Preparation</h3>


          <div class="container">

          <div class="row mb-4">
                <div class="col">
                #
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Requires Synchronization</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Requires Time Homo Generation</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Requires Data Trimming</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Requires Denoising</h5>
                </div>
          </div>

          <input type="hidden" id="step5-preparation-count">
          <div id="step-5-template-insert-here">

          </div>






<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div>



          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right step-6-start" type="button">Next</button>
        </div>
      </div>
    </div>
    <script id="step-5-template" type="text/template">
               <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                ds_name
                </div>
                <div class="col">
                    <input type="radio" value="Yes" name="Video1_step_5_preparation_count_" class="Video_features1_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> Yes
                    <input type="radio" value="No" checked checked name="Video1_step_5_preparation_count_" class="Video_features1_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> No
                    <div id="requires-sync-div_step_5_preparation_count_" data-index="_step_5_preparation_count_" class="f-d-none">
                         <br>
                        <input type="text" id="sync-rule_step_5_preparation_count_" data-index="_step_5_preparation_count_" class="form-control" placeholder="Enter Rule"/>
                    </div>
                </div>
                




                <div class="col">
                     <input type="radio" value="Yes" name="Video2_step_5_preparation_count_" class="Video_features2_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> Yes
                     <input type="radio" value="No" checked checked name="Video2_step_5_preparation_count_" class="Video_features2_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> No
                     <div class="d-flex flex-row mb-2 f-d-none" id="requires-time-homo-gen-div" data-index="_step_5_preparation_count_">
                          <br>


<!-- //////////////////////////////////////////////////////////////////////////////////// -->


                         <span>- From </span>
                         <input type="number" id="time-homo-gen-from_step_5_preparation_count_" data-index="_step_5_preparation_count_" min="1" max="5"/>
                         <span>- to </span>
                         <input type="number" id="time-homo-gen-to_step_5_preparation_count_" data-index="_step_5_preparation_count_" min="1" max="5"/>
                    
                    
                    </div>                  
                </div>






                <div class="col">
                     <input type="radio" value="Yes" name="Video3_step_5_preparation_count_" class="Video_features3_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> Yes
                     <input type="radio" value="No" checked checked name="Video3_step_5_preparation_count_" class="Video_features3_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> No
                     <div class="d-flex flex-column f-d-none mt-2" id="requires-data-trimming-div_step_5_preparation_count_" data-index="_step_5_preparation_count_">
                        <span>Trim Rows</span>

                        <input type="hidden" value="0" id="preparation-rows-count_step_5_preparation_count_" data-index="_step_5_preparation_count_">
                        <div id="step-5-add-new-row-insert-here_step_5_preparation_count_" data-index="_step_5_preparation_count_">


                        </div>                        
                        <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-row_step_5_preparation_count_" data-index="_step_5_preparation_count_">Add new</a>
                        <br>
                        <span>Trim Columns</span>
                         
                        <input type="hidden" value="0" id="preparation-columns-count_step_5_preparation_count_" data-index="_step_5_preparation_count_">
                         <div id="step-5-add-new-column-insert-here_step_5_preparation_count_" data-index="_step_5_preparation_count_">

                         </div>
                         <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-column_step_5_preparation_count_" data-index="_step_5_preparation_count_">Add new</a>
                     </div>
                </div>

                <div class="col">
                     <input type="radio" value="Yes" name="Video4_step_5_preparation_count_" class="Video_features4_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> Yes
                     <input type="radio" value="No" checked name="Video4_step_5_preparation_count_" class="Video_features4_step_5_preparation_count_" data-index="_step_5_preparation_count_"/> No
                     <div class="f-d-none" id="requires-data-denoising-div_step_5_preparation_count_" data-index="_step_5_preparation_count_">
                          <br>
                        <input type="checkbox" id="preparation-denoising-duplicates_step_5_preparation_count_" data-index="_step_5_preparation_count_" name="duplicates" value="">
                        <label for="duplicates"> Remove duplicates</label><br>
                     <input type="text" id="preparation-data-denoising-rule_step_5_preparation_count_" class="form-control" placeholder="Enter Rule" data-index="_step_5_preparation_count_"/>
                     </div>
                </div>

            </div>
    </script>

    <script id="step-5-add-new-row-column" type="text/template">
          <div class="d-flex flex-row mb-2">
               <span>- From </span>
               <input type="number" class="preparation-data-trimming-ddtypedd-from_step_5_preparation_count_" data-index="_step_5_preparation_count_" min="1" max="5"/>
               <span>- to </span>
               <input type="number" class="preparation-data-trimming-ddtypedd-to_step_5_preparation_count_" data-index="_step_5_preparation_count_" min="1" max="5"/>
          </div>
    </script>