<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message" v-for="status in statuses" v-bind:key="status.id">
                    <div class="message-header">
                        <p>{{ status.user.name }} said ...</p>
                        <!-- <p>{{ postOn(status.created_at) }}</p> -->
                        <p>{{ status.created_at | ago | capitalize }}</p>

                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </article>

                <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import status from '../status';
    import AddToStream from '../components/AddToStream.vue';
    export default {
        components: {
            AddToStream
        },
        data() {
            return {
                statuses: []
            }
        },
        methods: {
            // postOn(status)
            // {
            //     return moment(status).fromNow();
            // }

            addStatus(addstatus) {
                console.log(addstatus);

                this.statuses.unshift(addstatus);

                alert('Your status has been added to the stream');

                window.scrollTo(0, 0);
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow();
            },
            capitalize(value) {
                return value.toUpperCase();
            }
        },
        created() {
            // axios.get('/status')
            //     .then(response => {
            //         this.statuses = response.data.status;
            //     });

            status.all(statuses => this.statuses = statuses);
        }
    }

</script>
