<template>
    <a class="inline-block my-4 py-2 px-3 text-white rounded-md bg-gray-600 transition-all hover:bg-gray-700" :href="route(targetRoute)">Cancelar</a>
</template>
<script>
export default {
    name: "CreateButton",
    data() {
        return {
            targetRoute: route().current().split('.').shift()+'.index',
        }
    }
}
</script>
<style>

</style>
