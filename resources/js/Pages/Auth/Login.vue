<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/HomePageLayout.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    username: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Layout>
        <Head title="Log in" />


        <div class="flex flex-col w-full">
            <div class="self-center w-1/3">
                <h1 class="mb-6">Anmelden</h1>

                <BreezeValidationErrors class="mb-4" />

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form class="w-full" @submit.prevent="submit">
                    <div>
                        <BreezeLabel for="username" value="Username" />
                        <BreezeInput id="username" type="text" class="mt-1 block w-full" v-model="form.username" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <BreezeLabel for="password" value="Password" />
                        <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                            Forgot your password?
                        </Link>

                        <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Log in
                        </BreezeButton>
                    </div>
                    </form>
                </div>
            </div>
    </Layout>
</template>
