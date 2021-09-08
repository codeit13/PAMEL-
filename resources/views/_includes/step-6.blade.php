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
                Requires Transformation
                </div>
                <div class="col">
                    <input type="radio" value="Yes" name="Requires_Transformation" class="Requires_Transformation"/> Yes
                    <input type="radio" value="No" name="Requires_Transformation" class="Requires_Transformation"/> No
                    <br/>
                    <span> Transform </span>
                    <input type="text" class="mb-2" id="transform-rule" placeholder="Add Rule"/>
                                       
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Requires_Transformation_Google_Form"/> Yes
                     <input type="radio" value="No" name="Requires_Transformation_Google_Form"/> No
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Requires_Transformation_Graasp"/> Yes
                     <input type="radio" value="No" name="Requires_Transformation_Graasp"/> No
                </div>
             </div>
            
            
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Enter Actors column no.
                </div>
                <div class="col">
                    <input type="number" class="mb-2" id="actor-number" />
                    <input type="text" class="mb-2" id="actor-rule" placeholder="Add Rule"/>                    
                </div>
                <div class="col">
                     <input type="number" class="mb-2" />
                     <input type="text" class="mb-2" placeholder="Add Rule"/>
                </div>
                <div class="col">
                     <input type="number" class="mb-2" />
                     <input type="text" class="mb-2" placeholder="Add Rule"/>
                </div>
             </div>
            
            
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Enter Verbs column no.
                </div>
                <div class="col">
                    <input type="number" class="mb-2" id="verb-number"/>
                    
                    <input type="text" class="mb-2" id="verb-rule" placeholder="Add Rule"/>
                </div>
                <div class="col">
                     <input type="number" class="" />
                </div>
                <div class="col">
                     <input type="number" class="" />
                </div>
             </div>
             
             
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Enter objects column no.
                </div>
                <div class="col">
                    <input type="number" class="mb-2" id="object-number"/>  
                    
                    <input type="text" class="mb-2" id="object-rule" placeholder="Add Rule"/>
                </div>
                <div class="col">
                     <input type="number" class="" />
                </div>
                <div class="col">
                     <input type="number" class="" />
                </div>
            </div>
                          
             
            <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Variables excluder
                </div>
                <div class="col">
                    <div>
                        <input type="number" class="mb-2" id="variable-excluder-number" />
                    </div>
                    
                    <input type="text" class="mb-2" placeholder="Add Rule" id="variable-excluder-rule" />
                    <div>
                        <input type="number" id="variable-excluder-number2" class="mb-2" />
                    </div>
                    
                    <input type="text" class="mb-2" placeholder="Add Rule" id="variable-excluder-rule2"/>
                </div>
                <div class="col">
                    <div>
                        <input type="number" class="mb-2" />
                    </div>
                    
                    <input type="text" class="mb-2" placeholder="Add Rule"/>
                    <div>
                        <input type="number" class="mb-2" />
                    </div>
                    
                    <input type="text" class="mb-2" placeholder="Add Rule"/>
                </div>
                <div class="col">
                    <div>
                        <input type="number" class="mb-2" />
                    </div>
                    <!-- <a type="submit" class="btn btn-primary btn-sm mb-2">Add new</a> -->
                    
                    <div>
                        <input type="number" class="mb-2" />
                    </div>
                    <!-- <a type="submit" class="btn btn-primary btn-sm">Add new</a> -->
                </div>
             </div>
             
             <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Data Files Aggregation
                </div>
                <div class="col">
                <!-- <div class="d-flex flex-row mb-2">
                    <span>- From -</span>
                    <input type="number" id="case-excluder-from" class="" min="1" max="5"/>
                    <span>- to -</span>
                    <input type="number" id="case-excluder-to" class="" min="1" max="5"/>
                </div> -->
                
                <input type="checkbox" class="" id="case-excluder-rule" placeholder="Add Rule"/>    
                </div>
                <div class="col">
                     
                <div class="d-flex flex-row mb-2">
                    <span>- From -</span>
                    <input type="number" class="" min="1" max="5"/>
                    <span>- to -</span>
                    <input type="number" class="" min="1" max="5"/>
                </div>
                <input type="text" class="" placeholder="Add Rule"/>
                <!-- <a type="submit" class="btn btn-primary btn-sm">Add new</a> -->
                
                </div>
                <div class="col mb-4">
                <div class="d-flex flex-row mb-2">
                    <span>- From -</span>
                    <input type="number" class="" min="1" max="5"/>
                    <span>- to -</span>
                    <input type="number" class="" min="1" max="5"/>
                </div>
                
                <input type="text" class="" placeholder="Add Rule"/>
                </div>
             </div>
             
             
             
             <!-- <div class="row mb-4">
                <div class="col" style="font-weight:bold">
                Requires Cases Aggregator
                </div><div class="col">
                    <input type="radio" value="Yes" name="Requires_Case_Aggregator" class="Video_features10"/> Yes
                    <input type="radio" value="No" name="Requires_Case_Aggregator" class="Video_features10"/> No                    
                    <input type="text" class="" id="Case-Aggregator-rule" placeholder="Add Rule"/>
                    
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Google_form10"/> Yes
                     <input type="radio" value="No" name="Google_form10"/> No                     
                     <input type="text" class="" placeholder="Add Rule"/>
                </div>
                <div class="col">
                     <input type="radio" value="Yes" name="Graasp10"/> Yes
                     <input type="radio" value="No" name="Graasp10"/> No                     
                     <input type="text" class="" placeholder="Add Rule"/>
                </div>
             </div> -->
    
            </div>
          
                
          
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>