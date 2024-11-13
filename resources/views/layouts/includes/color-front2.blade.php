<style>
    @import url("https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&amp;display=swap");

    h1 {
        font-size: 42px !important;
    }

    h2 {
        font-size: 36px !important;
    }

    h3 {
        font-size: 30px !important;
    }

    h4 {
        font-size: 24px !important;
    }

    h5 {
        font-size: 20px !important;
    }

    h6 {
        font-size: 16px !important;
    }

    .display-1 {
        font-size: 80px !important;
    }

    .display-2 {
        font-size: 72px !important;
    }

    .display-3 {
        font-size: 64px !important;
    }

    .display-4 {
        font-size: 46px !important;
    }

    .bg-primary {
        background-color: {{ $settings->website_theme }} !important;
    }

    .bg-bronze {
        background-color: #794100 !important;
    }

    .bg-silver {
        background-color: #96cafc !important;
    }

    .bg-gold {
        background-color: #e4c126 !important;
    }

    .bg-platinum {
        background-color: #a7aaab !important;
    }

    .bg-soft-primary {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
    }

    .text-primary {
        color: {{ $settings->website_theme }} !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: #284bc1 !important;
    }

    .bg-secondary {
        background-color: #5a6d90 !important;
    }

    .bg-soft-secondary {
        background-color: rgba(90, 109, 144, 0.1) !important;
        border: 1px solid rgba(90, 109, 144, 0.1) !important;
        color: #5a6d90 !important;
    }

    .text-secondary {
        color: #5a6d90 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
        color: #506180 !important;
    }

    .bg-success {
        background-color: #2eca8b !important;
    }

    .bg-soft-success {
        background-color: rgba(46, 202, 139, 0.1) !important;
        border: 1px solid rgba(46, 202, 139, 0.1) !important;
        color: #2eca8b !important;
    }

    .text-success {
        color: #2eca8b !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-success:hover,
    a.text-success:focus {
        color: #29b57d !important;
    }

    .bg-warning {
        background-color: #f17425 !important;
    }

    .bg-soft-warning {
        background-color: rgba(241, 116, 37, 0.1) !important;
        border: 1px solid rgba(241, 116, 37, 0.1) !important;
        color: #f17425 !important;
    }

    .text-warning {
        color: #f17425 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-warning:hover,
    a.text-warning:focus {
        color: #ed650f !important;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    .bg-soft-info {
        background-color: rgba(23, 162, 184, 0.1) !important;
        border: 1px solid rgba(23, 162, 184, 0.1) !important;
        color: #17a2b8 !important;
    }

    .text-info {
        color: #17a2b8 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-info:hover,
    a.text-info:focus {
        color: #148ea1 !important;
    }

    .bg-danger {
        background-color: #e43f52 !important;
    }

    .bg-soft-danger {
        background-color: rgba(228, 63, 82, 0.1) !important;
        border: 1px solid rgba(228, 63, 82, 0.1) !important;
        color: #e43f52 !important;
    }

    .text-danger {
        color: #e43f52 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-danger:hover,
    a.text-danger:focus {
        color: #e1293e !important;
    }

    .bg-dark {
        background-color: #3c4858 !important;
    }

    .bg-soft-dark {
        background-color: rgba(60, 72, 88, 0.1) !important;
        border: 1px solid rgba(60, 72, 88, 0.1) !important;
        color: #3c4858 !important;
    }

    .text-dark {
        color: #3c4858 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-dark:hover,
    a.text-dark:focus {
        color: #323c49 !important;
    }

    .bg-muted {
        background-color: #8492a6 !important;
    }

    .bg-soft-muted {
        background-color: rgba(132, 146, 166, 0.1) !important;
        border: 1px solid rgba(132, 146, 166, 0.1) !important;
        color: #8492a6 !important;
    }

    .text-muted {
        color: #8492a6 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-muted:hover,
    a.text-muted:focus {
        color: #75859b !important;
    }

    .bg-light {
        background-color: #f8f9fc !important;
    }

    .bg-soft-light {
        background-color: rgba(248, 249, 252, 0.1) !important;
        border: 1px solid rgba(248, 249, 252, 0.1) !important;
        color: #f8f9fc !important;
    }

    .text-light {
        color: #f8f9fc !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-light:hover,
    a.text-light:focus {
        color: #e6eaf4 !important;
    }

    .bg-blue {
        background-color: {{ $settings->website_theme }} !important;
    }

    .bg-soft-blue {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
    }

    .text-blue {
        color: {{ $settings->website_theme }} !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-blue:hover,
    a.text-blue:focus {
        color: #284bc1 !important;
    }

    .bg-footer {
        background-color: #204232 !important;
    }

    .bg-soft-footer {
        background-color: rgba(32, 41, 66, 0.1) !important;
        border: 1px solid rgba(32, 41, 66, 0.1) !important;
        color: #202942 !important;
    }

    .text-footer {
        color: #202942 !important;
    }

    a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    a.text-footer:hover,
    a.text-footer:focus {
        color: #181e30 !important;
    }

    .bg-black {
        background: #161c2d !important;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0px;
        margin-bottom: 5px;
    }

    .rounded {
        border-radius: 6px !important;
        border-bottom-left-radius: 0 !important;
    }

    .roundedd {
        border-radius: 6px;
        border-bottom-left-radius: 0;
    }

    .rounded-top {
        border-top-left-radius: 6px !important;
        border-top-right-radius: 6px !important;
    }

    .rounded-left {
        border-top-left-radius: 6px !important;
        border-bottom-left-radius: 6px !important;
    }

    .rounded-bottom {
        border-bottom-left-radius: 6px !important;
        border-bottom-right-radius: 6px !important;
    }

    .rounded-right {
        border-top-right-radius: 6px !important;
        border-bottom-right-radius: 6px !important;
    }

    .rounded-md {
        border-radius: 10px !important;
    }

    .rounded-lg {
        border-radius: 30px !important;
        border-bottom-left-radius: 0 !important;
    }

    .border {
        border: 1px solid #e9ecef !important;
    }

    .border-top {
        border-top: 1px solid #e9ecef !important;
    }

    .border-bottom {
        border-bottom: 1px solid #e9ecef !important;
    }

    .border-left {
        border-left: 1px solid #e9ecef !important;
    }

    .border-right {
        border-right: 1px solid #e9ecef !important;
    }

    .small,
    small {
        font-size: 90%;
    }

    .card .card-body {
        padding: 1.5rem;
    }

    .component-wrapper .title {
        font-size: 20px;
    }

    .component-wrapper.sticky-bar li {
        margin-bottom: 6px;
    }

    .component-wrapper.sticky-bar li:last-child {
        margin-bottom: 0px !important;
    }

    .component-wrapper.sticky-bar li a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .component-wrapper.sticky-bar li a:hover,
    .component-wrapper.sticky-bar li a:focus {
        color: {{ $settings->website_theme }} !important;
    }

    .btn-primary {
        background-color: {{ $settings->website_theme }} !important;
        border: 1px solid{{ $settings->website_theme }} !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary.focus {
        background-color: #222020 !important;
        border-color: #222020 !important;
        color: #fff !important;
    }

    .btn-soft-primary {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-soft-primary:hover,
    .btn-soft-primary:focus,
    .btn-soft-primary:active,
    .btn-soft-primary.active,
    .btn-soft-primary.focus {
        background-color: {{ $settings->website_theme }} !important;
        border-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .btn-outline-primary {
        border: 1px solid{{ $settings->website_theme }};
        color: {{ $settings->website_theme }};
        background-color: transparent;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active,
    .btn-outline-primary.active,
    .btn-outline-primary.focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active {
        background-color: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }};
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-secondary {
        background-color: #5a6d90 !important;
        border: 1px solid #5a6d90 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
        box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
    }

    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active,
    .btn-secondary.active,
    .btn-secondary.focus {
        background-color: #465571 !important;
        border-color: #465571 !important;
        color: #fff !important;
    }

    .btn-soft-secondary {
        background-color: rgba(90, 109, 144, 0.1) !important;
        border: 1px solid rgba(90, 109, 144, 0.1) !important;
        color: #5a6d90 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
        box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
    }

    .btn-soft-secondary:hover,
    .btn-soft-secondary:focus,
    .btn-soft-secondary:active,
    .btn-soft-secondary.active,
    .btn-soft-secondary.focus {
        background-color: #5a6d90 !important;
        border-color: #5a6d90 !important;
        color: #fff !important;
    }

    .btn-outline-secondary {
        border: 1px solid #5a6d90;
        color: #5a6d90;
        background-color: transparent;
    }

    .btn-outline-secondary:hover,
    .btn-outline-secondary:focus,
    .btn-outline-secondary:active,
    .btn-outline-secondary.active,
    .btn-outline-secondary.focus,
    .btn-outline-secondary:not(:disabled):not(.disabled):active {
        background-color: #5a6d90;
        border-color: #5a6d90;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
        box-shadow: 0 3px 5px 0 rgba(90, 109, 144, 0.3);
    }

    .btn-success {
        background-color: #2eca8b !important;
        border: 1px solid #2eca8b !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
        box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
    }

    .btn-success:hover,
    .btn-success:focus,
    .btn-success:active,
    .btn-success.active,
    .btn-success.focus {
        background-color: #25a06e !important;
        border-color: #25a06e !important;
        color: #fff !important;
    }

    .btn-soft-success {
        background-color: rgba(46, 202, 139, 0.1) !important;
        border: 1px solid rgba(46, 202, 139, 0.1) !important;
        color: #2eca8b !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
        box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
    }

    .btn-soft-success:hover,
    .btn-soft-success:focus,
    .btn-soft-success:active,
    .btn-soft-success.active,
    .btn-soft-success.focus {
        background-color: #2eca8b !important;
        border-color: #2eca8b !important;
        color: #fff !important;
    }

    .btn-outline-success {
        border: 1px solid #2eca8b;
        color: #2eca8b;
        background-color: transparent;
    }

    .btn-outline-success:hover,
    .btn-outline-success:focus,
    .btn-outline-success:active,
    .btn-outline-success.active,
    .btn-outline-success.focus,
    .btn-outline-success:not(:disabled):not(.disabled):active {
        background-color: #2eca8b;
        border-color: #2eca8b;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
        box-shadow: 0 3px 5px 0 rgba(46, 202, 139, 0.3);
    }

    .btn-warning {
        background-color: #f17425 !important;
        border: 1px solid #f17425 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
        box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
    }

    .btn-warning:hover,
    .btn-warning:focus,
    .btn-warning:active,
    .btn-warning.active,
    .btn-warning.focus {
        background-color: #d55b0e !important;
        border-color: #d55b0e !important;
        color: #fff !important;
    }

    .btn-soft-warning {
        background-color: rgba(241, 116, 37, 0.1) !important;
        border: 1px solid rgba(241, 116, 37, 0.1) !important;
        color: #f17425 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
        box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
    }

    .btn-soft-warning:hover,
    .btn-soft-warning:focus,
    .btn-soft-warning:active,
    .btn-soft-warning.active,
    .btn-soft-warning.focus {
        background-color: #f17425 !important;
        border-color: #f17425 !important;
        color: #fff !important;
    }

    .btn-outline-warning {
        border: 1px solid #f17425;
        color: #f17425;
        background-color: transparent;
    }

    .btn-outline-warning:hover,
    .btn-outline-warning:focus,
    .btn-outline-warning:active,
    .btn-outline-warning.active,
    .btn-outline-warning.focus,
    .btn-outline-warning:not(:disabled):not(.disabled):active {
        background-color: #f17425;
        border-color: #f17425;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
        box-shadow: 0 3px 5px 0 rgba(241, 116, 37, 0.3);
    }

    .btn-info {
        background-color: #17a2b8 !important;
        border: 1px solid #17a2b8 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
        box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
    }

    .btn-info:hover,
    .btn-info:focus,
    .btn-info:active,
    .btn-info.active,
    .btn-info.focus {
        background-color: #117a8b !important;
        border-color: #117a8b !important;
        color: #fff !important;
    }

    .btn-soft-info {
        background-color: rgba(23, 162, 184, 0.1) !important;
        border: 1px solid rgba(23, 162, 184, 0.1) !important;
        color: #17a2b8 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
        box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
    }

    .btn-soft-info:hover,
    .btn-soft-info:focus,
    .btn-soft-info:active,
    .btn-soft-info.active,
    .btn-soft-info.focus {
        background-color: #17a2b8 !important;
        border-color: #17a2b8 !important;
        color: #fff !important;
    }

    .btn-outline-info {
        border: 1px solid #17a2b8;
        color: #17a2b8;
        background-color: transparent;
    }

    .btn-outline-info:hover,
    .btn-outline-info:focus,
    .btn-outline-info:active,
    .btn-outline-info.active,
    .btn-outline-info.focus,
    .btn-outline-info:not(:disabled):not(.disabled):active {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
        box-shadow: 0 3px 5px 0 rgba(23, 162, 184, 0.3);
    }

    .btn-danger {
        background-color: #e43f52 !important;
        border: 1px solid #e43f52 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
        box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
    }

    .btn-danger:hover,
    .btn-danger:focus,
    .btn-danger:active,
    .btn-danger.active,
    .btn-danger.focus {
        background-color: #d21e32 !important;
        border-color: #d21e32 !important;
        color: #fff !important;
    }

    .btn-soft-danger {
        background-color: rgba(228, 63, 82, 0.1) !important;
        border: 1px solid rgba(228, 63, 82, 0.1) !important;
        color: #e43f52 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
        box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
    }

    .btn-soft-danger:hover,
    .btn-soft-danger:focus,
    .btn-soft-danger:active,
    .btn-soft-danger.active,
    .btn-soft-danger.focus {
        background-color: #e43f52 !important;
        border-color: #e43f52 !important;
        color: #fff !important;
    }

    .btn-outline-danger {
        border: 1px solid #e43f52;
        color: #e43f52;
        background-color: transparent;
    }

    .btn-outline-danger:hover,
    .btn-outline-danger:focus,
    .btn-outline-danger:active,
    .btn-outline-danger.active,
    .btn-outline-danger.focus,
    .btn-outline-danger:not(:disabled):not(.disabled):active {
        background-color: #e43f52;
        border-color: #e43f52;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
        box-shadow: 0 3px 5px 0 rgba(228, 63, 82, 0.3);
    }

    .btn-dark {
        background-color: #3c4858 !important;
        border: 1px solid #3c4858 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
        box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
    }

    .btn-dark:hover,
    .btn-dark:focus,
    .btn-dark:active,
    .btn-dark.active,
    .btn-dark.focus {
        background-color: #272f3a !important;
        border-color: #272f3a !important;
        color: #fff !important;
    }

    .btn-soft-dark {
        background-color: rgba(60, 72, 88, 0.1) !important;
        border: 1px solid rgba(60, 72, 88, 0.1) !important;
        color: #3c4858 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
        box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
    }

    .btn-soft-dark:hover,
    .btn-soft-dark:focus,
    .btn-soft-dark:active,
    .btn-soft-dark.active,
    .btn-soft-dark.focus {
        background-color: #3c4858 !important;
        border-color: #3c4858 !important;
        color: #fff !important;
    }

    .btn-outline-dark {
        border: 1px solid #3c4858;
        color: #3c4858;
        background-color: transparent;
    }

    .btn-outline-dark:hover,
    .btn-outline-dark:focus,
    .btn-outline-dark:active,
    .btn-outline-dark.active,
    .btn-outline-dark.focus,
    .btn-outline-dark:not(:disabled):not(.disabled):active {
        background-color: #3c4858;
        border-color: #3c4858;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
        box-shadow: 0 3px 5px 0 rgba(60, 72, 88, 0.3);
    }

    .btn-muted {
        background-color: #8492a6 !important;
        border: 1px solid #8492a6 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
        box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
    }

    .btn-muted:hover,
    .btn-muted:focus,
    .btn-muted:active,
    .btn-muted.active,
    .btn-muted.focus {
        background-color: #68788f !important;
        border-color: #68788f !important;
        color: #fff !important;
    }

    .btn-soft-muted {
        background-color: rgba(132, 146, 166, 0.1) !important;
        border: 1px solid rgba(132, 146, 166, 0.1) !important;
        color: #8492a6 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
        box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
    }

    .btn-soft-muted:hover,
    .btn-soft-muted:focus,
    .btn-soft-muted:active,
    .btn-soft-muted.active,
    .btn-soft-muted.focus {
        background-color: #8492a6 !important;
        border-color: #8492a6 !important;
        color: #fff !important;
    }

    .btn-outline-muted {
        border: 1px solid #8492a6;
        color: #8492a6;
        background-color: transparent;
    }

    .btn-outline-muted:hover,
    .btn-outline-muted:focus,
    .btn-outline-muted:active,
    .btn-outline-muted.active,
    .btn-outline-muted.focus,
    .btn-outline-muted:not(:disabled):not(.disabled):active {
        background-color: #8492a6;
        border-color: #8492a6;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
        box-shadow: 0 3px 5px 0 rgba(132, 146, 166, 0.3);
    }

    .btn-light {
        background-color: #f8f9fc !important;
        border: 1px solid #f8f9fc !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
        box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
    }

    .btn-light:hover,
    .btn-light:focus,
    .btn-light:active,
    .btn-light.active,
    .btn-light.focus {
        background-color: #d4daed !important;
        border-color: #d4daed !important;
        color: #fff !important;
    }

    .btn-soft-light {
        background-color: rgba(248, 249, 252, 0.1) !important;
        border: 1px solid rgba(248, 249, 252, 0.1) !important;
        color: #f8f9fc !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
        box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
    }

    .btn-soft-light:hover,
    .btn-soft-light:focus,
    .btn-soft-light:active,
    .btn-soft-light.active,
    .btn-soft-light.focus {
        background-color: #f8f9fc !important;
        border-color: #f8f9fc !important;
        color: #fff !important;
    }

    .btn-outline-light {
        border: 1px solid #f8f9fc;
        color: #f8f9fc;
        background-color: transparent;
    }

    .btn-outline-light:hover,
    .btn-outline-light:focus,
    .btn-outline-light:active,
    .btn-outline-light.active,
    .btn-outline-light.focus,
    .btn-outline-light:not(:disabled):not(.disabled):active {
        background-color: #f8f9fc;
        border-color: #f8f9fc;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
        box-shadow: 0 3px 5px 0 rgba(248, 249, 252, 0.3);
    }

    .btn-blue {
        background-color: {{ $settings->website_theme }} !important;
        border: 1px solid{{ $settings->website_theme }} !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-blue:hover,
    .btn-blue:focus,
    .btn-blue:active,
    .btn-blue.active,
    .btn-blue.focus {
        background-color: #222020 !important;
        border-color: #222020 !important;
        color: #fff !important;
    }

    .btn-soft-blue {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-soft-blue:hover,
    .btn-soft-blue:focus,
    .btn-soft-blue:active,
    .btn-soft-blue.active,
    .btn-soft-blue.focus {
        background-color: {{ $settings->website_theme }} !important;
        border-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .btn-outline-blue {
        border: 1px solid{{ $settings->website_theme }};
        color: {{ $settings->website_theme }};
        background-color: transparent;
    }

    .btn-outline-blue:hover,
    .btn-outline-blue:focus,
    .btn-outline-blue:active,
    .btn-outline-blue.active,
    .btn-outline-blue.focus,
    .btn-outline-blue:not(:disabled):not(.disabled):active {
        background-color: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }};
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
        box-shadow: 0 3px 5px 0 rgba(47, 85, 212, 0.3);
    }

    .btn-footer {
        background-color: #202942 !important;
        border: 1px solid #202942 !important;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
        box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
    }

    .btn-footer:hover,
    .btn-footer:focus,
    .btn-footer:active,
    .btn-footer.active,
    .btn-footer.focus {
        background-color: #0f131f !important;
        border-color: #0f131f !important;
        color: #fff !important;
    }

    .btn-soft-footer {
        background-color: rgba(32, 41, 66, 0.1) !important;
        border: 1px solid rgba(32, 41, 66, 0.1) !important;
        color: #202942 !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
        box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
    }

    .btn-soft-footer:hover,
    .btn-soft-footer:focus,
    .btn-soft-footer:active,
    .btn-soft-footer.active,
    .btn-soft-footer.focus {
        background-color: #202942 !important;
        border-color: #202942 !important;
        color: #fff !important;
    }

    .btn-outline-footer {
        border: 1px solid #202942;
        color: #202942;
        background-color: transparent;
    }

    .btn-outline-footer:hover,
    .btn-outline-footer:focus,
    .btn-outline-footer:active,
    .btn-outline-footer.active,
    .btn-outline-footer.focus,
    .btn-outline-footer:not(:disabled):not(.disabled):active {
        background-color: #202942;
        border-color: #202942;
        color: #fff !important;
        -webkit-box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
        box-shadow: 0 3px 5px 0 rgba(32, 41, 66, 0.3);
    }

    .btn {
        padding: 10px 20px;
        outline: none;
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        font-weight: 600;
        border-radius: 6px;
        border-bottom-left-radius: 0;
    }

    .btn:focus {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .btn.btn-sm {
        padding: 7px 16px;
        font-size: 10px;
    }

    .btn.btn-lg {
        padding: 14px 30px;
        font-size: 16px;
    }

    .btn.searchbtn {
        padding: 6px 20px;
    }

    .btn.btn-pills {
        border-radius: 30px;
    }

    .btn.btn-light {
        color: #3c4858 !important;
        border: 1px solid #dee2e6 !important;
    }

    .btn.btn-light:hover,
    .btn.btn-light:focus,
    .btn.btn-light:active,
    .btn.btn-light.active,
    .btn.btn-light.focus {
        background-color: #d4daed !important;
        color: #3c4858 !important;
    }

    .btn.btn-soft-light {
        color: rgba(60, 72, 88, 0.5) !important;
        border: 1px solid #dee2e6 !important;
    }

    .btn.btn-soft-light:hover,
    .btn.btn-soft-light:focus,
    .btn.btn-soft-light:active,
    .btn.btn-soft-light.active,
    .btn.btn-soft-light.focus {
        color: #3c4858 !important;
    }

    .btn.btn-outline-light {
        border: 1px solid #dee2e6 !important;
        color: #3c4858 !important;
        background-color: transparent;
    }

    .btn.btn-outline-light:hover,
    .btn.btn-outline-light:focus,
    .btn.btn-outline-light:active,
    .btn.btn-outline-light.active,
    .btn.btn-outline-light.focus {
        background-color: #f8f9fc !important;
    }

    .btn.btn-icon {
        height: 36px;
        width: 36px;
        line-height: 34px;
        padding: 0;
    }

    .btn.btn-icon .icons {
        height: 16px;
        width: 16px;
        font-size: 16px;
    }

    .btn.btn-icon.btn-lg {
        height: 48px;
        width: 48px;
        line-height: 46px;
    }

    .btn.btn-icon.btn-lg .icons {
        height: 20px;
        width: 20px;
        font-size: 20px;
    }

    .btn.btn-icon.btn-sm {
        height: 30px;
        width: 30px;
        line-height: 28px;
    }

    button:not(:disabled) {
        outline: none;
    }

    .shadow {
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15) !important;
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15) !important;
    }

    .shadow-lg {
        -webkit-box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15) !important;
        box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15) !important;
    }

    .shadow-md {
        -webkit-box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
    }

    .badge-primary {
        background-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .badge-outline-primary {
        background-color: transparent !important;
        color: {{ $settings->website_theme }} !important;
        border: 1px solid{{ $settings->website_theme }} !important;
    }

    .badge-soft-primary {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
    }

    .badge-secondary {
        background-color: #5a6d90 !important;
        color: #fff !important;
    }

    .badge-outline-secondary {
        background-color: transparent !important;
        color: #5a6d90 !important;
        border: 1px solid #5a6d90 !important;
    }

    .badge-soft-secondary {
        background-color: rgba(90, 109, 144, 0.1) !important;
        border: 1px solid rgba(90, 109, 144, 0.1) !important;
        color: #5a6d90 !important;
    }

    .badge-success {
        background-color: #2eca8b !important;
        color: #fff !important;
    }

    .badge-outline-success {
        background-color: transparent !important;
        color: #2eca8b !important;
        border: 1px solid #2eca8b !important;
    }

    .badge-soft-success {
        background-color: rgba(46, 202, 139, 0.1) !important;
        border: 1px solid rgba(46, 202, 139, 0.1) !important;
        color: #2eca8b !important;
    }

    .badge-warning {
        background-color: #f17425 !important;
        color: #fff !important;
    }

    .badge-outline-warning {
        background-color: transparent !important;
        color: #f17425 !important;
        border: 1px solid #f17425 !important;
    }

    .badge-soft-warning {
        background-color: rgba(241, 116, 37, 0.1) !important;
        border: 1px solid rgba(241, 116, 37, 0.1) !important;
        color: #f17425 !important;
    }

    .badge-info {
        background-color: #17a2b8 !important;
        color: #fff !important;
    }

    .badge-outline-info {
        background-color: transparent !important;
        color: #17a2b8 !important;
        border: 1px solid #17a2b8 !important;
    }

    .badge-soft-info {
        background-color: rgba(23, 162, 184, 0.1) !important;
        border: 1px solid rgba(23, 162, 184, 0.1) !important;
        color: #17a2b8 !important;
    }

    .badge-danger {
        background-color: #e43f52 !important;
        color: #fff !important;
    }

    .badge-outline-danger {
        background-color: transparent !important;
        color: #e43f52 !important;
        border: 1px solid #e43f52 !important;
    }

    .badge-soft-danger {
        background-color: rgba(228, 63, 82, 0.1) !important;
        border: 1px solid rgba(228, 63, 82, 0.1) !important;
        color: #e43f52 !important;
    }

    .badge-dark {
        background-color: #3c4858 !important;
        color: #fff !important;
    }

    .badge-outline-dark {
        background-color: transparent !important;
        color: #3c4858 !important;
        border: 1px solid #3c4858 !important;
    }

    .badge-soft-dark {
        background-color: rgba(60, 72, 88, 0.1) !important;
        border: 1px solid rgba(60, 72, 88, 0.1) !important;
        color: #3c4858 !important;
    }

    .badge-muted {
        background-color: #8492a6 !important;
        color: #fff !important;
    }

    .badge-outline-muted {
        background-color: transparent !important;
        color: #8492a6 !important;
        border: 1px solid #8492a6 !important;
    }

    .badge-soft-muted {
        background-color: rgba(132, 146, 166, 0.1) !important;
        border: 1px solid rgba(132, 146, 166, 0.1) !important;
        color: #8492a6 !important;
    }

    .badge-light {
        background-color: #f8f9fc !important;
        color: #fff !important;
    }

    .badge-outline-light {
        background-color: transparent !important;
        color: #f8f9fc !important;
        border: 1px solid #f8f9fc !important;
    }

    .badge-soft-light {
        background-color: rgba(248, 249, 252, 0.1) !important;
        border: 1px solid rgba(248, 249, 252, 0.1) !important;
        color: #f8f9fc !important;
    }

    .badge-blue {
        background-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .badge-outline-blue {
        background-color: transparent !important;
        color: {{ $settings->website_theme }} !important;
        border: 1px solid{{ $settings->website_theme }} !important;
    }

    .badge-soft-blue {
        background-color: rgba(47, 85, 212, 0.1) !important;
        border: 1px solid rgba(47, 85, 212, 0.1) !important;
        color: {{ $settings->website_theme }} !important;
    }

    .badge-footer {
        background-color: #202942 !important;
        color: #fff !important;
    }

    .badge-outline-footer {
        background-color: transparent !important;
        color: #202942 !important;
        border: 1px solid #202942 !important;
    }

    .badge-soft-footer {
        background-color: rgba(32, 41, 66, 0.1) !important;
        border: 1px solid rgba(32, 41, 66, 0.1) !important;
        color: #202942 !important;
    }

    .badge {
        display: inline-block;
        letter-spacing: 0.5px;
        padding: 4px 8px;
        font-weight: 600;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
    }

    .badge.badge-light {
        color: #3c4858 !important;
        background-color: #f8f9fc !important;
    }

    .badge.badge-outline-light {
        color: #3c4858 !important;
        border: 1px solid #fff !important;
        background-color: transparent !important;
    }

    .badge.badge-pill {
        border-radius: 12px;
    }

    .badge:focus,
    .badge.focus {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .dropdown-primary .dropdown-menu .dropdown-item:hover,
    .dropdown-primary .dropdown-menu .dropdown-item.active,
    .dropdown-primary .dropdown-menu .dropdown-item:active,
    .dropdown-primary .dropdown-menu .dropdown-item.focus,
    .dropdown-primary .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: {{ $settings->website_theme }} !important;
    }

    .dropdown-secondary .dropdown-menu .dropdown-item:hover,
    .dropdown-secondary .dropdown-menu .dropdown-item.active,
    .dropdown-secondary .dropdown-menu .dropdown-item:active,
    .dropdown-secondary .dropdown-menu .dropdown-item.focus,
    .dropdown-secondary .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #5a6d90 !important;
    }

    .dropdown-success .dropdown-menu .dropdown-item:hover,
    .dropdown-success .dropdown-menu .dropdown-item.active,
    .dropdown-success .dropdown-menu .dropdown-item:active,
    .dropdown-success .dropdown-menu .dropdown-item.focus,
    .dropdown-success .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #2eca8b !important;
    }

    .dropdown-warning .dropdown-menu .dropdown-item:hover,
    .dropdown-warning .dropdown-menu .dropdown-item.active,
    .dropdown-warning .dropdown-menu .dropdown-item:active,
    .dropdown-warning .dropdown-menu .dropdown-item.focus,
    .dropdown-warning .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #f17425 !important;
    }

    .dropdown-info .dropdown-menu .dropdown-item:hover,
    .dropdown-info .dropdown-menu .dropdown-item.active,
    .dropdown-info .dropdown-menu .dropdown-item:active,
    .dropdown-info .dropdown-menu .dropdown-item.focus,
    .dropdown-info .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #17a2b8 !important;
    }

    .dropdown-danger .dropdown-menu .dropdown-item:hover,
    .dropdown-danger .dropdown-menu .dropdown-item.active,
    .dropdown-danger .dropdown-menu .dropdown-item:active,
    .dropdown-danger .dropdown-menu .dropdown-item.focus,
    .dropdown-danger .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #e43f52 !important;
    }

    .dropdown-dark .dropdown-menu .dropdown-item:hover,
    .dropdown-dark .dropdown-menu .dropdown-item.active,
    .dropdown-dark .dropdown-menu .dropdown-item:active,
    .dropdown-dark .dropdown-menu .dropdown-item.focus,
    .dropdown-dark .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #3c4858 !important;
    }

    .dropdown-muted .dropdown-menu .dropdown-item:hover,
    .dropdown-muted .dropdown-menu .dropdown-item.active,
    .dropdown-muted .dropdown-menu .dropdown-item:active,
    .dropdown-muted .dropdown-menu .dropdown-item.focus,
    .dropdown-muted .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #8492a6 !important;
    }

    .dropdown-light .dropdown-menu .dropdown-item:hover,
    .dropdown-light .dropdown-menu .dropdown-item.active,
    .dropdown-light .dropdown-menu .dropdown-item:active,
    .dropdown-light .dropdown-menu .dropdown-item.focus,
    .dropdown-light .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #f8f9fc !important;
    }

    .dropdown-blue .dropdown-menu .dropdown-item:hover,
    .dropdown-blue .dropdown-menu .dropdown-item.active,
    .dropdown-blue .dropdown-menu .dropdown-item:active,
    .dropdown-blue .dropdown-menu .dropdown-item.focus,
    .dropdown-blue .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: {{ $settings->website_theme }} !important;
    }

    .dropdown-footer .dropdown-menu .dropdown-item:hover,
    .dropdown-footer .dropdown-menu .dropdown-item.active,
    .dropdown-footer .dropdown-menu .dropdown-item:active,
    .dropdown-footer .dropdown-menu .dropdown-item.focus,
    .dropdown-footer .dropdown-menu .dropdown-item:focus {
        background-color: transparent;
        color: #202942 !important;
    }

    .btn-group .dropdown-toggle:after {
        content: "";
        position: relative;
        right: -4px;
        top: -2px;
        border: solid #fff;
        border-radius: 0.5px;
        border-width: 0 2px 2px 0;
        padding: 3px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        margin-left: 0;
        vertical-align: 0;
    }

    .btn-group .dropdown-menu {
        margin-top: 10px;
        border: 0;
        border-radius: 5px;
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    .btn-group .dropdown-menu:before {
        content: "";
        position: absolute;
        top: 2px;
        left: 45px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: 7px solid #495057;
        border-radius: 0.5px;
        border-color: transparent transparent #fff #fff;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        -webkit-box-shadow: -2px 2px 2px -1px rgba(22, 28, 45, 0.15);
        box-shadow: -2px 2px 2px -1px rgba(22, 28, 45, 0.15);
    }

    .alert-primary {
        background-color: rgba(47, 85, 212, 0.9);
        color: #fff;
        border-color: {{ $settings->website_theme }};
    }

    .alert-primary .alert-link {
        color: #122258;
    }

    .alert-outline-primary {
        background-color: #fff;
        color: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }};
    }

    .alert-secondary {
        background-color: rgba(90, 109, 144, 0.9);
        color: #fff;
        border-color: #5a6d90;
    }

    .alert-secondary .alert-link {
        color: #1f2632;
    }

    .alert-outline-secondary {
        background-color: #fff;
        color: #5a6d90;
        border-color: #5a6d90;
    }

    .alert-success {
        background-color: rgba(46, 202, 139, 0.9);
        color: #fff;
        border-color: #2eca8b;
    }

    .alert-success .alert-link {
        color: #124d35;
    }

    .alert-outline-success {
        background-color: #fff;
        color: #2eca8b;
        border-color: #2eca8b;
    }

    .alert-warning {
        background-color: rgba(241, 116, 37, 0.9);
        color: #fff;
        border-color: #f17425;
    }

    .alert-warning .alert-link {
        color: #753208;
    }

    .alert-outline-warning {
        background-color: #fff;
        color: #f17425;
        border-color: #f17425;
    }

    .alert-info {
        background-color: rgba(23, 162, 184, 0.9);
        color: #fff;
        border-color: #17a2b8;
    }

    .alert-info .alert-link {
        color: #062a30;
    }

    .alert-outline-info {
        background-color: #fff;
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .alert-danger {
        background-color: rgba(228, 63, 82, 0.9);
        color: #fff;
        border-color: #e43f52;
    }

    .alert-danger .alert-link {
        color: #79111d;
    }

    .alert-outline-danger {
        background-color: #fff;
        color: #e43f52;
        border-color: #e43f52;
    }

    .alert-dark {
        background-color: rgba(60, 72, 88, 0.9);
        color: #fff;
        border-color: #3c4858;
    }

    .alert-dark .alert-link {
        color: #000;
    }

    .alert-outline-dark {
        background-color: #fff;
        color: #3c4858;
        border-color: #3c4858;
    }

    .alert-muted {
        background-color: rgba(132, 146, 166, 0.9);
        color: #fff;
        border-color: #8492a6;
    }

    .alert-muted .alert-link {
        color: #3d4654;
    }

    .alert-outline-muted {
        background-color: #fff;
        color: #8492a6;
        border-color: #8492a6;
    }

    .alert-light {
        background-color: rgba(248, 249, 252, 0.9);
        color: #fff;
        border-color: #f8f9fc;
    }

    .alert-light .alert-link {
        color: #8d9dce;
    }

    .alert-outline-light {
        background-color: #fff;
        color: #f8f9fc;
        border-color: #f8f9fc;
    }

    .alert-blue {
        background-color: rgba(47, 85, 212, 0.9);
        color: #fff;
        border-color: {{ $settings->website_theme }};
    }

    .alert-blue .alert-link {
        color: #122258;
    }

    .alert-outline-blue {
        background-color: #fff;
        color: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }};
    }

    .alert-footer {
        background-color: rgba(32, 41, 66, 0.9);
        color: #fff;
        border-color: #202942;
    }

    .alert-footer .alert-link {
        color: #000;
    }

    .alert-outline-footer {
        background-color: #fff;
        color: #202942;
        border-color: #202942;
    }

    .alert {
        padding: 8px 15px;
        border-radius: 6px;
        font-size: 14px;
    }

    .alert.alert-light {
        background-color: #f8f9fc;
        color: #3c4858;
        border-color: #dee2e6;
    }

    .alert.alert-dismissible {
        padding-right: 30px;
    }

    .alert.alert-dismissible .close {
        top: -2px;
        right: -10px;
        font-size: 16px !important;
    }

    .alert.alert-pills {
        border-radius: 30px;
        display: inline-block;
    }

    .alert.alert-pills .content {
        font-weight: 600;
    }

    .page-next-level .title {
        font-size: 28px;
        letter-spacing: 1px;
    }

    .page-next-level .page-next {
        position: relative;
        top: 110px;
        z-index: 99;
    }

    @media (max-width: 768px) {
        .page-next-level .page-next {
            top: 70px;
        }
    }

    .breadcrumb {
        letter-spacing: 0.5px;
        padding: 8px 24px;
        display: block;
    }

    .breadcrumb .breadcrumb-item {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 700;
        padding-left: 0;
        display: inline-block;
    }

    .breadcrumb .breadcrumb-item a {
        color: #3c4858;
    }

    .breadcrumb .breadcrumb-item a:hover {
        color: {{ $settings->website_theme }};
    }

    .breadcrumb .breadcrumb-item.active {
        color: {{ $settings->website_theme }};
    }

    .breadcrumb .breadcrumb-item:before {
        content: "";
    }

    .breadcrumb .breadcrumb-item:after {
        content: "\F0142" !important;
        font-size: 14px;
        color: #3c4858;
        font-family: "Material Design Icons";
        padding-left: 5px;
    }

    .breadcrumb .breadcrumb-item:last-child:after {
        display: none;
    }

    .pagination .page-item:first-child .page-link {
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .pagination .page-item:last-child .page-link {
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
    }

    .pagination .page-item .page-link {
        color: #3c4858;
        border: 1px solid #dee2e6;
        padding: 10px 15px;
        font-size: 14px;
    }

    .pagination .page-item .page-link:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .pagination .page-item .page-link:hover {
        color: #fff;
        background: rgba(47, 85, 212, 0.9);
        border-color: rgba(47, 85, 212, 0.9);
    }

    .pagination .page-item.active .page-link {
        color: #fff;
        background: {{ $settings->website_theme }} !important;
        border-color: {{ $settings->website_theme }};
        cursor: not-allowed;
    }

    .avatar.avatar-ex-sm {
        max-height: 25px;
    }

    .avatar.avatar-md-sm {
        height: 45px;
        width: 45px;
    }

    .avatar.avatar-small {
        height: 65px;
        width: 65px;
    }

    .avatar.avatar-md-md {
        height: 80px;
        width: 80px;
    }

    .avatar.avatar-medium {
        height: 110px;
        width: 110px;
    }

    .avatar.avatar-large {
        height: 140px;
        width: 140px;
    }

    .avatar.avatar-ex-large {
        height: 180px;
        width: 180px;
    }

    .faq-container .question {
        font-size: 20px;
    }

    .faq-content .card .faq .card-header {
        padding-right: 40px !important;
    }

    .faq-content .card a.faq[data-toggle="collapse"] {
        background-color: #fff;
        color: {{ $settings->website_theme }};
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
    }

    .faq-content .card a.faq[data-toggle="collapse"]:before {
        content: "\F0143";
        display: block;
        font-family: "Material Design Icons";
        font-size: 18px;
        color: {{ $settings->website_theme }};
        position: absolute;
        right: 20px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .faq-content .card a.faq[data-toggle="collapse"].collapsed {
        background-color: #fff;
        color: #3c4858 !important;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
    }

    .faq-content .card a.faq[data-toggle="collapse"].collapsed:before {
        top: 15px;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        color: #3c4858 !important;
    }

    .nav-pills {
        margin-bottom: 15px;
        background: #f4f6fa;
    }

    .nav-pills .nav-link {
        color: #495057 !important;
        padding: 5px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .nav-pills .nav-link.nav-link-alt {
        color: #fff !important;
    }

    .nav-pills .nav-link.nav-link-alt.active {
        background: #3c4858 !important;
    }

    .nav-pills .nav-link.active {
        background: {{ $settings->website_theme }};
        color: #fff !important;
    }

    .nav-pills .nav-link.active .tab-para {
        color: rgba(255, 255, 255, 0.65) !important;
    }

    .progress-box .title {
        font-size: 15px;
    }

    .progress-box .progress {
        height: 8px;
        overflow: visible;
    }

    .progress-box .progress .progress-bar {
        border-radius: 6px;
        -webkit-animation: animate-positive 3s;
        animation: animate-positive 3s;
        overflow: visible !important;
    }

    .progress-box .progress .progress-value {
        position: absolute;
        top: -25px;
        right: -15px;
        font-size: 13px;
    }

    @-webkit-keyframes animate-positive {
        0% {
            width: 0;
        }
    }

    @keyframes animate-positive {
        0% {
            width: 0;
        }
    }

    .blockquote {
        border-left: 3px solid #dee2e6;
        border-radius: 6px;
        font-size: 16px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 700;
    }

    .form-group .form-control {
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: #fff;
        border: 1px solid #dee2e6;
        color: #3c4858;
        height: 42px;
        font-size: 13px;
        border-radius: 6px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .form-group .form-control:focus,
    .form-group .form-control.active {
        border-color: {{ $settings->website_theme }};
    }

    .form-group textarea {
        height: 120px !important;
    }

    .form-group textarea.form-control {
        line-height: 25px;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: transparent;
        opacity: 1;
    }

    .custom-control-input:checked~.custom-control-label:before {
        color: #fff;
        border-color: {{ $settings->website_theme }};
        background-color: {{ $settings->website_theme }};
    }

    .custom-control-input:focus~.custom-control-label::before,
    .form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: {{ $settings->website_theme }};
    }

    .custom-control-label {
        cursor: pointer;
    }

    .custom-control-label:before,
    .custom-control-label:after {
        top: 2px;
    }

    .custom-switch .custom-control-label:after {
        top: 4px;
    }

    .subcribe-form input {
        padding: 14px 20px;
        width: 100%;
        color: #3c4858 !important;
        border: none;
        outline: none !important;
        padding-right: 160px;
        padding-left: 30px;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .subcribe-form button {
        position: absolute;
        top: 6px;
        right: 6px;
        outline: none !important;
    }

    .subcribe-form form {
        position: relative;
        max-width: 600px;
        margin: 0px auto;
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive .table td,
    .table-responsive .table th {
        vertical-align: middle;
    }

    .table-responsive .table.table-nowrap th,
    .table-responsive .table.table-nowrap td {
        white-space: nowrap;
    }

    .table-responsive .table-center th {
        vertical-align: middle !important;
    }

    .table-responsive .table-center tbody tr:hover {
        color: #3c4858;
        background-color: #f8f9fa;
    }

    .table-responsive .table-center.invoice-tb th,
    .table-responsive .table-center.invoice-tb td {
        text-align: end;
    }

    .modal-open {
        padding-right: 0 !important;
    }

    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: linear-gradient(45deg, #fff, #fff);
        z-index: 9999999;
    }

    #preloader #status {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    #preloader #status .spinner {
        width: 40px;
        height: 40px;
        position: relative;
        margin: 100px auto;
    }

    #preloader #status .spinner .double-bounce1,
    #preloader #status .spinner .double-bounce2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: {{ $settings->website_theme }};
        opacity: 0.6;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-animation: sk-bounce 2s infinite ease-in-out;
        animation: sk-bounce 2s infinite ease-in-out;
    }

    #preloader #status .spinner .double-bounce2 {
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }

    @-webkit-keyframes sk-bounce {

        0%,
        100% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes sk-bounce {

        0%,
        100% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .social-icon li a {
        color: #3c4858;
        border: 1px solid #3c4858;
        display: inline-block;
        height: 32px;
        width: 32px;
        line-height: 28px;
        text-align: center;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
        overflow: hidden;
        position: relative;
    }

    .social-icon li a .fea-social {
        stroke-width: 2;
    }

    .social-icon li a:hover {
        background-color: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .social-icon li a:hover .fea-social {
        fill: {{ $settings->website_theme }};
    }

    .social-icon.social li a {
        color: #adb5bd;
        border-color: #adb5bd;
    }

    .back-to-top {
        z-index: 99;
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .back-to-top .icons {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .back-to-top:hover {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .back-to-top:hover .icons {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .back-to-home {
        position: fixed;
        top: 4%;
        right: 2%;
        z-index: 1;
    }

    .sticky-bar {
        position: -webkit-sticky;
        position: sticky;
        top: 80px;
    }

    .fea {
        stroke-width: 1.8;
    }

    .fea.icon-sm {
        height: 16px;
        width: 16px;
    }

    .fea.icon-ex-md {
        height: 20px;
        width: 20px;
    }

    .fea.icon-m-md {
        height: 28px;
        width: 28px;
    }

    .fea.icon-md {
        height: 35px;
        width: 35px;
    }

    .fea.icon-lg {
        height: 42px;
        width: 42px;
    }

    .fea.icon-ex-lg {
        height: 52px;
        width: 52px;
    }

    [class^="uil-"]:before,
    [class*=" uil-"]:before {
        margin: 0;
    }

    .uim-svg {
        vertical-align: 0 !important;
    }

    @media (max-width: 768px) {
        .display-1 {
            font-size: 56px !important;
        }

        .display-2 {
            font-size: 50px !important;
        }

        .display-3 {
            font-size: 42px !important;
        }

        .display-4 {
            font-size: 36px !important;
        }
    }

    body {
        font-family: "Nunito", sans-serif;
        overflow-x: hidden !important;
        font-size: 16px;
        color: #161c2d;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: "Nunito", sans-serif;
        line-height: 1.5;
        font-weight: 600;
    }

    ::-moz-selection {
        background: rgba(47, 85, 212, 0.9);
        color: #fff;
    }

    ::selection {
        background: rgba(47, 85, 212, 0.9);
        color: #fff;
    }

    a {
        text-decoration: none !important;
    }

    p {
        line-height: 1.6;
    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    @media (max-width: 768px) {
        .section {
            padding: 60px 0;
        }
    }

    .section-two {
        padding: 60px 0;
        position: relative;
    }

    .bg-overlay {
        background-color: rgba(60, 72, 88, 0.7);
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
    }

    .bg-overlay-gradient {
        background-color: rgba(47, 85, 212, 0.6);
    }

    .bg-overlay-white {
        background-color: rgba(255, 255, 255, 0.5);
    }

    .bg-overlay-gradient2 {
        background-image: -webkit-gradient(linear,
                left top,
                right top,
                from(#2eca8b),
                color-stop(#{{ $settings->website_theme }}),
                to(#2eca8b));
        background-image: linear-gradient(90deg, #2eca8b, {{ $settings->website_theme }}, #2eca8b);
        opacity: 0.5;
    }

    .title-heading {
        line-height: 20px;
    }

    .title-heading .heading {
        font-size: 42px !important;
        font-weight: 700;
        color: #000;
        max-width: 400px;
    }

    @media (max-width: 768px) {
        .title-heading .heading {
            font-size: 35px !important;
        }
    }

    .title-heading .para-desc {
        font-size: 22px;
        font-weight: 700;
    }

    .title-heading .para-desck {
        font-size: 19px;
        font-weight: 600;
        max-width: 500px;
    }

    .section-title {
        position: relative;
    }

    .section-title .title {
        letter-spacing: 0.2px;
        font-size: 36px !important;
        font-weight: 700;
    }

    @media (max-width: 768px) {
        .section-title .title {
            font-size: 24px !important;
        }
    }

    .text-shadow-title {
        text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 4px 0 rgba(255, 255, 255, 0.4),
            0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff,
            -1px 1px 0 #fff;
    }

    .para-desc {
        max-width: 600px;
        font-size: 18px !important;
        font-weight: 500;
    }

    .mt-100 {
        margin-top: 100px;
    }

    .vici-cookie--badge {
        background: #fbfbfb;
        border: 1px solid #dfe3ff;
        box-shadow: 0 0 25px rgb(0 0 0 / 6%);
        border-radius: 10px;
        width: auto;
        position: fixed;
        bottom: 40px;
        padding: 20px 10px 20px 20px;
        height: 59px;
        left: 50%;
        transform: translateX(-50%);
        color: #000;
        font-size: 1rem;
        justify-content: space-between;
        z-index: 1000;
        transition: opacity 1s ease;
    }

    @media only screen and (max-width: 767px) {
        .vici-cookie--badge {
            position: fixed;
            bottom: 0 !important;
            border: 0;
            border-radius: 0;
            width: auto;
        }
    }

    .vici-cookie--badge .hidden {
        opacity: 0;
    }

    .vici-cookie--badge p {
        margin-right: 30px;
        white-space: nowrap;
        line-height: 1.28;
    }

    .vici-cookie--badge span {
        height: 40px;
        border-color: #dfffeb;
        background-color: #dfffeb;
        color: #1c8e51;
        font-size: 0.875rem;
    }

    .vici-cta {
        font-weight: 700;
        font-size: 16px;
        line-height: 1;
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 4px;
        justify-content: center;
        cursor: pointer;
        background: #1c8e51;
        border-radius: 10px;
        color: #fff;
        height: 48px;
        transition: transform 0.6s;
    }

    .shape {
        position: absolute;
        pointer-events: none;
        right: 0;
        bottom: -2px;
        left: 0;
    }

    .shape>svg {
        -webkit-transform: scale(2);
        transform: scale(2);
        width: 100%;
        height: auto;
        -webkit-transform-origin: top center;
        transform-origin: top center;
    }

    .shape.integration-hero {
        -webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        height: 250px;
        background: #fff;
    }

    @media (max-width: 768px) {
        .shape.integration-hero {
            height: 140px;
        }
    }

    @media (max-width: 425px) {
        .shape.integration-hero {
            height: 60px;
        }
    }

    @media (max-width: 425px) {
        .shape {
            bottom: -4px;
        }
    }

    .mover {
        -webkit-animation: mover 1s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
        }
    }

    @keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
        }
    }

    .feature-posts-placeholder {
        position: absolute;
        bottom: 0px;
        left: 0;
        right: 0;
        height: 66.6%;
    }

    @media (max-width: 425px) {
        .feature-posts-placeholder {
            height: 80%;
        }
    }

    .spin-anything {
        -webkit-animation: spinner-animation 5s linear infinite;
        animation: spinner-animation 5s linear infinite;
    }

    @-webkit-keyframes spinner-animation {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spinner-animation {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .seo-hero-widget {
        position: relative;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .seo-hero-widget:hover {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        z-index: 9;
    }

    .home-wrapper:before {
        content: "";
        position: absolute;
        bottom: 40rem;
        right: 0rem;
        width: 90rem;
        height: 35rem;
        -webkit-transform: rotate(78.75deg);
        transform: rotate(78.75deg);
        background: -webkit-gradient(linear,
                left top,
                right top,
                from(rgba(47, 85, 212, 0.3)),
                to(transparent));
        background: linear-gradient(90deg, rgba(47, 85, 212, 0.3), transparent);
        z-index: 1;
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .home-wrapper:before {
            right: -20rem;
        }
    }

    @media (min-width: 426px) and (max-width: 768px) {
        .home-wrapper:before {
            right: -15rem;
            width: 70rem;
            height: 25rem;
        }
    }

    @media (max-width: 425px) {
        .home-wrapper:before {
            right: -25rem;
        }
    }

    @media (min-width: 768px) {
        .margin-top-100 {
            margin-top: 100px;
        }
    }

    @media (max-width: 768px) {
        .mt-60 {
            margin-top: 60px;
        }
    }

    #topnav {
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        z-index: 1030;
        background-color: transparent;
        border: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #topnav .logo {
        float: left;
        color: #3c4858 !important;
    }

    #topnav .logo .l-dark {
        display: none;
    }

    #topnav .logo .l-light {
        display: inline-block;
    }

    #topnav .has-submenu.active a {
        color: #fff;
    }

    #topnav .has-submenu.active .submenu li.active>a {
        color: {{ $settings->website_theme }} !important;
    }

    #topnav .has-submenu.active.active .menu-arrow {
        border-color: {{ $settings->website_theme }};
    }

    #topnav .has-submenu {
        position: relative;
    }

    #topnav .has-submenu .submenu .submenu-arrow {
        border: solid #3c4858;
        border-radius: 0.5px;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        position: absolute;
        right: 20px;
        top: 14px;
    }

    #topnav .has-submenu .submenu .has-submenu:hover .submenu-arrow {
        border-color: {{ $settings->website_theme }};
    }

    #topnav .navbar-toggle {
        border: 0;
        position: relative;
        width: 60px;
        padding: 0;
        margin: 0;
        cursor: pointer;
    }

    #topnav .navbar-toggle .lines {
        width: 25px;
        display: block;
        position: relative;
        margin: 28px 20px;
        height: 18px;
    }

    #topnav .navbar-toggle span {
        height: 2px;
        width: 100%;
        background-color: #3c4858;
        display: block;
        margin-bottom: 5px;
        -webkit-transition: -webkit-transform 0.5s ease;
        transition: -webkit-transform 0.5s ease;
        transition: transform 0.5s ease;
        transition: transform 0.5s ease, -webkit-transform 0.5s ease;
    }

    #topnav .navbar-toggle span:last-child {
        margin-bottom: 0;
    }

    #topnav .buy-button {
        float: right;
        line-height: 68px;
    }

    #topnav .buy-button>li {
        line-height: initial;
    }

    #topnav .buy-button .login-btn-primary {
        display: none;
    }

    #topnav .buy-button .login-btn-light {
        display: inline-block;
    }

    #topnav .buy-button .dropdown .dropdown-toggle:after,
    #topnav .buy-menu-btn .dropdown .dropdown-toggle:after {
        display: none;
    }

    #topnav .navbar-toggle.open span {
        position: absolute;
    }

    #topnav .navbar-toggle.open span:first-child {
        top: 6px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #topnav .navbar-toggle.open span:nth-child(2) {
        visibility: hidden;
    }

    #topnav .navbar-toggle.open span:last-child {
        width: 100%;
        top: 6px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    #topnav .navbar-toggle.open span:hover {
        background-color: {{ $settings->website_theme }};
    }

    #topnav .navbar-toggle:hover,
    #topnav .navbar-toggle:focus,
    #topnav .navbar-toggle .navigation-menu>li>a:hover,
    #topnav .navbar-toggle:focus {
        background-color: transparent;
    }

    #topnav .navigation-menu {
        list-style: none;
        margin: 0;
        padding: 0 2px;
    }

    #topnav .navigation-menu>li {
        float: left;
        display: block;
        position: relative;
        margin: 0 5px;
    }

    #topnav .navigation-menu>li:hover>a,
    #topnav .navigation-menu>li.active>a {
        color: {{ $settings->website_theme }} !important;
    }

    #topnav .navigation-menu>li>a {
        display: block;
        color: #3c4858;
        font-size: 17px;
        background-color: transparent !important;
        font-weight: 600;
        letter-spacing: 1px;
        line-height: 24px;
        text-transform: capitalize;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        font-family: "Nunito", sans-serif;
        padding-left: 10px;
        padding-right: 10px;
    }

    #topnav .navigation-menu>li>a:hover,
    #topnav .navigation-menu>li>a:active {
        color: {{ $settings->website_theme }};
    }

    #topnav .navigation-menu .has-submenu .menu-arrow {
        border: solid #3c4858;
        border-radius: 0.5px;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        position: absolute;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        right: -1px;
        top: 30px;
    }

    #topnav .navigation-menu .has-submenu:hover .menu-arrow {
        -webkit-transform: rotate(225deg);
        transform: rotate(225deg);
    }

    #topnav .menu-extras {
        float: right;
    }

    #topnav.scroll {
        background-color: #fff;
        border: none;
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    #topnav.scroll .navigation-menu>li>a {
        color: #3c4858;
    }

    #topnav.scroll .navigation-menu>li>.menu-arrow {
        border-color: #3c4858;
    }

    #topnav.scroll .navigation-menu>li:hover>a,
    #topnav.scroll .navigation-menu>li.active>a {
        color: {{ $settings->website_theme }};
    }

    #topnav.scroll .navigation-menu>li:hover>.menu-arrow,
    #topnav.scroll .navigation-menu>li.active>.menu-arrow {
        border-color: {{ $settings->website_theme }};
    }

    #topnav.defaultscroll.dark-menubar .logo {
        line-height: 70px;
    }

    #topnav.defaultscroll.scroll .logo {
        line-height: 62px;
    }

    #topnav.defaultscroll.scroll.dark-menubar .logo {
        line-height: 62px;
    }

    #topnav.nav-sticky {
        background: #fff;
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    #topnav.nav-sticky .navigation-menu.nav-light>li>a {
        color: #3c4858;
    }

    #topnav.nav-sticky .navigation-menu.nav-light>li.active>a {
        color: {{ $settings->website_theme }} !important;
    }

    #topnav.nav-sticky .navigation-menu.nav-light>li:hover>.menu-arrow,
    #topnav.nav-sticky .navigation-menu.nav-light>li.active>.menu-arrow {
        border-color: {{ $settings->website_theme }} !important;
    }

    #topnav.nav-sticky .navigation-menu.nav-light>li:hover>a,
    #topnav.nav-sticky .navigation-menu.nav-light>li.active>a {
        color: {{ $settings->website_theme }} !important;
    }

    #topnav.nav-sticky .navigation-menu.nav-light .has-submenu .menu-arrow {
        border-color: #3c4858;
    }

    #topnav.nav-sticky .buy-button .login-btn-primary {
        display: inline-block;
    }

    #topnav.nav-sticky .buy-button .login-btn-light {
        display: none;
    }

    #topnav.nav-sticky .logo .l-dark {
        display: inline-block;
    }

    #topnav.nav-sticky .logo .l-light {
        display: none;
    }

    .logo {
        font-weight: 700;
        font-size: 24px;
        padding: 0 0 6px;
        letter-spacing: 1px;
        line-height: 68px;
    }

    @media (min-width: 992px) {
        #topnav .navigation-menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        #topnav .navigation-menu>.has-submenu>.submenu>.has-submenu>.submenu::before {
            top: 20px;
            margin-left: -35px;
            -webkit-box-shadow: 1px 1px 0px 0px rgba(60, 72, 88, 0.15);
            box-shadow: 1px 1px 0px 0px rgba(60, 72, 88, 0.15);
            border-color: transparent #fff #fff transparent;
        }

        #topnav .navigation-menu>.has-submenu:hover .menu-arrow {
            top: 33px !important;
        }

        #topnav .navigation-menu>.has-submenu.active .menu-arrow {
            top: 30px;
        }

        #topnav .navigation-menu>li .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            padding: 15px 0;
            list-style: none;
            min-width: 180px;
            visibility: hidden;
            opacity: 0;
            margin-top: 10px;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
            border-radius: 6px;
            background-color: #fff;
            -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
            box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        }

        #topnav .navigation-menu>li .submenu:before {
            content: "";
            position: absolute;
            top: 2px;
            left: 45px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 7px solid #495057;
            border-color: transparent transparent #fff #fff;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            -webkit-box-shadow: -2px 2px 2px -1px rgba(60, 72, 88, 0.15);
            box-shadow: -2px 2px 2px -1px rgba(60, 72, 88, 0.15);
        }

        #topnav .navigation-menu>li .submenu li {
            position: relative;
        }

        #topnav .navigation-menu>li .submenu li a {
            display: block;
            padding: 10px 20px;
            clear: both;
            white-space: nowrap;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-weight: 700;
            color: #3c4858 !important;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        #topnav .navigation-menu>li .submenu li a:hover {
            color: {{ $settings->website_theme }} !important;
        }

        #topnav .navigation-menu>li .submenu li ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        #topnav .navigation-menu>li .submenu.megamenu {
            white-space: nowrap;
            width: auto;
        }

        #topnav .navigation-menu>li .submenu.megamenu>li {
            overflow: hidden;
            min-width: 180px;
            display: inline-block;
            vertical-align: top;
        }

        #topnav .navigation-menu>li .submenu.megamenu>li .submenu {
            left: 100%;
            top: 0;
            margin-left: 10px;
            margin-top: -1px;
        }

        #topnav .navigation-menu>li .submenu>li .submenu {
            left: 106%;
            top: 0;
            margin-left: 10px;
            margin-top: -1px;
        }

        #topnav .navigation-menu>li>a {
            padding-top: 25px;
            padding-bottom: 25px;
            min-height: 62px;
        }

        #topnav .navigation-menu>li:hover>.menu-arrow {
            border-color: {{ $settings->website_theme }};
        }

        #topnav .navigation-menu>li:hover>a,
        #topnav .navigation-menu>li.active>a {
            color: {{ $settings->website_theme }} !important;
        }

        #topnav .navigation-menu>li.last-elements .submenu {
            left: auto;
            right: 0;
        }

        #topnav .navigation-menu>li.last-elements .submenu:before {
            left: auto;
            right: 10px;
        }

        #topnav .navigation-menu>li.last-elements .submenu>li.has-submenu .submenu {
            left: auto;
            right: 100%;
            margin-left: 0;
            margin-right: 10px;
        }

        #topnav .navigation-menu.nav-light>li>a {
            color: rgba(255, 255, 255, 0.5);
        }

        #topnav .navigation-menu.nav-light>li.active>a {
            color: #fff !important;
        }

        #topnav .navigation-menu.nav-light>li:hover>.menu-arrow {
            border-color: #fff !important;
        }

        #topnav .navigation-menu.nav-light>li:hover>a {
            color: #fff !important;
        }

        #topnav .navigation-menu.nav-light .has-submenu .menu-arrow {
            border-color: rgba(255, 255, 255, 0.5);
        }

        #topnav .navigation-menu.nav-light .has-submenu.active .menu-arrow {
            border-color: #fff !important;
        }

        #topnav .navigation-menu.nav-right {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        #topnav .navigation-menu.nav-left {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        #topnav .navigation-menu.nav-left>li.last-elements .submenu {
            left: 0 !important;
            right: auto !important;
        }

        #topnav .navigation-menu.nav-left>li.last-elements .submenu:before {
            left: 45px !important;
            right: auto !important;
        }

        #topnav .buy-button {
            padding-left: 15px;
            margin-left: 15px;
        }

        #topnav .navbar-toggle {
            display: none;
        }

        #topnav #navigation {
            display: block !important;
        }

        #topnav.scroll {
            top: 0;
        }

        #topnav.scroll .navigation-menu>li>a {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #topnav.scroll-active .navigation-menu>li>a {
            padding-top: 25px;
            padding-bottom: 25px;
        }
    }

    @media (max-width: 991px) {
        #topnav {
            background-color: #fff;
            -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
            box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
            min-height: 74px;
        }

        #topnav .logo .l-dark {
            display: inline-block !important;
        }

        #topnav .logo .l-light {
            display: none !important;
        }

        #topnav .container {
            width: auto;
        }

        #topnav #navigation {
            max-height: 400px;
        }

        #topnav .navigation-menu {
            float: none;
        }

        #topnav .navigation-menu>li {
            float: none;
        }

        #topnav .navigation-menu>li .submenu {
            display: none;
            list-style: none;
            padding-left: 20px;
            margin: 0;
        }

        #topnav .navigation-menu>li .submenu li a {
            display: block;
            position: relative;
            padding: 7px 15px;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.04em;
            font-weight: 700;
            color: #3c4858 !important;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        #topnav .navigation-menu>li .submenu.open {
            display: block;
        }

        #topnav .navigation-menu>li .submenu .submenu {
            display: none;
            list-style: none;
        }

        #topnav .navigation-menu>li .submenu .submenu.open {
            display: block;
        }

        #topnav .navigation-menu>li .submenu.megamenu>li>ul {
            list-style: none;
            padding-left: 0;
        }

        #topnav .navigation-menu>li .submenu.megamenu>li>ul>li>span {
            display: block;
            position: relative;
            padding: 10px 15px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 2px;
            color: #8492a6;
        }

        #topnav .navigation-menu>li>a {
            color: #3c4858;
            padding: 10px 20px;
        }

        #topnav .navigation-menu>li>a:after {
            position: absolute;
            right: 15px;
        }

        #topnav .navigation-menu>li>a:hover,
        #topnav .navigation-menu>li .submenu li a:hover,
        #topnav .navigation-menu>li.has-submenu.open>a {
            color: {{ $settings->website_theme }};
        }

        #topnav .menu-extras .menu-item {
            border-color: #8492a6;
        }

        #topnav .navbar-header {
            float: left;
        }

        #topnav .buy-button .login-btn-primary {
            display: inline-block !important;
        }

        #topnav .buy-button .login-btn-light {
            display: none;
        }

        #topnav .has-submenu .submenu .submenu-arrow {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            position: absolute;
            right: 20px;
            top: 12px;
        }

        #topnav .has-submenu.active a {
            color: {{ $settings->website_theme }};
        }

        #navigation {
            position: absolute;
            top: 74px;
            left: 0;
            width: 100%;
            display: none;
            height: auto;
            padding-bottom: 0;
            overflow: auto;
            border-top: 1px solid #f1f3f9;
            border-bottom: 1px solid #f1f3f9;
            background-color: #fff;
        }

        #navigation.open {
            display: block;
            overflow-y: auto;
        }
    }

    @media (max-width: 768px) {
        #topnav .navigation-menu .has-submenu .menu-arrow {
            right: 16px;
            top: 16px;
        }

        #topnav .buy-button {
            padding: 3px 0;
        }
    }

    @media (min-width: 768px) {
        #topnav .navigation-menu>li.has-submenu:hover>.submenu {
            visibility: visible;
            opacity: 1;
            margin-top: 0;
        }

        #topnav .navigation-menu>li.has-submenu:hover>.submenu>li.has-submenu:hover>.submenu {
            visibility: visible;
            opacity: 1;
            margin-left: 0;
            margin-right: 0;
        }

        .navbar-toggle {
            display: block;
        }
    }

    @media (max-width: 375px) {
        #topnav .buy-button {
            display: none;
        }

        #topnav .buy-menu-btn {
            display: block !important;
            margin: 0 10px;
            padding: 10px 20px;
        }

        #topnav .buy-menu-btn .dropdown .dropdown-menu.show {
            -webkit-transform: translate3d(0px, -54px, 0px) !important;
            transform: translate3d(0px, -54px, 0px) !important;
        }

        #topnav .navbar-toggle .lines {
            margin-right: 0 !important;
        }
    }

    .bg-home {
        height: 100vh;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .bg-half-260 {
        padding: 260px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .size {
        width: 800px;
    }

    .bg-half-170 {
        padding: 170px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .bg-half-100 {
        padding: 150px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .bg-half {
        padding: 184px 0 90px;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .bg-auth-home {
        padding: 142px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .gradient {
        background: {{ $settings->website_theme }} !important;
        background: linear-gradient(45deg, {{ $settings->website_theme }}, {{ $settings->website_theme }}) !important;
        opacity: 0.9;
    }

    .bg-circle-gradiant {
        background: radial-gradient(circle at 50% 50%,
                rgba(47, 85, 212, 0.1) 0%,
                rgba(47, 85, 212, 0.1) 33.333%,
                rgba(47, 85, 212, 0.3) 33.333%,
                rgba(47, 85, 212, 0.3) 66.666%,
                rgba(47, 85, 212, 0.5) 66.666%,
                rgba(47, 85, 212, 0.5) 99.999%);
    }

    .home-dashboard img {
        position: relative;
        top: 60px;
        z-index: 1;
    }

    @media (min-width: 768px) {
        .home-dashboard.onepage-hero {
            overflow: hidden;
        }
    }

    .classic-saas-image .bg-saas-shape:after {
        bottom: 3rem;
        left: 0;
        width: 75rem;
        height: 55rem;
        border-radius: 20rem;
        opacity: 0.9;
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }

    @media (max-width: 767px) {
        .classic-saas-image .bg-saas-shape:after {
            bottom: -5rem;
            left: 10rem;
            width: 30rem;
            height: 30rem;
            border-radius: 10rem;
        }
    }

    @media (max-width: 768px) {
        .classic-saas-image .bg-saas-shape img {
            max-width: 550px;
        }
    }

    @media (max-width: 767px) {
        .classic-saas-image .bg-saas-shape img {
            max-width: 100%;
            height: auto;
        }
    }

    .studio-home {
        padding: 7%;
    }

    .agency-wrapper:before {
        content: "";
        position: absolute;
        bottom: 22rem;
        right: 54rem;
        width: 90rem;
        height: 35rem;
        border-radius: 17rem;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        background-color: #f8f9fc;
        z-index: -1;
    }

    @media (max-width: 768px) {
        .agency-wrapper:before {
            right: 12rem;
        }
    }

    @media (max-width: 767px) {
        .agency-wrapper:before {
            right: 0;
        }
    }

    .bg-marketing {
        padding: 76px 0 120px;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .home-slider .carousel-control-next,
    .home-slider .carousel-control-prev {
        width: 5%;
    }

    .home-slider .carousel-item,
    .home-slider .carousel {
        height: 100vh;
        width: 100%;
    }

    .home-slider .carousel-item {
        background-position: center center;
        background-size: cover;
    }

    .home-slider .carousel-item.active {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .main-slider .slides .bg-slider {
        background-size: cover;
        height: 90vh;
        width: 100%;
        position: relative;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .main-slider .slides .bg-slider.shopping {
        height: 75vh;
    }

    .flex-control-paging li a {
        background: #fff;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .flex-control-paging li a.flex-active {
        background: {{ $settings->website_theme }};
        cursor: default;
        font-size: 17px;
        width: 15px;
        height: 15px;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .flex-control-nav {
        display: none;
    }

    .bg-animation-left:after {
        content: "";
        position: absolute;
        left: 0px;
        top: 0px;
        width: 70%;
        height: 100%;
        background: rgba(255, 255, 255, 0.85);
        -webkit-clip-path: polygon(0 0, 90% 0, 70% 100%, 0% 100%);
        clip-path: polygon(0 0, 90% 0, 70% 100%, 0% 100%);
    }

    @media (max-width: 767px) {
        .bg-animation-left:after {
            width: 100%;
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }
    }

    .bg-animation-left.dark-left:after {
        background: rgba(60, 72, 88, 0.6);
    }

    .bg-animation-left.crypto-home:after {
        background: {{ $settings->website_theme }};
        width: 80%;
        -webkit-clip-path: polygon(0 0, 100% 0, 50% 100%, 0% 100%);
        clip-path: polygon(0 0, 100% 0, 50% 100%, 0% 100%);
    }

    .bg-animation-left.task-management-home:after {
        background: url("../images/task/bg.png"){{ $settings->website_theme }};
        width: 100%;
        -webkit-clip-path: circle(65% at 40% 25%);
        clip-path: circle(65% at 40% 25%);
    }

    .bg-invoice {
        padding: 100px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .classic-app-image .bg-app-shape:after {
        bottom: 3rem;
        left: -8rem;
        width: 55rem;
        height: 35rem;
        border-radius: 20rem;
        -webkit-transform: rotate(120deg);
        transform: rotate(120deg);
        opacity: 0.9;
    }

    .classic-app-image .app-images {
        position: absolute;
        bottom: 60px;
        right: -20px;
    }

    .classic-app-image .bg-app-shape:after,
    .classic-saas-image .bg-saas-shape:after {
        content: " ";
        position: absolute;
        z-index: -1;
    }

    .classic-app-image .bg-app-shape:after,
    .classic-saas-image .bg-saas-shape:after {
        -webkit-box-shadow: 0 0 40px rgba(47, 85, 212, 0.5);
        box-shadow: 0 0 40px rgba(47, 85, 212, 0.5);
        background-color: {{ $settings->website_theme }};
    }

    .shape-before .shape-img {
        position: absolute;
        top: -50px;
        left: -35px;
        z-index: -1;
        height: auto;
        overflow: hidden;
    }

    .swiper-slider-hero .swiper-container,
    .swiper-slider-hero .swiper-slide .slide-inner {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .swiper-slider-hero .swiper-container .swiper-button-prev,
    .swiper-slider-hero .swiper-container .swiper-button-next {
        background: transparent;
        width: 35px;
        height: 35px;
        line-height: 35px;
        margin-top: -30px;
    }

    .swiper-slider-hero .swiper-container .swiper-button-prev:before,
    .swiper-slider-hero .swiper-container .swiper-button-next:before {
        font-family: "Material Design Icons";
        font-weight: 900;
        color: #fff;
    }

    .swiper-slider-hero .swiper-container .swiper-button-prev:hover,
    .swiper-slider-hero .swiper-container .swiper-button-next:hover {
        background: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }} !important;
    }

    .swiper-slider-hero .swiper-container .swiper-button-prev {
        left: 10px;
    }

    .swiper-slider-hero .swiper-container .swiper-button-prev:before {
        content: "\f0141";
    }

    .swiper-slider-hero .swiper-container .swiper-button-next {
        right: 10px;
    }

    .swiper-slider-hero .swiper-container .swiper-button-next:before {
        content: "\f0142";
    }

    .swiper-slider-hero .swiper-pagination-bullet {
        color: #f8f9fa;
        background: transparent;
    }

    .swiper-slider-hero .swiper-pagination-bullet-active {
        color: #fff;
    }

    .swiper-slider-hero .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-slider-hero .swiper-pagination-custom,
    .swiper-slider-hero .swiper-pagination-fraction {
        bottom: 45px;
    }

    .swiper-slider-hero .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 13px;
    }

    @media (min-width: 769px) {
        .bg-studio:after {
            content: "";
            position: absolute;
            right: 0px;
            top: 0px;
            width: 50%;
            height: 100%;
            background: #fff none repeat scroll 0 0;
            z-index: 2;
        }
    }

    @media (max-width: 768px) {
        .bg-half {
            padding: 169px 0 50px;
        }
    }

    @media (max-width: 767px) {

        .bg-home,
        .bg-half-170,
        .bg-half-260,
        .main-slider .slides .bg-slider,
        .bg-marketing,
        .swiper-slider-hero .swiper-container .swiper-slide {
            padding: 150px 0;
            height: auto;
        }
    }

    .features .icon {
        background: rgba(47, 85, 212, 0.1);
    }

    .features .image:before {
        content: "";
        position: absolute;
        bottom: 5px;
        left: 5px;
        width: 64px;
        height: 64px;
        border-radius: 6px;
        -webkit-transform: rotate(33.75deg);
        transform: rotate(33.75deg);
        background: linear-gradient(45deg, transparent, rgba(47, 85, 212, 0.1));
    }

    .features.feature-clean .icons i {
        height: 65px;
        width: 65px;
        line-height: 65px;
        background-color: rgba(47, 85, 212, 0.1);
    }

    .features.feature-clean .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .features .ride-image {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .features .ride-image img {
        border-radius: 100% 100% 100% 0;
    }

    .features:hover .image:before {
        background: rgba(47, 85, 212, 0.1);
        -webkit-animation: spinner-border 5s linear infinite !important;
        animation: spinner-border 5s linear infinite !important;
    }

    .features.fea-primary {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .features.fea-primary .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .features.fea-primary .content .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .features.fea-primary .big-icon {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 0;
        right: 0;
        opacity: 0.015;
        font-size: 180px;
    }

    .features.fea-primary:hover {
        -webkit-box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15);
        box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15);
        background-color: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .features.fea-primary:hover .icon2,
    .features.fea-primary:hover .para {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .features.fea-primary:hover .content,
    .features.fea-primary:hover .icon2 {
        z-index: 2;
    }

    .features.fea-primary:hover .big-icon {
        opacity: 0.05;
    }

    .features .title,
    .key-feature .title {
        font-size: 18px !important;
    }

    .features .icon,
    .key-feature .icon {
        height: 45px;
        width: 45px;
        line-height: 45px;
    }

    .key-feature {
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .key-feature .icon {
        background: linear-gradient(45deg, transparent, rgba(47, 85, 212, 0.15));
    }

    .key-feature:hover {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
    }

    .work-process {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-process .step,
    .work-process .step-icon {
        opacity: 0.06;
    }

    .work-process a {
        font-size: 15px;
    }

    .work-process.process-arrow:after {
        content: "";
        position: absolute;
        width: 60%;
        height: 40px;
        top: 80px;
        left: 80%;
        background: url("../images/process.png") center center no-repeat;
        z-index: 1;
    }

    @media (max-width: 767px) {
        .work-process.process-arrow:after {
            display: none;
        }
    }

    .work-process.process-arrow:hover {
        -webkit-transform: none !important;
        transform: none !important;
    }

    .work-process:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    .work-process.d-none-arrow:hover {
        -webkit-transform: none !important;
        transform: none !important;
    }

    .course-feature {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .course-feature .full-img {
        position: absolute;
        bottom: 50%;
        -webkit-transform: translateY(50%);
        transform: translateY(50%);
        left: 0;
        right: 0;
        opacity: 0;
        margin: 0 auto;
        z-index: -2;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        font-size: 250px;
    }

    .course-feature:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    .course-feature:hover .full-img {
        opacity: 0.05;
    }

    .features-absolute {
        position: relative;
        z-index: 2;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .features-absolute {
        margin: -200px 0 0px;
    }

    @media (max-width: 768px) {
        .features-absolute {
            margin: -140px 0 0;
        }
    }

    .features-absolute.blog-search {
        margin: -120px 0 0px;
    }

    @media (max-width: 768px) {
        .features-absolute.blog-search {
            margin: -90px 0 0px;
        }
    }

    .categories {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .categories:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    .categories a:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .app-feature-shape-right:after,
    .app-feature-shape-left:after {
        bottom: 0rem;
        width: 30rem;
        height: 40rem;
        border-radius: 10rem;
    }

    .app-feature-shape-right:after {
        left: 10rem;
        -webkit-transform: rotate(150deg);
        transform: rotate(150deg);
    }

    @media (max-width: 768px) {
        .app-feature-shape-right:after {
            left: 0;
        }
    }

    .app-feature-shape-left:after {
        right: 10rem;
        -webkit-transform: rotate(210deg);
        transform: rotate(210deg);
    }

    @media (max-width: 768px) {
        .app-feature-shape-left:after {
            right: 0;
        }
    }

    .app-subscribe {
        position: absolute;
        top: -200px;
    }

    @media (max-width: 767px) {
        .app-subscribe {
            position: relative;
            top: 0;
        }
    }

    .saas-feature-shape-left:after,
    .saas-feature-shape-right:after {
        bottom: -3rem;
        width: 35rem;
        height: 35rem;
        border-radius: 15rem;
        -webkit-transform: rotate(145deg);
        transform: rotate(145deg);
    }

    @media (max-width: 767px) {

        .saas-feature-shape-left:after,
        .saas-feature-shape-right:after {
            bottom: -1rem;
            width: 25rem;
            height: 25rem;
            border-radius: 10rem;
        }
    }

    .saas-feature-shape-left:after {
        left: -10rem;
    }

    .saas-feature-shape-right:after {
        right: -10rem;
    }

    .app-feature-shape-right:after,
    .app-feature-shape-left:after,
    .saas-feature-shape-left:after,
    .saas-feature-shape-right:after,
    .social-feature-left:after,
    .social-feature-right:after {
        background: rgba(47, 85, 212, 0.1);
        -webkit-box-shadow: 0 0 40px rgba(47, 85, 212, 0.1);
        box-shadow: 0 0 40px rgba(47, 85, 212, 0.1);
    }

    .app-feature-shape-right:after,
    .app-feature-shape-left:after,
    .saas-feature-shape-left:after,
    .saas-feature-shape-right:after,
    .social-feature-left:after,
    .social-feature-right:after {
        content: "";
        position: absolute;
        z-index: -1;
    }

    .social-feature-left:after,
    .social-feature-right:after {
        width: 450px;
        height: 520px;
        border-radius: 30px;
        bottom: -75px;
    }

    @media (max-width: 768px) {

        .social-feature-left:after,
        .social-feature-right:after {
            width: 300px;
            height: 400px;
            bottom: -65px;
        }
    }

    @media (max-width: 575px) {

        .social-feature-left:after,
        .social-feature-right:after {
            bottom: -35px;
        }
    }

    .social-feature-left:after {
        right: -200px;
    }

    @media (max-width: 575px) {
        .social-feature-left:after {
            right: 60px;
        }
    }

    .social-feature-right:after {
        left: -200px;
    }

    @media (max-width: 575px) {
        .social-feature-right:after {
            left: 60px;
        }
    }

    .explore-feature {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .explore-feature .icon {
        height: 80px;
        width: 80px;
        line-height: 80px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .explore-feature:hover {
        -webkit-box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15) !important;
        box-shadow: 0 10px 25px rgba(60, 72, 88, 0.15) !important;
    }

    .explore-feature:hover .icon,
    .explore-feature:hover .title {
        color: {{ $settings->website_theme }} !important;
    }

    .construction-img {
        position: absolute;
        bottom: 0;
        right: 20px;
    }

    .owl-theme .owl-dots .owl-dot span {
        background: {{ $settings->website_theme }} !important;
    }

    .customer-testi {
        cursor: e-resize;
    }

    .customer-testi .content:before {
        content: "";
        position: absolute;
        top: 30px;
        left: 0;
        margin-left: 13px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: 8px solid #3c4858;
        border-color: transparent #fff #fff transparent;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        -webkit-box-shadow: 2px 2px 2px -1px rgba(60, 72, 88, 0.15);
        box-shadow: 2px 2px 2px -1px rgba(60, 72, 88, 0.15);
    }

    .owl-theme .owl-dots .owl-dot span {
        border-radius: 3px;
        background: rgba(47, 85, 212, 0.5) !important;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots.clickable .owl-dot:hover span {
        background: {{ $settings->website_theme }} !important;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .owl-carousel .owl-item img {
        display: block;
        width: auto;
    }

    .slick-slider {
        overflow-x: hidden !important;
        cursor: pointer;
    }

    .pricing-rates {
        position: relative;
        z-index: 1;
        border-bottom: 3px solid #adb5bd !important;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .pricing-rates .price {
        font-weight: 400;
    }

    .pricing-rates.business-rate:hover {
        -webkit-transform: scale(1.03);
        transform: scale(1.03);
        z-index: 2;
        border-color: {{ $settings->website_theme }} !important;
        -webkit-box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        background-color: #fff !important;
    }

    .pricing-rates.business-rate:hover .title {
        color: {{ $settings->website_theme }};
    }

    .pricing-rates.starter-plan {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        z-index: 2;
        border-color: {{ $settings->website_theme }} !important;
    }

    @media (max-width: 767px) {
        .pricing-rates.starter-plan {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .pricing-rates.best-plan:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    .ribbon.ribbon-primary span {
        background-color: {{ $settings->website_theme }} !important;
    }

    .ribbon.ribbon-primary span:before {
        border-left-color: #222020;
        border-top-color: #222020;
    }

    .ribbon.ribbon-primary span:after {
        border-right-color: #222020;
        border-top-color: #222020;
    }

    .ribbon.ribbon-secondary span {
        background-color: #5a6d90 !important;
    }

    .ribbon.ribbon-secondary span:before {
        border-left-color: #465571;
        border-top-color: #465571;
    }

    .ribbon.ribbon-secondary span:after {
        border-right-color: #465571;
        border-top-color: #465571;
    }

    .ribbon.ribbon-success span {
        background-color: #2eca8b !important;
    }

    .ribbon.ribbon-success span:before {
        border-left-color: #25a06e;
        border-top-color: #25a06e;
    }

    .ribbon.ribbon-success span:after {
        border-right-color: #25a06e;
        border-top-color: #25a06e;
    }

    .ribbon.ribbon-warning span {
        background-color: #f17425 !important;
    }

    .ribbon.ribbon-warning span:before {
        border-left-color: #d55b0e;
        border-top-color: #d55b0e;
    }

    .ribbon.ribbon-warning span:after {
        border-right-color: #d55b0e;
        border-top-color: #d55b0e;
    }

    .ribbon.ribbon-info span {
        background-color: #17a2b8 !important;
    }

    .ribbon.ribbon-info span:before {
        border-left-color: #117a8b;
        border-top-color: #117a8b;
    }

    .ribbon.ribbon-info span:after {
        border-right-color: #117a8b;
        border-top-color: #117a8b;
    }

    .ribbon.ribbon-danger span {
        background-color: #e43f52 !important;
    }

    .ribbon.ribbon-danger span:before {
        border-left-color: #d21e32;
        border-top-color: #d21e32;
    }

    .ribbon.ribbon-danger span:after {
        border-right-color: #d21e32;
        border-top-color: #d21e32;
    }

    .ribbon.ribbon-dark span {
        background-color: #3c4858 !important;
    }

    .ribbon.ribbon-dark span:before {
        border-left-color: #272f3a;
        border-top-color: #272f3a;
    }

    .ribbon.ribbon-dark span:after {
        border-right-color: #272f3a;
        border-top-color: #272f3a;
    }

    .ribbon.ribbon-muted span {
        background-color: #8492a6 !important;
    }

    .ribbon.ribbon-muted span:before {
        border-left-color: #68788f;
        border-top-color: #68788f;
    }

    .ribbon.ribbon-muted span:after {
        border-right-color: #68788f;
        border-top-color: #68788f;
    }

    .ribbon.ribbon-light span {
        background-color: #f8f9fc !important;
    }

    .ribbon.ribbon-light span:before {
        border-left-color: #d4daed;
        border-top-color: #d4daed;
    }

    .ribbon.ribbon-light span:after {
        border-right-color: #d4daed;
        border-top-color: #d4daed;
    }

    .ribbon.ribbon-blue span {
        background-color: {{ $settings->website_theme }} !important;
    }

    .ribbon.ribbon-blue span:before {
        border-left-color: #222020;
        border-top-color: #222020;
    }

    .ribbon.ribbon-blue span:after {
        border-right-color: #222020;
        border-top-color: #222020;
    }

    .ribbon.ribbon-footer span {
        background-color: #202942 !important;
    }

    .ribbon.ribbon-footer span:before {
        border-left-color: #0f131f;
        border-top-color: #0f131f;
    }

    .ribbon.ribbon-footer span:after {
        border-right-color: #0f131f;
        border-top-color: #0f131f;
    }

    .ribbon {
        position: absolute;
        top: -5px;
        width: 75px;
        height: 75px;
        z-index: 2;
    }

    .ribbon.ribbon-right {
        right: -5px;
    }

    .ribbon.ribbon-right span {
        right: -21px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .ribbon.ribbon-left {
        left: -5px;
    }

    .ribbon.ribbon-left span {
        left: -21px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .ribbon span {
        position: absolute;
        top: 19px;
        width: 100px;
        color: #fff;
    }

    .ribbon span:before,
    .ribbon span:after {
        content: "";
        position: absolute;
        top: 100%;
        z-index: -1;
        border: 3px solid transparent;
    }

    .ribbon span:before {
        left: 0;
    }

    .ribbon span:after {
        right: 0;
    }

    .invoice-top .logo-invoice {
        font-weight: 700;
        font-size: 27px;
        letter-spacing: 1px;
    }

    .watch-video a .play-icon-circle {
        height: 36px;
        width: 36px;
        background-color: {{ $settings->website_theme }};
        line-height: 36px;
    }

    .watch-video a .play-icon-circle.play-iconbar {
        font-size: 16px;
    }

    .watch-video a .play-icon-circle.play {
        top: 77%;
    }

    .bg-cta {
        padding: 150px 0;
    }

    .play-btn {
        height: 78px;
        width: 78px;
        font-size: 30px;
        line-height: 76px;
        border-radius: 50%;
        display: inline-block;
        color: #fff;
    }

    .play-icon {
        position: absolute;
        bottom: 50%;
        -webkit-transform: translateY(50%);
        transform: translateY(50%);
        right: 0;
        left: 0;
        text-align: center;
    }

    .play-icon i {
        height: 75px;
        -webkit-text-stroke: 2px{{ $settings->website_theme }};
        -webkit-text-fill-color: transparent;
        width: 75px;
        font-size: 25px;
        line-height: 75px;
        display: inline-block;
    }

    .play-icon i:hover {
        -webkit-text-stroke: 2px{{ $settings->website_theme }};
        -webkit-text-fill-color: {{ $settings->website_theme }};
    }

    .mfp-iframe-holder .mfp-content {
        max-width: 1110px;
    }

    .blog {
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .blog .content h4 {
        line-height: 1.2;
    }

    .blog .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .blog .content .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .blog .content .post-meta .like,
    .blog .content .post-meta .comments,
    .blog .content .post-meta .readmore {
        font-size: 15px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .blog .content .post-meta .like:hover {
        color: #e43f52 !important;
    }

    .blog .content .post-meta .comments:hover {
        color: #2eca8b !important;
    }

    .blog .content .post-meta .readmore:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .blog .author,
    .blog .teacher,
    .blog .course-fee {
        position: absolute;
        z-index: 1;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .blog .author {
        top: 5%;
        left: 5%;
    }

    .blog .teacher {
        bottom: 6%;
        left: 5%;
    }

    .blog .course-fee {
        bottom: -5%;
        right: 5%;
        width: 50px;
        height: 50px;
    }

    .blog .course-fee .fee {
        line-height: 50px;
    }

    .blog.blog-detail:hover {
        -webkit-transform: translateY(0px) !important;
        transform: translateY(0px) !important;
    }

    .blog:hover {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    .blog:hover .overlay {
        opacity: 0.4;
    }

    .blog:hover .author,
    .blog:hover .teacher,
    .blog:hover .course-fee {
        opacity: 1;
    }

    .blog .blog-list-meta {
        position: absolute;
        bottom: 24px;
    }

    .sidebar .widget .widget-search form {
        position: relative;
    }

    .sidebar .widget .widget-search input[type="text"],
    .sidebar .widget .searchform input[type="text"] {
        -webkit-box-shadow: none;
        box-shadow: none;
        padding: 12px 15px;
        height: 45px;
        font-size: 14px;
        display: block;
        width: 100%;
        outline: none !important;
        padding-right: 45px;
    }

    .sidebar .widget .widget-search input[type="submit"],
    .sidebar .widget .searchform input[type="submit"] {
        position: absolute;
        top: 5px;
        right: 10px;
        opacity: 0;
        width: 40px;
        height: 40px;
    }

    .sidebar .widget .widget-search .searchform:after {
        content: "\F0349";
        position: absolute;
        font-family: "Material Design Icons";
        right: 16px;
        top: 15px;
        font-size: 20px;
        line-height: 20px;
        pointer-events: none;
    }

    .sidebar .widget .blog-categories li {
        padding-bottom: 10px;
    }

    .sidebar .widget .blog-categories li:last-child {
        padding-bottom: 0;
    }

    .sidebar .widget .blog-categories li a,
    .sidebar .widget .blog-categories li span {
        font-size: 15px;
    }

    .sidebar .widget .blog-categories li a {
        color: #3c4858;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar .widget .blog-categories li a:hover {
        color: {{ $settings->website_theme }};
    }

    .sidebar .widget .post-recent {
        padding-bottom: 15px;
    }

    .sidebar .widget .post-recent:last-child {
        padding-bottom: 0;
    }

    .sidebar .widget .post-recent .post-recent-thumb {
        width: 25%;
    }

    .sidebar .widget .post-recent .post-recent-content {
        width: 75%;
        padding-left: 10px;
    }

    .sidebar .widget .post-recent .post-recent-content a {
        display: block;
        color: #3c4858;
        font-size: 15px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .sidebar .widget .post-recent .post-recent-content a:hover {
        color: {{ $settings->website_theme }};
    }

    .sidebar .widget .post-recent .post-recent-content span {
        font-size: 13px;
    }

    .sidebar .widget .tagcloud>a {
        background: #e9ecef;
        color: #3c4858;
        display: inline-block;
        font-size: 9px;
        letter-spacing: 1px;
        margin: 5px 10px 5px 0;
        padding: 8px 12px 7px;
        text-transform: uppercase;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        font-weight: 600;
    }

    .sidebar .widget .tagcloud>a:hover {
        background: {{ $settings->website_theme }};
        color: #fff;
    }

    .media-list .media .media-heading:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .media-list .sub-comment {
        border-left: 2px dashed #dee2e6;
    }

    .blog .overlay,
    .job-box .job-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .job-box {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .job-box .job-overlay {
        opacity: 0.6;
    }

    .job-box .head {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .job-box .position {
        position: absolute;
        top: 15px;
        left: 15px;
    }

    .job-box .position a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .job-box .position a:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .job-box .firm-logo {
        position: absolute;
        left: 0;
        right: 0;
        height: 60px;
        width: 60px;
        line-height: 60px;
        margin: 0 auto;
        top: -30px;
    }

    .job-box .company-name {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .job-box .company-name:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .job-box:hover {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
    }

    .candidate-list .like {
        -webkit-text-stroke: 1px #8492a6;
        -webkit-text-fill-color: transparent;
    }

    .candidate-list .like:hover,
    .candidate-list .like:focus {
        -webkit-text-stroke: #e43f52;
        -webkit-text-fill-color: #e43f52;
    }

    .candidate-list,
    .company-list {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .candidate-list .name:hover,
    .company-list .name:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .candidate-list:hover,
    .company-list:hover {
        -webkit-box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        box-shadow: 0 5px 13px rgba(60, 72, 88, 0.2) !important;
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
    }

    @media (min-width: 1024px) {
        .job-profile {
            top: -378px;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .job-profile {
            top: -338px;
        }
    }

    @media (max-width: 767px) {
        .company-logo {
            float: none !important;
            text-align: left !important;
        }
    }

    .work-container.work-classic .work-image {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-container.work-classic .work-image:hover {
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    .work-container.work-classic .content .title,
    .work-container.work-grid .content .title,
    .work-container.work-modern .content .title {
        font-size: 18px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-container.work-classic .content .title:hover,
    .work-container.work-grid .content .title:hover,
    .work-container.work-modern .content .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .work-container.work-classic .content .tag,
    .work-container.work-grid .content .tag,
    .work-container.work-modern .content .tag {
        font-size: 15px !important;
    }

    .work-container.work-modern img,
    .work-container.work-modern .overlay-work,
    .work-container.work-modern .content,
    .work-container.work-modern .client,
    .work-container.work-modern .read_more,
    .work-container.work-modern .icons,
    .work-container.work-modern .icons .work-icon {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-container.work-modern .overlay-work,
    .work-container.work-modern .content,
    .work-container.work-modern .client,
    .work-container.work-modern .read_more,
    .work-container.work-modern .icons {
        position: absolute;
    }

    .work-container.work-modern .overlay-work {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        z-index: 1;
    }

    .work-container.work-modern .content {
        z-index: 1;
        bottom: 5%;
        left: 5%;
    }

    .work-container.work-modern .content,
    .work-container.work-modern .client {
        opacity: 0;
    }

    .work-container.work-modern .client,
    .work-container.work-modern .read_more {
        z-index: 1;
        right: 5%;
        top: 5%;
    }

    .work-container.work-modern .read_more {
        height: 30px;
        width: 30px;
        line-height: 30px;
    }

    .work-container.work-modern .icons {
        right: 0;
        left: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 2;
        opacity: 0;
    }

    .work-container.work-modern .icons .work-icon {
        height: 45px;
        width: 45px;
        line-height: 45px;
    }

    .work-container.work-modern .icons .work-icon:hover {
        background: {{ $settings->website_theme }} !important;
        color: #fff !important;
    }

    .work-container.work-modern:hover img {
        -webkit-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg);
    }

    .work-container.work-modern:hover .overlay-work {
        opacity: 0.65;
    }

    .work-container.work-modern:hover .icons {
        opacity: 1;
    }

    .work-container.work-modern:hover .personal-port,
    .work-container.work-modern:hover .content,
    .work-container.work-modern:hover .client {
        opacity: 1;
    }

    .work-container.work-grid {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-container.work-grid img,
    .work-container.work-grid .content,
    .work-container.work-grid .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .work-container.work-grid .content {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        -webkit-transform: translateY(150px);
        transform: translateY(150px);
        overflow: hidden;
    }

    .work-container.work-grid:hover {
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
    }

    .work-container.work-grid:hover img {
        -webkit-transform: translateY(-40px);
        transform: translateY(-40px);
    }

    .work-container.work-grid:hover .content {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .work-details ul li b {
        max-width: 90px;
        width: 100%;
        display: inline-block;
    }

    .courses-desc img {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .courses-desc:hover img {
        -webkit-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg);
    }

    .courses-desc .overlay-work,
    .popular-tour .overlay-work {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .courses-desc:hover .overlay-work,
    .popular-tour:hover .overlay-work {
        opacity: 0.6;
    }

    .event-schedule {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .event-schedule .date .day {
        font-size: 18px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
        background: rgba(47, 85, 212, 0.1);
        line-height: 48px;
        border: 2px solid #fff;
        -webkit-box-shadow: 0px 0px 2px 0.25px rgba(47, 85, 212, 0.5);
        box-shadow: 0px 0px 2px 0.25px rgba(47, 85, 212, 0.5);
    }

    .event-schedule .date .month {
        font-size: 13px;
    }

    .event-schedule .content .title {
        font-size: 20px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .event-schedule .content .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .event-schedule .content .location-time {
        font-size: 14px;
    }

    .event-schedule:hover {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        border-color: {{ $settings->website_theme }} !important;
        background: #f8f9fc !important;
    }

    .courses-desc {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .courses-desc .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .courses-desc .content .title:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .courses-desc .collection,
    .courses-desc .preview {
        position: absolute;
        opacity: 0;
        z-index: 1;
    }

    .courses-desc .collection {
        top: 15px;
        left: 15px;
    }

    .courses-desc .collection i {
        -webkit-text-stroke: 2px #e43f52;
        -webkit-text-fill-color: transparent;
    }

    .courses-desc .collection i:active {
        -webkit-text-stroke: 0px #e43f52;
        -webkit-text-fill-color: #e43f52;
    }

    .courses-desc .preview {
        bottom: 15px;
        right: 15px;
    }

    .courses-desc:hover {
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    .courses-desc:hover .collection,
    .courses-desc:hover .preview {
        opacity: 1;
    }

    .personal-port {
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .container-filter li a {
        font-size: 13px;
        padding: 0px 15px;
        margin: 5px 3px;
        font-weight: 700;
        letter-spacing: 0.8px;
        cursor: pointer;
        line-height: 34px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .container-filter li a.active,
    .container-filter li a:hover {
        color: {{ $settings->website_theme }} !important;
        border-color: {{ $settings->website_theme }} !important;
    }

    .spacing {
        padding: 7px;
    }

    .shop-list .shop-image .overlay-work,
    .shop-list .shop-image .shop-icons {
        position: absolute;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .shop-list .shop-image .overlay-work {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
    }

    .shop-list .shop-image .overlay-work .out-stock {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .shop-list .shop-image .shop-icons {
        top: 15px;
        right: 15px;
        z-index: 2;
    }

    .shop-list .shop-image:hover .overlay-work,
    .shop-list .shop-image:hover .shop-icons {
        opacity: 1;
    }

    .shop-list .content .product-name {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .shop-list .content .product-name:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .shop-list .label {
        position: absolute;
        top: 15px;
        left: -15px;
        z-index: 2;
    }

    .popular-tour .content {
        position: absolute;
        bottom: 3%;
        left: 5%;
    }

    .main-icon {
        border: 2px solid #e9ecef;
        height: 40px;
        width: 40px;
        line-height: 0;
        text-align: center;
    }

    .main-icon .fea {
        height: 20px;
    }

    @media (min-width: 768px) {
        .main-icon {
            margin: 0 auto;
        }
    }

    .timeline-page:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 95%;
        margin: auto;
        width: 2px;
        background-color: #e9ecef !important;
    }

    .timeline-page .timeline-item .date-label-left,
    .timeline-page .timeline-item .duration-right {
        margin-right: 15px;
    }

    .timeline-page .timeline-item .date-label-left:after,
    .timeline-page .timeline-item .duration-right:after {
        content: "";
        position: absolute;
        top: 12px;
        width: 12px;
        height: 12px;
        z-index: 1;
        background-color: {{ $settings->website_theme }};
        border-radius: 4px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .timeline-page .timeline-item .date-label-left {
        float: right;
        margin-right: 15px;
    }

    .timeline-page .timeline-item .date-label-left:after {
        right: -37px;
    }

    .timeline-page .timeline-item .duration-right {
        float: left;
        margin-left: 15px;
    }

    .timeline-page .timeline-item .duration-right:after {
        left: -37px;
    }

    .timeline-page .timeline-item .event {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .timeline-page .timeline-item .event.event-description-right {
        margin-left: 15px;
    }

    .timeline-page .timeline-item .event.event-description-left {
        margin-right: 15px;
        text-align: right;
    }

    @media (max-width: 767px) {
        .timeline-page {
            margin-left: 18px;
        }

        .timeline-page:after {
            margin: 0;
        }

        .timeline-page .timeline-item .duration {
            float: left !important;
            margin: 0 0 30px 15px !important;
            text-align: left !important;
        }

        .timeline-page .timeline-item .duration:after {
            left: -21px !important;
        }

        .timeline-page .timeline-item .duration .event {
            text-align: left !important;
            margin-left: 15px;
        }

        .timeline-page .timeline-item .event-description-left {
            text-align: left !important;
            margin: 0 0 0 15px;
        }
    }

    .team img {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .team .name:hover {
        color: {{ $settings->website_theme }} !important;
    }

    .team .team-icon {
        position: absolute;
        bottom: 50%;
        -webkit-transform: translateY(50%);
        transform: translateY(50%);
        right: 0;
        opacity: 0;
        left: 0;
        text-align: center;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .team:hover img {
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        opacity: 0.2;
    }

    .team:hover .overlay-team {
        opacity: 0.6;
    }

    .team:hover .team-icon {
        opacity: 1;
    }

    .login-page {
        font-size: 15px;
    }

    .login-page .forgot-pass {
        z-index: 99;
        position: relative;
        font-size: 13px;
    }

    .cover-user .container-fluid {
        max-width: 100%;
    }

    @media (max-width: 768px) {
        .cover-user .container-fluid .padding-less {
            position: relative !important;
            height: 400px !important;
        }
    }

    .cover-user .container-fluid .padding-less.img {
        background: scroll center no-repeat;
        background-size: cover;
        position: absolute;
        height: 100%;
    }

    .cover-user .cover-user-img {
        height: 100vh;
    }

    @media (min-width: 1025px) {
        .cover-user .cover-user-img {
            padding: 0px 20%;
        }
    }

    @media (max-width: 768px) {
        .cover-user .cover-user-img {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: start !important;
            height: auto !important;
            padding: 30px;
        }
    }

    @media (max-width: 768px) {
        .cover-user .cover-user-content {
            text-align: left !important;
        }

        .cover-user .cover-my-30 {
            margin: 30px 0;
        }
    }

    .bg-profile {
        padding: 100px 0;
        background-size: cover;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        position: relative;
        background-position: center center;
    }

    .bg-profile .public-profile {
        top: 175px;
    }

    .accounts {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .accounts .pro-icons,
    .accounts .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .accounts:hover,
    .accounts.active {
        background-color: {{ $settings->website_theme }};
    }

    .accounts:hover .pro-icons,
    .accounts.active .pro-icons {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .accounts:hover .title,
    .accounts.active .title {
        color: #fff !important;
    }

    .coming-soon,
    .maintenance,
    .error-page {
        font-size: 40px;
        letter-spacing: 1px;
    }

    @media (max-width: 767px) {

        .coming-soon,
        .maintenance,
        .error-page {
            font-size: 32px;
        }
    }

    #countdown .count-down,
    #eventdown .count-down {
        display: inline-block;
        margin: 30px 10px;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        border: 4px solid #dee2e6;
        height: 130px;
        width: 130px;
    }

    #countdown .count-down .count-number,
    #eventdown .count-down .count-number {
        font-size: 40px;
        line-height: 95px;
    }

    #countdown .count-down .count-head,
    #eventdown .count-down .count-head {
        display: block;
        position: relative;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
    }

    #eventdown .count-down {
        margin: 10px !important;
        border: 0;
        height: 20px;
        width: 80px;
    }

    @media (max-width: 767px) {
        #eventdown .count-down {
            width: 60px;
        }
    }

    #eventdown .count-down .count-number {
        line-height: 80px;
    }

    @media (max-width: 767px) {
        #eventdown .count-down .count-number {
            font-size: 30px;
        }
    }

    #eventdown .count-down .count-head {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }

    @media (max-width: 767px) {
        #eventdown .count-down .count-head {
            font-size: 10px;
        }
    }

    #clock {
        color: #fff;
    }

    #clock p {
        width: 80px;
    }

    #clock p span {
        font-size: 40px;
    }

    #clock p span.indicator {
        font-size: 18px;
    }

    .form-group .icons {
        position: absolute;
        top: 13px;
        left: 18px;
    }

    .map {
        line-height: 0;
    }

    .map iframe {
        width: 100%;
        height: 400px;
    }

    .error {
        margin: 8px 0px;
        display: none;
        color: #e43f52;
    }

    #ajaxsuccess {
        font-size: 16px;
        width: 100%;
        display: none;
        clear: both;
        margin: 8px 0px;
    }

    .error_message {
        padding: 10px;
        margin-bottom: 20px;
        text-align: center;
        border: 2px solid #e43f52;
        color: #e43f52;
        border-radius: 6px;
        font-size: 14px;
    }

    .contact-loader {
        display: none;
    }

    #success_page {
        text-align: center;
        margin-bottom: 50px;
    }

    #success_page h3 {
        color: #2eca8b;
        font-size: 22px;
    }

    .flatpickr-day.selected,
    .flatpickr-day.selected:hover {
        background: {{ $settings->website_theme }};
        border-color: {{ $settings->website_theme }};
    }

    @media (min-width: 768px) {
        .map.map-height-two iframe {
            height: 551px;
        }
    }

    /* .footer {
        background: {{ $settings->website_theme }};
        padding: 60px 0;
        position: relative;
        color: #fff;
    } */

    @media (max-width: 899px) {
        .footer-nav-menu {
            display: block !important;
        }
    }

    .footer-nav-menu {
        list-style-type: none;
        text-align: center;
        margin-bottom: 50px;
        background: #cdf0e4;
        border: 1px solid #dfe3ff;
        box-shadow: 0 0 25px rgb(0 0 0 / 6%);
        border-radius: 10px;
        display: flex;
        align-content: space-between;
        justify-content: space-between;
        padding: 0 10px;
    }

    .footer-nav-menu li {
        display: inline-block;
        margin: 0 10px;
        padding: 10px;
    }

    @media (max-width: 899px) {
        .footer-nav-menu li {
            display: block !important;
        }
    }

    @media (max-width: 899px) {
        .footer-nav-menu li a {
            padding: 16px;
            font-size: 18px;
        }
    }

    .footer-nav-menu li {
        list-style-type: none;
    }

    .footer-nav-menu li.list-item-children {
        position: relative;
        padding-bottom: 0;
    }

    .footer-nav-menu li a {
        padding: 15px 15px 0;
        line-height: 20px;
    }

    .footer-nav-menu li a {
        color: #16ae51;
        font-size: 14px;
        padding: 10px;
        font-weight: 700;
        display: block;
    }

    @media (min-width: 600px) {
        .footer-documents li:not(:first-child) a {
            color: #fff;
            border-left: 1px solid #fff;
        }
    }

    .footer-documents li {
        display: inline-block;
        margin: 5px 0px;
    }

    .footer-documents li a {
        color: #fff;
        padding: 0 10px;
    }

    /* .footer .logo-footer img {
  margin: 0 auto 50px !important;
} */
    .footer .footer-head {
        letter-spacing: 1px;
        font-weight: 500;
    }

    .footer .foot-subscribe .form-control {
        background-color: #a7a3b9;
        border: 1px solid #204229;
        color: #f8f9fc;
        outline: none;
        border: none;
    }

    .footer .foot-subscribe .form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .footer .foot-subscribe.foot-white .form-control {
        color: #adb5bd;
    }

    .footer .foot-subscribe input::-webkit-input-placeholder {
        color: #adb5bd;
    }

    .footer .foot-subscribe input:-ms-input-placeholder {
        color: #adb5bd;
    }

    .footer .foot-subscribe input::-ms-input-placeholder {
        color: #adb5bd;
    }

    .footer .foot-subscribe input::placeholder {
        color: #adb5bd;
    }

    .footer .text-foot {
        color: #fff;
    }

    .market-box {
        border-radius: 8px !important;
        background-color: #01395e !important;
        padding: 3rem;
        margin-top: 3rem;
    }

    .footer h6.text-foot i {
        font-size: 22px;
    }

    .footer h6.text-foot {
        font-weight: 700;
    }

    .footer .footer-list {
        margin-bottom: 0;
    }

    .footer .footer-list li {
        margin-bottom: 10px;
    }

    .footer .footer-list li a {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .footer .footer-list li a:hover {
        color: #e6e8ea;
    }

    .footer .footer-list li:last-child {
        margin-bottom: 0;
    }

    .footer.footer-border,
    .footer.footer-bar {
        border-top: 1px solid #a3b9a9;
    }

    .footer.footer-bar {
        padding: 30px 0;
    }

    .pad {
        padding: 13px 40px !important;
    }

    #style-switcher {
        background: none repeat scroll 0 0 #fff;
        -webkit-box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);
        left: -189px;
        position: fixed;
        top: 17%;
        width: 189px;
        z-index: 9999;
        padding: 10px 5px;
    }

    #style-switcher .bottom {
        background: none repeat scroll 0 0 #fff;
    }

    #style-switcher .bottom a.settings {
        background: none repeat scroll 0 0 #fff;
        height: 41px;
        position: absolute;
        right: -41px;
        top: 0px;
        width: 40px;
        padding: 3px;
        border-radius: 0 30px 30px 0;
    }

    #style-switcher ul.pattern {
        list-style: none outside none;
        overflow: hidden;
        padding: 0;
        border-radius: 0px;
    }

    #style-switcher ul.pattern li.list-inline-item:not(:last-child) {
        margin-right: 0px;
        margin-bottom: 0;
    }

    #style-switcher ul.pattern li a {
        cursor: pointer;
        display: block;
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin: 3px;
    }

    #style-switcher ul.pattern .default {
        background-color: {{ $settings->website_theme }};
    }

    #style-switcher ul.pattern .green {
        background-color: #6dc77a;
    }

    #style-switcher ul.pattern .red {
        background-color: #ff5b69;
    }

    #style-switcher ul.pattern .purple {
        background-color: #7952b3;
    }

    #style-switcher ul.pattern .skyblue {
        background-color: #32c2ec;
    }

    #style-switcher ul.pattern .skobleoff {
        background-color: #0f7173;
    }

    #style-switcher ul.pattern .cyan {
        background-color: #00c9a7;
    }

    #style-switcher ul.pattern .slateblue {
        background-color: #766df4;
    }

    #style-switcher ul.pattern .yellow {
        background-color: #f7961c;
    }

    #style-switcher .t-dark,
    #style-switcher .t-rtl-light {
        display: inline-block;
    }

    #style-switcher .t-ltr-light,
    #style-switcher .t-light,
    #style-switcher .t-rtl-dark,
    #style-switcher .t-ltr-dark {
        display: none;
    }

    @media (max-width: 425px) {
        #style-switcher {
            display: none;
        }
    }


    .auth {
        padding: 60px 0;
        overflow: hidden;
    }

    .h-100 {
        height: 50% !important;
    }

    .auth__logo {
        max-height: 70px;
        margin: 0 5rem;
    }

    @media (max-width: 600px) {
        .auth__logo {

            margin: 0 auto;
        }
    }


    .auth .card {
        max-width: 450px;
        display: block;
        margin: 0 30px;
        padding: 20px 30px;
        border-color: #edf2f9;
        -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
    }

    @media (max-width: 600px) {
        .auth .card {
            margin: 0 10px;
        }
    }

    .login-with-google-btn {
        transition: background-color 0.3s, box-shadow 0.3s;
        padding: 12px 16px 12px 42px;
        border: none;
        border-radius: 3px;
        box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
        color: #757575;
        font-size: 14px;
        font-weight: 500;
        font-family: -apple-system, BlinkMacSystemFont, &#34;
        background-color: white;
    }

    .login-with-google-btn:hover {
        box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
    }

    .login-with-google-btn:active {
        background-color: #eee;
    }

    .login-with-google-btn:focus {
        outline: none;
        box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25), 0 0 0 3px #c8dafc;
    }

    .login-with-google-btn:disabled {
        filter: grayscale(100%);
        background-color: #ebebeb;
        box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
        cursor: not-allowed;
    }
</style>