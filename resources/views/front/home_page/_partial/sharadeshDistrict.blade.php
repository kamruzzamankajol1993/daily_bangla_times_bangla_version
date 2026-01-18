<section class="sharadesh-district-section py-4 bg-light">
    <div class="container">
        <div class="row g-4">

            {{-- ১. সারা দেশ নিউজ সেকশন --}}
            <div class="col-lg-5">
                <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                    <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">সারা দেশ</h5>
                </div>

                @if(isset($saradeshNews) && count($saradeshNews) > 0)
                    @php $mainSaradesh = $saradeshNews->first(); @endphp
                    <div class="card border-0 bg-white h-100 sharadesh-card">
                        <div class="position-relative">
                            <img src="{{ $mainSaradesh->image ? asset($mainSaradesh->image) : 'https://placehold.co/500x300/222/fff?text=Saradesh' }}" 
                                 class="card-img-top rounded-0" 
                                 alt="{{ $mainSaradesh->title }}">
                            <span class="camera-icon-box"><i class="fas fa-camera"></i></span>
                        </div>
                        <div class="card-body px-0 pt-3 pb-2">
                            <h4 class="card-title fw-bold hover-red">
                                <a href="{{ route('front.product.details', $mainSaradesh->slug) }}" class="text-dark text-decoration-none">
                                    {{ $mainSaradesh->title }}
                                </a>
                            </h4>
                            <p class="card-text text-secondary mt-2 text-justify small">
                                {{ Str::limit(strip_tags($mainSaradesh->content), 150) }}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="text-muted">খবর পাওয়া যায়নি।</div>
                @endif
            </div>

            {{-- ২. সারা দেশ নিউজ লিস্ট (ডান পাশ) --}}
            <div class="col-lg-4">
                <div class="mb-5 d-none d-lg-block"></div> 
                <div class="row g-3">
                    @if(isset($saradeshNews) && count($saradeshNews) > 1)
                        @foreach($saradeshNews->slice(1, 4) as $news)
                            <div class="col-6">
                                <div class="card border-0 bg-white h-100 sharadesh-card">
                                    <div class="position-relative">
                                        <img src="{{ $news->image ? $front_admin_url . $news->image : 'https://placehold.co/200x120/333/fff?text=News' }}" 
                                             class="card-img-top rounded-0" 
                                             alt="{{ $news->title }}"
                                             style="height: 100px; object-fit: cover;">
                                        <span class="camera-icon-box small-icon"><i class="fas fa-camera"></i></span>
                                    </div>
                                    <div class="card-body px-0 pt-2 pb-0">
                                        <h6 class="fw-bold m-0 lh-sm small hover-red">
                                            <a href="{{ route('front.product.details', $news->slug) }}" class="text-dark text-decoration-none">
                                                {{ Str::limit($news->title, 40) }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            {{-- ৩. বিভাগ ও জেলা ফিল্টার (Dynamic Dropdown) --}}
            <div class="col-lg-3">
                <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                    <h6 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">এক ক্লিকে বিভাগের সব খবর</h6>
                </div>

                <div class="card border-0 rounded-0 p-3 shadow-sm">
                    <form id="locationFilterForm">
                        <div class="row g-2 mb-3">
                            
                            {{-- বিভাগ ড্রপডাউন --}}
                            <div class="col-6">
                                <label class="form-label small fw-bold">বিভাগ</label>
                                <select id="divisionSelect" class="form-select form-select-sm rounded-0 bg-light">
                                    <option value="" selected disabled>বাছাই করুন</option>
                                    @foreach($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- জেলা ড্রপডাউন (JS দিয়ে লোড হবে) --}}
                            <div class="col-6">
                                <label class="form-label small fw-bold">জেলা</label>
                                <select id="districtSelect" class="form-select form-select-sm rounded-0 bg-light" disabled>
                                    <option value="" selected disabled>বাছাই করুন</option>
                                </select>
                            </div>
                        </div>
                        
                        <button type="button" onclick="goToLocationNews()" class="btn btn-light w-100 border rounded-0 text-muted fw-bold btn-sm py-2 hover-red-btn">
                            অনুসন্ধান করুন
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- জাভাস্ক্রিপ্ট: বিভাগ অনুযায়ী জেলা লোড করার জন্য --}}
<script>
    // সার্ভার থেকে পাওয়া ডিভিশন ডাটা JS ভেরিয়েবলে রাখা হলো
    const divisionsData = @json($divisions);

    const divisionSelect = document.getElementById('divisionSelect');
    const districtSelect = document.getElementById('districtSelect');

    // ১. বিভাগ চেঞ্জ হলে জেলা লোড হবে
    divisionSelect.addEventListener('change', function() {
        const selectedDivisionId = this.value;
        
        // জেলা ড্রপডাউন রিসেট করা
        districtSelect.innerHTML = '<option value="" selected disabled>বাছাই করুন</option>';
        
        // সিলেক্ট করা বিভাগের ডাটা খুঁজে বের করা
        const selectedDivision = divisionsData.find(div => div.id == selectedDivisionId);

        if (selectedDivision && selectedDivision.children.length > 0) {
            // জেলা অপশনগুলো যুক্ত করা
            selectedDivision.children.forEach(district => {
                const option = document.createElement('option');
                option.value = district.slug; // স্লাগ অথবা আইডি ব্যবহার করতে পারেন
                option.text = district.name;
                districtSelect.add(option);
            });
            districtSelect.disabled = false;
        } else {
            districtSelect.disabled = true;
        }
    });

    // ২. অনুসন্ধান বাটনে ক্লিক করলে রিডাইরেক্ট হবে
    function goToLocationNews() {
        const divisionId = divisionSelect.value;
        const districtSlug = districtSelect.value; // জেলা স্লাগ

        // আপনি কিভাবে রাউটিং সেট করেছেন তার ওপর নির্ভর করে URL ঠিক করুন
        // উদাহরণ: domain.com/category/dhaka-district
        
        if (districtSlug) {
            // যদি জেলা সিলেক্ট করা থাকে
            window.location.href = "{{ url('category') }}/" + districtSlug;
        } else if (divisionId) {
            // যদি শুধু বিভাগ সিলেক্ট করা থাকে (বিভাগের স্লাগ বের করতে হবে)
            const selectedDivision = divisionsData.find(div => div.id == divisionId);
            if(selectedDivision) {
                window.location.href = "{{ url('category') }}/" + selectedDivision.slug;
            }
        } else {
            alert('দয়া করে বিভাগ অথবা জেলা নির্বাচন করুন।');
        }
    }
</script>

{{-- স্টাইল: বাটন হোভার ইফেক্টের জন্য --}}
<style>
    .hover-red-btn:hover {
        background-color: #dc3545 !important;
        color: white !important;
        border-color: #dc3545 !important;
    }
</style>