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

    <section class="news-details">
        <div class="container">
            <div class="row">
                <!--Start News Details Laft-->
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <!--Start Single Blog One-->
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img
                                    :src="`${publicPath}assets/images/blog/blog-v2-img1.jpg`"
                                    alt=""
                                />
                            </div>

                            <div class="blog-one__single-content blog-details">
                                <ul class="meta-info">
                                    <li>
                                        <a href="#"
                                            ><i class="far fa-clock"></i>30
                                            July, 2021</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="far fa-user-circle"></i
                                            >Jessica</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="far fa-comments"></i>2
                                            Comments</a
                                        >
                                    </li>
                                </ul>
                                <h2>
                                    Why Eco and Walking or Agriculture for the
                                    Environment?
                                </h2>
                                <p>
                                    There are many variations of passages of
                                    Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by
                                    injected humour, or randomised words which
                                    don't look even slightly believable. If you
                                    are going to use a passage. Lorem ipsum
                                    dolor sit amet, cibo mundi ea duo, vim
                                    exerci phaedrum. There are many variations
                                    of passages of Lorem Ipsum available, but
                                    the majority have alteration in some
                                    injected or words which don't look even
                                    slightly believable. If you are going to use
                                    a passage of Lorem Ipsum, you need to be
                                    sure there isn't anything embarrang hidden
                                    in the middle of text. All the Lorem Ipsum
                                    generators on the Internet tend to repeat
                                    predefined chunks as necessary, making this
                                    the first true generator on the Internet. It
                                    uses a dictionary of over 200 Latin words,
                                    combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum which
                                    looks reasonable.
                                </p>
                            </div>
                        </div>
                        <!--End Single Blog One-->

                        <p class="news-details__left-text1">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a
                            type simen book. It has survived not only five
                            centuries, but also the leap into electronic
                            typesetting.
                        </p>
                        <p class="news-details__left-text2">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. orem Ipsum has been the
                            industry's standard dummy text ever since the when
                            an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                <!--End News Sidebar Laft-->

                <!--Start News Sidebar Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div
                            class="sidebar__single sidebar__search wow fadeInUp animated animated animated"
                            data-wow-delay="0.1s"
                            data-wow-duration="1200m"
                        >
                            <form action="#" class="sidebar__search-form">
                                <input
                                    type="search"
                                    placeholder="Search here"
                                />
                                <button type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </form>
                        </div>

                        <div
                            class="sidebar__single sidebar__latest-posts wow fadeInUp animated animated animated"
                            data-wow-delay="0.2s"
                            data-wow-duration="1200m"
                        >
                            <div class="title">
                                <h2>Latest Posts</h2>
                            </div>
                            <ul class="sidebar__latest-posts-list">
                                <li class="sidebar__latest-posts-list-item">
                                    <div class="img-box">
                                        <img
                                            :src="`${publicPath}assets/images/resources/sidebar-latest-posts-img1.jpg`"
                                            alt=""
                                        />
                                    </div>
                                    <div class="title">
                                        <p>
                                            <i class="far fa-comments"></i>2
                                            Comments
                                        </p>
                                        <h4>
                                            <a href="#"
                                                >Agriculture Miracle <br />you
                                                Dont Know About</a
                                            >
                                        </h4>
                                    </div>
                                </li>

                                <li class="sidebar__latest-posts-list-item">
                                    <div class="img-box">
                                        <img
                                            :src="`${publicPath}assets/images/resources/sidebar-latest-posts-img2.jpg`"
                                            alt=""
                                        />
                                    </div>
                                    <div class="title">
                                        <p>
                                            <i class="far fa-comments"></i>2
                                            Comments
                                        </p>
                                        <h4>
                                            <a href="#"
                                                >Agriculture Miracle <br />you
                                                Dont Know About</a
                                            >
                                        </h4>
                                    </div>
                                </li>

                                <li class="sidebar__latest-posts-list-item">
                                    <div class="img-box">
                                        <img
                                            :src="`${publicPath}assets/images/resources/sidebar-latest-posts-img3.jpg`"
                                            alt=""
                                        />
                                    </div>
                                    <div class="title">
                                        <p>
                                            <i class="far fa-comments"></i>2
                                            Comments
                                        </p>
                                        <h4>
                                            <a href="#"
                                                >Agriculture Miracle <br />you
                                                Dont Know About</a
                                            >
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="sidebar__single sidebar__categories wow fadeInUp animated animated animated"
                            data-wow-delay="0.3s"
                            data-wow-duration="1200m"
                        >
                            <div class="title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="sidebar__categories-list">
                                <li>
                                    <a href="#"
                                        >Agriculture<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" class="active"
                                        >Dairy Farm<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        >Economy Solution<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        >Harvests Innovations<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        >Organic Food<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        >Fresh Vegetables<span
                                            class="icon-right-arrow-angle"
                                        ></span
                                    ></a>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="sidebar__single sidebar__tag wow fadeInUp animated animated animated"
                            data-wow-delay="0.4s"
                            data-wow-duration="1200m"
                        >
                            <div class="title">
                                <h2>Tags</h2>
                            </div>
                            <ul class="sidebar__tag-list">
                                <li><a href="#">Agriculture</a></li>
                                <li><a href="#">dairy</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">organic</a></li>
                                <li><a href="#">Egg</a></li>
                                <li><a href="#">Harvests</a></li>
                            </ul>
                        </div>

                        
                    </div>
                </div>
                <!--End News Details Sidebar-->
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
