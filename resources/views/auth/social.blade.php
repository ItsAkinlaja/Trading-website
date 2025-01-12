<!--begin::Login options-->
<div class="row g-3 mb-9">
    <!--begin::Col-->
    <div class="col-md-6 offset-md-3">
        <!--begin::Google link--->
        <a href="{{ route('social.redirect', ['social' => 'google']) }}"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <i class="bi bi-google text-danger"></i>
            {{-- <img alt="Logo" src="{{ asset('themes/default/') }}assets/media/svg/brand-logos/google-icon.svg"
                class="h-15px me-3" /> --}}
            Sign in with Google
        </a>
        <!--end::Google link--->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    {{-- <div class="col-md-6">
        <!--begin::Google link--->
        <a href="#"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="{{ asset('themes/default/') }}assets/media/svg/brand-logos/apple-black.svg"
                class="theme-light-show h-15px me-3" />
            <img alt="Logo" src="{{ asset('themes/default/') }}assets/media/svg/brand-logos/apple-black-dark.svg"
                class="theme-dark-show h-15px me-3" />
            Sign in with Apple
        </a>
        <!--end::Google link--->
    </div> --}}
    <!--end::Col-->
</div>
<!--end::Login options-->

<!--begin::Separator-->
<div class="separator separator-content my-14">
    <span class="text-gray-500 w-125px fw-semibold fs-7">Or with email</span>
</div>
<!--end::Separator-->
