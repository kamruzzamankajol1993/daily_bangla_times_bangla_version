@extends('front.master.master')

@section('title')
{{ $front_ins_name }} 
@endsection

@section('css')
 <style>
        /* Page Specific Styles */
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://placehold.co/1920x600/333/fff?text=Newsroom');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
        }
        .mission-card {
            transition: transform 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        .mission-card:hover {
            transform: translateY(-10px);
            border-bottom: 3px solid #dc3545;
        }
        .team-img-wrapper {
            position: relative;
            overflow: hidden;
        }
        .team-social {
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            background: rgba(220, 53, 69, 0.9);
            padding: 10px;
            text-align: center;
            transition: bottom 0.3s ease;
        }
        .team-card:hover .team-social {
            bottom: 0;
        }
        .team-social a { color: white; margin: 0 5px; }
    </style>
@endsection

@section('body')
  <section class="about-hero text-center mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">সত্যের সন্ধানে নির্ভীক</h1>
            <p class="lead mx-auto" style="max-width: 700px;">
                ডেইলি বাংলা টাইমস—একটি নাম, একটি বিশ্বাস। আমরা সংবাদের গভীরে গিয়ে সত্য উদঘাটনে প্রতিশ্রুতিবদ্ধ।
            </p>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="https://placehold.co/600x400/eee/333?text=Journalism" class="img-fluid rounded shadow-lg" alt="About Us">
                    <div class="bg-danger text-white p-4 position-absolute bottom-0 start-0 m-3 d-none d-md-block" style="max-width: 250px;">
                        <h4 class="fw-bold m-0">১৬+ বছর</h4>
                        <small>নিরবচ্ছিন্ন সংবাদ পরিবেশন</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="section-header-wrapper mb-3" style="border-bottom: 3px solid #dc3545;">
                    <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">আমাদের কথা</h5>
                </div>
                <h2 class="fw-bold mb-3">সবার আগে, সব খবর</h2>
                <p class="text-secondary text-justify lh-lg">
                    ডেইলি বাংলা টাইমস দেশের অন্যতম শীর্ষস্থানীয় সংবাদমাধ্যম। ২০০৮ সালের জানুয়ারি মাসে মানবাধিকার কর্মী এবং সিভিল সোসাইটি লিডার জাহিদ এফ সরদার সাদী এটি প্রতিষ্ঠা করেন। গণতন্ত্র পুনরুদ্ধার এবং দুর্নীতিবিরোধী সংবাদ প্রকাশের জন্য পত্রিকাটি দ্রুত জনপ্রিয়তা অর্জন করে।
                </p>
                <p class="text-secondary text-justify lh-lg">
                    আমরা বিশ্বাস করি তথ্যের অবাধ প্রবাহে। নিরপেক্ষতা আমাদের মূলমন্ত্র। প্রগতিশীল চিন্তা এবং মুক্তিযুদ্ধের চেতনাকে ধারণ করে আমরা এগিয়ে চলেছি। বর্তমানে যুক্তরাষ্ট্র থেকে পরিচালিত হলেও, আমাদের শিকড় বাংলাদেশের প্রতিটি জনপদে।
                </p>
                <img src="https://placehold.co/200x60/transparent/000?text=Signature" alt="Signature" class="mt-3 opacity-50">
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm mission-card p-4 text-center bg-white">
                    <div class="mb-3 text-danger"><i class="fas fa-bullseye fa-3x"></i></div>
                    <h4 class="fw-bold">আমাদের লক্ষ্য</h4>
                    <p class="text-muted small">নির্ভুল ও নিরপেক্ষ সংবাদ পরিবেশনের মাধ্যমে সমাজের দর্পণ হিসেবে কাজ করা এবং জনসচেতনতা তৈরি করা।</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm mission-card p-4 text-center bg-white">
                    <div class="mb-3 text-success"><i class="fas fa-eye fa-3x"></i></div>
                    <h4 class="fw-bold">আমাদের ভিশন</h4>
                    <p class="text-muted small">ডিজিটাল সাংবাদিকতার মাধ্যমে বিশ্বের প্রতিটি বাংলা ভাষাভাষী মানুষের কাছে পৌঁছে যাওয়া।</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm mission-card p-4 text-center bg-white">
                    <div class="mb-3 text-primary"><i class="fas fa-hand-holding-heart fa-3x"></i></div>
                    <h4 class="fw-bold">আমাদের মূল্যবোধ</h4>
                    <p class="text-muted small">সত্যনিষ্ঠা, সাহসিকতা এবং দেশপ্রেম—এই তিন মূলমন্ত্রে আমরা সর্বদা অবিচল।</p>
                </div>
            </div>
        </div>

        <div class="section-header-wrapper mb-4 text-center border-0">
            <h3 class="fw-bold d-inline-block border-bottom border-danger border-3 pb-2">নেতৃত্বে যারা</h3>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://placehold.co/300x350/333/fff?text=Zahid+Saddi" class="card-img-top" alt="Editor">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center bg-white">
                        <h5 class="fw-bold mb-1">জাহিদ এফ সরদার সাদী</h5>
                        <small class="text-danger fw-bold text-uppercase">প্রকাশক ও প্রধান সম্পাদক</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://placehold.co/300x350/444/fff?text=Editor" class="card-img-top" alt="Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center bg-white">
                        <h5 class="fw-bold mb-1">আব্দুর রহমান</h5>
                        <small class="text-danger fw-bold text-uppercase">নির্বাহী সম্পাদক</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://placehold.co/300x350/555/fff?text=News+Head" class="card-img-top" alt="Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center bg-white">
                        <h5 class="fw-bold mb-1">ফারজানা ইসলাম</h5>
                        <small class="text-danger fw-bold text-uppercase">বার্তা প্রধান</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://placehold.co/300x350/666/fff?text=Reporter" class="card-img-top" alt="Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center bg-white">
                        <h5 class="fw-bold mb-1">করিম চৌধুরী</h5>
                        <small class="text-danger fw-bold text-uppercase">চিফ রিপোর্টার</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

      
@endsection
@section('scripts')
@endsection
