@extends('front.master.master')

@section('css')
 <style>
        /* Team Card Advanced Styles */
        .team-section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .team-section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: #dc3545;
        }
        
        .member-card {
            transition: all 0.3s ease;
            overflow: hidden;
            border-bottom: 3px solid transparent;
        }
        .member-card:hover {
            transform: translateY(-5px);
            border-bottom-color: #dc3545;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        
        .member-img-box {
            position: relative;
            overflow: hidden;
            height: 280px; /* Fixed height for consistency */
        }
        .member-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .member-card:hover .member-img-box img {
            transform: scale(1.1);
        }

        /* Floating Social Icons on Hover */
        .member-social {
            position: absolute;
            bottom: -50px; /* Hidden initially */
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 10px 0;
            text-align: center;
            transition: bottom 0.3s ease;
            border-top: 2px solid #dc3545;
        }
        .member-card:hover .member-social {
            bottom: 0;
        }
        .member-social a {
            color: #333;
            margin: 0 8px;
            font-size: 16px;
            transition: 0.2s;
        }
        .member-social a:hover { color: #dc3545; }
    </style>
@endsection

@section('body')
  <section class="py-5">
        <div class="container">
            
            <div class="text-center mb-5">
                <h1 class="fw-bold">ডেইলি বাংলা টাইমস পরিবার</h1>
                <p class="text-secondary">বস্তুনিষ্ঠ সংবাদ পরিবেশনে যারা নিরলস কাজ করে যাচ্ছেন</p>
            </div>

            <div class="mb-5">
                <div class="text-center">
                    <h3 class="team-section-title fw-bold text-dark">সম্পাদনা পরিষদ</h3>
                </div>
                
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm member-card h-100">
                            <div class="member-img-box">
                                <img src="https://placehold.co/400x500/222/fff?text=Editor+Chief" alt="Member">
                                <div class="member-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <h5 class="fw-bold mb-1">জাহিদ এফ সরদার সাদী</h5>
                                <p class="text-danger fw-bold small text-uppercase mb-3">প্রকাশক ও প্রধান সম্পাদক</p>
                                <p class="card-text text-secondary small lh-sm">
                                    দীর্ঘ দুই দশক ধরে সাংবাদিকতার সাথে যুক্ত। সত্য প্রকাশে আপোষহীন এবং মানবাধিকার রক্ষায় সর্বদা সোচ্চার।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="text-center">
                    <h3 class="team-section-title fw-bold text-dark">ব্যবস্থাপনা ও জ্যেষ্ঠ সাংবাদিক</h3>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm member-card h-100">
                            <div class="member-img-box">
                                <img src="https://placehold.co/300x350/333/fff?text=Member+1" alt="Member">
                                <div class="member-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">আব্দুর রহমান</h6>
                                <p class="text-success fw-bold small mb-2">নির্বাহী সম্পাদক</p>
                                <p class="small text-secondary m-0 text-truncate-2">কৌশলগত পরিকল্পনা এবং সংবাদ ব্যবস্থাপনার দায়িত্বে রয়েছেন।</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm member-card h-100">
                            <div class="member-img-box">
                                <img src="https://placehold.co/300x350/444/fff?text=Member+2" alt="Member">
                                <div class="member-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">সৈয়দ আশরাফ</h6>
                                <p class="text-success fw-bold small mb-2">বার্তা সম্পাদক</p>
                                <p class="small text-secondary m-0 text-truncate-2">সংবাদ যাচাই-বাছাই এবং দ্রুততম সময়ে পাঠকের কাছে পৌঁছে দিতে কাজ করছেন।</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm member-card h-100">
                            <div class="member-img-box">
                                <img src="https://placehold.co/300x350/555/fff?text=Member+3" alt="Member">
                                <div class="member-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">ফারজানা আক্তার</h6>
                                <p class="text-success fw-bold small mb-2">ফিচার এডিটর</p>
                                <p class="small text-secondary m-0 text-truncate-2">লাইফস্টাইল এবং বিনোদন বিভাগের প্রধান হিসেবে কর্মরত।</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm member-card h-100">
                            <div class="member-img-box">
                                <img src="https://placehold.co/300x350/666/fff?text=Member+4" alt="Member">
                                <div class="member-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">মাহমুদ হাসান</h6>
                                <p class="text-success fw-bold small mb-2">চিফ রিপোর্টার</p>
                                <p class="small text-secondary m-0 text-truncate-2">রাজনীতি ও অপরাধ বিষয়ক অনুসন্ধানী সাংবাদিকতায় বিশেষ দক্ষ।</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="text-center">
                    <h3 class="team-section-title fw-bold text-dark">জেলা প্রতিনিধি</h3>
                </div>
                
                <div class="row g-3">
                    <div class="col-md-4 col-sm-6">
                        <div class="d-flex align-items-center bg-white p-3 border rounded shadow-sm">
                            <img src="https://placehold.co/60x60/ddd/333" class="rounded-circle me-3">
                            <div>
                                <h6 class="fw-bold m-0 small">রফিকুল ইসলাম</h6>
                                <small class="text-muted">ষ্টাফ রিপোর্টার, চট্টগ্রাম</small>
                                <div class="mt-1 small"><a href="#" class="text-secondary me-2"><i class="fab fa-facebook"></i></a> <a href="#" class="text-secondary"><i class="fas fa-envelope"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="d-flex align-items-center bg-white p-3 border rounded shadow-sm">
                            <img src="https://placehold.co/60x60/ddd/333" class="rounded-circle me-3">
                            <div>
                                <h6 class="fw-bold m-0 small">সুমাইয়া খান</h6>
                                <small class="text-muted">প্রতিনিধি, সিলেট</small>
                                <div class="mt-1 small"><a href="#" class="text-secondary me-2"><i class="fab fa-facebook"></i></a> <a href="#" class="text-secondary"><i class="fas fa-envelope"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="d-flex align-items-center bg-white p-3 border rounded shadow-sm">
                            <img src="https://placehold.co/60x60/ddd/333" class="rounded-circle me-3">
                            <div>
                                <h6 class="fw-bold m-0 small">তারেক মাসুদ</h6>
                                <small class="text-muted">প্রতিনিধি, খুলনা</small>
                                <div class="mt-1 small"><a href="#" class="text-secondary me-2"><i class="fab fa-facebook"></i></a> <a href="#" class="text-secondary"><i class="fas fa-envelope"></i></a></div>
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