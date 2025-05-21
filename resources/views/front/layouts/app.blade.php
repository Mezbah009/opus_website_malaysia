<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <title>Opus Technology Limited - Software & IT Solutions in Bangladesh</title> --}}
    {{-- @yield('title') --}}

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="Opus Technology Limited">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">


    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Opus Technology Limited - Software & IT Solutions in Bangladesh">
    <meta property="og:description"
        content="We offer cutting-edge software solutions, fintech services, and enterprise IT consultancy.">
    <meta property="og:image" content="{{ asset('front-assets/img/opus-logo.png') }}">
    <meta property="og:url" content="https://opus-bd.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Opus Technology Limited - Software & IT Solutions in Bangladesh">
    <meta name="twitter:description"
        content="We offer cutting-edge software solutions, fintech services, and enterprise IT consultancy.">
    <meta name="twitter:image" content="{{ asset('front-assets/img/opus-logo.png') }}">

    <!-- Favicons -->
    {{-- <link href="{{ asset('front-assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front-assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <link rel="icon" href="{{ asset('front-assets/img/favicon.png') }}" type="image/png">

    <!-- Structured Data (JSON-LD Schema) -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Opus Technology Limited",
        "url": "https://opus-bd.com/",
        "logo": "{{ asset('front-assets/img/opus-logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+8802222225006",
            "contactType": "customer service",
            "areaServed": "BD",
            "availableLanguage": "en"
        },
        "sameAs": [
            "https://www.facebook.com/OpusTechnologyGlobal/",
            "https://www.linkedin.com/company/opus-technology-limited/",
            "https://www.youtube.com/@opustechnologylimited"
        ]
        }
        </script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front-assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/aos_team/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Existing Stylesheets -->
    <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">




    {{-- others CSS --}}

    {{--
    <link href="{{ asset('front-assets/others/asset/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

    <!-- Font Awesome CSS -->
    <link href="{{ asset('front-assets/others/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset('front-assets/others/css/animate.css') }}" rel="stylesheet">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.transitions.css') }}">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('front-assets/css/custom.css') }}">
    {{--
    <link href="{{ asset('front-assets/others/css/style.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('front-assets/others/css/responsive.css') }}" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">




    <!-- =======================================================
  * Template Name: Mamba
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5CD4JCQS');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-161PX6JNEZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-161PX6JNEZ');
    </script>




    <!-- Google search console -->
    <meta name="google-site-verification" content="vN7lmALCAdHCPjvy7MsmlHlxlrWetMdHv2gz8kKuNAM" />

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CD4JCQS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@opus-bd.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +8802222225006
                <i class="bi bi-phone-fill phone-icon"></i> +88-01811317129
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://www.facebook.com/OpusTechnologyGlobal/" class="facebook" target="_blank"
                    aria-label="Visit our Facebook page">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/opus-technology-limited/" class="linkedin" target="_blank"
                    aria-label="Visit our LinkedIn page">
                    <i class="bi bi-linkedin"></i>
                </a>

                <a href="https://www.youtube.com/@opustechnologylimited" class="youtube" target="_blank"
                    aria-label="Subscribe to our YouTube channel">
                    <i class="bi bi-youtube"></i>
                </a>

            </div>

        </div>
    </section>

    <!-- Include Header Component -->
    <x-header title="{{ $title ?? 'Default Title' }}" description="{{ $description ?? 'Default Description' }}"
        keywords="{{ $keywords ?? 'Default Keywords' }}" />


    <!-- End Hero -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->


    <!-- Include Footer Component -->
    <x-footer />



    {{-- --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('front-assets/js/main.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LE332BQECE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LE332BQECE');
    </script>




    {{-- others JS --}}

    <!-- jQuery Version 2.1.1 -->
    <script src="{{ asset('front-assets/others/js/jquery-2.1.1.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('front-assets/others/asset/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('front-assets/others/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/classie.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/count-to.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/styleswitcher.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('front-assets/others/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/contact_me.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('front-assets/others/js/script.js') }}"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                once: true,
                duration: 500,
                delay: 50
            });
        });
    </script>

</body>

</html>
