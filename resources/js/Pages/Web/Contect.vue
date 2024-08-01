<template>
    <head title="home" />
    <section class="main-slider main-slider-one">
        <div
            class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'
        >
            <div class="swiper-wrapper">
                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div
                        class="image-layer"
                        style="
                            background-image: url(assets/images/backgrounds/main-slider-v1-1.jpg);
                        "
                    ></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline"
                                            >We’re producing natural goods</span
                                        >
                                        <h2 class="main-slider__title">
                                            Welcome to <br />
                                            Agriculture
                                            <span
                                                ><span class="leaf"
                                                    ><img
                                                        :src="`${publicPath}assets/images/resources/leaf.png`"
                                                        alt="" /></span
                                                >Farm</span
                                            >
                                        </h2>
                                        <p class="main-slider__text">
                                            There are many of passages of lorem
                                            Ipsum, but the majori have<br />
                                            suffered alteration in some form.
                                        </p>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon">
                                            <img
                                                :src="`${publicPath}assets/images/icon/main-slider__button-arrow.png`"
                                                alt=""
                                            />
                                        </div>
                                        <a href="#" class="thm-btn"
                                            >Discover more</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div
                        class="image-layer"
                        style="
                            background-image: url(assets/images/backgrounds/main-slider-v1-2.jpg);
                        "
                    ></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline"
                                            >We’re producing natural goods</span
                                        >
                                        <h2 class="main-slider__title">
                                            Welcome to <br />
                                            Agriculture
                                            <span
                                                ><span class="leaf"
                                                    ><img
                                                        :src="`${publicPath}assets/images/resources/leaf.png`"
                                                        alt="" /></span
                                                >Farm</span
                                            >
                                        </h2>
                                        <p class="main-slider__text">
                                            There are many of passages of lorem
                                            Ipsum, but the majori have<br />
                                            suffered alteration in some form.
                                        </p>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon">
                                            <img
                                                :src="`${publicPath}assets/images/icon/main-slider__button-arrow.png`"
                                                alt=""
                                            />
                                        </div>
                                        <a href="#" class="thm-btn"
                                            >Discover more</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div
                        class="image-layer"
                        style="
                            background-image: url(assets/images/backgrounds/main-slider-v1-3.jpg);
                        "
                    ></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline"
                                            >We’re producing natural goods</span
                                        >
                                        <h2 class="main-slider__title">
                                            Welcome to <br />
                                            Agriculture
                                            <span
                                                ><span class="leaf"
                                                    ><img
                                                        :src="`${publicPath}assets/images/resources/leaf.png`"
                                                        alt="" /></span
                                                >Farm</span
                                            >
                                        </h2>
                                        <p class="main-slider__text">
                                            There are many of passages of lorem
                                            Ipsum, but the majori have<br />
                                            suffered alteration in some form.
                                        </p>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon">
                                            <img
                                                :src="`${publicPath}assets/images/icon/main-slider__button-arrow.png`"
                                                alt=""
                                            />
                                        </div>
                                        <a href="#" class="thm-btn"
                                            >Discover more</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div
                    class="swiper-button-prev"
                    id="main-slider__swiper-button-next"
                >
                    <span class="icon-right-arrow-2"></span>
                </div>
                <div
                    class="swiper-button-next"
                    id="main-slider__swiper-button-prev"
                >
                    <span class="icon-right-arrow-2"></span>
                </div>
            </div>
        </div>
    </section>

    <section class="services-one">
        <div
            class="services-one__bg wow slideInDown"
            data-wow-delay="100ms"
            data-wow-duration="2500ms"
        ></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img
                        :src="`${publicPath}assets/images/resources/sec-title-icon1.png`"
                        alt=""
                    />
                </div>
                <span class="sec-title__tagline">What we’re doing</span>
                <h2 class="sec-title__title">Services We Offer</h2>
            </div>
            <div class="row">
                <!--Start Single Services One-->
                <div
                    class="col-xl-3 col-lg-6 wow fadeInLeft"
                    data-wow-delay="0ms"
                    data-wow-duration="1000ms"
                >
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img
                                    :src="`${publicPath}assets/images/services/services-v1-img1.jpg`"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <h3>
                                <a href="services-details.html"
                                    >Agriculture<br />
                                    Products</a
                                >
                            </h3>
                            <p>
                                Lorem ium dolor sit ametad pisicing elit sed
                                simply do ut.
                            </p>
                            <a
                                href="services-details.html"
                                class="read-more-btn"
                                ><span class="icon-right-arrow-2"></span
                            ></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div
                    class="col-xl-3 col-lg-6 wow fadeInLeft"
                    data-wow-delay="100ms"
                    data-wow-duration="1000ms"
                >
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img
                                    :src="`${publicPath}assets/images/services/services-v1-img2.jpg`"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <h3>
                                <a href="services-details.html"
                                    >Fresh <br />Vegetables</a
                                >
                            </h3>
                            <p>
                                Lorem ium dolor sit ametad pisicing elit sed
                                simply do ut.
                            </p>
                            <a
                                href="services-details.html"
                                class="read-more-btn"
                                ><span class="icon-right-arrow-2"></span
                            ></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div
                    class="col-xl-3 col-lg-6 wow fadeInRight"
                    data-wow-delay="0ms"
                    data-wow-duration="1000ms"
                >
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img
                                    :src="`${publicPath}assets/images/services/services-v1-img3.jpg`"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3>
                                <a href="services-details.html"
                                    >Oragnic <br />Products</a
                                >
                            </h3>
                            <p>
                                Lorem ium dolor sit ametad pisicing elit sed
                                simply do ut.
                            </p>
                            <a
                                href="services-details.html"
                                class="read-more-btn"
                                ><span class="icon-right-arrow-2"></span
                            ></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div
                    class="col-xl-3 col-lg-6 wow fadeInRight"
                    data-wow-delay="100ms"
                    data-wow-duration="1000ms"
                >
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img
                                    :src="`${publicPath}assets/images/services/services-v1-img4.jpg`"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-dairy-products"></span>
                            </div>
                            <h3>
                                <a href="services-details.html"
                                    >Dairy<br />
                                    Products</a
                                >
                            </h3>
                            <p>
                                Lorem ium dolor sit ametad pisicing elit sed
                                simply do ut.
                            </p>
                            <a
                                href="services-details.html"
                                class="read-more-btn"
                                ><span class="icon-right-arrow-2"></span
                            ></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->
            </div>
        </div>
    </section>
    <!-- /.features-four -->
</template>

<script>
import HomeLay from "@/Layouts/HomeLay.vue";

export default {
    layout: HomeLay,
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>

<style scoped>
/* Add your styles here */
</style>
