<template>
    <div class="overflow-x-auto">
        <table class="max-w-7xl mx-auto mt-4 w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
            <tr class="bg-slate-900">
                <slot name="header"/>
            </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">

                <slot name="body"/>

            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: "Table"
}
</script>
