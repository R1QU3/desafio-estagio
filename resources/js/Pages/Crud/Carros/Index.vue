<template>

    <AppLayoutVue>

        <template #header>
            <div class="flex justify-between items-center">
                <h2>
                    Carros
                </h2>
                <CreateButton/>
            </div>
        </template>

        <Table>
            <template #header>
                <th>
                    ID
                </th>
                <th>
                    Montadora
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Motorização
                </th>
                <th>
                    Potencia
                </th>
                <th>
                    Cambio
                </th>
                <th>
                    Direção
                </th>
                <th>
                    Ano
                </th>
                <th>
                    Valor/hora
                </th>
                <th>
                    Gasolina
                </th>
                <th>
                    Álcool
                </th>
                <th>
                    Eletrico
                </th>
                <th>
                    Disel
                </th>
                <th>
                    Ação
                </th>
            </template>

            <template #body>

                <tr v-for="item in tableCarros.data">

                    <td>
                        {{ item.id }}
                    </td>
                    <td>
                        {{ item.marca.nome }}
                    </td>
                     <td>
                        {{ item.nome }}
                    </td>
                    <td>
                        {{ item.motorizacao }}
                    </td>
                    <td>
                        {{ item.potencia }}
                    </td>
                    <td>
                        {{ item.cambio }}
                    </td>
                    <td>
                        {{ item.direcao }}
                    </td>
                    <td>
                        {{ item.ano }}
                    </td>
                    <td>
                        R$ {{ item.hora }}
                    </td>
                    <td>
                        <input type="checkbox" class="rounded" readonly :checked="item.gasolina" disabled>
                    </td>
                    <td>
                        <input type="checkbox" class="rounded" readonly :checked="item.alcool" disabled>
                    </td>
                    <td>
                        <input type="checkbox" class="rounded" readonly :checked="item.eletrico" disabled>
                    </td>
                    <td>
                        <input type="checkbox" class="rounded" readonly :checked="item.disel" disabled>
                    </td>

                    <ActionTable :targetId="item.id"/>


                </tr>

            </template>
        </Table>

    </AppLayoutVue>

</template>
<script>
import AppLayoutVue from '../../../Layouts/AppLayout.vue';
import ActionTable from '../../../Components/crud/ActionTable.vue';
import Table from '../../../Components/crud/Table.vue';
import CreateButton from '../../../Components/crud/CreateButton.vue';
import NegativeCircle from '../../../Components/icons/NegativeCircle.vue'
export default {
    name: "CarrosIndex",
    components: {
        AppLayoutVue,
        Table,
        ActionTable,
        CreateButton,
        NegativeCircle
    },
    props: ["tableCarros"]
}
</script>
<style>

</style>
