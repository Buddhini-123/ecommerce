<template>
    <a href="#" @click.prevent="addToCart"><i class="icon-shopping-cart2"></i> Add to Cart</a>
<!--    <button @click="addToCart" type="button"><i class="icon-shopping-cart2"></i> Add to Cart</button>-->
</template>

<script>
export default {
    name: "AddToCartButton",
    props: {
        product: {
            required: true,
            type: Object
        }
    },
    methods: {
        // addToCart() {
        //     console.log('someMethod called');
        // }
        async addToCart() {
            alert(this.product.id)
            return
            let response = await axios.post('/cart', {
                'product_id': this.product.id
            });
            console.log(response.data);
        }
    }
}
</script>

<style scoped>

</style>
