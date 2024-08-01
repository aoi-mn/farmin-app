<template>
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="admin/" class="b-brand text-primary">
                    <span class="pc-mtext">AOI</span>
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-status-up"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item">
                                <a class="pc-link" href="#">Home</a>
                            </li>
                            <li class="pc-item">
                                <a class="pc-link" href="#">About</a>
                            </li>
                            <li class="pc-item">
                                <a class="pc-link" href="#">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-document"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Blog</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item">
                                <Link class="pc-link" @click="viewBlog"
                                    >Vertical</Link
                                >
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
import { usePage } from "@inertiajs/inertia-vue3";

const { route } = usePage().props;
</script>

<script>
export default {
    name: "Nav",
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};

function viewBlog() {
    router.visit(route('blog.index'));
}
</script>
