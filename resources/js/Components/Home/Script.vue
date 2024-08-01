<template>
    <script :src="`${publicPath}assets/vendors/jquery/jquery-3.5.1.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/bootstrap/js/bootstrap.bundle.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jarallax/jarallax.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jquery-appear/jquery.appear.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/jquery-validate/jquery.validate.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/nouislider/nouislider.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/odometer/odometer.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/swiper/swiper.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/tiny-slider/tiny-slider.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/wnumb/wNumb.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/wow/wow.js`"></script>
    <script :src="`${publicPath}assets/vendors/isotope/isotope.js`"></script>
    <script :src="`${publicPath}assets/vendors/countdown/countdown.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/owl-carousel/owl.carousel.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/twentytwenty/twentytwenty.js`"></script>
    <script :src="`${publicPath}assets/vendors/twentytwenty/jquery.event.move.js`"></script>
    <script :src="`${publicPath}assets/vendors/parallax/parallax.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/tilt.js/tilt.jquery.js`"></script>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script :src="`${publicPath}assets/js/agriox.js`"></script>

    <!-- toolbar js -->
    <script :src="`${publicPath}assets/vendors/toolbar/js/js.cookie.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/toolbar/js/jQuery.style.switcher.min.js`"></script>
    <script :src="`${publicPath}assets/vendors/toolbar/js/toolbar.lang.js`"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script :src="`${publicPath}assets/vendors/toolbar/js/toolbar.js`"></script>
</template>

<script>
export default {
    name: "Script",
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>
