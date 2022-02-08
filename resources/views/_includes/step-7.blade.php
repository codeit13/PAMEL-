<style>
    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
        background-color: white !important;
        color: #000 !important;
    }

</style>
<div class="row setup-content" id="step-7">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <h3> Fusion Page</h3>

            <div class="form-group d-flex justify-content-center" data-toggle="buttons">
                <label class="btn btn-primary btn-lg toggle-checkbox primary mr-2">
                    <input autocomplete="off" value="TIME" name="fusionbasedOn" type="radio" v-model="config.columnsRequiredInFusedFile.fusionbasedOn" />
                    Time based
                </label>
                <label class="btn btn-primary btn-lg toggle-checkbox primary ml-2">
                    <input autocomplete="off" value="EVENT" name="fusionbasedOn" type="radio" v-model="config.columnsRequiredInFusedFile.fusionbasedOn" />
                    Event based
                </label>
            </div>

            <div class="form-inline justify-content-center">
                <label class="sr-only" for="timeWindow">Time Window</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Time Window (mins)</div>
                    </div>
                    <input type="time" class="form-control" v-model="config.columnsRequiredInFusedFile.timeWindow">
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card" v-for="dataSource in config.dataSources.data">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                @{{ dataSource.name }}
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    Requires Case Aggregation
                                </div>
                                <div class="col-8">
                                    <input type="radio" value="YES"
                                        v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.requires" />
                                    Yes
                                    <input type="radio" value="NO"
                                        v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.requires" />
                                    No
                                    <div
                                        v-if="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.requires === 'YES'">
                                        <br />
                                        <span> Verb 1 </span>
                                        <input type="text" class="mb-2 form-control" placeholder="Add Rule" size="12"
                                            v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.verb1.addRule" />
                                        <input type="text" class="mb-2 form-control" placeholder="missing Rule"
                                            size="12"
                                            v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.verb1.missingRule" />
                                        <br />
                                        <span> Object 1 </span>
                                        <input type="text" class="mb-2 form-control" placeholder="Add Rule" size="12"
                                            v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.object1.addRule" />
                                        <input type="text" class="mb-2 form-control" placeholder="missing Rule"
                                            size="12"
                                            v-model="config.dataSources.data[(dataSource.id - 1)].fusion.caseAggregation.object1.missingRule" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <hr style="border: 10px solid; border-radius: 50px;"> <br><br>

            <div class="container">
                <div class="row mb-4">

                    <div class="row mb-4">
                        <div class="col-8" v-for="column in config.columnsRequiredInFusedFile.data">
                            <div class="row">
                                <div class="col" style="font-weight:bold">
                                    Column @{{ column.id }}
                                </div>
                                <div class="col ml-2">
                                    <div class="form-group">

                                        <select class="form-control" v-model="config.columnsRequiredInFusedFile.data[(column.id-1)].type">
                                            <option value="NONE" selected disabled>Choose Type</option>
                                            <option value="Actor">Actor</option>
                                            <option value="Verb">Verb</option>
                                            <option value="Object">Object</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col ml-2">
                                    <input type="text" class="mb-2 form-control" placeholder="Integration Rule" v-model="config.columnsRequiredInFusedFile.data[(column.id-1)].integrationRule"/>

                                </div>
                                <div class="col ml-2">
                                    <input type="text" class="mb-2 form-control" placeholder="Missing Rule" v-model="config.columnsRequiredInFusedFile.data[(column.id-1)].missingRule" />
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-sm" @click="addMoreFusedFileColumns">Add More</a>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                <button class="btn btn-success btn-lg pull-right" id="add-the-case">Submit</button>
            </div>
        </div>
