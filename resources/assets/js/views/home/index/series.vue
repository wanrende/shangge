<template>
    <div class="index_series">
        <div class="index_series-wrapper">
            <h3>探索科勒无限可能</h3>
            <div  style="height: 500px">
                <!-- swiper1 -->
                <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
                    <swiper-slide v-for="item in nextLoopImg" :key="item.id" :style="{ backgroundImage: 'url(' + item.imgPath + ')' }">
                        <el-row class="index_series_text" :gutter="20">
                            <el-col class="text_left" :span="18">
                                <h4 v-text="item.imgTitle"></h4>
                                <p v-text="item.imgText"></p>
                            </el-col>
                            <el-col class="text_right" :span="6">
                                <el-button size="large">默认按钮</el-button>
                            </el-col>
                        </el-row>
                    </swiper-slide>
                    <!--<div class="swiper-button-next swiper-button-white" slot="button-next"></div>-->
                    <!--<div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>-->
                </swiper>
                <!-- swiper2 Thumbs -->
                <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
                    <swiper-slide v-for="item in nextLoopImg" :key="item.id" :style="{ backgroundImage: 'url(' + item.imgPath + ')' }"></swiper-slide>
                    <div class="swiper-scrollbar"   slot="scrollbar"></div>
                </swiper>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
       data () {
           return {
               nextLoopImg: [
                   {
                       imgPath: './img/loop_pic/xia1.jpg',
                       imgTitle: 'ROSE GOLD®玫瑰金套间',
                       imgText: '时尚与永恒不再是对立面，从罗曼金、永恒金、法兰金到如今的玫瑰金，科勒像一个完美画匠游刃有余地运用金色，多一份则艳，少一份则凡，而我们演绎的金色传奇是别致独特、却又时尚前卫的。温润华丽的玫瑰金，为您的浴室空间营造一种低调而奢华的氛围， 尽显无上高贵之感。'

                   },
                   {
                       imgPath: './img/loop_pic/xia2.jpg',
                       imgTitle: 'ROSE GOLD®玫瑰金套间',
                       imgText: '时尚与永恒不再是对立面，从罗曼金、永恒金、法兰金到如今的玫瑰金，科勒像一个完美画匠游刃有余地运用金色，多一份则艳，少一份则凡，而我们演绎的金色传奇是别致独特、却又时尚前卫的。温润华丽的玫瑰金，为您的浴室空间营造一种低调而奢华的氛围， 尽显无上高贵之感。'

                   },
                   {
                       imgPath: './img/loop_pic/xia3.jpg',
                       imgTitle: 'ROSE GOLD®玫瑰金套间',
                       imgText: '时尚与永恒不再是对立面，从罗曼金、永恒金、法兰金到如今的玫瑰金，科勒像一个完美画匠游刃有余地运用金色，多一份则艳，少一份则凡，而我们演绎的金色传奇是别致独特、却又时尚前卫的。温润华丽的玫瑰金，为您的浴室空间营造一种低调而奢华的氛围， 尽显无上高贵之感。'

                   },
                   {
                       imgPath: './img/loop_pic/xia4.jpg',
                       imgTitle: 'ROSE GOLD®玫瑰金套间',
                       imgText: '时尚与永恒不再是对立面，从罗曼金、永恒金、法兰金到如今的玫瑰金，科勒像一个完美画匠游刃有余地运用金色，多一份则艳，少一份则凡，而我们演绎的金色传奇是别致独特、却又时尚前卫的。温润华丽的玫瑰金，为您的浴室空间营造一种低调而奢华的氛围， 尽显无上高贵之感。'

                   }
               ],
               swiperOptionTop: {
                   notNextTick: true,
//                   nextButton: '.swiper-button-next',
//                   prevButton: '.swiper-button-prev',
                   spaceBetween: 10,

               },
               swiperOptionThumbs: {
                   notNextTick: true,
                   spaceBetween: 10,
                   centeredSlides: true,
                   slidesPerView: 'auto',
                   touchRatio: 0.2,
                   slideToClickedSlide: true,
                   scrollbar:'.swiper-scrollbar'

               }

           }
       },
        mounted() {
            const swiperTop = this.$refs.swiperTop.swiper
            const swiperThumbs = this.$refs.swiperThumbs.swiper
            console.log(swiperTop.params);
//            swiperTop.params.control = swiperThumbs
            swiperThumbs.params.control = swiperTop
        }
    }
</script>
<style lang="scss">
    .swiper-container {
        background-color: #000;
    }
    .swiper-slide {
        background-size: cover;
        background-position: center;
    }
    .gallery-top {
        height: 80%!important;
        width: 100%;
    }
    .gallery-thumbs {
        height: 20%!important;
        box-sizing: border-box;
        padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
    }
    .index_series {
        background: #fff;
        padding: 70px 0;
        .index_series-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            h3 {
                padding: 0 0 40px;
                text-align: center;
                margin: 0;
            }
        }
    }
    .index_series_text {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: rgba(35,35,35,0.6);
        color: #fff;
        margin: 0!important;
        padding: 0 30px;
        width: 100%;
        .text_right {
            padding: 4%;
            text-align: center;
        }
    }
</style>