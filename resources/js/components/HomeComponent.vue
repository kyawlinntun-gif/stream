<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message" v-for="status in statuses" v-bind:key="status.id">
                    <div class="message-header">
                        <p>{{ status.user.name }} said ...</p>
                        <p>{{ postOn(status.created_at) }}</p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import status from '../status';
    export default {
        data() {
            return {
                statuses: []
            }
        },
        methods: {
            postOn(status)
            {
                return moment(status).fromNow();
            }
        },
        created(){
            // axios.get('/status')
            //     .then(response => {
            //         this.statuses = response.data.status;
            //     });

            status.all(statuses => this.statuses = statuses);
        }
    }

</script>
