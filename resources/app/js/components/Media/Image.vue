<template>
    <div class="w-full h-full">
        <img
            v-if="image?.original_url"
            class="object-cover w-full h-full"
            :src="image?.original_url"
            :alt="image?.alt"
            :title="image?.title"
        />
        <div
            v-else
            class="flex flex-col items-center justify-center w-full h-full min-h-[300px] border-2 border-gray"
        >
            <svg
                width="24"
                height="24"
                stroke-width="1.5"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M21 3.6v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V3.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6Z"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="m3 16 7-3 11 5M16 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </div>
    </div>
</template>

<script lang="ts" setup>
import { PropType } from 'vue';
import { ImageInterface } from './';

const props = defineProps({
    image: {
        type: Object as PropType<ImageInterface>,
    },
});
</script>
