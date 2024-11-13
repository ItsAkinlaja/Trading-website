<x-guest-layout>
    <x-slot:title>
        Reset your password
    </x-slot:title>
    <div>
        <!--begin::Form-->
        <form class="form w-100" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="mb-10 text-center">
                <!--begin::Title-->
                <h1 class="mb-3 text-dark fw-bolder">
                    Setup New Password
                </h1>
                <!--end::Title-->

                <!--begin::Link-->
                <div class="text-gray-500 fw-semibold fs-6">
                    Have you already reset the password ?
                    <a href="{{ url('/login') }}" class="link-primary fw-bold">
                        Sign in
                    </a>
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <div class="row">
                <div class="mb-8 col-12">
                    <x-form.input type="text" placeholder="Email" value="{{ old('email', $request->email) }}"
                        name="email" required autofocus autocomplete="username" />
                </div>
                <!--begin::Input group-->
                <div class="mb-8 col-12" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="mb-3 position-relative">
                            <x-form.input type="password" placeholder="Password" name="password" required
                                autocomplete="new-password" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2"></i> <i
                                    class="ki-duotone ki-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="mb-3 d-flex align-items-center" data-kt-password-meter-control="highlight">
                            <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2">
                            </div>
                            <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2">
                            </div>
                            <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px me-2">
                            </div>
                            <div class="rounded flex-grow-1 bg-secondary bg-active-success h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>

                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers & symbols.
                    </div>
                    <!--end::Hint-->
                </div>
                <div class="mb-8 col-12">
                    <x-form.input type="password" placeholder="Repeat Password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>
            </div>


            <div class="mb-10 d-grid">
                <x-ui.button>
                    Reset Password
                </x-ui.button>
            </div>
            <!--end::Action-->
        </form>
        <!--end::Form-->
    </div>
</x-guest-layout>
