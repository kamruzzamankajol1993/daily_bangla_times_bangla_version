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
                            <img src="https://placehold.co/300x250/555/fff?text=Khaleda+Zia" class="card-img-top rounded-0" alt="News">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2 rounded-0">রাজনীতি</span>
                        </div>
                        <div class="card-body p-2 bg-white">
        <span class="red-subtitle">গুরুত্বপূর্ণ আপডেট</span>
        
        <h5 class="card-title fw-bold fs-5 hover-red lh-base">খালেদা জিয়ার বিদেশে চিকিৎসা নিয়ে ধোঁয়াশা, মেডিকেল বোর্ডের উদ্বেগ</h5>
    </div>
                    </div>
                    
                    <div class="left-news-list bg-white shadow-sm p-2 flex-grow-1 d-flex flex-column justify-content-between">
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/333/fff?text=Hajj" class="me-2 rounded-1 flex-shrink-0">
                            <div class="w-100">
        <div class="news-subtitle">গুরুত্বপূর্ণ আপডেট</div>
        
        <a href="#" class="small fw-bold text-dark hover-red lh-sm text-decoration-none">
            হজে যেতে উঠলো বয়সের বাধা, নিবন্ধনে নতুন নিয়ম
        </a>
    </div>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/444/fff?text=Court" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">হেলেনা জাহাঙ্গীরসহ ৫ জনের ২ বছর কারাদণ্ড</a>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/555/fff?text=BNP" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">নির্বাচনকে ভয় বলেই ষড়যন্ত্রের পথে বিএনপি: কাদের</a>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/666/fff?text=Accident" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">মৌলভীবাজারে দুই বাসের মুখোমুখি সংঘর্ষে আহত ১৫</a>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/777/fff?text=Sundarban" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">শীতের আমেজে সুন্দরবনে পর্যটকদের উপচে পড়া ভিড়</a>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/888/fff?text=Education" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">নতুন শিক্ষাক্রম নিয়ে অভিভাবকদের মিশ্র প্রতিক্রিয়া</a>
                        </div>
                        <div class="d-flex mb-2 align-items-start border-bottom pb-2">
                            <img src="https://placehold.co/90x60/999/fff?text=Market" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">সপ্তাহের ব্যবধানে বেড়েছে ব্রয়লার মুরগির দাম</a>
                        </div>
                        <div class="d-flex mb-0 align-items-start pb-0">
                            <img src="https://placehold.co/90x60/000/fff?text=Cricket" class="me-2 rounded-1 flex-shrink-0">
                            <a href="#" class="small fw-bold text-dark hover-red lh-sm">সাকিবকে ছাড়াই জিম্বাবুয়ে সফরে যাচ্ছে বাংলাদেশ দল</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 order-1 order-lg-2">
                    
                    <div id="mainSlider" class="carousel slide mb-3 shadow-sm" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://placehold.co/600x380/006a4e/white?text=Mahan+Air+News" class="d-block w-100 object-fit-cover" alt="...">
                                <div class="carousel-caption d-none d-md-block news-caption-overlay">
                                    <h4 class="fw-bold mb-1">বাংলাদেশ থেকে দুবাই সরাসরি ফ্লাইট চালু করতে যাচ্ছে মহান এয়ার</h4>
                                    <p class="small mb-2">যাত্রীদের সুবিধার্থে সপ্তাহে তিনটি ফ্লাইট পরিচালনার সিদ্ধান্ত...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/600x380/f42a41/white?text=Army+Day+Parade" class="d-block w-100 object-fit-cover" alt="...">
                                <div class="carousel-caption d-none d-md-block news-caption-overlay">
                                    <h4 class="fw-bold mb-1">শুক্রবার সশস্ত্র বাহিনী দিবস উপলক্ষে ঢাকাজুড়ে যত আয়োজন</h4>
                                    <p class="small mb-2">সেনানিবাসে বর্ণাঢ্য কুচকাওয়াজ ও বিশেষ ভোজের ব্যবস্থা...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://placehold.co/600x380/0044cc/white?text=PM+Hasina" class="d-block w-100 object-fit-cover" alt="...">
                                <div class="carousel-caption d-none d-md-block news-caption-overlay">
                                    <h4 class="fw-bold mb-1">উন্নয়নের ধারা অব্যাহত রাখতে ঐক্যের ডাক দিলেন প্রধানমন্ত্রী</h4>
                                    <p class="small mb-2">জনসভায় বিশাল জনসমাগমে সরকারের সাফল্যের চিত্র তুলে ধরেন...</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/111/fff?text=Teesta" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <div class="news-subtitle">ব্রেকিং নিউজ</div>
                                    <h6 class="fw-bold hover-red title-truncate">তিস্তা ইস্যু: মোদির আশ্বাস, হাসিনার আস্থা ও নতুন সম্ভাবনা</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/222/fff?text=Politics" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <h6 class="fw-bold hover-red title-truncate">তত্ত্বাবধায়ক সরকার পুনর্বহাল রাজনীতিতে নতুন দিগন্ত উন্মোচন করবে</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/333/fff?text=Fuel" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <h6 class="fw-bold hover-red title-truncate">বিশ্বজুড়ে জ্বালানি তেলের দাম বৃদ্ধি: বাংলাদেশে প্রভাবের আশঙ্কা</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/444/fff?text=War" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <h6 class="fw-bold hover-red title-truncate">রাশিয়া-ইউক্রেন যুদ্ধ: শান্তি আলোচনায় নতুন মোড় ও পশ্চিমাদের চাপ</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/555/fff?text=Tech" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <h6 class="fw-bold hover-red title-truncate">প্রযুক্তির আসক্তি: শিশুদের মানসিক স্বাস্থ্য ও বিকাশে বড় ঝুঁকি</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 h-100 shadow-sm">
                                <div class="overflow-hidden">
                                    <img src="https://placehold.co/300x180/666/fff?text=Metro" class="card-img-top rounded-0 zoom-effect">
                                </div>
                                <div class="card-body p-2">
                                    <h6 class="fw-bold hover-red title-truncate">মেট্রোরেলের নতুন সময়সূচী ঘোষণা: অফিস যাত্রীদের স্বস্তি</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 order-3 order-lg-3 d-flex flex-column">
                    
                    <div class="bg-white border p-0 mb-4 shadow-sm flex-grow-1 d-flex flex-column">
                        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active rounded-0 fw-bold py-2 custom-tab-btn tab-green" id="latest-tab" data-bs-toggle="pill" data-bs-target="#latest">সর্বশেষ</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rounded-0 fw-bold py-2 custom-tab-btn tab-red" id="popular-tab" data-bs-toggle="pill" data-bs-target="#popular">জনপ্রিয়</button>
                            </li>
                        </ul>
                        
                        <div class="tab-content p-2 custom-scrollbar flex-grow-1" style="max-height: 800px; overflow-y: auto;">
                            
                            <div class="tab-pane fade show active" id="latest">
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/111/fff?text=Dubai" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                             <div class="w-100">
        <div class="news-subtitle">গুরুত্বপূর্ণ আপডেট</div>
        
        <a href="#" class="small fw-bold text-dark hover-red lh-sm text-decoration-none">
            হজে যেতে উঠলো বয়সের বাধা, নিবন্ধনে নতুন নিয়ম
        </a>
    </div>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/222/fff?text=Army" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">সশস্ত্র বাহিনী দিবস উপলক্ষে সেনাপ্রধানের বিশেষ বার্তা</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/333/fff?text=Traffic" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">রাজধানীতে তীব্র যানজট, ভোগান্তিতে নগরবাসী</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/444/fff?text=Saree" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">দেশের ঐতিহ্য জামদানি শাড়ি জিআই পণ্য হিসেবে স্বীকৃতি পেল</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/555/fff?text=Weather" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">আবহাওয়া বার্তা: আগামী ৩ দিন বৃষ্টির সম্ভাবনা নেই</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/666/fff?text=Dengue" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">ডেঙ্গু প্রতিরোধে সিটি কর্পোরেশনের বিশেষ অভিযান শুরু</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/777/fff?text=Market" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">শেয়ার বাজারে বড় পতন, বিনিয়োগকারীদের বিক্ষোভ</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/888/fff?text=Bank" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">ব্যাংক ঋণের সুদের হার বৃদ্ধি: ব্যবসায়ীদের উদ্বেগ</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/999/fff?text=Sports" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">মেসিকে নিয়ে ইন্টার মায়ামির নতুন পরিকল্পনা ফাঁস</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/000/fff?text=Tech" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">আর্টিফিশিয়াল ইন্টেলিজেন্স ব্যবহারে নতুন নীতিমালা</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/123/fff?text=Movie" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">ঈদে মুক্তি পাচ্ছে ৫টি নতুন সিনেমা, টিজার প্রকাশ</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/321/fff?text=Job" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">সরকারি চাকরিতে আবেদনের সময়সীমা বাড়লো</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/432/fff?text=Edu" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">এইচএসসি পরীক্ষার ফলাফল প্রকাশের তারিখ ঘোষণা</a>
                                </div>
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/543/fff?text=Law" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">সাইবার নিরাপত্তা আইন নিয়ে নতুন গেজেট প্রকাশ</a>
                                </div>
                                <div class="news-item py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/654/fff?text=Intl" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">যুক্তরাষ্ট্রে তুষারঝড়ে জনজীবন বিপর্যস্ত</a>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="popular">
                                <div class="news-item border-bottom py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/red/white?text=Viral" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">সামাজিক মাধ্যমে ভাইরাল হিরো আলমের নতুন গান</a>
                                </div>
                                <div class="news-item py-2 d-flex align-items-start">
                                    <img src="https://placehold.co/90x60/green/white?text=Pop" class="me-2 rounded-1 flex-shrink-0" width="90" height="60">
                                    <a href="#" class="small text-dark hover-red fw-bold lh-sm">জনপ্রিয় খবর লোড হচ্ছে...</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="ad-container text-center mt-auto">
                        <div class="animated-ad-box">
                            <a href="#">
                                <img src="https://placehold.co/300x250/222/fff?text=BIG+SALE+OFFER" alt="Ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<section class="english-section py-4 bg-white border-bottom">
        <div class="container">
            
            <div class="d-flex align-items-end mb-3" style="border-bottom: 3px solid #dc3545;">
                <div class="bg-success text-white px-3 py-1 fw-bold text-uppercase">English</div>
            </div>

            <div class="text-center mb-4">
                <img src="https://placehold.co/400x80/white/red?text=Daily+Bangla+Times+English" alt="English Logo" class="img-fluid">
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="card border-0 h-100">
                        <img src="https://placehold.co/300x180/222/fff?text=Hasina+Case" class="card-img-top rounded-0 mb-2">
                        <h6 class="fw-bold hover-red small lh-base">ICT judgment in Hasina's crimes against humanity case Nov 17</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 h-100">
                        <img src="https://placehold.co/300x180/333/fff?text=Referendum" class="card-img-top rounded-0 mb-2">
                        <h6 class="fw-bold hover-red small lh-base">Referendum on July Charter, national polls to be held on same day: CA</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 h-100">
                        <img src="https://placehold.co/300x180/444/fff?text=Dhaka+Violence" class="card-img-top rounded-0 mb-2">
                        <h6 class="fw-bold hover-red small lh-base">Spate of murder, arson, and bomb blasts sparks security concern in Dhaka</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border-0 h-100">
                        <img src="https://placehold.co/300x180/555/fff?text=HC+Rules" class="card-img-top rounded-0 mb-2">
                        <h6 class="fw-bold hover-red small lh-base">HC rules EC's Bagerhat redistricting illegal, reinstates all seats</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intl-section py-4 bg-white">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-lg-9">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                        <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative" style="top: 0;">আন্তর্জাতিক</h5>
                    </div>

                    <div class="row g-4 d-flex align-items-stretch">
                        
                        <div class="col-lg-7 d-flex flex-column">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img src="https://placehold.co/600x350/eee/333?text=Mahan+Air" class="card-img-top rounded-0 mb-3 w-100" alt="News">
                                    <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                                </div>
                                <h3 class="fw-bold mb-3 hover-red" style="line-height: 1.4;">বাংলাদেশ থেকে দুবাই, মাস্কাট ও ইসলামাদে সরাসরি ফ্লাইট চালু করতে যাচ্ছে মহান এয়ার</h3>
                                <p class="text-secondary text-justify flex-grow-1">
                                    ঢাকা, বাংলাদেশ — ইরানের সর্ববৃহৎ বেসরকারি বিমান সংস্থা মহান এয়ার শীঘ্রই বাংলাদেশ থেকে দুবাই, মাস্কাট ও ইসলামাদে সরাসরি ফ্লাইট চালু করতে যাচ্ছে। এই উদ্যোগের মাধ্যমে আন্তর্জাতিক আকাশপথে বাংলাদেশের সংযোগ আরও জোরদার হবে বলে সংশ্লিষ্টরা মনে করছেন। মহান এয়ার তাদের যাত্রী ও কার্গো কার্যক্রম পরিচালনার জন্য...
                                    <a href="#" class="text-danger fw-bold text-decoration-none">বিস্তারিত</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 d-flex flex-column">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="card border-0 shadow-sm p-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/120x80/eee/333?text=Modi" class="me-3 rounded-1 flex-shrink-0" width="100">
                                        <h6 class="fw-bold m-0 hover-red lh-sm small">"শেখ হাসিনাকে হস্তান্তর করবে না ভারত"</h6>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm p-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/120x80/eee/333?text=Blast" class="me-3 rounded-1 flex-shrink-0" width="100">
                                        <h6 class="fw-bold m-0 hover-red lh-sm small">দিল্লিতে ভয়াবহ বিস্ফোরণ, নিহতের সংখ্যা বেড়ে ১৩</h6>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm p-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/120x80/eee/333?text=Japan" class="me-3 rounded-1 flex-shrink-0" width="100">
                                        <h6 class="fw-bold m-0 hover-red lh-sm small">জাপানের প্রথম নারী প্রধানমন্ত্রী হলেন সানায়ে তাকাইচি</h6>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm p-2 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/120x80/eee/333?text=Korea" class="me-3 rounded-1 flex-shrink-0" width="100">
                                        <h6 class="fw-bold m-0 hover-red lh-sm small">সবচেয়ে শক্তিশালী ব্যালেস্টিক ক্ষেপণাস্ত্র উন্মোচন করল উত্তর কোরিয়া</h6>
                                    </div>
                                </div>
                                <div class="card border-0 shadow-sm p-2">
                                    <div class="d-flex align-items-center">
                                        <img src="https://placehold.co/120x80/eee/333?text=Ship" class="me-3 rounded-1 flex-shrink-0" width="100">
                                        <h6 class="fw-bold m-0 hover-red lh-sm small">এবার বাংলাদেশে এলপিজিবাগী জাহাজে যুক্তরাষ্ট্রের নিষেধাজ্ঞা</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mx-auto">
                    
                    <div class="mb-4">
                        <h6 class="text-danger fw-bold border-bottom pb-2 mb-3">FOLLOW US</h6>
                        <div class="facebook-wrapper border p-1 bg-light">
                             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDailyBanglaTimesUSA.BD&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>

                    <div>
                        <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                            <h6 class="bg-success text-white d-inline-block px-3 py-1 m-0">মতামত</h6>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <div class="card border-0 bg-light">
                                <div class="row g-0 align-items-center">
                                    <div class="col-4">
                                        <img src="https://placehold.co/100x100/333/fff?text=Dr+K" class="img-fluid rounded-start h-100 object-fit-cover">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <small class="text-danger fw-bold d-block mb-1">ড. কলিমুল্লাহ</small>
                                            <h6 class="card-title fs-6 hover-red m-0 lh-sm">দেশে বাণিজ্যিক নিষেধাজ্ঞা আসতে পারে</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-light">
                                <div class="row g-0 align-items-center">
                                    <div class="col-4">
                                        <img src="https://placehold.co/100x100/555/fff?text=Nazim" class="img-fluid rounded-start h-100 object-fit-cover">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <small class="text-danger fw-bold d-block mb-1">নাজিম উদ্দিন</small>
                                            <h6 class="card-title fs-6 hover-red m-0 lh-sm">কুড়িগ্রামের চিলমারীতে নাজিম উদ্দিন হৃদয়ের</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
   <section class="category-grid py-4 bg-light">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-lg-4">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                        <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative">জাতীয়</h5>
                    </div>

                    <div class="card border-0 shadow-sm mb-3">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x250/555/fff?text=Army+Day" class="card-img-top rounded-0" alt="Featured">
                            <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold hover-red">শুক্রবার সশস্ত্র বাহিনী দিবস উপলক্ষে যত আয়োজন</h5>
                            <p class="card-text small text-secondary text-justify">যথাযথ মর্যাদা ও উৎসাহ উদ্দীপনার মধ্য দিয়ে শুক্রবার (২১ নভেম্বর) সশস্ত্র বাহিনী দিবস পালিত হবে...</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/333/fff?text=Rohingya" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">১৩ লাখ রোহিঙ্গার বোঝা আর বহন করা সম্ভব নয়: জাতিসংঘে বাংলাদেশ</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/444/fff?text=Election" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">এবারের নির্বাচন গতানুগতিক নয়—দেশ রক্ষার নির্বাচন: প্রধান উপদেষ্টা</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/555/fff?text=Rajuk" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">রাজধানীতে রাজউকের আইন ও নিয়ম বহির্ভূত ভবন নির্মাণ বাড়ছে</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/666/fff?text=Kabadi" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">নারী কাবাডি বিশ্বকাপের ট্রফি উন্মোচন করলেন প্রধান উপদেষ্টা</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                        <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative">রাজনীতি</h5>
                    </div>

                    <div class="card border-0 shadow-sm mb-3">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x250/222/fff?text=Politics" class="card-img-top rounded-0" alt="Featured">
                            <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold hover-red">‘তত্ত্বাবধায়ক সরকার পুনর্বহাল রাজনীতিতে নতুন দিগন্ত উন্মোচন করবে’</h5>
                            <p class="card-text small text-secondary text-justify">বিএনপির স্থায়ী কমিটির সদস্য আমীর খসরু মাহমুদ চৌধুরী বলেছেন, তত্ত্বাবধায়ক সরকার ব্যবস্থা ফিরে আসা...</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/777/fff?text=Mirza" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">প্রতিবেশী দেশের দাদাগিরির কোনো সুযোগ নেই: মির্জা ফখরুল</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/888/fff?text=Religion" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">ধর্মের নামে রাজনীতির ব্যবসা করছে কিছু দল: সালাহউদ্দিন</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/999/fff?text=Jamaat" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">সরকারের সিদ্ধান্তে 'জনআকাঙ্ক্ষা পূরণ হয়নি': জামায়াত</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/000/fff?text=Protest" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">কর্মসূচি দিয়ে 'উধাও' আ.লীগ: প্রতিরোধে জামায়াত, 'নীরব' বিএনপি</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                        <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative">অর্থনীতি</h5>
                    </div>

                    <div class="card border-0 shadow-sm mb-3">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x250/000/fff?text=Economy" class="card-img-top rounded-0" alt="Featured">
                            <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title fw-bold hover-red">আমরা নতুন পে-স্কেলের ফ্রেমওয়ার্ক দিয়ে যাবো, সম্পূর্ণ সম্ভব নয়: অর্থ উপদেষ্টা</h5>
                            <p class="card-text small text-secondary text-justify">অর্থ উপদেষ্টা ড. সালেহউদ্দিন আহমেদ বুধবার সচিবালয়ে সরকারি ক্রয় সংক্রান্ত কমিটির বৈঠক শেষে সাংবাদিকদের...</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/321/fff?text=Salary" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">নতুন বেতন কাঠামো ও আইএমএফ ঋণ বিষয়ে সিদ্ধান্ত নেবে পরবর্তী সরকার</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/654/fff?text=LPG" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">এলপি গ্যাসের দাম বাড়বে নাকি কমবে, জানা যাবে যেদিন</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/987/fff?text=Import" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">যুক্তরাষ্ট্র থেকে প্রথমবারের মতো গম আমদানি করলো বাংলাদেশ</h6>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/100x70/123/fff?text=Reserve" class="me-3 rounded-1 flex-shrink-0" width="100">
                                <h6 class="fw-bold m-0 hover-red small lh-base">দেশের রিজার্ভ নতুন উচ্চতায়, রেমিট্যান্সেও সুবাতাস</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sports-section py-4 bg-white">
        <div class="container">
            
            <div class="section-header-wrapper mb-4" style="border-bottom: 3px solid #dc3545;">
                <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative">খেলা</h5>
            </div>

            <div class="row g-4 d-flex align-items-stretch">
                
                <div class="col-lg-4 d-flex flex-column">
                    <div class="d-flex flex-column h-100 justify-content-between">
                        <div class="card border-0 mb-3">
                            <div class="position-relative">
                                <img src="https://placehold.co/400x250/333/fff?text=Football+Match" class="card-img-top rounded-0" alt="Sports">
                                <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                            </div>
                            <div class="card-body px-0 py-2">
                                <h5 class="card-title fw-bold hover-red">দ্বিতীয়ার্ধে এগিয়ে থেকেও নেপালের সঙ্গে বাংলাদেশের হতাশাজনক ড্র</h5>
                                <p class="card-text small text-secondary">আন্তর্জাতিক ফুটবল তারকা হামজা চৌধুরীর অসাধারণ বাইসাইকেল কিকে রক্ষা পেল...</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="card border-0 shadow-sm p-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/100x60/222/fff?text=Cricket" class="me-3 rounded-1 flex-shrink-0" width="100">
                                    <h6 class="fw-bold m-0 hover-red small lh-base">সুপার ফোরে দারুণ সূচনা বাংলাদেশের</h6>
                                </div>
                            </div>
                            <div class="card border-0 shadow-sm p-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/100x60/444/fff?text=BCB" class="me-3 rounded-1 flex-shrink-0" width="100">
                                    <h6 class="fw-bold m-0 hover-red small lh-base">চূড়ান্ত হলো বিসিবির নির্বাচনের তারিখ</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column">
                    <div class="d-flex flex-column h-100 justify-content-between">
                        <div class="card border-0 mb-3">
                            <div class="position-relative">
                                <img src="https://placehold.co/400x250/006a4e/fff?text=Shakib+Al+Hasan" class="card-img-top rounded-0" alt="Sports">
                                <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                            </div>
                            <div class="card-body px-0 py-2">
                                <h5 class="card-title fw-bold hover-red">সর্বকালের সেরা একাদশে ধোনি-কোহলির সঙ্গে সাকিব</h5>
                                <p class="card-text small text-secondary">এশিয়া কাপ ক্রিকেটের এবারের আসরের খেলা একেবারেই সন্নিকটে। ৯ সেপ্টেম্বর থেকে...</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="card border-0 shadow-sm p-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/100x60/555/fff?text=BFF" class="me-3 rounded-1 flex-shrink-0" width="100">
                                    <h6 class="fw-bold m-0 hover-red small lh-base">বাফুফে সহ-সভাপতি ও স্ত্রীর দেশত্যাগে নিষেধাজ্ঞা</h6>
                                </div>
                            </div>
                            <div class="card border-0 shadow-sm p-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/100x60/666/fff?text=Ranking" class="me-3 rounded-1 flex-shrink-0" width="100">
                                    <h6 class="fw-bold m-0 hover-red small lh-base">২৪ ধাপ এগিয়ে বড় সুখবর পেল বাংলাদেশ</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column">
                    <div class="d-flex flex-column h-100 justify-content-between">
                        <div class="card border-0 border-bottom pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold m-0 hover-red small lh-base me-2">বাফুফে সহ-সভাপতি ও স্ত্রীর দেশত্যাগে নিষেধাজ্ঞা</h6>
                                <img src="https://placehold.co/100x60/555/fff?text=News" class="rounded-1 flex-shrink-0" width="100">
                            </div>
                        </div>
                        <div class="card border-0 border-bottom pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold m-0 hover-red small lh-base me-2">২৪ ধাপ এগিয়ে বড় সুখবর পেল বাংলাদেশ</h6>
                                <img src="https://placehold.co/100x60/006a4e/fff?text=Team" class="rounded-1 flex-shrink-0" width="100">
                            </div>
                        </div>
                        <div class="card border-0 border-bottom pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold m-0 hover-red small lh-base me-2">ইতিহাস গড়ে ক্রিকেট বিশ্বকাপে ইতালি</h6>
                                <img src="https://placehold.co/100x60/0044cc/fff?text=Italy" class="rounded-1 flex-shrink-0" width="100">
                            </div>
                        </div>
                        <div class="card border-0 border-bottom pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold m-0 hover-red small lh-base me-2">লালিগা ইয়ুথ টুর্নামেন্ট খেলতে মালয়েশিয়ায় জাফ্রানি কাবের</h6>
                                <img src="https://placehold.co/100x60/orange/fff?text=Laliga" class="rounded-1 flex-shrink-0" width="100">
                            </div>
                        </div>
                        <div class="card border-0 pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold m-0 hover-red small lh-base me-2">নেইমার ভক্তদের স্বস্তির খবর</h6>
                                <img src="https://placehold.co/100x60/yellow/333?text=Neymar" class="rounded-1 flex-shrink-0" width="100">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="entertainment-section py-4 bg-light">
        <div class="container">
            
            <div class="section-header-wrapper mb-4" style="border-bottom: 3px solid #dc3545;">
                <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 position-relative">বিনোদন</h5>
            </div>

            <div class="row g-3">
                
                <div class="col-lg-5">
                    <div class="card border-0 h-100 bg-transparent">
                        <div class="position-relative">
                            <img src="https://placehold.co/600x380/333/fff?text=Mithila" class="card-img-top rounded-0" alt="Entertainment">
                            <span class="position-absolute bottom-0 start-0 bg-dark text-white px-2 py-1 m-2 rounded"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title fw-bold hover-red">দেশের ঐতিহ্য তুলে ধরার জন্য জামদানি বেছে নিলেন মিথিলা</h4>
                            <p class="card-text text-secondary mt-2">মিস ইউনিভার্স মঞ্চে বাংলাদেশের প্রতিনিধিত্ব করছেন মডেল ও অভিনেত্রী তানজিয়া মিথিলা...</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card border-0 text-white overlay-card">
                                <img src="https://placehold.co/300x180/444/fff?text=Mehazabien" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex align-items-end p-0">
                                    <div class="overlay-text p-2 w-100">
                                        <h6 class="fw-bold m-0 lh-base">আদালতে আত্মসমর্পণ করে জামিন আবেদন করেছেন মেহজাবীন চৌধুরী</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 text-white overlay-card">
                                <img src="https://placehold.co/300x180/555/fff?text=Jaya+Ahsan" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex align-items-end p-0">
                                    <div class="overlay-text p-2 w-100">
                                        <h6 class="fw-bold m-0 lh-base">রাত জেগে ঠাকুর দেখা, ভোগ খাওয়া, আড্ডা- সবই হয়েছে: জয়া আহসান</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 text-white overlay-card">
                                <img src="https://placehold.co/300x180/666/fff?text=Tahsan" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex align-items-end p-0">
                                    <div class="overlay-text p-2 w-100">
                                        <h6 class="fw-bold m-0 lh-base">গানের জগৎ থেকে অবসরে যাচ্ছেন তাহসান</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 text-white overlay-card">
                                <img src="https://placehold.co/300x180/777/fff?text=Prova" class="card-img rounded-0" alt="...">
                                <div class="card-img-overlay d-flex align-items-end p-0">
                                    <div class="overlay-text p-2 w-100">
                                        <h6 class="fw-bold m-0 lh-base">বড় পর্দায় ফিরছেন প্রভা, নতুন লুকে চমক</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-lg-3 col-6">
                    <div class="card border-0 text-white overlay-card">
                        <img src="https://placehold.co/300x160/222/fff?text=Shakib+News" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="overlay-text p-2 w-100">
                                <h6 class="fw-bold m-0 small lh-base">কলকাতায় আটক বাংলাদেশি মডেল শান্তাকে ঘিরে রহস্য</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card border-0 text-white overlay-card">
                        <img src="https://placehold.co/300x160/333/fff?text=Mandira" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="overlay-text p-2 w-100">
                                <h6 class="fw-bold m-0 small lh-base">ব্যক্তিগত জীবন নিয়ে কিছু বলতে চাই না: মন্দিরা</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card border-0 text-white overlay-card">
                        <img src="https://placehold.co/300x160/444/fff?text=Actor+Somu" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="overlay-text p-2 w-100">
                                <h6 class="fw-bold m-0 small lh-base">মানসিক ভারসাম্যহীন অবস্থায় উদ্ধার অভিনেতা সমূ চৌধুরী</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card border-0 text-white overlay-card">
                        <img src="https://placehold.co/300x160/555/fff?text=Nusrat+Faria" class="card-img rounded-0" alt="...">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="overlay-text p-2 w-100">
                                <h6 class="fw-bold m-0 small lh-base">কী আছে নুসরাত ফারিয়ার জামিন আদেশে?</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    


   <section class="ad-section py-4 bg-light">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div style="width: 980px; height: 120px; background-color: #ddd; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">
                    AD SPACE 980x120
                </div>
            </div>
        </div>
    </section>

    <section class="lifestyle-section py-4 bg-white">
        <div class="container">
            
            <div class="section-header-wrapper mb-4" style="border-bottom: 2px solid #dc3545;">
                <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">লাইফস্টাইল</h5>
            </div>

            <div class="row g-4 mb-4">
                
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x240/333/fff?text=Office+Sleep" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base">অফিসে কাজের ফাঁকে হালকা ঘুম জরুরি</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x240/444/fff?text=Sleep+Health" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base">টানা ৩ দিন চার ঘণ্টা করে ঘুমালে শরীরে কী ঘটে?</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/400x240/555/fff?text=Carbs" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base">কার্বোহাইড্রেটের ঘাটতিতে দেখা যাবে যে সমস্যা</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-4">
                
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/300x180/222/fff?text=Juice" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base small">করলার জুস পান নিয়ে পুষ্টিবিদের পরামর্শ</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/300x180/d63384/fff?text=Love" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base small">আজও ভালোবাসা দিবস</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/300x180/198754/fff?text=Chia+Seed" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base small">কিভাবে খাবেন চিয়া সিড?</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 h-100 lifestyle-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/300x180/fd7e14/fff?text=Health" class="card-img-top rounded-0" alt="Lifestyle">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <h6 class="fw-bold m-0 lh-base small">আয়ু বাড়াবে যেসব অভ্যাস</h6>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
<section class="sharadesh-district-section py-4 bg-light">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-5">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                        <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">সারা দেশ</h5>
                    </div>

                    <div class="card border-0 bg-white h-100 sharadesh-card">
                        <div class="position-relative">
                            <img src="https://placehold.co/500x300/222/fff?text=Dead+Body" class="card-img-top rounded-0" alt="News">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pt-3 pb-2">
                            <h4 class="card-title fw-bold hover-red">বাসে আচার খেয়ে অচেতন, হাসপাতালে মৃত্যু</h4>
                            <p class="card-text text-secondary mt-2 text-justify small">
                                রাজধানীতে চলন্ত বাসে অজ্ঞান পার্টির কবলে পরে মোখলেসুর রহমান (৪০) নামে এক কাপড় ব্যবসায়ীর মৃত্যুর হয়েছে। বৃ...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-5 d-none d-lg-block"></div> <div class="row g-3">
                        <div class="col-6">
                            <div class="card border-0 bg-white h-100 sharadesh-card">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/333/fff?text=Building" class="card-img-top rounded-0" alt="News">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 pt-2 pb-0">
                                    <h6 class="fw-bold m-0 lh-sm small hover-red">৪০ দিন পর খুলল নগর ভবন</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 bg-white h-100 sharadesh-card">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/444/fff?text=Dhaka" class="card-img-top rounded-0" alt="News">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 pt-2 pb-0">
                                    <h6 class="fw-bold m-0 lh-sm small hover-red">ঢাকা যেন এখনো এক অচেনা নগরী</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 bg-white h-100 sharadesh-card">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/555/fff?text=Rickshaw" class="card-img-top rounded-0" alt="News">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 pt-2 pb-0">
                                    <h6 class="fw-bold m-0 lh-sm small hover-red">অভিযানে ভেঙে ফেলা ৩ অটোরিকশা মালিককে ক্ষতিপূরণ দেবে ডিএনসিসি</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 bg-white h-100 sharadesh-card">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/666/fff?text=Road" class="card-img-top rounded-0" alt="News">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 pt-2 pb-0">
                                    <h6 class="fw-bold m-0 lh-sm small hover-red">বিশ্বরোড থেকে কুড়িলমুখী সড়ক বন্ধ থাকবে ২৪ ঘণ্টা</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                        <h6 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">এক ক্লিকে বিভাগের সব খবর</h6>
                    </div>

                    <div class="card border-0 rounded-0 p-3 shadow-sm">
                        <form>
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <label class="form-label small fw-bold">বিভাগ</label>
                                    <select class="form-select form-select-sm rounded-0 bg-light">
                                        <option>ময়মনসিংহ</option>
                                        <option>ঢাকা</option>
                                        <option>চট্টগ্রাম</option>
                                        <option>সিলেট</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold">জেলা</label>
                                    <select class="form-select form-select-sm rounded-0 bg-light">
                                        <option selected disabled></option>
                                        <option>জামালপুর</option>
                                        <option>নেত্রকোনা</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light w-100 border rounded-0 text-muted fw-bold btn-sm py-2">অনুসন্ধান করুন</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="photo-gallery-section py-4 bg-white">
        <div class="container">
            
            <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                <h5 class="bg-success text-white d-inline-block px-3 py-1 m-0 fw-bold text-uppercase">PHOTO GALLERY</h5>
            </div>

            <div class="row g-4">
                
                <div class="col-lg-8">
                    <div id="photoGallerySlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        
                        <div class="carousel-indicators custom-indicators">
                            <button type="button" data-bs-target="#photoGallerySlider" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#photoGallerySlider" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#photoGallerySlider" data-bs-slide-to="2"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="position-relative">
                                    <img src="https://placehold.co/800x450/333/fff?text=Banks+Demand" class="d-block w-100" alt="Slide 1">
                                    <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                                    <div class="carousel-caption d-block text-start p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); bottom: 0; left: 0; right: 0;">
                                        <h3 class="fw-bold m-0 lh-sm">Banks demand scrapping of double taxation on balance</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="https://placehold.co/800x450/555/fff?text=Crowd+Market" class="d-block w-100" alt="Slide 2">
                                    <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                                    <div class="carousel-caption d-block text-start p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); bottom: 0; left: 0; right: 0;">
                                        <h3 class="fw-bold m-0 lh-sm">Market crowds increase ahead of Eid festival</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="https://placehold.co/800x450/777/fff?text=Traffic+Jam" class="d-block w-100" alt="Slide 3">
                                    <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                                    <div class="carousel-caption d-block text-start p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); bottom: 0; left: 0; right: 0;">
                                        <h3 class="fw-bold m-0 lh-sm">Heavy traffic congestion in Dhaka city today</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row g-3">
                        
                        <div class="col-6">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/222/fff?text=Saddi" class="card-img-top rounded-0" alt="Thumb">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 py-2">
                                    <h6 class="fw-bold m-0 hover-red small lh-sm">Saddi Congratulates Congressio</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/333/fff?text=Trump" class="card-img-top rounded-0" alt="Thumb">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 py-2">
                                    <h6 class="fw-bold m-0 hover-red small lh-sm">Trump says sending military to</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/444/fff?text=Riya+Sen" class="card-img-top rounded-0" alt="Thumb">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 py-2">
                                    <h6 class="fw-bold m-0 hover-red small lh-sm">10 facts about Riya Sen you pr</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card border-0 h-100">
                                <div class="position-relative">
                                    <img src="https://placehold.co/200x120/555/fff?text=Kader" class="card-img-top rounded-0" alt="Thumb">
                                    <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="card-body px-0 py-2">
                                    <h6 class="fw-bold m-0 hover-red small lh-sm">Kader Siddique sees Khaleda's</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="video-gallery-section py-4 bg-light">
        <div class="container">
            
            <div class="d-flex justify-content-between align-items-end mb-3" style="border-bottom: 3px solid #dc3545;">
                <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">
                    ভিডিও গ্যালারি <i class="fas fa-chevron-right small ms-2"></i>
                </h5>
                
                <div class="video-nav-buttons mb-2">
                    <button class="btn btn-outline-dark rounded-circle btn-sm me-1" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-outline-dark rounded-circle btn-sm" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <div class="row g-4">
                            
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 text-white h-100 video-card-modern">
                                    <div class="position-relative h-100 overflow-hidden rounded">
                                        <img src="https://placehold.co/400x250/111/fff?text=Video+Thumb+1" class="card-img h-100 object-fit-cover" alt="Video">
                                        
                                        <div class="video-overlay p-3 d-flex flex-column justify-content-end">
                                            <span class="badge bg-danger mb-2 align-self-start">নতুন</span>
                                            <h5 class="card-title fw-bold hover-red">এআই এবং মার্কেটিং: গ্রাহকের চাহিদা বোঝার নতুন কৌশল</h5>
                                            
                                            <a href="https://www.youtube.com/watch?v=VIDEO_ID" class="stretched-link play-trigger" target="_blank">
                                                <i class="fas fa-play-circle text-danger fs-1 bg-white rounded-circle"></i>
                                            </a>
                                            
                                            <small class="text-light-50 mt-2"><i class="far fa-clock"></i> ২ ঘণ্টা আগে</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 text-white h-100 video-card-modern">
                                    <div class="position-relative h-100 overflow-hidden rounded">
                                        <img src="https://placehold.co/400x250/222/fff?text=Video+Thumb+2" class="card-img h-100 object-fit-cover" alt="Video">
                                        
                                        <div class="video-overlay p-3 d-flex flex-column justify-content-end">
                                            <span class="badge bg-danger mb-2 align-self-start">ভাইরাল</span>
                                            <h5 class="card-title fw-bold hover-red">একাকী ভ্রমণ: অ্যাডভেঞ্চার প্রিয়দের জন্য কিছু টিপস</h5>
                                            <a href="#" class="stretched-link play-trigger">
                                                <i class="fas fa-play-circle text-danger fs-1 bg-white rounded-circle"></i>
                                            </a>
                                            <small class="text-light-50 mt-2"><i class="far fa-clock"></i> ৫ ঘণ্টা আগে</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 text-white h-100 video-card-modern">
                                    <div class="position-relative h-100 overflow-hidden rounded">
                                        <img src="https://placehold.co/400x250/333/fff?text=Video+Thumb+3" class="card-img h-100 object-fit-cover" alt="Video">
                                        
                                        <div class="video-overlay p-3 d-flex flex-column justify-content-end">
                                            <h5 class="card-title fw-bold hover-red">গেমিনে এআইয়ের ব্যবহার: স্টার্টআপদের জন্য সুযোগ</h5>
                                            <a href="#" class="stretched-link play-trigger">
                                                <i class="fas fa-play-circle text-danger fs-1 bg-white rounded-circle"></i>
                                            </a>
                                            <small class="text-light-50 mt-2"><i class="far fa-clock"></i> ১ দিন আগে</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 text-white h-100 video-card-modern">
                                    <div class="position-relative h-100 overflow-hidden rounded">
                                        <img src="https://placehold.co/400x250/000/fff?text=Video+Thumb+4" class="card-img h-100 object-fit-cover" alt="Video">
                                        
                                        <div class="video-overlay p-3 d-flex flex-column justify-content-end">
                                            <h5 class="card-title fw-bold hover-red">গ্রাফিক্স ডিজাইনের নতুন টিউটোরিয়াল</h5>
                                            <a href="#" class="stretched-link play-trigger">
                                                <i class="fas fa-play-circle text-danger fs-1 bg-white rounded-circle"></i>
                                            </a>
                                            <small class="text-light-50 mt-2"><i class="far fa-clock"></i> ২ দিন আগে</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
@endsection