<script setup lang="ts">
    import AppLayout from '@/layouts/AppLayout.vue';
    import { journal} from '@/routes';
    import { type BreadcrumbItem } from '@/types';
    import { Head, Link } from '@inertiajs/vue3';
    import PlaceholderPattern from '../../components/PlaceholderPattern.vue';

    const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Journal',
            href: journal().url,
        },
    ];


    defineProps([
        'folders'
    ]);
</script>

<template>
    <Head title="Journal" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border p-2"
                >
                    <ul>
                        <li v-for="folder in folders" :id="folder.id">
                            <Link @click.prevent="curFolder = folder">{{ folder.name }}</Link>
                        </li>
                    </ul>
                    <PlaceholderPattern />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
            >
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
