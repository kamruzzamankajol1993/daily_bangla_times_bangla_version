@extends('front.master.master')

@section('title')
{{ $front_ins_name }} 
@endsection

@section('css')
@endsection

@section('body')
  

   <section class="main-content py-4">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                
                <div class="col-lg-3 col-md-6 order-2 order-lg-1 d-flex flex-column">
                    <div class="card border-0 mb-3 news-card shadow-sm h-auto flex-shrink-0">
                        <div class="position-relative">
                            <img src="{{$front_admin_url}}{{$front_madam_image}}" class="card-img-top rounded-0" alt="News">
                            {{-- <span class="badge bg-danger position-absolute top-0 start-0 m-2 rounded-0">রাজনীতি</span> --}}
                        </div>
                        {{-- <div class="card-body p-2 bg-white">
        <span class="red-subtitle">গুরুত্বপূর্ণ আপডেট</span>
        
        <h5 class="card-title fw-bold fs-5 hover-red lh-base">খালেদা জিয়ার বিদেশে চিকিৎসা নিয়ে ধোঁয়াশা, মেডিকেল বোর্ডের উদ্বেগ</h5>
    </div> --}}
                    </div>
                    
                   <div class="left-news-list bg-white shadow-sm p-2 flex-grow-1 d-flex flex-column justify-content-between">
    
    @if(isset($madamUnderNews) && count($madamUnderNews) > 0)
        @foreach($madamUnderNews as $news)
            {{-- শেষ আইটেম হলে mb-0 এবং border-bottom থাকবে না, অন্যথায় থাকবে --}}
            <div class="d-flex {{ $loop->last ? 'mb-0 pb-0' : 'mb-2 border-bottom pb-2' }} align-items-start">
                
                {{-- ইমেজ --}}
                <img src="{{ $news->image ? $front_admin_url.$news->image : 'https://placehold.co/90x60/333/fff?text=News' }}" 
                     class="me-2 rounded-1 flex-shrink-0" 
                     width="90" height="60"
                     style="object-fit: cover;">
                
                {{-- কন্টেন্ট --}}
                <div class="w-100">
                    {{-- সাব-টাইটেল (যদি থাকে) --}}
                    @if($news->subtitle)
                        <div class="news-subtitle">{{ $news->subtitle }}</div>
                    @endif
                    
                    {{-- টাইটেল লিংক --}}
                    <a href="{{ route('front.news.details', $news->slug) }}" class="small fw-bold text-dark hover-red lh-sm text-decoration-none">
                        {{ $news->title }}
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-muted small mt-3">কোনো খবর পাওয়া যায়নি।</p>
    @endif

</div>
                </div>

                <div class="col-lg-5 col-md-12 order-1 order-lg-2">
                    
                    {{-- স্লাইডার চেক: যদি স্লাইডার নিউজ থাকে তবেই দেখাবে --}}
{{-- স্লাইডার চেক --}}
@if(isset($sliderPosts) && count($sliderPosts) > 0)
    <div id="mainSlider" class="carousel slide mb-3 shadow-sm" data-bs-ride="carousel" data-bs-interval="3000">
        
        {{-- ইন্ডিকেটর সেকশন রিমুভ করা হয়েছে --}}

        {{-- ২. স্লাইডার ইমেজ ও ক্যাপশন --}}
        <div class="carousel-inner">
            @foreach($sliderPosts as $key => $post)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    
                    {{-- ইমেজ --}}
                    <img src="{{ $post->image ? $front_admin_url . $post->image : 'https://placehold.co/600x380/006a4e/white?text=Slider+Image' }}" 
                         class="d-block w-100 object-fit-cover" 
                         alt="{{ $post->title }}">
                    
                    {{-- ক্যাপশন --}}
                    <div class="carousel-caption d-none d-md-block news-caption-overlay">
                        <h4 class="fw-bold mb-1">
                            <a href="{{ route('front.news.details', $post->slug) }}" class="text-white text-decoration-none">
                                {{ $post->title }}
                            </a>
                        </h4>
                        
                        @if($post->subtitle)
                            <p class="small mb-2">{{ Str::limit($post->subtitle, 100) }}</p>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>

        {{-- নেভিগেশন অ্যারো বাটনগুলো রিমুভ করা হয়েছে --}}

    </div>
@endif

                    <div class="row g-3">
    @if(isset($randomNews) && count($randomNews) > 0)
        @foreach($randomNews as $news)
            <div class="col-6">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="overflow-hidden">
                        {{-- ইমেজ --}}
                        <img src="{{ $news->image ? $front_admin_url . $news->image : 'https://placehold.co/300x180/333/fff?text=News' }}" 
                             class="card-img-top rounded-0 zoom-effect" 
                             alt="{{ $news->title }}">
                    </div>
                    
                    <div class="card-body p-2">
                        {{-- সাব-টাইটেল (যদি থাকে) --}}
                        @if($news->subtitle)
                            <div class="news-subtitle">{{ $news->subtitle }}</div>
                        @endif
                        
                        {{-- টাইটেল ও লিংক --}}
                        <h6 class="fw-bold hover-red title-truncate">
                            <a href="{{ route('front.news.details', $news->slug) }}" class=" hover-red text-dark text-decoration-none">
                                {{ $news->title }}
                            </a>
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12 text-center text-muted">
            <small>কোনো খবর পাওয়া যায়নি।</small>
        </div>
    @endif
</div>
                </div>

                <div class="col-lg-4 col-md-6 order-3 order-lg-3 d-flex flex-column">
                    
                    <div class="bg-white border p-0 mb-4 shadow-sm flex-grow-1 d-flex flex-column">
    
    {{-- Tab Buttons --}}
    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
        <li class="nav-item">
            <button class="nav-link active rounded-0 fw-bold py-2 custom-tab-btn tab-green" id="latest-tab" data-bs-toggle="pill" data-bs-target="#latest">সর্বশেষ</button>
        </li>
        <li class="nav-item">
            <button class="nav-link rounded-0 fw-bold py-2 custom-tab-btn tab-red" id="popular-tab" data-bs-toggle="pill" data-bs-target="#popular">জনপ্রিয়</button>
        </li>
    </ul>
    
    {{-- Tab Content --}}
    <div class="tab-content p-2 custom-scrollbar flex-grow-1" style="max-height: 800px; overflow-y: auto;">
        
        {{-- ১. সর্বশেষ (Latest News) Tab --}}
        <div class="tab-pane fade show active" id="latest">
            @if(isset($latestPosts) && count($latestPosts) > 0)
                @foreach($latestPosts as $post)
                    <div class="news-item border-bottom py-2 d-flex align-items-start">
                        {{-- Image --}}
                        <div class="flex-shrink-0">
                             <img src="{{ $post->image ? $front_admin_url . $post->image : 'https://placehold.co/90x60/111/fff?text=No+Image' }}" 
                                  class="me-2 rounded-1" 
                                  width="90" height="60" 
                                  style="object-fit: cover;">
                        </div>
                        
                        {{-- Title & Subtitle --}}
                        <div class="w-100">
                            @if($post->subtitle)
                                <div class="news-subtitle">{{ $post->subtitle }}</div>
                            @endif
                            <a href="{{ route('front.news.details', $post->slug) }}" class="small fw-bold text-dark hover-red lh-sm text-decoration-none">
                                {{ $post->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-muted small mt-3">কোনো খবর পাওয়া যায়নি।</p>
            @endif
        </div>
        
        {{-- ২. জনপ্রিয় (Popular News) Tab --}}
        <div class="tab-pane fade" id="popular">
            @if(isset($popularPosts) && count($popularPosts) > 0)
                @foreach($popularPosts as $post)
                    <div class="news-item border-bottom py-2 d-flex align-items-start">
                        {{-- Image --}}
                        <div class="flex-shrink-0">
                            <img src="{{ $post->image ? $front_admin_url . $post->image : 'https://placehold.co/90x60/222/fff?text=No+Image' }}" 
                                 class="me-2 rounded-1" 
                                 width="90" height="60" 
                                 style="object-fit: cover;">
                        </div>

                        {{-- Title & Subtitle --}}
                        <div class="w-100">
                            @if($post->subtitle)
                                <div class="news-subtitle">{{ $post->subtitle }}</div>
                            @endif
                            <a href="{{ route('front.news.details', $post->slug) }}" class="small fw-bold text-dark hover-red lh-sm text-decoration-none">
                                {{ $post->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-muted small mt-3">কোনো খবর পাওয়া যায়নি।</p>
            @endif
        </div>

    </div>
</div>

                    <div class="ad-container text-center mt-auto">
                        <div class="animated-ad-box">
                            <a href="https://zahidfsardersaddi.com/" target="_blank" rel="noopener">
                                <img src="{{$front_admin_url}}{{$front_personal_logo}}" alt="Ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- enlish section start -->
    @include('front.home_page._partial.englishNew')
    <!-- enlish section end -->

    <!-- international section start -->
    @include('front.home_page._partial.internationalNews')
    <!-- international section end -->

    <!-- category grid section start -->
    @include('front.home_page._partial.categoryGrid')
    <!-- category grid section end -->

    <!-- sports section start -->
    @include('front.home_page._partial.sports')
    <!-- sports section end -->


    <!-- law and exclusive section start -->
    @include('front.home_page._partial.lawAndExclusive')
    <!-- law and exclusive section end -->


    <!-- entertainment section start -->
    @include('front.home_page._partial.entertainment')
    <!-- entertainment section end -->


   <section class="ad-section py-4 bg-light">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div style="width: 980px; max-width: 100%; height: 120px; background-color: #ddd; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">
    AD SPACE 980x120
</div>
            </div>
        </div>
    </section>


    <!-- arts and feature section start -->
     @include('front.home_page._partial.artsAndFeature')
    <!-- arts and feature section end -->



    <!-- lifestyle section start -->
    @include('front.home_page._partial.lifestyle')
    <!-- lifestyle section end -->

    <!-- more categories section start -->
     @include('front.home_page._partial.moreCategories')
    <!-- more categories section end -->


    <!-- sharadesh district section start -->
    @include('front.home_page._partial.sharadeshDistrict')
    <!-- sharadesh district section end -->


    <!-- mixed category section start -->
    @include('front.home_page._partial.mixedCategory')
    <!-- mixed category section end -->


    <!-- photo gallery section start -->
    @include('front.home_page._partial.photoGallery')
    <!-- photo gallery section end -->


    <!-- video gallery section start -->
    @include('front.home_page._partial.videoGallery')
    <!-- video gallery section end -->


@endsection

@section('scripts')
@endsection