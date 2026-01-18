   

   <header class="py-3 bg-white mb-2 shadow-sm sticky-top-mobile">
        <div class="container text-center">
             
             <div class="d-flex justify-content-between align-items-center d-lg-none">
                <button class="btn fs-3 border-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
                
                <img src="{{ $front_admin_url }}{{ $front_logo_name }}" alt="Logo" class="img-fluid" style="max-height: 50px; width: auto;">
                
                <button class="btn fs-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearchBox" aria-expanded="false" aria-controls="mobileSearchBox">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="collapse mt-2" id="mobileSearchBox">
                <div class="card card-body p-2 border-0 bg-light">
                    <form class="d-flex">
                        <input class="form-control me-2 rounded-0" type="search" placeholder="কি খুঁজছেন? লিখুন..." aria-label="Search">
                        <button class="btn btn-danger rounded-0" type="submit">খুঁজুন</button>
                    </form>
                </div>
            </div>

            <a href="#" class="d-none d-lg-block mb-2">
                <img src="{{ $front_admin_url }}{{ $front_logo_name }}" alt="Logo" class="img-fluid">
            </a>
            
            <div class="ad-slot my-2 d-none d-lg-block">
                <img src="https://placehold.co/728x90/eee/999?text=HEADER+AD+SPACE+(728x90)" class="img-fluid">
            </div>
        </div>
    </header>