var app = Vue.createApp({
    data() {
        return {
            config: {
                lesson: {
                    caseTitle: null,
                    mmlaGoal: null,
                    date: null,
                    startTime: null,
                    endTime: null
                },
                activities: {
                    count: 0,
                    data: []
                },
                dataSources: {
                    count: 0,
                    data: [{
                        id: 1,
                        name: "DS 1",
                        dataSourceType: null,
                        activityType: null,
                        frequency: null,
                        timezone: null,
                        dataFiles: 0,
                        fileRelation: null,
                        sourceType: null,
                        path: null
                    }]
                }
            },
            singleActivity: {
                id: 1,
                type: null,
                startTime: null,
                endTime: null
            },
            singleDataSource: {
                id: 1,
                name: null,
                dataSourceType: null,
                activityType: null,
                frequency: null,
                timezone: null,
                dataFiles: 0,
                fileRelation: null,
                sourceType: null,
                path: null
            },
            addMoreActivitiesCount: 0,
            addMoreDataSourcesCount: 0
        }
    },
    methods: {
        addMoreActivities() {
            for (let count = this.config.activities.count; count < (parseInt(this.config.activities.count) + parseInt(this.addMoreActivitiesCount)); count++) {
                let newActivity = {
                    ...this.singleActivity
                }
                newActivity.id = count + 1
                this.config.activities.data.push(newActivity)
            }

            this.config.activities.count = this.config.activities.data.length
        },
        addMoreDataSources() {
            for (let count = this.config.dataSources.count; count < (parseInt(this.config.dataSources.count) + parseInt(this.addMoreDataSourcesCount)); count++) {
                let newDataSource = {
                    ...this.singleDataSource
                }
                newDataSource.id = count + 1
                newDataSource.name = "DS " + (count + 1)
                this.config.dataSources.data.push(newDataSource)
            }

            this.config.dataSources.count = this.config.dataSources.data.length
        },
        async aggregateForms(event) {
            // console.log(event.target.children);
            let dsID = event.target.children[1].value;
            let formData = new FormData(event.target);
            console.log(dsID);

            const { data } = await axios.post('/aggregateFiles', formData, {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    "Content-Type": "multipart/form-data",
                },
            });

            console.log(data);
            if(data != "_NO_CSV_FILE_AVAILABLE__") this.config.dataSources.data[dsID].path = data;
            
        }
    }
})
app.mount("#add-new-case-app")
