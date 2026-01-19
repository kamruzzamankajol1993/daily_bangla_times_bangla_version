<footer>
    <style>
        /* --- 1. Logo Hover Effect --- */
        .footer-logo-hover {
            transition: all 0.3s ease;
        }
        .footer-logo-hover:hover {
            filter: grayscale(100%) !important;
        }

        /* --- 2. Publisher Modal Trigger --- */
        .publisher-trigger {
            cursor: pointer;
            transition: 0.3s;
        }
        .publisher-trigger:hover {
            opacity: 0.8;
        }

        /* --- 3. Useful Links Custom Design (NEW) --- */
        .footer-link-list li {
            margin-bottom: 10px;
            border-bottom: 1px dashed rgba(0,0,0,0.1); /* হালকা সেপারেটর লাইন */
            padding-bottom: 5px;
        }
        .footer-link-list li:last-child {
            border-bottom: none;
        }
        .footer-link-list li a {
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        /* Icon Animation */
        .footer-link-list li a i {
            font-size: 12px;
            color: #dc3545; /* লাল রঙের অ্যারো */
            margin-right: 8px;
            transition: all 0.3s ease;
        }

        /* Hover Effect: Text Red + Slide Right */
        .footer-link-list li a:hover {
            color: #dc3545;
            padding-left: 8px; /* ডানে সরে যাবে */
        }
        .footer-link-list li a:hover i {
            margin-right: 12px; /* আইকনের দূরত্ব বাড়বে */
        }
    </style>

    <div class="footer-top py-4" style="background-color: #ced4da;">
        <div class="container">
            <div class="row align-items-center">
                
                {{-- Social Icons --}}
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <div class="footer-social-icons">
                        @if(isset($social_links))
                            @foreach($social_links as $link)
                                @php
                                    $title = strtolower($link->title ?? '');
                                    $customClass = ''; 
                                    $iconClass = 'fa-globe'; 

                                    if (str_contains($title, 'facebook')) {
                                        $customClass = 'fb';
                                        $iconClass = 'fa-facebook-f';
                                    } elseif (str_contains($title, 'youtube')) {
                                        $customClass = 'yt';
                                        $iconClass = 'fa-youtube';
                                    } elseif (str_contains($title, 'twitter') || str_contains($title, 'x')) {
                                        $customClass = 'tw';
                                        $iconClass = 'fa-x-twitter';
                                    } elseif (str_contains($title, 'instagram')) {
                                        $customClass = 'insta';
                                        $iconClass = 'fa-instagram';
                                    } elseif (str_contains($title, 'linkedin')) {
                                        $customClass = 'in';
                                        $iconClass = 'fa-linkedin-in';
                                    }
                                @endphp
                                
                                <a href="{{ $link->link }}" target="_blank" class="social-sq {{ $customClass }}">
                                    <i class="fab {{ $iconClass }}"></i>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- Logo & Buttons --}}
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <a href="#" class="d-inline-block mb-2">
                        <img style="width: 100%; max-height: 100px;" 
                             src="{{ $front_admin_url }}{{ $front_bangla_footer_logo }}" 
                             alt="Logo" 
                             class="img-fluid footer-logo-hover" 
                             style="filter: drop-shadow(0px 0px 1px #fff);">
                    </a>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{$front_front_url}}" target="_blank" class="btn btn-sm text-white fw-bold rounded-1 text-decoration-none" style="background-color: #00d27a;">বাংলা</a>
                        <a href="{{$front_english_url}}" target="_blank" class="btn btn-sm text-white fw-bold rounded-1 text-decoration-none" style="background-color: #00d27a;">English</a>
                    </div>
                </div>

                {{-- Useful Links Section (UPDATED) --}}
                <div class="col-md-4 text-center text-md-start ps-md-5">
                    <h6 class="fw-bold text-dark border-bottom border-danger border-2 d-inline-block mb-3 text-uppercase" style="letter-spacing: 1px;">Useful Links</h6>
                    
                    <ul class="list-unstyled mb-0 footer-link-list text-start d-inline-block d-md-block">
                        <li>
                            <a href="{{ route('front.aboutUs') }}">
                                <i class="fas fa-chevron-right"></i> About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.contactUs') }}">
                                <i class="fas fa-chevron-right"></i> Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chevron-right"></i> Team
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chevron-right"></i> Terms And Condition
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chevron-right"></i> Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-main bg-dark text-white py-5">
        <div class="container">
            <div class="row g-5">
                
                {{-- About Text --}}
                <div class="col-lg-6">
                    <h4 class="fw-bold text-white mb-3">About</h4>
                    <p class="text-light-50 small text-justify" style="line-height: 1.8;">
                       {!! strip_tags($front_long_description, '<br><b><strong>') !!}
                    </p>
                </div>

                {{-- Publisher Info --}}
                <div class="col-lg-6">
                    <h4 class="fw-bold text-white mb-3">Publisher and Editor-in-Chief:</h4>
                    
                    <div class="d-flex align-items-start mb-2 publisher-trigger" data-bs-toggle="modal" data-bs-target="#publisherModal">
                        <img style="height: 40px;width: 40px;" src="{{asset('/')}}public/front/images/bnn.jpg" class="rounded me-2 mt-1">
                        <div>
                            <h6 class="fw-bold mb-0">Zahid F Sarder Saddi</h6>
                            <small class="text-light-50"><i class="fas fa-user me-1"></i> Contributer</small>
                        </div>
                    </div>

                    <ul class="list-unstyled text-light-50 small mt-3 contact-list">
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> {{ $front_ins_phone }}</li>
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> {{ $front_ins_phone_one }}</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> <a href="mailto:{{$front_ins_email}}" class="text-light-50 text-decoration-none">{{$front_ins_email}}</a></li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> <a href="mailto:{{$front_email_one}}" class="text-light-50 text-decoration-none">{{$front_email_one}}</a></li>
                    </ul>

                    <div class="mt-3">
                        <h6 class="fw-bold text-white">USA Office:</h6>
                        <p class="small text-light-50 mb-1"><i class="fas fa-map-marker-alt me-2"></i> {{ $front_us_office_address }}</p>
                        <p class="small text-light-50">© Copyright ©2008-{{ date('Y') }} <strong>{{ $front_ins_name }}</strong> <img style="height: 20px !important;" src="{{ $front_admin_url }}{{ $front_bangla_footer_logo }}" alt="BD" class="d-inline"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom py-2" style="background-color: #000;">
        <div class="container text-center">
            <p class="text-white small m-0">এই ওয়েবসাইটে প্রকাশিত সংবাদ, আলোকচিত্র ও ভিডিওচিত্র বিনা অনুমতিতে অন্য কোথাও প্রকাশ করা সম্পূর্ণ বেআইনি। সকল স্বত্ব dailybanglatimes.com কর্তৃক সংরক্ষিত</p>
        </div>
    </div>

    {{-- Scroll To Top Button --}}
    <button id="scrollToTopBtn" class="btn btn-danger rounded-0 position-fixed bottom-0 end-0 m-4 d-none shadow" style="z-index: 999; border: 1px solid #fff;">
        <i class="fas fa-chevron-up text-white"></i>
    </button>

    {{-- Publisher Modal --}}
    <div class="modal fade" id="publisherModal" tabindex="-1" aria-labelledby="publisherModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('/')}}public/front/images/bnn.jpg" class="img-fluid rounded shadow-lg" alt="Publisher">
                </div>
            </div>
        </div>
    </div>

</footer>

{{-- Script for Scroll Button --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var scrollBtn = document.getElementById("scrollToTopBtn");

        window.onscroll = function() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollBtn.classList.remove("d-none");
            } else {
                scrollBtn.classList.add("d-none");
            }
        };

        scrollBtn.addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>