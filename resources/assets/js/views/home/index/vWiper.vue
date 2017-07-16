<template>
    <swiper :options="swiperOption" class="swiper-box">
        <swiper-slide class="swiper-item" v-for="item in autoPic" :key="item.id">
            <img :src="item.message" alt="">
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
        <!--<div class="swiper-scrollbar"   slot="scrollbar"></div>-->
    </swiper>
</template>
<script>
    export default {
        data() {
            return {
                swiperOption: {
                    pagination: '.swiper-pagination',
                    slidesPerView: 1,
                    paginationClickable: true,
                    spaceBetween: 30,
                    autoplay: 3000,
                    loop: true,
                    prevButton:'.swiper-button-prev',
                    nextButton:'.swiper-button-next',
//                    scrollbar:'.swiper-scrollbar',
                    effect: 'fade'
                },
                autoPic: [
                    {message: '/img/loop_pic/pc_KV.jpg'},
                    {message: '/img/loop_pic/3KV-Pc.jpg'},
                    {message: '/img/loop_pic/4.jpg'},
                    {message: '/img/loop_pic/banner5.jpg'},
                    {message: '/img/loop_pic/hero_pc13.jpg'},
                    {message: '/img/loop_pic/opc.jpg'}
                ]
            }
        }
    }
</script>
<style lang="scss">

    .swiper-box {
        width: 100%;
        height: 649px;
        margin: 0 auto;
    }
    .swiper-item {
        width: 100%;
        text-align: center;
        font-size: 18px ;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        img {
            width: 100%;
            height: 100%;
        }
    }
    .swiper-pagination-bullet-active {
        width: 15px;
        height: 15px;
        vertical-align: -3px;
    }
    .swiper-button-prev, .swiper-button-next {
        background-size: 10px 25px;
        width: 30px;
        height: 30px;
        background-color: rgba(255, 255, 255, .6);
        border-radius: 50%;
    }
    .swiper-button-prev {
        left: 90px;
    }
    .swiper-button-next {
        right: 90px;
    }
</style>