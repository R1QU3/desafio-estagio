<template>
    <a class="py-2 px-3 text-white rounded-md bg-blue-600 transition-all hover:bg-blue-700" :href="route(targetRoute)">Criar</a>
</template>
<script>
export default {
    name: "CreateButton",
    data() {
        return {
            targetRoute: route().current().split('.').shift()+'.create',
        }
    }
}
</script>
<style>

</style>
