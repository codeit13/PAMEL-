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
                </div>

                <div>
                    <div class="row mb-4" v-for="dataSource in config.dataSources.data">
                        <div class="col" style="font-weight:bold">
                            @{{ dataSource.name }}
                        </div>
                        <div class="col ml-2">
                            <!-- Requires Transformation -->
                            <input type="radio" value="YES"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.transformation.requires" />
                            Yes
                            <input type="radio" value="NO"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.transformation.requires" />
                            No
                            <div
                                v-if="config.dataSources.data[(dataSource.id - 1)].organisation.transformation.requires === 'YES'">
                                <br>
                                <span> Transform </span>
                                <input type="text" class="mb-2 form-control"
                                    v-model="config.dataSources.data[(dataSource.id - 1)].organisation.transformation.rule"
                                    placeholder="Add Rule" size="12" />
                            </div>
                        </div>

                        <div class="col ml-2">
                            <!-- Enter Actors column no. -->
                            <input type="number" class="mb-2 form-control" min="1" max="8"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.actors.colNo" />
                            <input type="text" class="mb-2 form-control" placeholder="Add Rule" size="12"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.actors.rule" />
                        </div>

                        <div class="col ml-2">
                            <!-- Enter Verbs column no. -->
                            <input type="number" class="mb-2 form-control" min="1" max="8"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.verbs.colNo" />
                            <input type="text" class="mb-2 form-control" placeholder="Add Rule" size="12"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.verbs.rule" />
                        </div>

                        <div class="col ml-2">
                            <!-- Enter objects column no. -->
                            <input type="number" class="mb-2 form-control" min="1" max="8"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.objects.colNo" />
                            <input type="textarea" class="mb-2 form-control" placeholder="Add Rule" size="12"
                                v-model="config.dataSources.data[(dataSource.id - 1)].organisation.objects.rule" />
                        </div>

                        <div class="col ml-2">
                            <!-- Variables excluder -->
                            <div class="d-flex flex-row mb-2"
                                v-for="(row, dataIndex) in config.dataSources.data[(dataSource.id - 1)].organisation.variablesExcluder.data">
                                <span>From-</span>
                                <input type="number" class="form-control" min="1" max="3"
                                    v-model="config.dataSources.data[(dataSource.id - 1)].organisation.variablesExcluder.data[dataIndex].from" />
                                <span>To-</span>
                                <input type="number" class="form-control" min="1" max="3"
                                    v-model="config.dataSources.data[(dataSource.id - 1)].organisation.variablesExcluder.data[dataIndex].to" />
                            </div>
                            <a type="submit" class="btn btn-primary btn-sm"
                                @click="addNewVarExcluder((dataSource.id - 1))">Add new</a>
                        </div>
                    </div>

                </div>



                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right step-6-start" type="button" @click="organisation">Next</button>
            </div>
        </div>
    </div>
</div>
