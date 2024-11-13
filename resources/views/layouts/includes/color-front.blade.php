<style>
    .bg-primary,
    .btn-primary,
    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active,
    .btn-outline-primary.active,
    .btn-outline-primary.focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-soft-primary:hover,
    .btn-soft-primary:focus,
    .btn-soft-primary:active,
    .btn-soft-primary.active,
    .btn-soft-primary.focus,
    .badge-primary,
    .pagination .page-item.active .page-link,
    .nav-pills .nav-link.active,
    .custom-control-input:checked~.custom-control-label:before,
    #preloader #status .spinner .double-bounce1,
    #preloader #status .spinner .double-bounce2,
    .social-icon li a:hover,
    #topnav .navbar-toggle.open span:hover,
    .gradient,
    .flex-control-paging li a.flex-active,
    .owl-theme .owl-dots .owl-dot span,
    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots.clickable .owl-dot:hover span,
    .watch-video a .play-icon-circle,
    .sidebar .widget .tagcloud>a:hover,
    .flatpickr-day.selected,
    .flatpickr-day.selected:hover,
    .bg-animation-left.crypto-home:after,
    .bg-animation-left.task-management-home:after,
    .classic-app-image .bg-app-shape:after,
    .classic-saas-image .bg-saas-shape:after,
    .work-container.work-modern .icons .work-icon:hover,
    .features.fea-primary:hover,
    .accounts:hover,
    .accounts.active,
    .timeline-page .timeline-item .date-label-left:after,
    .timeline-page .timeline-item .duration-right:after,
    .swiper-slider-hero .swiper-container .swiper-button-prev:hover,
    .swiper-slider-hero .swiper-container .swiper-button-next:hover,
    .ribbon.ribbon-primary span {
        background-color: {{ $settings->website_theme }} !important;
    }

    .text-primary,
    .bg-soft-primary,
    .btn-soft-primary,
    .btn-outline-primary,
    .badge-outline-primary,
    .badge-soft-primary,
    .alert-outline-primary,
    .breadcrumb .breadcrumb-item.active,
    .breadcrumb .breadcrumb-item a:hover,
    .faq-content .card a.faq[data-toggle="collapse"],
    .faq-content .card a.faq[data-toggle="collapse"]:before,
    #topnav .has-submenu.active .submenu li.active>a,
    #topnav .navigation-menu>li:hover>a,
    #topnav .navigation-menu>li.active>a,
    #topnav .navigation-menu>li>a:hover,
    #topnav .navigation-menu>li>a:active,
    #topnav .navigation-menu>li .submenu li a:hover,
    #topnav .navigation-menu>li:hover>a,
    #topnav .navigation-menu>li.active>a,
    #topnav .navigation-menu>li>a:hover,
    #topnav .navigation-menu>li .submenu li a:hover,
    #topnav .navigation-menu>li.has-submenu.open>a,
    #topnav .has-submenu.active a,
    #topnav.nav-sticky .navigation-menu.nav-light>li.active>a,
    #topnav.nav-sticky .navigation-menu.nav-light>li:hover>a,
    #topnav.nav-sticky .navigation-menu.nav-light>li.active>a,
    .course-feature .title:hover,
    .pricing-rates.business-rate:hover .title,
    .blog .content .title:hover,
    .blog .content .post-meta .readmore:hover,
    .sidebar .widget .blog-categories li a:hover,
    .sidebar .widget .post-recent .post-recent-content a:hover,
    .media-list .media .media-heading:hover,
    .job-box .position a:hover,
    .job-box .company-name:hover,
    .event-schedule .content .title:hover,
    .courses-desc .content .title:hover,
    .container-filter li a.active,
    .container-filter li a:hover,
    .team .name:hover,
    .categories a:hover,
    .explore-feature:hover .icon,
    .explore-feature:hover .title,
    .work-container.work-classic .content .title:hover,
    .work-container.work-grid .content .title:hover,
    .work-container.work-modern .content .title:hover,
    .shop-list .content .product-name:hover,
    .features.fea-primary .content .title:hover,
    .features.feature-clean .title:hover,
    .dropdown-primary .dropdown-menu .dropdown-item:hover,
    .dropdown-primary .dropdown-menu .dropdown-item.active,
    .dropdown-primary .dropdown-menu .dropdown-item:active,
    .dropdown-primary .dropdown-menu .dropdown-item.focus,
    .dropdown-primary .dropdown-menu .dropdown-item:focus,
    .candidate-list .name:hover,
    .company-list .name:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .btn-primary,
    .btn-outline-primary,
    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active,
    .btn-outline-primary.active,
    .btn-outline-primary.focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .badge-outline-primary,
    .btn-soft-primary:hover,
    .btn-soft-primary:focus,
    .btn-soft-primary:active,
    .btn-soft-primary.active,
    .btn-soft-primary.focus,
    .alert-primary,
    .alert-outline-primary,
    .pagination .page-item.active .page-link,
    .form-group .form-control:focus,
    .form-group .form-control.active,
    .custom-control-input:checked~.custom-control-label:before,
    .custom-control-input:focus~.custom-control-label::before,
    .form-control:focus,
    .social-icon li a:hover,
    #topnav .has-submenu.active.active .menu-arrow,
    #topnav.scroll .navigation-menu>li:hover>.menu-arrow,
    #topnav.scroll .navigation-menu>li.active>.menu-arrow,
    #topnav .navigation-menu>li:hover>.menu-arrow,
    #topnav .has-submenu .submenu .has-submenu:hover .submenu-arrow,
    #topnav.nav-sticky .navigation-menu.nav-light>li:hover>.menu-arrow,
    #topnav.nav-sticky .navigation-menu.nav-light>li.active>.menu-arrow,
    .pricing-rates.business-rate:hover,
    .pricing-rates.starter-plan,
    .event-schedule:hover,
    .container-filter li a.active,
    .container-filter li a:hover,
    .flatpickr-day.selected,
    .flatpickr-day.selected:hover,
    .swiper-slider-hero .swiper-container .swiper-button-prev:hover,
    .swiper-slider-hero .swiper-container .swiper-button-next:hover {
        border-color: {{ $settings->website_theme }} !important;
    }

    .btn-primary,
    .btn-soft-primary,
    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active,
    .btn-outline-primary.active,
    .btn-outline-primary.focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active {
        box-shadow: 0 3px 5px 0 rgba(43, 144, 226, 0.5);
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary.focus {
        background-color: #17628c !important;
        border-color: {{ $settings->website_theme }} !important;
    }

    .btn-soft-primary,
    .badge-soft-primary,
    .bg-soft-primary {
        background-color: #e1f0f9 !important;
        border: 1px solid rgba(43, 144, 226, 0.1) !important;
    }

    .alert-primary,
    .pagination .page-item .page-link:hover,
    ::selection {
        background-color: rgba(43, 144, 226, 0.3);
    }

    .alert-primary .alert-link {
        color: {{ $settings->website_theme }};
    }

    .pagination .page-item .page-link:hover {
        border-color: rgba(43, 144, 226, 0.9);
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: {{ $settings->website_theme }} !important;
    }

    .social-icon li a:hover .fea-social {
        fill: {{ $settings->website_theme }};
    }

    .bg-overlay-gradient {
        background-color: rgba(43, 144, 226, 0.6);
    }

    .bg-overlay-gradient2 {
        background-image: linear-gradient(90deg, #2eca8b, {{ $settings->website_theme }}, #2eca8b);
    }

    .gradient {
        background: linear-gradient(45deg, {{ $settings->website_theme }}, {{ $settings->website_theme }}) !important;
    }

    .features .image:before {
        background: linear-gradient(45deg, transparent, #e1f0f9);
    }

    .features:hover .image:before {
        background: #e1f0f9;
    }

    .features .icon,
    .features.feature-clean .icons i,
    .app-feature-shape-right:after,
    .app-feature-shape-left:after,
    .saas-feature-shape-left:after,
    .saas-feature-shape-right:after,
    .social-feature-left:after,
    .social-feature-right:after {
        background: #e1f0f9;
    }

    .key-feature .icon {
        background: linear-gradient(45deg, transparent, rgba(43, 144, 226, 0.15));
    }

    .owl-theme .owl-dots .owl-dot span {
        background: rgba(43, 144, 226, 0.5) !important;
    }

    .play-icon i,
    .play-icon i:hover {
        -webkit-text-stroke: 2px {{ $settings->website_theme }};
    }

    .play-icon i:hover {
        -webkit-text-fill-color: {{ $settings->website_theme }};
    }

    .event-schedule .date .day {
        background: #e1f0f9;
        box-shadow: 0px 0px 2px 0.25px rgba(43, 144, 226, 0.5);
    }

    .classic-app-image .bg-app-shape:after,
    .classic-saas-image .bg-saas-shape:after {
        box-shadow: 0 0 40px rgba(43, 144, 226, 0.5);
    }

    .app-feature-shape-right:after,
    .app-feature-shape-left:after,
    .saas-feature-shape-left:after,
    .saas-feature-shape-right:after,
    .social-feature-left:after,
    .social-feature-right:after {
        box-shadow: 0 0 40px #e1f0f9;
    }

    .bg-circle-gradiant {
        background: radial-gradient(circle at 50% 50%,
                #e1f0f9 0%,
                #e1f0f9 33.333%,
                rgba(43, 144, 226, 0.5) 33.333%,
                rgba(43, 144, 226, 0.5) 66.666%,
                rgba(43, 144, 226, 0.5) 66.666%,
                rgba(43, 144, 226, 0.5) 99.999%);
    }

    .home-wrapper:before {
        background: linear-gradient(90deg, rgba(43, 144, 226, 0.5), transparent);
    }

    .market-box {
        border-radius: 8px !important;
        background-color: #01395e !important;
        padding: 3rem;
        margin-top: 3rem;
        z-index: 999;
    }

    .market-content {
        background-color: {{ $settings->website_theme }} !important;
        z-index: -1;
    }

    .footer {
        background: #17628c !important;
        padding: 60px 0;
        position: relative;
        color: #fff;
    }

    .cg-container {
        font-family: sans-serif;
        border: none;
        color: #fff;
        line-height: 1.25;
        font-size: 12px;
        box-sizing: border-box;
        min-width: 250px;
        background-color: {{ $settings->website_theme }} !important;
    }

    .ribbon.ribbon-primary span:before {
        border-left-color: {{ $settings->website_theme }};
        border-top-color: {{ $settings->website_theme }};
    }

    .ribbon.ribbon-primary span:after {
        border-right-color: {{ $settings->website_theme }};
        border-top-color: {{ $settings->website_theme }};
    }
</style>
