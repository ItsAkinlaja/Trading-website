@use('\Illuminate\Support\Str', 'Str')
<x-slot:header>
    <title>{{ $settings->site_name }} | {{ $settings->site_title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <meta itemprop="name" content="{{ $settings->site_name }} - {{ $page->title }}">
    <meta itemprop="description" content="{{ $page->description }}">
    <meta name="keywords" content="{{ $page->keywords }}">
</x-slot:header>
<x-slot:styles>
    <link rel="stylesheet" href="{{ asset('dash/css/home2.css') }}" rel="preload">
</x-slot:styles>
<div>
    <section class="py-100 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="text-white text-big poppins-semibold line-height-1">
                        {{ $contents->firstWhere('ref_key', 'Mnag31')->title }}
                    </span>
                    <div class="mt-4">
                        <p class="mb-3 text-white">
                            {{ $contents->firstWhere('ref_key', 'Mnag31')->description }}
                        </p>
                        <a href="{{ route('register') }}" class="text-white btn bg-darken">
                            Start investing
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        &nbsp;
                        <a href="{{ route('login') }}" class="btn btn-outline-darken ms-2">Login</a>
                    </div>
                </div>
                <div class="mt-5 text-center col-lg-6 mt-lg-0">
                    @if (Str::endsWith($contents->firstWhere('ref_key', 'Mnag31')->img_path, 'mp4'))
                        <video src="{{ asset('storage/' . $contents->firstWhere('ref_key', 'Mnag31')->img_path) }}"
                            class="mx-auto roundedd img-fluid d-block" width="100%" height="100%" autoplay muted loop
                            playsinline></video>
                    @else
                        <img src="{{ asset('storage/' . $contents->firstWhere('ref_key', 'Mnag31')->img_path) }}"
                            class="rounded img-fluid w-100" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="border"></div>
                        <p class="poppins-bold text-primary">Why Us</p>
                        <div></div>
                    </div>
                    <h1 class="text-center poppins-bold line-height-1">
                        {{ $contents->firstWhere('ref_key', 'J23T0Y')->title }}</h1>
                    <h5 class="text-center">{{ $contents->firstWhere('ref_key', 'J23T0Y')->description }}</h5>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-shield-check" style="font-size: 40px"></i>
                            <h5 class="poppins-bold">{{ $contents->firstWhere('ref_key', '9HOR1z')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', '9HOR1z')->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-graph-up-arrow" style="font-size: 40px"></i>
                            <h5 class="poppins-bold">{{ $contents->firstWhere('ref_key', 'Vg6Gy7')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', 'Vg6Gy7')->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-sort-up" style="font-size: 40px"></i>
                            <h5 class="poppins-bold">{{ $contents->firstWhere('ref_key', '1Sx1dl')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', '1Sx1dl')->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-lightning" style="font-size: 40px"></i>
                            <h5 class="poppins-bold">{{ $contents->firstWhere('ref_key', 'YYqKx3')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', 'YYqKx3')->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-chat-left-text" style="font-size: 40px"></i>
                            <h5 class="poppins-bold"> {{ $contents->firstWhere('ref_key', 'xEWMho')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', 'xEWMho')->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="border-0 rounded-lg card">
                        <div class="card-body">
                            <i class=" text-primary bi bi-fingerprint" style="font-size: 40px"></i>
                            <h5 class="poppins-bold">{{ $contents->firstWhere('ref_key', '7DH2G9')->title }}</h5>
                            <p class="text-muted">
                                {{ $contents->firstWhere('ref_key', '7DH2G9')->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-5 row">
                <div class="mt-5 col-lg-6">
                    @if (Str::endsWith($contents->firstWhere('ref_key', '9SOtK1')->img_path, 'mp4'))
                        <video src="{{ asset('storage/' . $contents->firstWhere('ref_key', '9SOtK1')->img_path) }}"
                            class="mx-auto roundedd img-fluid d-block" width="100%" height="100%" autoplay muted loop
                            playsinline></video>
                    @else
                        <img src="{{ asset('storage/' . $contents->firstWhere('ref_key', '9SOtK1')->img_path) }}"
                            class="img-fluid " alt="">
                    @endif
                </div>
                <div class="mt-5 col-lg-6">
                    <h2 class="poppins-bold"> {{ $contents->firstWhere('ref_key', '9SOtK1')->title }}</h2>
                    <p class="text-muted">
                        {{ $contents->firstWhere('ref_key', '9SOtK1')->description }}
                    </p>
                    <a href="{{ url('/about') }}" class="mt-3 btn btn-primary">
                        Find Out More
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="mt-10 row">
                <div class="mt-5 col-lg-6">
                    <h2 class="poppins-bold"> {{ $contents->firstWhere('ref_key', '5Vg32I')->title }}</h2>
                    <p class="text-muted">
                        {{ $contents->firstWhere('ref_key', '5Vg32I')->description }}
                    </p>
                    <a href="{{ url('/register') }}" class="mt-3 btn btn-primary">
                        Try now
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="mt-5 col-lg-6">
                    @if (Str::endsWith($contents->firstWhere('ref_key', '5Vg32I')->img_path, 'mp4'))
                        <video src="{{ asset('storage/' . $contents->firstWhere('ref_key', '5Vg32I')->img_path) }}"
                            class="mx-auto roundedd img-fluid d-block" width="100%" height="100%" autoplay muted
                            loop playsinline></video>
                    @else
                        <img src="{{ asset('storage/' . $contents->firstWhere('ref_key', '5Vg32I')->img_path) }}"
                            class="img-fluid w-100" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="py-5"
        style="background: url('{{ asset('front_assets/images/reviews-bg.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="mb-5 col-lg-6 offset-lg-3">
                    <h2 class="text-center poppins-bold"> {{ $contents->firstWhere('ref_key', 'SMsJr1')->title }}</h2>
                    <p class="text-center poppins-normal">
                        {{ $contents->firstWhere('ref_key', 'SMsJr1')->description }}
                    </p>
                </div>
                @foreach ($testimones as $testimony)
                    <div class="mb-3 col-lg-4 col-md-6">
                        <div class="border-0 rounded-md shadow-md card bg-light">
                            <div class="card-body">
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $testimony->picture) }}"
                                        class="w-25 rounded-pill" alt="">
                                </div>
                                <h5 class="poppins-bold"> {{ $testimony->name }}</h5>
                                <p class="poppins-regular-italic text-muted">
                                    "{{ $testimony->what_is_said }}"
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if ($settings->show_plans_on_home_page)
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="mb-5 col-lg-6 offset-lg-3">
                        <h2 class="text-center poppins-bold">
                            {{ $contents->firstWhere('ref_key', 'vr6Xw0')->title }}
                        </h2>
                        <p class="mt-0 text-center text-muted poppins-normal">
                            {{ $contents->firstWhere('ref_key', 'vr6Xw0')->description }}
                        </p>
                    </div>
                    @foreach ($plans as $plan)
                        <div class="mt-4 col-lg-4 col-md-6" wire:key='{{ $plan->id }}'>
                            <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                                <div class="p-0 card-body">
                                    <span
                                        class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">
                                        {{ $plan->name }}
                                    </span>
                                    <h2 class="mt-3 mb-0 font-weight-bold">
                                        {{ $settings->currency }}{{ $plan->price }}
                                    </h2>
                                    <p class="text-muted">{{ $plan->duration }}</p>
                                    <ul class="pt-3 list-unstyled border-top">
                                        <li class="mb-0 h6 text-muted">
                                            <span class="mr-2 text-primary h5">
                                                <i class="align-middle uil uil-check-circle"></i>
                                            </span>
                                            Minimum Deposit
                                            {{ $settings->currency }}{{ $plan->min_price }}
                                        </li>
                                        <li class="mb-0 h6 text-muted">
                                            <span class="mr-2 text-primary h5">
                                                <i class="align-middle uil uil-check-circle"></i>
                                            </span>
                                            Returns {{ $plan->max_return }} %
                                        </li>
                                        <li class="mb-0 h6 text-muted">
                                            <span class="mr-2 text-primary h5">
                                                <i class="align-middle uil uil-check-circle"></i>
                                            </span>{{ $settings->currency }}{{ $plan->bonus }}
                                            Bonus
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="{{ route('register') }}" class="btn btn-block btn-primary">
                                            Get started
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="py-5">
        <div class="container">
            <div class="p-4 roundedd bg-darken p-lg-5">
                <div class="row align-items-end">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center">
                            <h2 class="mb-1 text-white poppins-bold">
                                {{ $contents->firstWhere('ref_key', 'Mnag31')->title }}
                            </h2>
                            <p class="mb-3 text-white poppins-regular">
                                {{ $contents->firstWhere('ref_key', 'Mnag31')->description }}
                            </p>
                            <a href="{{ url('/register') }}" class="pt-3 pb-3 pl-4 pr-4 btn btn-light">
                                Create Free Account
                            </a>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </section>
</div>
