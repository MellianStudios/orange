<template>
    <div class="dark:bg-gray-800">
        <div class="grid justify-items-stretch">
            <h1 class="mb-4 font-bold text-3xl dark:text-white justify-self-center mt-2">Station program</h1>
            <div class="w-11/12 bg-white justify-self-center dark:bg-gray-700 rounded-md shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap dark:text-white">
                    <tr class="h-12 text-left font-bold">
                        <th class="px-2 py-1.5 text-center">Name</th>
                        <th class="px-2 py-1.5 text-center">Genre</th>
                        <th class="px-2 py-1.5 text-center">Time</th>
                    </tr>
                    <tr v-for="item in schedule" class="h-14 dark:hover:bg-gray-500 hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t text-center">
                            <span class="px-2 py-1.5">
                                {{ item.name }}
                            </span>
                        </td>
                        <td class="border-t text-center">
                            <span class="px-2 py-1.5">
                                {{ item.genre }}
                            </span>
                        </td>
                        <td class="border-t text-center">
                            <span class="px-2 py-1.5">
                                {{ item.start + ' - ' + item.end }}
                            </span>
                        </td>
                    </tr>
                    <tr v-if="schedule.length === 0">
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
        schedule: Object,
    }
}
</script>
