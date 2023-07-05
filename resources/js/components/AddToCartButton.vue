<template>
    <a href="#" @click.prevent="addToCart"><i class="icon-shopping-cart2"></i> Add to Cart</a>
<!--    <button @click="addToCart" type="button"><i class="icon-shopping-cart2"></i> Add to Cart</button>-->
</template>

<script>
export default {
    name: "AddToCartButton",

    methods: {
        addToCart() {
            console.log('someMethod called');
        }
    }
}
</script>

<style scoped>

</style>
