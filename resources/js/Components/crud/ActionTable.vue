<template>
    <td class="py-3 px-6 text-left whitespace-nowrap">
        <div class="flex w-100 h-100 items-center gap-2">

            <button v-if="$page.props.user" @click="deleteData" class="p-3 bg-red-600 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFFFFF" viewBox="0 0 448 512">
                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                </svg>
            </button>

            <a v-if="$page.props.user" :href="route(`${targetRoute}.edit`, targetId)" class="p-3 bg-blue-600 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFFFFF" viewBox="0 0 512 512">
                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                </svg>
            </a>

            <a :href="route(`${targetRoute}.show`, targetId)" class="p-3 bg-green-600 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFFFFF" viewBox="0 0 576 512">
                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/>
                </svg>
            </a>

        </div>
    </td>
</template>
<script>
export default {
  name: "ActionTable",
  data () {
    return {
        targetRoute: this.route().current().split('.').shift(),
    }
  },
  props: {
    actionRoute: String,
    targetId: Number,
  },
  methods: {
    deleteData() {
        const question = confirm("Você tem certeza que deseja excluir o registro?");
        question ? this.$inertia.delete(this.route(`${this.targetRoute}.destroy`, this.$props.targetId)) : alert('Operação cancelada!');
    },
  },
};
</script>
<style scoped>
a, button {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: .750rem;
}
</style>
