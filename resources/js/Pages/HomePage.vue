<template>
    <Head title="Startseite"/>

    <Layout>
        <div class="my-10 flex flex-col space-y-16 items-center">

            <div class="flex flex-row space-x-8">
                <div class="min-w-[300px] w-72 h-48 bg-gray-100"></div>
                <div class="max-w-5xl">
                    <h1>Meine Forums Testseite</h1>
                    <p>Das ist ein Projekt, welches ich in meinem Betrieb am Programmieren bin. Das sollte ein Forum
                        sein, mit dem man Fragen an eine Gruppe an Leuten fragen kann. Auf diese Fragen sollte man
                        danach antworten können. Hier kombiniere ich die Frameworks
                        <a href="https://laravel.com/" target="_blank">Laravel</a>,
                        <a href="https://laravel.com/docs/9.x/starter-kits#laravel-breeze" target="_blank">
                            Laravel Breeze</a>,
                        <a href="https://inertiajs.com/" target="_blank">InertiaJs</a>,
                        <a href="https://vuejs.org/" target="_blank">VueJs</a> und
                        <a href="https://tailwindcss.com/" target="_blank">TailwindCss</a>.
                    </p>
                </div>
            </div>


            <div class="flex flex-row space-x-8">
                <div class="max-w-5xl text-right">
                    <h1>Wiso ein Forum</h1>
                    <p>Ich habe dieses Forum angefangen, weil ich wissen wollte, wie weit ich kommen würde.
                        Ich wollte wissen, wie viel ich schon mit den verschiedenen Frameworks arbeiten kann. Es sollte
                        auch eine kleine Herausforderung sein. Ebenfalls sollte ich lernen, wie man mit Tools wie
                        GitHub produktiv arbeitet.</p>
                </div>
                <div class="min-w-[300px] w-72 h-48 bg-gradient-to-r from-gray-300 to-gray-100"></div>
            </div>


            <div class="flex flex-row space-x-8">
                <div class="min-w-[300px] w-72 h-48 bg-gray-100"></div>
                <div class="max-w-5xl">
                    <h1>Quellen und weitere Links</h1>
                    <p>Damit dieses Projekt möglich ist, brauchte ich mehrere Informationsquellen. Diese werde ich
                        hier auflisten. (Die wichtigste Dokumentation sind oben schon vermerkt)</p>
                    <a href="https://vueschool.io/" target="_blank">Vue School Lernplattform</a><br>
                    <a href="https://laracasts.com/" target="_blank">Laracasts Lernplattform</a><br>
                    <a href="https://larainfo.com/blogs/how-to-install-inertia-js-in-laravel-8-with-vue-3"
                       target="_blank">Projekts Installationsguide (Ohne Laravel Breeze)</a><br>
                    <a href="https://coolors.co/f0f0f0-161616-3d7068-4a8fe7-1098f7"
                       target="_blank">Color Generator für Website</a><br>
                    <a href="https://fakerphp.github.io/" target="_blank">DB Fake Data Generator</a>

                </div>
            </div>

            <div class="text-center">
                <h1>Viele Möglichkeiten</h1>
                <p class="mt-4 mb-6">Weiter unten sehen Sie Fragen welche auf unserer Website gestellt wurden.</p>
                <vue-writer
                    :array="TyperQuestions"
                    :typeSpeed="40"
                    :eraseSpeed="40"
                    :delay="2000"
                />
            </div>

        </div>

    </Layout>
</template>

<script>
import Layout from '@/Layouts/HomePageLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';

export default {
    name: 'HomePage',
    components: {
        Layout, Head,
    },
    props: {
        questions: Array,
        testing: Array,
    },
    computed: {
        TyperQuestions() {
            return this.questions.map(item => item.title);
        }
    }
}
</script>

<style>
.is-typed span.cursor {
    display: inline-block;
    width: 1px;
    background-color: black;
    animation: blink 1s infinite;
}

.is-typed span.underscore {
    display: inline-flex;
    width: 10px;
    height: 1px;
    align-items: flex-end;
    background-color: black;
    animation: blink 1s infinite;
}

.is-typed span.cursor.typing {
    animation: none;
}

@keyframes blink {
    49% {
        background-color: black;
    }
    50% {
        background-color: transparent;
    }
    99% {
        background-color: transparent;
    }
}
</style>
