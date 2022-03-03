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
                        <h5 style="font-weight:bold">Requires Time Homogenization</h5>
                    </div>
                    <div class="col">
                        <h5 style="font-weight:bold">Requires Data Trimming</h5>
                    </div>
                    <div class="col">
                        <h5 style="font-weight:bold">Requires Denoising</h5>
                    </div>
                </div>

                <div class="row mb-4" v-for="dataSource in config.dataSources.data">
                    <div class="col" style="font-weight:bold">
                        @{{ dataSource.name }}
                    </div>
                    <div class="col">
                         <!-- Requires Synchronization -->
                        <input type="radio" value="YES" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.synchronization.requires"/> Yes
                        <input type="radio" value="NO" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.synchronization.requires"/> No
                        <div v-if="config.dataSources.data[(dataSource.id - 1)].preparation.synchronization.requires === 'YES'">
                            <br>
                            <input type="text" class="form-control" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.synchronization.rule" placeholder="Enter Rule" />
                        </div>
                    </div>

                    <div class="col">
                        <!-- Requires Time Homo Generation -->
                        <input type="radio" value="YES" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.timeHomoGeneration.requires"/> Yes
                        <input type="radio" value="No" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.timeHomoGeneration.requires" checked/> No
                    </div>

                    <div class="col">
                        <!-- Requires Data Trimming -->
                        <input type="radio" value="YES" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.requires"/> Yes
                        <input type="radio" value="NO" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.requires" /> No
                        <div v-if="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.requires === 'YES'">
                            <div class="d-flex flex-column mt-2">
                                <span>Trim Rows</span>
                                <div class="d-flex flex-row mb-2" v-for="(row, rowIndex) in config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.rows">
                                    <span>- From </span>
                                    <input type="number" min="1" max="5" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.rows[rowIndex].from" />
                                    <span>- to </span>
                                    <input type="number" min="1" max="5" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.rows[rowIndex].to"/>
                                </div>
                                <a class="btn btn-sm btn-primary" @click="addNewDataTrimRow((dataSource.id - 1))">Add new</a>
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <span>Trim Cols</span>
                                <div class="d-flex flex-row mb-2" v-for="(col, colIndex) in config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.cols">
                                    <span>- From </span>
                                    <input type="number" min="1" max="5" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.cols[colIndex].from" />
                                    <span>- to </span>
                                    <input type="number" min="1" max="5" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.dataTrimming.data.cols[colIndex].to" />
                                </div>
                                <a class="btn btn-sm btn-primary" @click="addNewDataTrimCol((dataSource.id - 1))">Add new</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Requires Denoising -->
                        <input type="radio" value="YES" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.denoising.requires"/> Yes
                        <input type="radio" value="NO" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.denoising.requires"/> No
                        <div v-if="config.dataSources.data[(dataSource.id - 1)].preparation.denoising.requires === 'YES'">
                            <input type="checkbox" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.denoising.removeDuplicates">
                            <label for="duplicates"> Remove duplicates</label><br>
                            <input type="text" class="form-control" placeholder="Enter Rule" v-model="config.dataSources.data[(dataSource.id - 1)].preparation.denoising.rule"/>
                        </div>
                    </div>

                </div>

            </div>



            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right step-6-start" type="button" @click="preparation">Next</button>
        </div>
    </div>
</div>








<script id="step-5-template" type="text/template">
    <div class="row mb-4">
    <div class="col" style="font-weight:bold">
        ds_name
    </div>
    <div class="col">
        <input type="radio" value="Yes" name="Video1_step_5_preparation_count_"
            class="Video_features1_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> Yes
        <input type="radio" value="No" checked checked name="Video1_step_5_preparation_count_"
            class="Video_features1_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> No
        <div id="requires-sync-div_step_5_preparation_count_" data-index="_step_5_preparation_count_" class="f-d-none">
            <br>
            <input type="text" id="sync-rule_step_5_preparation_count_" data-index="_step_5_preparation_count_"
                class="form-control" placeholder="Enter Rule" />
        </div>
    </div>





    <div class="col">
        <input type="radio" value="Yes" name="Video2_step_5_preparation_count_"
            class="Video_features2_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> Yes
        <input type="radio" value="No" checked checked name="Video2_step_5_preparation_count_"
            class="Video_features2_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> No
        <div class="d-flex flex-row mb-2 f-d-none" id="requires-time-homo-gen-div"
            data-index="_step_5_preparation_count_">
            <br>




            <span>- From </span>
            <input type="number" id="time-homo-gen-from_step_5_preparation_count_"
                data-index="_step_5_preparation_count_" min="1" max="5" />
            <span>- to </span>
            <input type="number" id="time-homo-gen-to_step_5_preparation_count_" data-index="_step_5_preparation_count_"
                min="1" max="5" />


        </div>
    </div>






    <div class="col">
        <input type="radio" value="Yes" name="Video3_step_5_preparation_count_"
            class="Video_features3_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> Yes
        <input type="radio" value="No" checked checked name="Video3_step_5_preparation_count_"
            class="Video_features3_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> No
        <div class="d-flex flex-column f-d-none mt-2" id="requires-data-trimming-div_step_5_preparation_count_"
            data-index="_step_5_preparation_count_">
            <span>Trim Rows</span>

            <input type="hidden" value="0" id="preparation-rows-count_step_5_preparation_count_"
                data-index="_step_5_preparation_count_">
            <div id="step-5-add-new-row-insert-here_step_5_preparation_count_" data-index="_step_5_preparation_count_">


            </div>
            <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-row_step_5_preparation_count_"
                data-index="_step_5_preparation_count_">Add new</a>
            <br>
            <span>Trim Columns</span>

            <input type="hidden" value="0" id="preparation-columns-count_step_5_preparation_count_"
                data-index="_step_5_preparation_count_">
            <div id="step-5-add-new-column-insert-here_step_5_preparation_count_"
                data-index="_step_5_preparation_count_">

            </div>
            <a type="submit" class="btn btn-primary btn-sm" id="preparation-add-new-column_step_5_preparation_count_"
                data-index="_step_5_preparation_count_">Add new</a>
        </div>
    </div>

    <div class="col">
        <input type="radio" value="Yes" name="Video4_step_5_preparation_count_"
            class="Video_features4_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> Yes
        <input type="radio" value="No" checked name="Video4_step_5_preparation_count_"
            class="Video_features4_step_5_preparation_count_" data-index="_step_5_preparation_count_" /> No
        <div class="f-d-none" id="requires-data-denoising-div_step_5_preparation_count_"
            data-index="_step_5_preparation_count_">
            <br>
            <input type="checkbox" id="preparation-denoising-duplicates_step_5_preparation_count_"
                data-index="_step_5_preparation_count_" name="duplicates" value="">
            <label for="duplicates"> Remove duplicates</label><br>
            <input type="text" id="preparation-data-denoising-rule_step_5_preparation_count_" class="form-control"
                placeholder="Enter Rule" data-index="_step_5_preparation_count_" />
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
