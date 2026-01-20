<header class="py-3 bg-white mb-2 shadow-sm sticky-top-mobile">
    <div class="container text-center">
         
         {{-- মোবাইল মেনু (আগের মতো) --}}
         <div class="d-flex justify-content-between align-items-center d-lg-none">
            <button class="btn fs-3 border-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <i class="fas fa-bars"></i>
            </button>
            <a href="{{ route('front.index') }}">
            <img src="{{ $front_admin_url }}{{ $front_logo_name }}" alt="Logo" class="img-fluid" style="max-height: 50px; width: auto;">
            </a>
            <button class="btn fs-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearchBox" aria-expanded="false" aria-controls="mobileSearchBox">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="collapse mt-2" id="mobileSearchBox">
            <div class="card card-body p-2 border-0 bg-light">
                <form class="d-flex" action="{{ route('front.search') }}" method="GET">
                    <input class="form-control me-2 rounded-0" name="q" type="search" placeholder="কি খুঁজছেন? লিখুন..." aria-label="Search">
                    <button class="btn btn-danger rounded-0" type="submit">খুঁজুন</button>
                </form>
            </div>
        </div>
        
        {{-- ================================================== --}}
        {{-- DESKTOP VIEW: লোগো (সার্চ বারের সাথে সিঙ্ক করা) --}}
        {{-- ================================================== --}}
        <div class="d-none d-lg-block mb-2">
            
            {{-- এখানে responsive-central-box ক্লাস ব্যবহার করা হয়েছে যাতে লোগো সার্চ বারের সমান থাকে --}}
            <div class="mx-auto responsive-central-box" style="width: 100%;">
                <a href="{{ route('front.index') }}" class="d-block text-center">
                    <img src="{{ $front_admin_url }}{{ $front_logo_name }}" alt="Logo" class="img-fluid" style="width: 100%; object-fit: contain;">
                </a>
            </div>

        </div>
        
        <div class="ad-slot my-2 d-none d-lg-block">
            <img src="https://placehold.co/728x90/eee/999?text=HEADER+AD+SPACE+(728x90)" class="img-fluid">
        </div>
    </div>
</header>