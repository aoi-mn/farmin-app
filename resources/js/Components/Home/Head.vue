<template>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home Two || Agriox || Responsive HTML5 Template.</title>
        <!-- favicons Icons -->
        <!-- favicons Icons -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            :href="`${publicPath}assets/images/favicons/apple-touch-icon.png`"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            :href="`${publicPath}assets/images/favicons/favicon-32x32.png`"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            :href="`${publicPath}assets/images/favicons/favicon-16x16.png`"
        />
        <link
            rel="manifest"
            :href="`${publicPath}assets/images/favicons/site.webmanifest`"
        />
        <meta
            name="description"
            content="Agriox HTML Template For Agriculture Farming Services"
        />

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Shadows+Into+Light&display=swap"
            rel="stylesheet"
        />

        <!-- vendor styles -->
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/bootstrap/css/bootstrap.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/animate/animate.min.css`"
            href="{{ asset('') }}"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}'assets/vendors/animate/custom-animate.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/fontawesome/css/all.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/jarallax/jarallax.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/nouislider/nouislider.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/nouislider/nouislider.pips.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/odometer/odometer.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/swiper/swiper.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/icomoon-icons/style.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/tiny-slider/tiny-slider.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/reey-font/stylesheet.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/owl-carousel/owl.carousel.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/owl-carousel/owl.theme.default.min.css`"
        />
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/twentytwenty/twentytwenty.css`"
        />

        <!-- template styles -->
        <link rel="stylesheet" :href="`${publicPath}assets/css/agriox.css`" />

        <!-- RTL CSS -->
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/css/agriox-rtl.css`"
        />

        <!-- mode css -->
        <link
            rel="stylesheet"
            id="jssMode"
            :href="`${publicPath}asset('assets/css/modes/agriox-light.css`"
        />

        <!-- toolbar css -->
        <link
            rel="stylesheet"
            :href="`${publicPath}assets/vendors/toolbar/css/toolbar.css`"
        />
    </head>
</template>

<script>
export default {
    name: "Head",
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>
