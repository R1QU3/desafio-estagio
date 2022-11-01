<template>

    <AppLayoutVue>

        <template #header>
            <div class="flex justify-between items-center">
                <h2>
                    Marcas
                </h2>
                <CreateButton/>
            </div>
        </template>

        <Table>
            <template #header>

                <th>
                    id
                </th>
                <th>
                    nome
                </th>
                <th>
                    ação
                </th>

            </template>

            <template #body>

                <tr v-for="item in tableMarcas.data" :key="item.id">

                    <td>
                        {{ item.id }}
                    </td>

                    <td>
                        {{ item.nome }}
                    </td>

                    <ActionTable :targetId="item.id"/>

                </tr>

            </template>
        </Table>

        <Pagination :links="tableMarcas.links"/>

    </AppLayoutVue>

</template>
<script>
import AppLayoutVue from '../../../Layouts/AppLayout.vue';
import Table from '../../../Components/crud/Table.vue';
import Pagination from '../../../Components/crud/Pagination.vue';
import ActionTable from '../../../Components/crud/ActionTable.vue';
import CreateButton from '../../../Components/crud/CreateButton.vue';
export default {
    name: "CarrosIndex",
    components: {
    AppLayoutVue,
    Table,
    Pagination,
    ActionTable,
    CreateButton
},
    props: ["tableMarcas"]
}
</script>
