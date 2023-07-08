<template>
    <a href="#" @click.prevent="addToCart"><i class="icon-shopping-cart2"></i> Add to Cart</a>
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
    data:{
        count:1
    },
    methods: {
        // addToCart() {
        //     console.log('someMethod called');
        // }
        async addToCart() {
            // alert(this.product.id)
            // return
            let response = await axios.post('/cart', {
                'product_id': this.product.id
            });
            this.$root.$emit('changeCartCount',response.data.basket_count);
            // console.log(response.data);
        }
    }
}
</script>

<style scoped>

</style>
