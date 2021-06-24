<template>
    <div class="h-screen dark:bg-gray-800">
        <div class="grid justify-items-stretch">
            <h1 class="mb-4 font-bold text-3xl dark:text-white justify-self-center mt-2">Stations</h1>
            <div class="w-11/12 bg-white justify-self-center dark:bg-gray-700 rounded-md shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap dark:text-white">
                    <tr class="h-12 text-left font-bold">
                        <th class="px-2 py-1.5 text-center">Name</th>
                    </tr>
                    <tr v-for="station in stations" class="h-14 dark:hover:bg-gray-500 hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t text-center">
                            <inertia-link class="px-2 py-1.5" :href="route('stations.show', station.id)">
                                <span class="px-2 py-1.5">
                                    {{ station.name }}
                                </span>
                            </inertia-link>
                        </td>
                    </tr>
                    <tr v-if="stations.length === 0">
                        <td class="border-t px-6 py-4" colspan="4">No records found.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        stations: Object,
    }
}
</script>
