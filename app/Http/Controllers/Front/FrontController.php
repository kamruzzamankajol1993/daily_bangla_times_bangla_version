<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use App\Models\Post;
use App\Models\SystemInformation;
use App\Models\Message; // Make sure to import the Message model
use Illuminate\Support\Facades\Validator;
use App\Models\VideoNews;
class FrontController extends Controller
{



    
   public function index()
{
// ১. সর্বশেষ ১০টি নিউজ (Latest)
    $latestPosts = Post::where('status', 'approved')
                       ->where('draft_status', 0)
                       ->where('trash_status', 0)
                       ->where('language', 'bn')
                       ->orderBy('id', 'desc')
                       ->take(10)
                       ->get();

    // ২. জনপ্রিয় ১০টি নিউজ (Popular - View Count এর ভিত্তিতে)
    $popularPosts = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('language', 'bn')
                        ->where('trash_status', 0)
                        ->orderBy('view_count', 'desc')
                        ->take(10)
                        ->get();
    $madamUnderNews = Post::where('status', 'approved')
                          ->where('draft_status', 0)
                          ->where('trash_status', 0)
                          ->where('language', 'bn') 
                          ->where('home_page_position', 'under_madam_image') // কন্ডিশন
                          ->orderBy('id', 'desc')
                          ->take(8)
                          ->get();

    $sliderPosts = Post::where('status', 'approved')
                       ->where('draft_status', 0)
                       ->where('trash_status', 0)
                       ->where('language', 'bn') 
                       ->where('home_page_position', 'slider') // কন্ডিশন: slider
                       ->orderBy('id', 'desc')
                       ->take(5) // সাধারণত স্লাইডারে ৩-৫টি নিউজ থাকে
                       ->get();

    $targetCategoryIds = [110, 111, 113, 133]; 

    $randomNews = Post::where('status', 'approved')
                      ->where('draft_status', 0)
                      ->where('trash_status', 0)
                      ->where('language', 'bn')
                      ->whereIn('category_id', $targetCategoryIds) // ক্যাটাগরি ফিল্টার
                      ->inRandomOrder() // র‍্যান্ডমলি ডাটা আনবে
                      ->take(6) // ৬টি নিউজ
                      ->get();

    $englishNews = Post::where('status', 'approved')
                       ->where('draft_status', 0)
                       ->where('trash_status', 0)
                       ->where('language', 'en') // ইংরেজি ভাষা ফিল্টার
                       ->orderBy('id', 'desc')
                       ->take(4)
                       ->get();

    $internationalNews = Post::where('status', 'approved')
                             ->where('draft_status', 0)
                             ->where('trash_status', 0)
                             ->where('language', 'bn')
                             ->where('category_id', 111) // <--- এখানে সঠিক ID দিন
                             ->orderBy('id', 'desc')
                             ->take(6)
                             ->get();

    // ৮. মতামত (Opinion) - ২ টি
    // [নোট: এখানে 'category_id' 8 এর জায়গায় আপনার মতামত ক্যাটাগরির সঠিক ID বসান]
    $opinionNews = Post::where('status', 'approved')
                       ->where('draft_status', 0)
                       ->where('trash_status', 0)
                       ->where('language', 'bn')
                       ->where('category_id', 118) // <--- এখানে সঠিক ID দিন
                       ->orderBy('id', 'desc')
                       ->take(2)
                       ->get();

    $nationalNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 110) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ১০. রাজনীতি (Politics News) - ৫টি
    // [নোট: এখানে 'category_id' 6 এর জায়গায় আপনার 'রাজনীতি' ক্যাটাগরির সঠিক ID বসান]
    $politicsNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 133) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ১১. অর্থনীতি (Economy News) - ৫টি
    // [নোট: এখানে 'category_id' 9 এর জায়গায় আপনার 'অর্থনীতি' ক্যাটাগরির সঠিক ID বসান]
    $economyNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 119) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    $sportsNews = Post::where('status', 'approved')
                      ->where('draft_status', 0)
                      ->where('trash_status', 0)
                      ->where('language', 'bn')
                      ->where('category_id', 113) // <--- সঠিক ID দিন
                      ->orderBy('id', 'desc')
                      ->take(11) 
                      ->get();

    $lawCourtsNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 126) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    $exclusiveNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 143) // প্রথমে পোস্ট টেবিলে চেক করবে
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // কন্ডিশন: যদি পোস্ট টেবিলের ডাটা ০ হয়, তাহলে পোস্ট ক্যাটাগরি (Pivot Table) থেকে আনবে
    if ($exclusiveNews->count() == 0) {
        $exclusiveNews = Post::where('status', 'approved')
                            ->where('draft_status', 0)
                            ->where('trash_status', 0)
                            ->where('language', 'bn')
                            // categories রিলেশনশিপ ব্যবহার করে post_category টেবিল চেক করা হচ্ছে
                            ->whereHas('categories', function ($query) {
                                $query->where('categories.id', 143); // Category ID
                            })
                            ->orderBy('id', 'desc')
                            ->take(5)
                            ->get();
    }

    // ১৫. স্বাস্থ্য (Health News) - ৫টি
    // [নোট: এখানে 'category_id' 13 এর জায়গায় আপনার 'স্বাস্থ্য' ক্যাটাগরির সঠিক ID বসান]
    $healthNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 115) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    $entertainmentNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 114) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(9)
                        ->get();

    $shareMarketNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 127) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ১৮. জবস (Jobs) - ৫টি
    // [নোট: 'category_id' এর জায়গায় আপনার সঠিক ID বসান]
    $jobsNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 128) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ১৯. কৃষি (Agriculture) - ৫টি
    // [নোট: 'category_id' এর জায়গায় আপনার সঠিক ID বসান]
    $agricultureNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 129) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    

     $miscNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 121) // প্রথমে পোস্ট টেবিলে চেক করবে
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // কন্ডিশন: যদি পোস্ট টেবিলের ডাটা ০ হয়, তাহলে পোস্ট ক্যাটাগরি (Pivot Table) থেকে আনবে
    if ($miscNews->count() == 0) {
        $miscNews = Post::where('status', 'approved')
                            ->where('draft_status', 0)
                            ->where('trash_status', 0)
                            ->where('language', 'bn')
                            // categories রিলেশনশিপ ব্যবহার করে post_category টেবিল চেক করা হচ্ছে
                            ->whereHas('categories', function ($query) {
                                $query->where('categories.id', 121); // Category ID
                            })
                            ->orderBy('id', 'desc')
                            ->take(5)
                            ->get();
    }


    $artsLiteratureNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 120) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ২২. ফিচার (Feature) - ৫টি
    // [নোট: 'category_id' এর জায়গায় আপনার সঠিক ID বসান]
    $featureNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 141) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    // ২৩. নারী (Women) - ৫টি
    // [নোট: 'category_id' এর জায়গায় আপনার সঠিক ID বসান]
    $womenNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 124) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    $lifestyleNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 117) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(7)
                        ->get();

     if ($miscNews->count() == 0) {
        $lifestyleNews = Post::where('status', 'approved')
                            ->where('draft_status', 0)
                            ->where('trash_status', 0)
                            ->where('language', 'bn')
                            // categories রিলেশনশিপ ব্যবহার করে post_category টেবিল চেক করা হচ্ছে
                            ->whereHas('categories', function ($query) {
                                $query->where('categories.id', 117); // Category ID
                            })
                            ->orderBy('id', 'desc')
                            ->take(5)
                            ->get();
    }

    $saradeshNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->where('language', 'bn')
                        ->where('category_id', 132) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    $divisions = Category::where('status', 1) // যদি স্ট্যাটাস কলাম থাকে
                         ->whereNull('parent_id') // প্যারেন্ট ক্যাটাগরি (বিভাগ)
                         ->has('children') // শর্ত: যাদের চাইল্ড আছে তাদেরই আনবে
                         ->with('children') // সাথে চাইল্ড ডাটাও লোড করে নিচ্ছি
                         ->get();

    $photoGalleryNews = Post::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        // আপনার ফটো গ্যালারি যদি ইংলিশ হয় তবে 'en' দিন, বাংলা হলে 'bn'
                         ->where('language', 'bn') 
                        ->where('category_id', 137) // <--- সঠিক ID দিন
                        ->orderBy('id', 'desc')
                        ->take(7)
                        ->get();

    $videoGalleryNews = VideoNews::where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        // যদি ল্যাঙ্গুয়েজ ফিল্টার লাগে
                         ->where('language', 'bn') 
                        ->orderBy('id', 'desc')
                        ->take(9)
                        ->get();
    return view('front.home_page.index',
     compact(
        'latestPosts',
        'popularPosts',
        'madamUnderNews',
        'sliderPosts', 
        'randomNews', 
        'englishNews', 
        'internationalNews',
        'opinionNews',
        'nationalNews',
        'politicsNews',
        'economyNews',
        'sportsNews',
        'lawCourtsNews',
        'exclusiveNews',
        'healthNews',
        'entertainmentNews',
        'shareMarketNews',
        'jobsNews',
        'agricultureNews',
         'miscNews',
        'artsLiteratureNews',
        'featureNews',
        'womenNews',
        'lifestyleNews',
        'saradeshNews',
        'divisions',
        'photoGalleryNews',
        'videoGalleryNews'

         ));
}


// ভিডিও ডিটেইলস মেথড
public function videoDetail($slug)
{
    $video = VideoNews::where('slug', $slug)->firstOrFail();

    // ভিউ কাউন্ট বাড়ানো
    $video->increment('view_count');

    // রিলেটেড বা অন্যান্য ভিডিও
    $relatedVideos = VideoNews::where('slug', '!=', $slug)
                        ->where('status', 'approved')
                        ->where('draft_status', 0)
                        ->where('trash_status', 0)
                        ->orderBy('id', 'desc')
                        ->take(5)
                        ->get();

    return view('front.video_gallery.detail', compact('video', 'relatedVideos'));
}


}
