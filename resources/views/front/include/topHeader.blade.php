<div class="top-bar bg-white py-2 d-none d-lg-block border-bottom-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <small class="text-dark fw-bold" id="banglaTime">
                    <i class="far fa-clock"></i> লোড হচ্ছে...
                </small>
            </div>
            
            <div class="col-md-4">
                <form class="d-flex search-bar-top">
                    <input class="form-control rounded-0" type="search" placeholder="এখানে অনুসন্ধান করুন..." aria-label="Search">
                    <button class="btn btn-success rounded-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="col-md-4 text-end social-top">
                <button class="btn btn-success btn-sm rounded-0 me-2" style="background:#006a4e; border:none;">English</button>
                
                {{-- Dynamic Social Links Start --}}
                @if(isset($social_links))
                    @foreach($social_links as $link)
                        @php
                            // টাইটেল ছোট হাতের অক্ষরে কনভার্ট করা হচ্ছে যাতে ম্যাচ করতে সুবিধা হয়
                            $title = strtolower($link->title ?? '');
                            
                            // ডিফল্ট ভ্যালু (যদি ম্যাচ না করে)
                            $customClass = ''; 
                            $iconClass = 'fa-globe'; 

                            // আপনার ডিজাইন অনুযায়ী ক্লাস চেকিং
                            if (str_contains($title, 'facebook')) {
                                $customClass = 'fb';             // আপনার সিএসএস ক্লাস
                                $iconClass = 'fa-facebook-f';    // ফন্ট অসাম আইকন
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

                        {{-- এখানে ডাইনামিক ক্লাস এবং লিংক বসানো হচ্ছে --}}
                        <a href="{{ $link->link }}" target="_blank" class="social-icon {{ $customClass }}">
                            <i class="fab {{ $iconClass }}"></i>
                        </a>
                    @endforeach
                @endif
                {{-- Dynamic Social Links End --}}

            </div>
        </div>
    </div>
</div>