<x-slot:header>
    <title>{{ $settings->site_name }} | {{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $settings->site_name }} - {{ $page->title }}">
    <meta itemprop="description" content="{{ $page->description }}">
    <meta name="keywords" content="{{ $page->keywords }}">
</x-slot:header>
<div>
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title">{{ $contents->firstWhere('ref_key', 'ROu4q6')->title }}</h4>
                        @if ($page->show_breadcrumbs)
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">{{ $settings->site_name }}</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ul>
                                </nav>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="overflow-hidden text-white shape">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="pb-4 section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-phone d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $contents->firstWhere('ref_key', '0EXbji')->title }}</h5>

                            <a href="tel:{{ $contents->firstWhere('ref_key', '0EXbji')->description }}"
                                class="text-primary">{{ $contents->firstWhere('ref_key', '0EXbji')->description }}</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $contents->firstWhere('ref_key', 'HLgyaQ')->title }}</h5>

                            <a href="mailto:{{ $contents->firstWhere('ref_key', 'HLgyaQ')->description }}"
                                class="text-primary">{{ $contents->firstWhere('ref_key', 'HLgyaQ')->description }}</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-map-marker d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $contents->firstWhere('ref_key', '52GPRA')->title }}</h5>
                            <p class="text-muted">{{ $contents->firstWhere('ref_key', '52GPRA')->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!--end container-->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="pt-2 col-lg-12 col-md-6 pt-sm-0">
                    <div class="border-0 rounded shadow card">
                        <div class="py-5 card-body">
                            <h4 class="card-title">{{ $contents->firstWhere('ref_key', 'EOUU7R')->title }}</h4>
                            <div class="mt-4 custom-form">
                                <div id="message"></div>
                                <form wire:submit='store'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    Your Name <span class="text-danger">*</span>
                                                </label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons bi bi-person"></i>
                                                    <x-form.input name="name" class="pl-5" placeholder="Full Name"
                                                        wire:model='name' required='true' />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons bi bi-envelope-open"></i>
                                                    <x-form.input name="email" class="pl-5" type="email"
                                                        placeholder="Your email" wire:model='email' required='true' />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons bi bi-grip-horizontal"></i>
                                                    <x-form.input name="subject" wire:model='subject' class="pl-5"
                                                        placeholder="Subject" required='true' />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons bi bi-chat-left-text"></i>
                                                    <textarea id="comments" wire:model='message' rows="4" class="pl-5 form-control" name="message"
                                                        placeholder="Your Message" required='true'></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="text-right col-sm-12">
                                            @session('success')
                                                <span class="text-success">{{ $value }}</span>
                                            @endsession
                                            <x-ui.button>
                                                <x-spinner wire:loading />
                                                Send Message
                                            </x-ui.button>
                                            <div id="simple-msg"></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end custom-form-->
                        </div>
                    </div>
                </div>
                <!--end col-->
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End contact -->
</div>