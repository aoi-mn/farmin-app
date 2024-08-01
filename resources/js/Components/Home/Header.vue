<template>
    <header
        class="main-header main-header--one main-header--one--two main-header-three clearfix"
    >
        <div class="main-header--one__wrapper">
            <div class="main-header-three__upper">
                <div class="container">
                    <div class="main-header-three__upper__contact">
                        <div class="icon">
                            <span class="icon-phone-call-2"></span>
                        </div>
                        <div class="text">
                            <p>Call Anytime</p>
                            <a href="tel:123456789">+75 757 57 55</a>
                        </div>
                    </div>
                    <!-- /.main-header-three__upper__contact -->
                    <div class="logo">
                        <a href="#">
                            <img
                                :src="`${publicPath}assets/images/resources/logo-1.png`"
                                class="dark-logo"
                                alt=""
                            />
                            <img
                                :src="`${publicPath}assets/images/resources/logo-2.png`"
                                alt=""
                                class="light-logo"
                            />
                        </a>
                        <a href="#" class="mobile-nav__toggler"
                            ><i class="fa fa-bars"></i
                        ></a>
                    </div>
                    <div class="main-header-three__upper__contact">
                        <div class="icon">
                            <span class="icon-message"></span>
                        </div>
                        <div class="text">
                            <p>Write Email</p>
                            <a href="mailto:info@company.com"
                                >aoiweb@outlook.com</a
                            >
                        </div>
                    </div>
                    <!-- /.main-header-three__upper__contact -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.main-header-three__upper -->
            <div class="main-header--one__bottom clearfix">
                <div class="container">
                    <div class="main-header--one__bottom-inner">
                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <div class="main-header-three__social"></div>
                                <!-- /.main-header-three__social -->

                                <div class="main-header--one__bottom-left">
                                    <ul class="main-menu__list">
                                        <li>
                                            <a :href="route('home')" name="Home"
                                                >Home</a
                                            >
                                        </li>
                                        <li>
                                            <Link :href="route('about')" name="About"
                                                >About</Link
                                            >
                                        </li>
                                        <li>
                                            <Link :href="route('blog')" name="Blog"
                                                >Blog</Link
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div
                                    class="main-header--one__bottom-right clearfix"
                                ></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>
import Link from "@/Components/Home/Link.vue";
</script>

<script>
export default {
    name: "Header",
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>
