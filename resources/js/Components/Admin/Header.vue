<template>
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="pc-h-item pc-sidebar-popup">
                        <a
                            href="#"
                            class="pc-head-link ms-0"
                            id="mobile-collapse"
                            ><i class="ti ti-menu-2"></i
                        ></a>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            ><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use></svg
                        ></a>
                        <div
                            class="dropdown-menu dropdown-menu-end pc-h-dropdown"
                        >
                            <a
                                href="#!"
                                class="dropdown-item"
                                onclick="layout_change('dark')"
                                ><svg class="pc-icon">
                                    <use xlink:href="#custom-moon"></use>
                                </svg>
                                <span>Dark</span> </a
                            ><a
                                href="#!"
                                class="dropdown-item"
                                onclick="layout_change('light')"
                                ><svg class="pc-icon">
                                    <use xlink:href="#custom-sun-1"></use>
                                </svg>
                                <span>Light</span> </a
                            ><a
                                href="#!"
                                class="dropdown-item"
                                onclick="layout_change_default()"
                                ><svg class="pc-icon">
                                    <use xlink:href="#custom-setting-2"></use>
                                </svg>
                                <span>Default</span></a
                            >
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                            ><svg class="pc-icon">
                                <use xlink:href="#custom-setting-2"></use></svg
                        ></a>
                        <div
                            class="dropdown-menu dropdown-menu-end pc-h-dropdown"
                        >
                            <a @click="logout" class="dropdown-item"
                                ><i class="ti ti-power"></i>
                                <span>Logout</span></a
                            >
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia';

function logout() {
    Inertia.post('/admin/logout'); // Adjust this URL based on your route for logout
}
</script>

<style scoped>
/* Your styles here */
</style>

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