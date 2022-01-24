<div class="row setup-content" id="step-4">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <input type="hidden" value="0" id="insert-files-count">
            <h3 class="mb-2 mt-2"> Insert files</h3>

            <!-- Starts here -->
            <div v-for="dataSource in config.dataSources.data" class="accordion">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                :data-target=" '#' + dataSource.id" aria-expanded="false"
                                :aria-controls="dataSource.id">
                                @{{ dataSource.name }}
                            </button>
                        </h2>
                    </div>

                    <div :id="dataSource.id" class="collapse show"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-space-between mb-2"
                                style="place-items: flex-end;">
                                <form method="POST" @submit.prevent="aggregateForms" enctype="multipart/form-data" class="d-flex" style="flex: auto;">
                                    @csrf
                                    <input type="hidden" name="dsID" :value="(dataSource.id-1)">
                                    <input type="hidden" required="false" v-model="config.dataSources.data[(dataSource.id-1)].name" name="dsName">
                                    <input type="hidden" required="false" v-model="config.dataSources.data[(dataSource.id-1)].dataFiles" name="dataFiles">

                                    <input type="file" name="files[]" class="form-control-file" multiple>
                                    <input type="text" v-model="config.dataSources.data[(dataSource.id-1)].driveLink" class="form-control" placeholder="paste link">

                                    <button v-if="!config.dataSources.data[(dataSource.id-1)].path" type="submit" class="btn btn-sm btn-primary">Upload</button>
                                    <a v-if="config.dataSources.data[(dataSource.id-1)].path" :href="config.dataSources.data[(dataSource.id-1)].path" class="btn btn-sm btn-primary">Download</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ends here -->

            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right step-5-start" type="button">Next</button>
        </div>
    </div>
</div>


<!-- <script id="step-4-template" type="text/template">

    <div class="accordion" id="accordionExample">
            <div class="card">
                  <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-insert_files_no" aria-expanded="false" aria-controls="collapse-insert_files_no">
                        ds_name
                        </button>
                        </h2>
                  </div>

                  <div id="collapse-insert_files_no" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="d-flex flex-row justify-content-space-between mb-2" style="place-items: flex-end;">
                              <label class="control-label pr-4 mt-2" style="font-weight:bold"> DF insert_files_no</label>
                              <form id="convert-files-insert_files_no" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="ds-name" value="ds_name">
                                    <input type="hidden" name="insert_files_n" value="insert_files_no">
                                    <input type="file" id="file-ds_index-insert_files_no" name="files[]" class="form-control-file" multiple>
                              </form>
                              <input type="text" class="form-control" placeholder="paste link">
                              <a class="step-4-convert-click" data-index="insert_files_no" data-name="ds_name">Convert</a>
                        </div>
                        </div>
                  </div>
  </div>
</div>

</script> -->
