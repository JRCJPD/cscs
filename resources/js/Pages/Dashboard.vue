<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table
                            class="border-collapse table-auto w-full text-sm"
                        >
                            <thead>
                                <tr>
                                    <th
                                        class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left"
                                    >
                                        Item
                                    </th>
                                    <th
                                        class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left"
                                    >
                                        Price
                                    </th>
                                    <th
                                        class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left"
                                    >
                                        Stock
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-slate-800">
                                <tr>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"
                                    >
                                        Strawberry Cake
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
                                    >
                                        320.00
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"
                                    >
                                        5
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"
                                    >
                                        Pineapple juice
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
                                    >
                                        35.00
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"
                                    >
                                        20
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400"
                                    >
                                        Red ribbon
                                    </td>
                                    <td
                                        class="border-b border-slate-200 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400"
                                    >
                                        620.00
                                    </td>
                                    <td
                                        class="border-b border-slate-200 dark:border-slate-600 p-4 pr-8 text-slate-500 dark:text-slate-400"
                                    >
                                        3
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
