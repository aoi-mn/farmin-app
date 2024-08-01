<template>
    <head title="home" />
    <section
        class="page-header clearfix"
        style="
            background-image: url(assets/images/backgrounds/page-header-bg.jpg);
        "
    >
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/home">Home</a></li>
                    <li>About</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </section>

    <section class="about-three">
        <div class="about-three__shape"></div>
        <!-- /.about-three__shape -->
        <div class="container">
            <div class="row">
                <!--Start About Three Content Box-->
                <div class="col-xl-6 col-lg-7">
                    <div class="about-three__content-box">
                        <div class="sec-title">
                            <div class="icon">
                                <img
                                    :src="`${publicPath}assets/images/resources/sec-title-icon1.png`"
                                    alt=""
                                />
                            </div>
                            <span class="sec-title__tagline"
                                >get to know about us</span
                            >
                            <h2 class="sec-title__title">
                                We Sell High-Quality <br />Organic Products
                            </h2>
                        </div>
                        <div class="about-three__content-box-inner">
                            <h2>We’re Leader in Agriculture Market</h2>
                            <p>
                                There are many variations of passages of
                                available but the majority have suffered
                                alteration in some form.
                            </p>

                            <div class="about-three__products-list">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span
                                                class="icon-investment"
                                            ></span>
                                        </div>
                                        <h3>
                                            <a href="#">Natural Products</a>
                                        </h3>
                                        <p>
                                            Duis aute irure dolor simply free in
                                            voluptate velit.
                                        </p>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-harvest"></span>
                                        </div>
                                        <h3><a href="#">Healthy Food</a></h3>
                                        <p>
                                            Duis aute irure dolor simply free in
                                            voluptate velit.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-three__content-box-btn">
                            <a href="#" class="thm-btn">Discover more</a>
                        </div>
                        <div class="about-three__arrow float-bob-y"></div>
                        <!-- /.about-three__arrow -->
                    </div>
                </div>
                <!--End About Three Content Box-->

                <!--Start About Three Img Box-->
                <div class="col-xl-6 col-lg-5">
                    <div class="about-three__img-box">
                        <img
                            :src="`${publicPath}assets/images/resources/about-3-icon-1-1.png`"
                            class="about-three__img-icon"
                            alt=""
                        />
                        <div class="about-three__img-box-img">
                            <div class="about-three__img-box-img-inner">
                                <img
                                    :src="`${publicPath}assets/images/about/about-v3-img1.jpg`"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About Three Img Box-->
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
