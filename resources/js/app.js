import './bootstrap';
// import { createApp } from "vue";
import { createApp } from "vue/dist/vue.esm-bundler";

import TestComp from "./TestComp.vue"



const app = createApp({
    components:{
        TestComp
    }
})


app.mount('#app')

$('.mask-phone').mask('+7 (999) 999-99-99');
