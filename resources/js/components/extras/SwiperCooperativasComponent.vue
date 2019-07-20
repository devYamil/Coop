<template>
    <swiper :options="swiperOption" ref="mySwiper" @someSwiperEvent="callback">
        <!-- slides -->
        <swiper-slide>
            <div class="special_description_area custom-swiper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="special_description_img">
                                <img :src="'image_default/FECOTEL_ORIGIN.png'" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 ml-xl-auto">
                            <div class="special_description_content">
                                <h2>FECOTEL</h2>
                                <p>METER AQUI LOS TRABAJOS QUE SE REALIZARON ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                Yamil       <div class="app-download-area">
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="/federaciones/5">
                                        <i class="fa fa-user"></i>
                                        <p class="mb-0"><span>FECOTEL</span> Ir a la Pagina-></p>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="special_description_area custom-swiper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="special_description_img">
                                <img :src="'image_default/FENCOPAS_LOGO.png'" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 ml-xl-auto">
                            <div class="special_description_content">
                                <h2>FENCOPAS</h2>
                                <p>METER AQUI LOS TRABAJOS QUE SE REALIZARON ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                Yamil       <div class="app-download-area">
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="/federaciones/9">
                                        <i class="fa fa-user"></i>
                                        <p class="mb-0"><span>FENCOPAS</span> Ir a la Pagina-></p>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <!-- Optional controls -->
        <div class="swiper-pagination"  slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
        <div class="swiper-scrollbar"   slot="scrollbar"></div>
    </swiper>
</template>

<script>
    import 'swiper/dist/css/swiper.css'

    import { swiper, swiperSlide } from 'vue-awesome-swiper'
    export default {
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                swiperOption: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                },
                swiperSlides: [1, 2, 3, 4, 5]
            }
        },
        computed: {
            swiper() {
                return this.$refs.mySwiper.swiper
            }
        },
        mounted() {
            console.log('this is current swiper instance object', this.swiper)
            this.swiper.slideTo(3, 1000, false)
        },
        methods :{
            callback: function () {

            }
        }
    }
</script>

<style scoped>
    .custom-swiper{
        background-color: #fff;
        border-radius: 20px;
        padding: 35px;
        height: 609px !important;
    }

</style>