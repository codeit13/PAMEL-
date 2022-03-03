<div class="row setup-content" id="step-4">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <input type="hidden" value="0" id="insert-files-count">
            <h3 class="mb-2 mt-2"> Upload Data Files</h3>

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

                                    <input v-if="dataSource.sourceType == 'Local System'" type="file" name="files[]" class="form-control-file" multiple>
                                    <input v-if="dataSource.sourceType == 'G Drive'" type="text" v-model="config.dataSources.data[(dataSource.id-1)].driveLink" class="form-control" placeholder="paste link">

                                    <button v-if="!config.dataSources.data[(dataSource.id-1)].path" type="submit" class="btn btn-sm btn-primary">Upload</button>
                                    <a target="_blank" v-if="config.dataSources.data[(dataSource.id-1)].path" :href="config.dataSources.data[(dataSource.id-1)].path" class="btn btn-sm btn-primary">Download</a>
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
