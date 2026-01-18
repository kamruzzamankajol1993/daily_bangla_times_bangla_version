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

use App\Models\SystemInformation;
use App\Models\Message; // Make sure to import the Message model
use Illuminate\Support\Facades\Validator;
class FrontController extends Controller
{



    
   public function index()
{
//dd('home page');

    return view('front.home_page.index');
}


}
