<template>
    <b-card>
        <b-form>
            <b-form-group label="Email address:" label-for="email">
                <b-form-input
                id="email"
                v-model="value.email"
                type="email"
                placeholder="Enter email"
                required
                ></b-form-input>
            </b-form-group>

            <b-form-group abel="Name:" label-for="name">
                <b-form-input
                id="name"
                v-model="value.name"
                placeholder="Enter name"
                required
                ></b-form-input>
            </b-form-group>
            <b-button @click="submitForm" variant="primary">Submit</b-button>
        </b-form>
    </b-card>
</template>

<script>
export default {
    props: ['value'],
    methods: {
        submitForm() {
            this.$emit('form-submitted');
        }
    }
}
</script>

<style>

</style>
