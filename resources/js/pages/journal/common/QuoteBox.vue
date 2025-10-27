<script setup lang="ts">

</script>

<template>
    <div
        class="relative overflow-hidden col-span-2 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
    >
        <div class="text-gray-50 px-4 py-2 mb-2 gap-4">
            <div class="flex flex-col gap-4 place-items-center">
                <div class="text-left text-2xl">
                    &quot;{{ $page.props.quote.message }}&quot;
                </div>
                <small class="text-blue-400 text-right text-lg">- {{ $page.props.quote.author }}</small>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
