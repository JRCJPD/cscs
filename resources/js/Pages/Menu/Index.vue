<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const showModal = ref(false);

function openModal() {
    if (showModal.value) {
        showModal.value = false;
    } else {
        showModal.value = true;
    }
    console.log(showModal.value);
}
const handleOk = (e) => {
    console.log("working");
    showModal.value = false;
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Menu
            </h2>
        </template>

        <div class="py-5 flex">
            <h4 style="margin-left: 20px" class="text-xl">Menu</h4>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-10 flex flex-wrap">
                    <!--Card 1-->
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                    <div
                        class="max-w-sm rounded shadow-lg mb-2"
                        style="padding-bottom: 10px !important; width: 350px"
                    >
                        <img
                            style="
                                width: 180px;
                                height: 120px;
                                margin-left: auto;
                                margin-right: auto;
                            "
                            src="https://handletheheat.com/wp-content/uploads/2015/03/Best-Birthday-Cake-with-milk-chocolate-buttercream-SQUARE.jpg"
                            alt="Cake"
                        />
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cake</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatibus quia, Nonea!
                                Maiores et perferendis eaque, exercitationem
                                praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >P120.00</span
                            >
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Stock:10</span
                            >
                            <span
                                class="inline-block rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                ><a-button type="primary">Buy</a-button></span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
