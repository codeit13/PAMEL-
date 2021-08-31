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
            <div class="row mb-2">
                <div class="col" style="font-weight:bold">
                Requires Synchronization
                </div>
                <div class="col">
                    <input type="radio" value="Yes" name="Video" class="Video_features1"/> Yes
                    <input type="radio" value="No" name="Video" class="Video_features1"/> No
                    <div class="">
                        <input type="text" class=""/>
                    </div>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form"/> Yes
                     <input type="radio" value="No" name="Google_form"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp"/> Yes
                     <input type="radio" value="No" name="Graasp"/> No
                </div>
            </div>
            <div class="row mb-2">
                <div class="col" style="font-weight:bold">
                Requires Time Homo Generation
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video2" class="Video_features2"/> Yes
                     <input type="radio" value="No" name="Video2" class="Video_features2"/> No
                     <div class="d-flex flex-row mb-2">
                         <span>- From -</span>
                         <input type="number" class="" min="1" max="5"/>
                         <span>- to -</span>
                         <input type="number" class="" min="1" max="5"/>
                    </div>
                     
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form2"/> Yes
                     <input type="radio" value="No" name="Google_form2"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp2"/> Yes
                     <input type="radio" value="No" name="Graasp2"/> No
                </div>
            </div>
            <div class="row mb-2">
                <div class="col" style="font-weight:bold">
                Requires Data Trimming
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video3" class="Video_features3"/> Yes
                     <input type="radio" value="No" name="Video3" class="Video_features3"/> No
                     <div class="d-flex flex-column">
                        <span>Trim Rows</span>
                        <div id="step-4-add-new-row">



                        </div>
                        
                        <a type="submit" class="btn btn-primary btn-sm">Add new</a>
                        <span>Trim Columns</span>

                         <div id="step-4-add-new-column">



                         </div>


                         <a type="submit" class="btn btn-primary btn-sm">Add new</a>
                     </div>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form3"/> Yes
                     <input type="radio" value="No" name="Google_form3"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp3"/> Yes
                     <input type="radio" value="No" name="Graasp3"/> No
                </div>
            </div>
            <div class="row">
                <div class="col" style="font-weight:bold">
                Requires Denoising
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Video4" class="Video_features4"/> Yes
                     <input type="radio" value="No" name="Video4" class="Video_features4"/> No
                     <div class="">
                        <input type="checkbox" id="duplicates" name="duplicates" value="">
                        <label for="duplicates"> Remove duplicates</label><br>
                     </div>
                     <input type="text" class="" />
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form4"/> Yes
                     <input type="radio" value="No" name="Google_form4"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp4"/> Yes
                     <input type="radio" value="No" name="Graasp4"/> No
                </div>
            </div>
        </div>



          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>

    <script id="step-5-add-new-row" type="text/template">
    <div class="d-flex flex-row mb-2">
          <span>- From -</span>
          <input type="number" class="" min="1" max="5"/>
          <span>- to -</span>
          <input type="number" class="" min="1" max="5"/>
     </div>
    </script>

    <script id="step-5-add-new-column" type="text/template">
    <div class="d-flex flex-row mb-2">
          <span>- From -</span>
          <input type="number" class="" min="1" max="5"/>
          <span>- to -</span>
          <input type="number" class="" min="1" max="5"/>
     </div>
    </script>