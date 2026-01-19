<div class="container sticky-nav-desktop">
    <nav class="navbar navbar-expand-lg custom-navbar shadow-sm">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav w-100 justify-content-center flex-wrap">
                
                {{-- হোম আইকন --}}
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('front.index') }}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>

                {{-- প্রথম ১৬টি ক্যাটাগরি --}}
               {{-- lastHeader.blade.php --}}

@foreach($header_categories as $category)
    @if($category->children->count() > 0)
        {{-- যদি চাইল্ড থাকে তবে ড্রপডাউন হবে --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{ $category->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $category->name }}
            </a>
            <ul class="dropdown-menu border-0 shadow rounded-0" aria-labelledby="navbarDropdown{{ $category->id }}">
                {{-- এখানে প্যারেন্ট ক্যাটাগরি নিজেও একটি অপশন হিসেবে রাখা ভালো (অপশনাল) --}}
                <li>
                    <a class="dropdown-item fw-bold" href="{{ route('front.category.news', $category->slug) }}">
                        {{ $category->name }} (All)
                    </a>
                </li>
                
                {{-- চাইল্ড ক্যাটাগরি লুপ --}}
                @foreach($category->children as $child)
                    <li>
                        <a class="dropdown-item" href="{{ route('front.category.news', $child->slug) }}">
                            {{ $child->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @else
        {{-- যদি চাইল্ড না থাকে তবে সাধারণ লিংক হবে --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('front.category.news', $category->slug) }}">
                {{ $category->name }}
            </a>
        </li>
    @endif
@endforeach

                {{-- বিবিধ অপশন (যদি ১৬টার বেশি ক্যাটাগরি থাকে) --}}
                @if($more_categories->count() > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bibidhoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            বিবিধ
                        </a>
                        <ul class="dropdown-menu border-0 shadow rounded-0" aria-labelledby="bibidhoDropdown">
                            {{-- পরবর্তী ১০টি ক্যাটাগরি --}}
                            @foreach($more_categories as $moreCategory)
                                <li>
                                    <a class="dropdown-item" href="{{ route('front.category.news', $moreCategory->slug) }}">
                                        {{ $moreCategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </nav>
</div>