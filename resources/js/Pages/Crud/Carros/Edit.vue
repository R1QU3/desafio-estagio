<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import ReturnButton from '../../../Components/crud/ReturnButton.vue';
import CancelButton from '../../../Components/crud/CancelButton.vue';
</script>
<template>

    <div class="main-container">

        <ReturnButton/>

        <form @submit.prevent="submit">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 justify-center items-end">
                <div>
                    <InputLabel for="marca" value="Montadora" />
                    <select id="marca" class="w-full rounded border border-slate-300" autofocus required v-model="form.marca">
                        <option v-for="item in allMarcas" :key="item.id" :value="item.id">
                            {{ item.nome }}
                        </option>
                    </select>
                </div>
                <div>
                    <InputLabel for="nome" value="Nome" />
                    <TextInput id="nome" v-model="form.nome" type="text" class="mt-1 block w-full" required autocomplete="off" placeholder="Digite o nome do carro" />
                </div>
                <div>
                    <InputLabel for="cambio" value="Cambio" />
                    <input type="text" id="cambio" v-model="form.cambio" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required autocomplete="off" placeholder="cambio manual de 5 marchas">
                </div>
                <div>
                    <InputLabel for="motorizacao" value="Motorizaçao" />
                    <input type="text" id="motorizacao" v-model="form.motorizacao" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required autocomplete="off" placeholder="1.0">
                </div>
                <div>
                    <InputLabel for="potencia" value="Potencia" />
                    <input type="number" id="potencia" v-model="form.potencia" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required maxlength="1600" autocomplete="off" placeholder="Digite a potencia em cavalos">
                </div>
                <div>
                    <InputLabel for="direcao" value="Direção" />
                    <select id="direcao" class="w-full rounded border border-slate-300" autofocus required v-model="form.direcao">
                        <option value="eletrica">
                            Direção eletrica
                        </option>
                        <option value="hidraulica">
                            Direção hidraulica
                        </option>
                    </select>
                </div>
                <div>
                    <InputLabel for="ano" value="Ano" />
                    <input type="number" id="ano" v-model="form.ano" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required :max="new Date().getFullYear() + 1" min="1900" autocomplete="off" placeholder="2010">
                </div>
                <div>
                    <InputLabel for="valor_hora" value="Valor/hora" />
                    <input type="number" id="valor_hora" v-model="form.valor_hora" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required autocomplete="off" placeholder="Digite o valor cobrado por hora">
                </div>
                <div>
                    <InputLabel for="combustivel" value="Combustiveis" />
                    <div class="flex gap-4 items-center flex-wrap">
                        <div class="flex gap-2 items-center">
                            <label for="gasolina">Gasolina</label>
                            <input checked v-model="form.gasolina" type="checkbox" class="rounded" id="gasolina">
                        </div>
                        <div class="flex gap-2 items-center">
                            <label for="alcool">Álcool</label>
                            <input v-model="form.alcool" type="checkbox" class="rounded" id="alcool">
                        </div>
                        <div class="flex gap-2 items-center">
                            <label for="disel">Disel</label>
                            <input v-model="form.disel" type="checkbox" class="rounded" id="disel">
                        </div>
                        <div class="flex gap-2 items-center">
                            <label for="eletrico">Eletrico</label>
                            <input v-model="form.eletrico" type="checkbox" class="rounded" id="eletrico">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-2 full-grid">
                <CancelButton />
                <button class="p-2 rounded bg-blue-600 text-white" type="submit">
                    Enviar
                </button>
            </div>
        </form>


    </div>

</template>
<script>
export default {
    name: "EditCarro",
    props: ['targetCarro','allMarcas'],
    data() {
        return {
            form: {
                nome: this.$props.targetCarro.nome,
                motorizacao: this.$props.targetCarro.motorizacao,
                potencia: this.$props.targetCarro.potencia,
                cambio: this.$props.targetCarro.cambio,
                direcao: this.$props.targetCarro.direcao,
                ano: this.$props.targetCarro.ano,
                valor_hora: this.$props.targetCarro.valor_hora,
                marca: this.$props.targetCarro.marca,
                gasolina: this.$props.targetCarro.gasolina,
                alcool: this.$props.targetCarro.alcool,
                eletrico: this.$props.targetCarro.eletrico,
                disel: this.$props.targetCarro.disel,
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.put(route('carros.update', this.$props.targetCarro.id), this.form);
        }
    },
}
</script>
