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

// Маска для телефона
$('.mask-phone').mask('+7 (999) 999-99-99');



// Слайдер блока отзывов
var galleryThumbs = new Swiper('.gallery-thumbs', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: '2',
	coverflowEffect: {
	  rotate: 50,
	  stretch: 0,
	  depth: 100,
	  modifier: 1,
	  slideShadows : true,
	},
	
	coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 50,
        modifier: 6,
        slideShadows : false,
	  },
	  
  });
  
  
var galleryTop = new Swiper('.swiper-container.testimonial', {
	speed: 400,
	spaceBetween: 50,
	autoplay: {
	  delay: 4000,
	  disableOnInteraction: false,
	},
	direction: 'vertical',
	pagination: {
	  clickable: true,
	  el: '.swiper-pagination',
	  type: 'bullets',
	},
	thumbs: {
		swiper: galleryThumbs
	  }
  });
  