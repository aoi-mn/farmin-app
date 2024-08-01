<template>
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
                    <li>News</li>
                </ul>
                <h2>Blog</h2>
            </div>
        </div>
    </section>

    <section class="news-sidebar">
        <div class="container">
            <div class="row">
                <!--Start News Sidebar Left-->
                <div class="col-xl-8 col-lg-7">
                    <div class="news-sidebar__left">
                        <!--Start Single Blog One-->
                        <div class="blog-one__single" v-for="(blogItem, index) in blog" :key="index">

                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li>
                                        <a href="#"><i class="fa fa-clock"></i>{{ blogItem.date }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>{{ blogItem.name }}</a>
                                    </li>
                                </ul>
                                <h2>
                                    <a href="#">{{ blogItem.heading }}</a>
                                </h2>
                                <p>{{ blogItem.cont }}</p>
                            </div>
                        </div>
                        <!--End Single Blog One-->
                    </div>
                </div>
                <!--End News Sidebar Left-->

                <!--Start News Sidebar Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__categories wow fadeInUp animated animated animated"
                            data-wow-delay="0.3s" data-wow-duration="1200ms">
                            <div class="title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="sidebar__categories-list">
                                <li><a href="#">Agriculture<span class="icon-right-arrow-angle"></span></a></li>
                                <li><a href="#" class="active">Dairy Farm<span class="icon-right-arrow-angle"></span></a></li>
                                <li><a href="#">Economy Solution<span class="icon-right-arrow-angle"></span></a></li>
                                <li><a href="#">Harvests Innovations<span class="icon-right-arrow-angle"></span></a></li>
                                <li><a href="#">Organic Food<span class="icon-right-arrow-angle"></span></a></li>
                                <li><a href="#">Fresh Vegetables<span class="icon-right-arrow-angle"></span></a></li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__tag wow fadeInUp animated animated animated"
                            data-wow-delay="0.4s" data-wow-duration="1200ms">
                            <div class="title">
                                <h2>Tags</h2>
                            </div>
                            <ul class="sidebar__tag-list">
                                <li><a href="#">Agriculture</a></li>
                                <li><a href="#">Dairy</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Organic</a></li>
                                <li><a href="#">Egg</a></li>
                                <li><a href="#">Harvests</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End News Sidebar Sidebar-->
            </div>
        </div>
    </section>
</template>

<script setup>
import HomeLay from "@/Layouts/HomeLay.vue";
import { ref } from 'vue';

const props = defineProps({
    blog: Array,
});

const publicPath = import.meta.env.VITE_APP_URL || "/";
</script>
