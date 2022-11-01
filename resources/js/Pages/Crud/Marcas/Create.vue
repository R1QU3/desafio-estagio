<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import ReturnButton from '../../../Components/crud/ReturnButton.vue';
import CancelButton from '../../../Components/crud/CancelButton.vue';
</script>
<template>

    <div class="main-container">
        <ReturnButton/>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="nome" value="Nome" />
                <TextInput
                    id="nome"
                    v-model="form.nome"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    placeholder="Digite o nome da montadora"
                />
                <InputError class="mt-2" :message="errors.nome" />
            </div>
            <div class="flex justify-end items-center gap-2">
                <CancelButton/>
                <button class="p-2 rounded bg-blue-700 text-white" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>

</template>
<script>
export default {
    name: "CreateMarcas",
    props: ["errors"],
    data() {
        return {
            form: {
                nome: '',
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(route('marcas.store'), this.form);
        }
    }
}
</script>
<style>

</style>
