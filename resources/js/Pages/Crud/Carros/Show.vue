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
                        {{ targetCarro.id }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Nome
                    </span>
                    <span>
                        {{ targetCarro.nome }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Marca
                    </span>
                    <span>
                        {{ targetCarro.carro_marca.nome }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Motorização
                    </span>
                    <span>
                        {{ targetCarro.motorizacao }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Potencia
                    </span>
                    <span>
                        {{ targetCarro.potencia }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Cambio
                    </span>
                    <span>
                        {{ targetCarro.cambio }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Direção
                    </span>
                    <span>
                        {{ targetCarro.direcao }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Ano
                    </span>
                    <span>
                        {{ targetCarro.ano }}
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Valor/hora
                    </span>
                    <span>
                        R$ {{ targetCarro.valor_hora }}
                    </span>
                </div>
            </div>

            <div class="divide-y divide-slate-300">
                <div>
                    <h2 class="text-2xl my-4">
                        Combustiveis
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Gasolina
                    </span>
                    <span>
                        <input type="checkbox" class="rounded" disabled :checked="targetCarro.gasolina">
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Álcool
                    </span>
                    <span>
                        <input type="checkbox" class="rounded" disabled :checked="targetCarro.alcool">
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Disel
                    </span>
                    <span>
                        <input type="checkbox" class="rounded" disabled :checked="targetCarro.disel">
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 hover:bg-slate-100">
                    <span>
                        Eletrico
                    </span>
                    <span>
                        <input type="checkbox" class="rounded" disabled :checked="targetCarro.eletrico">
                    </span>
                </div>
            </div>
    </div>

</template>
<script>
export default {
    name: "ShowCarros",
    props: ["targetCarro"],
}
</script>
