<template>
    <a href="#" @click.prevent="addToCart"><i class="icon-shopping-cart2"></i> Add to Cart</a>
<!--    <a href="" @click.prevent="addToCart">Click to increment</a>-->

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
    data:{
        count:1
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
