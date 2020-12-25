<template>
    <article class="message">
        <div class="message-header">
            <p>Push to the Stream...</p>
        </div>
        <div class="message-body">
            <form @submit.prevent="addToStream" @keydown="form.errors.clear($event.target.name)">
                <div class="control">
                    <textarea class="textarea" placeholder="I has something to say..." v-model="form.body" name="body"></textarea>
                    <span class="help is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
                </div>
                <div class="field is-grouped mt-3">
                    <div class="control">
                        <button class="button is-success" type="submit" :disabled="form.errors.any()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({ body: '' })
            }
        },
        methods: {
            addToStream() {
                this.form.submit('post','/status')
                    .then(response => this.$emit('completed', response));
            }
        }
    }

</script>
