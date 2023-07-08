<template>
    <span class="badge badge-pill badge-warning align-top">{{ cartCount }}</span>
</template>

<script>
export default {
    name: "BadgeIcon",
    data(){
        return {
            cartCount: ''
        }
    },
    mounted() {
        this.$root.$on('changeCartCount', (newCartCount) => {
            this.cartCount = newCartCount
        })
    }

}
</script>

<style scoped>

</style>
