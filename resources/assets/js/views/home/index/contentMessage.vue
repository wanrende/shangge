<template>
    <div class="content-wrapper-index">
        <el-row class="content-wrapper" :gutter="20">
            <el-col class="content-wrapper-el" :span="8" v-for="item in content_info" :key="item.id">
                <a href="" class="content-wrapper-a">
                    <img :src="item.content_img" alt="">
                    <div class="content-wrapper-text">
                        <h3>{{ item.content_header_line }}</h3>
                        <span>{{ item.content_text }}</span>
                    </div>
                </a>
            </el-col>
        </el-row>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                content_info: [
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                    {
                        content_img: '/img/pvc/75.jpg',
                        content_header_line: '这是一张图片',
                        content_text: '这是图片的描述，或者。。。。'
                    },
                ]
            }
        }
    }
</script>
<style lang="scss">
    .content-wrapper-index {
        background: #e5e5e5;
        .content-wrapper {
            padding: 70px 0;
            max-width: 1000px;
            margin: 0 auto!important;
            .content-wrapper-el {
                padding-bottom: 20px;
            }
            .content-wrapper-a {
                display: block;
                background: #fff;
                box-shadow: 4px 4px 4px rgba(195,195,195,0.75);
                img {
                    width: 100%;
                }
            }
            .content-wrapper-text {
                padding: 20px 15px;
                color: #333;
                text-align: center;
            }
        }
    }
</style>