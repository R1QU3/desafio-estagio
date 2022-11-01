<script setup>
import ReturnButton from '../../../Components/crud/ReturnButton.vue';
</script>
<template>

    <div class="main-container">
        <ReturnButton/>
        <div class="divide-y divide-slate-300">
            <div>
                <h2 class="text-2xl my-4">
                    Detalhes
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                <span>
                    ID
                </span>
                <span>
                    {{ targetMarca.id }}
                </span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                <span>
                    Nome
                </span>
                <span>
                    {{ targetMarca.nome }}
                </span>
            </div>
        </div>
    </div>

</template>
<script>
export default {
    name: "ShowMarcas",
    props: ["errors","targetMarca"],
}
</script>
