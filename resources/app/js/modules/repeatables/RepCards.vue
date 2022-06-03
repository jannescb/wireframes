<template>
    <div class="bg-primary-200 py-16">
        <div class="container">
            <h2 v-if="rep.headline">
                {{ rep.headline }}
            </h2>
            <div class="grid grid-cols-12 gap-5">
                <div
                    v-for="item in rep.items"
                    class="bg-white p-8 rounded col-span-12 sm:col-span-6 md:col-span-4"
                >
                    <div class="-mx-8 -mt-8 mb-8" v-if="item.image.url">
                        <Image :src="item.image.url" />
                    </div>

                    <h3>
                        {{ item.title }}
                    </h3>
                    <p>
                        {{ item.text }}
                    </p>
                    <div v-if="item.link.link" class="pt-4">
                        <Button :href="item.link.link">
                            <template v-if="item.link.text">
                                {{ item.link.text }}
                            </template>
                            <template v-else> Weiter </template>
                        </Button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
import Image from '@app/components/Ui/Image.vue';
import Button from '@app/components/Ui/Button.vue';

const props = defineProps({
    rep: {
        type: Object,
        required: true,
    },
});
</script>
