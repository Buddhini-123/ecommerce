<!--<template>-->
<!--    <span class="badge badge-pill badge-warning align-top">{{ cartCount }}</span>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    name: "BadgeIcon",-->
<!--    data(){-->
<!--        return {-->
<!--            cartCount: ''-->
<!--        }-->
<!--    },-->
<!--    mounted() {-->
<!--        this.$root.$on('changeCartCount', (newCartCount) => {-->
<!--            this.cartCount = newCartCount-->
<!--        })-->
<!--    }-->

<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->

<template>
    <span class="badge badge-pill badge-warning align-top">{{ cartCount }}</span>
</template>

<script>
export default {
    name: "BadgeIcon",
    data() {
        return {
            cartCount: 0, // Initialize cartCount to 0 or any default value
        };
    },
    mounted() {
        this.$root.$on('changeCartCount', (newCartCount) => {
            // Verify if the event is triggered and the newCartCount value is received correctly
            console.log('Received new cart count:', newCartCount);

            // Update the cartCount value with the newCartCount received
            this.cartCount = newCartCount;
        });
    },
};
</script>

<style scoped>

</style>

