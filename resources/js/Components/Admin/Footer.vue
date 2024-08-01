<template>
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">
                        Admin Pro &#9829; crafted by Team
                        <a
                            href="#"
                            target="_blank"
                            >AOI</a
                        >
                    </p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="#"
                                target="_blank"
                                >Documentation</a
                            >
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="#"
                                target="_blank"
                                >Support</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Required Js -->
</template>

<script setup></script>

<script>
export default {
    name: "Footer",
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>
