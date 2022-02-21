<template>
    <b-container>
        <b-row>
            <newsletter-subscribe-form-component
                v-model="newsletterRecipient"
                @form-submitted="submitForm"
            />
        </b-row>
    </b-container>
</template>

<script>
export default {
    data() {
        return {
            newsletterRecipient: {
                name: '',
                email: ''
            }
        }
    },
    methods: {
        submitForm() {
            axios.put('/newsletter-recipients/store', this.newsletterRecipient).then(response => {
                this.$bvToast.toast('You are successfully subscribed', {
                    title: 'Success!',
                    autoHideDelay: 5000,
                    variant: 'success',
                    appendToast: true
                })
            }).catch(error => {
                console.log(error.response)
                switch (error.response.status) {
                    case 500:
                        var message = "A server error has occured, please contact the administrators"
                        var variant = "danger"
                        break;

                    case 422:
                        var message = `An error has occured, the details are: ${JSON.stringify(error.response.data.errors)}`
                        var variant = "warning"
                        break;

                    default:
                        var message = "A server error has occured, please contact the administrators"
                        var variant = "danger"
                        break;
                }

                this.$bvToast.toast(message, {
                    title: 'Error!',
                    autoHideDelay: 5000,
                    variant: variant,
                    appendToast: true
                })
            })
        }
    }
}
</script>

<style>

</style>
