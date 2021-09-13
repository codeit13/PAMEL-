<div class="row setup-content" id="step-6">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          
          <h3 class="mb-2"> Organisation </h3>
          
          <div class="container">
          <div class="row mb-4">
                <div class="col">
                #
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Requires Transformation</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Enter Actors column no.</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Enter Verbs column no.</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Enter objects column no.</h5>
                </div>
                <div class="col">
                <h5 style="font-weight:bold">Variables excluder</h5>
                </div>
                <!-- <div class="col">
                <h5 style="font-weight:bold">Data Files Aggregation</h5>
                </div> -->
            </div>

            <input type="hidden" class="form-control" id="step6-preparation-count">
            <div id="step-6-template-insert-here">

            </div>

            </div>
          
                
          
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right step-6-start" type="button">Next</button>
        </div>
      </div>
    </div>

    <script id="step-6-template" type="text/template">
    <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                ds_name
                </div>
                <div class="col ml-2">
                    <input type="radio" value="Yes" name="Requires_Transformation_step_6_preparation_count_" data-index="_step_6_preparation_count_" class="Requires_Transformation_step_6_preparation_count_ "/> Yes
                    <input type="radio" value="No" name="Requires_Transformation_step_6_preparation_count_" data-index="_step_6_preparation_count_" class="Requires_Transformation_step_6_preparation_count_ "/> No
                    <br/>
                    <span> Transform </span>
                    <input type="text" class="mb-2 form-control" id="transform-rule_step_6_preparation_count_" data-index="_step_6_preparation_count_" placeholder="Add Rule" size="12"/>
                                       
                </div>   

                <div class="col ml-2">
                    <input type="number" class="mb-2 form-control" id="actor-number_step_6_preparation_count_" data-index="_step_6_preparation_count_" min="1" max="8"/>
                    <input type="text" class="mb-2 form-control" id="actor-rule_step_6_preparation_count_" data-index="_step_6_preparation_count_" placeholder="Add Rule" size="12"/>                    
                </div>

                <div class="col ml-2">
                    <input type="number" class="mb-2 form-control" id="verb-number_step_6_preparation_count_" data-index="_step_6_preparation_count_" min="1" max="8"/>
                    <input type="text" class="mb-2 form-control" id="verb-rule_step_6_preparation_count_" data-index="_step_6_preparation_count_" placeholder="Add Rule" size="12"/>
                </div>

                <div class="col ml-2">
                    <input type="number" class="mb-2 form-control" id="object-number_step_6_preparation_count_" data-index="_step_6_preparation_count_" min="1" max="8"/>  
                    <input type="textarea" class="mb-2 form-control" id="object-rule_step_6_preparation_count_" data-index="_step_6_preparation_count_" placeholder="Add Rule" size="12"/>
                </div>

                <div class="col ml-2">
                <div class="d-flex flex-row mb-2">
                    <span>F-</span>
                    <input class="_step_6_preparation_count_" data-index="_step_6_preparation_count_" type="number" class="form-control" min="1" max="3"/>
                    <span>t-</span>
                    <input class="_step_6_preparation_count_" data-index="_step_6_preparation_count_" type="number" class="form-control" min="1" max="3"/>
                </div>
                <a type="submit" class="btn btn-primary btn-sm" id="aggregation_button_step_6_preparation_count_" data-index="_step_6_preparation_count_">Add new</a>
                    <!-- <div>
                        <input type="number" class="mb-2 form-control" id="variable-excluder-number_step_6_preparation_count_" data-index="_step_6_preparation_count_" min="1" max="8"/>
                    </div>
                    <input type="text" class="mb-2 form-control" placeholder="Add Rule" id="variable-excluder-rule_step_6_preparation_count_" data-index="_step_6_preparation_count_" size="12" />
                    <div>
                        <input type="number" id="variable-excluder-number2_step_6_preparation_count_" data-index="_step_6_preparation_count_" class="mb-2 form-control" min="1" max="8"/>
                    </div>
                    <input type="text" class="mb-2 form-control" placeholder="Add Rule" id="variable-excluder-rule2_step_6_preparation_count_" data-index="_step_6_preparation_count_" size="12"/> -->
                </div>

                <!-- <div class="col ml-1"> -->
                <!-- <div class="d-flex flex-row mb-2">
                    <span>F-</span> -->
                    <!-- <input class="_step_6_preparation_count_" data-index="_step_6_preparation_count_" type="number" class="form-control" min="1" max="3"/>
                    <span>t-</span>
                    <input class="_step_6_preparation_count_" data-index="_step_6_preparation_count_" type="number" class="form-control" min="1" max="3"/>
                </div>
                <a type="submit" class="btn btn-primary btn-sm" id="aggregation_button_step_6_preparation_count_" data-index="_step_6_preparation_count_">Add new</a> -->
            <!-- </div> -->
    </script>