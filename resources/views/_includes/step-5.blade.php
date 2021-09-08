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
                <h5 style="font-weight:bold">Video Features</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Google Form</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Graasp</h5>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Requires Synchronization
                </div>
                <div class="col">
                    <input type="radio" value="Yes" name="Video1" class="Video_features1"/> Yes
                    <input type="radio" value="No" checked checked name="Video1" class="Video_features1"/> No
                    <div id="requires-sync-div" class="f-d-none">
                         <br>
                        <input type="text" id="sync-rule" class="form-control" placeholder="Enter Rule"/>
                    </div>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form"/> Yes
                     <input type="radio" value="No" checked name="Google_form"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp"/> Yes
                     <input type="radio" value="No" checked name="Graasp"/> No
                </div>
            </div>
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Requires Time Homo Generation
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video2" class="Video_features2"/> Yes
                     <input type="radio" value="No" checked checked name="Video2" class="Video_features2"/> No
                     <div class="d-flex flex-row mb-2 f-d-none" id="requires-time-homo-gen-div">
                          <br>
                         <span>- From -</span>
                         <input type="number" id="time-homo-gen-from" min="1" max="5"/>
                         <span>- to -</span>
                         <input type="number" id="time-homo-gen-to" min="1" max="5"/>
                    </div>
                     
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form2"/> Yes
                     <input type="radio" value="No" checked name="Google_form2"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp2"/> Yes
                     <input type="radio" value="No" checked name="Graasp2"/> No
                </div>
            </div>
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Requires Data Trimming
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video3" class="Video_features3"/> Yes
                     <input type="radio" value="No" checked checked name="Video3" class="Video_features3"/> No
                     <div class="d-flex flex-column f-d-none mt-2" id="requires-data-trimming-div">
                        <span>Trim Rows</span>

                        <input type="hidden" value="0" id="preparation-rows-count">
                        <div id="step-5-add-new-row-insert-here">



                        </div>
                        
                        <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-row">Add new</a>
                        <br>
                        <span>Trim Columns</span>
                         
                        <input type="hidden" value="0" id="preparation-columns-count">
                         <div id="step-5-add-new-column-insert-here">



                         </div>


                         <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-column">Add new</a>
                     </div>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form3"/> Yes
                     <input type="radio" value="No" checked name="Google_form3"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp3"/> Yes
                     <input type="radio" value="No" checked name="Graasp3"/> No
                </div>
            </div>
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Requires Denoising
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video4" class="Video_features4"/> Yes
                     <input type="radio" value="No" checked name="Video4" class="Video_features4"/> No
                     <div class="f-d-none" id="requires-data-denoising-div">
                          <br>
                        <input type="checkbox" id="preparation-denoising-duplicates" name="duplicates" value="">
                        <label for="duplicates"> Remove duplicates</label><br>
                     <input type="text" id="preparation-data-denoising-rule" class="form-control" placeholder="Enter Rule" />
                     </div>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form4"/> Yes
                     <input type="radio" value="No" checked name="Google_form4"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp4"/> Yes
                     <input type="radio" value="No" checked name="Graasp4"/> No
                </div>
            </div>
        </div>



          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>

    <script id="step-5-add-new-row-column" type="text/template">
          <div class="d-flex flex-row mb-2">
               <span>- From -</span>
               <input type="number" class="preparation-data-trimming-ddtypedd-from" min="1" max="5"/>
               <span>- to -</span>
               <input type="number" class="preparation-data-trimming-ddtypedd-to" min="1" max="5"/>
          </div>
    </script>