@extends('front.master.master')

@section('title')
{{ $post->title }} | {{ $front_ins_name }} 
@endsection

@section('css')
<style>
    .reaction-btn { transition: transform 0.2s; }
    .reaction-btn:hover { transform: scale(1.1); }
    .reply-form { display: none; }
    
    /* Print specific styles */
    @media print {
        body * { visibility: hidden; }
        #printableArea, #printableArea * { visibility: visible; }
        #printableArea { position: absolute; left: 0; top: 0; width: 100%; }
        .no-print { display: none !important; }
    }
</style>
@endsection

@section('body')
    {{-- Bangla Number & Time Converter Helper --}}
    @php
        function convertToBangla($str) {
            $en = ['0','1','2','3','4','5','6','7','8','9', 'am', 'pm', 'AM', 'PM'];
            $bn = ['০','১','২','৩','৪','৫','৬','৭','৮','৯', 'পূর্বাহ্ণ', 'অপরাহ্ণ', 'পূর্বাহ্ণ', 'অপরাহ্ণ'];
            return str_replace($en, $bn, $str);
        }
    @endphp

    <section class="single-page py-4">
        <div class="container">
            <div class="row g-4">

                {{-- Left Sticky Sidebar --}}
                <div class="col-lg-2 d-none d-lg-block no-print">
                    <div class="sticky-top" style="top: 100px; z-index: 1;"> 
                        <div class="bg-light p-3 text-center border rounded-1">
                            
                            {{-- Author Info --}}
                            <div class="mb-2">
                                @if($post->author && $post->author->image)
                                    <img src="{{ asset($post->author->image) }}" class="rounded-circle border" width="80" height="80" alt="{{ $post->author->name }}">
                                @else
                                    <i class="fas fa-user-circle fa-3x text-secondary"></i>
                                @endif
                            </div>
                            
                            <h6 class="fw-bold small mb-1">{{ $post->author->name ?? 'ডেস্ক রিপোর্ট' }}</h6>
                            @if($post->author && $post->author->designation)
                                <p class="text-secondary" style="font-size: 11px;">{{ $post->author->designation->name }}</p>
                            @endif
                            
                            <hr class="my-2">
                            
                            {{-- Date & Time Section --}}
                            <div class="text-start small text-secondary lh-sm mb-3" style="font-size: 11px;">
                                <p class="mb-1">
                                    <strong>প্রকাশিত :</strong> <br>
                                    {{ convertToBangla($post->created_at->format('d F Y')) }},
                                    {{-- Using bangladesh_time column if available, else standard format --}}
                                    {{ convertToBangla($post->bangladesh_time ?? $post->created_at->format('h:i A')) }}
                                </p>
                            </div>

                            {{-- Font Resizer --}}
                            <div class="btn-group w-100 mb-3" role="group">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="resizeFont(-1)">-</button>
                                <button type="button" class="btn btn-light btn-sm border disabled text-dark fw-bold">অ</button>
                                <button type="button" class="btn btn-secondary btn-sm" onclick="resizeFont(1)">+</button>
                            </div>

                            <div class="badge bg-success w-100 py-2 rounded-1 fw-normal">
                                মোট পঠিত: <span class="fw-bold">{{ convertToBangla($post->view_count) }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Main Content (Printable Area) --}}
                <div class="col-lg-7" id="printableArea">
                    
                    {{-- Alert Messages --}}
                    @if(session('success'))
                        <div class="alert alert-success no-print">{{ session('success') }}</div>
                    @endif

                    {{-- UPDATED Breadcrumb --}}
                    <nav aria-label="breadcrumb" class="no-print">
                        <ol class="breadcrumb small text-secondary">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}" class="text-dark"><i class="fas fa-home"></i></a></li>
                            
                            {{-- Category Link --}}
                            @if($post->categories->count() > 0)
                                @php $cat = $post->categories->first(); @endphp
                                <li class="breadcrumb-item">
                                    <a href="{{ route('front.category.news', $cat->slug) }}" class="text-dark text-decoration-none">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endif
                            
                            <li class="breadcrumb-item active">{{ Str::limit($post->title, 40) }}</li>
                        </ol>
                    </nav>

                    <h1 class="fw-bold mb-3 lh-base">{{ $post->title }}</h1>

                    {{-- Author Mobile View --}}
                    <div class="d-flex align-items-center mb-3 d-lg-none">
                        <div class="me-2 text-success"><i class="fas fa-pen-nib"></i></div>
                        <span class="text-secondary fw-bold small">{{ $post->author->name ?? 'ডেস্ক রিপোর্ট' }}</span>
                    </div>

                    {{-- UPDATED Share Buttons --}}
                    <div class="social-share-bar mb-4 d-flex gap-2 no-print">
                        {{-- Facebook --}}
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        {{-- Twitter/X --}}
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $post->title }}" target="_blank" class="btn btn-sm btn-outline-dark rounded-circle" title="X (Twitter)">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        {{-- WhatsApp --}}
                        <a href="https://wa.me/?text={{ $post->title }} {{ url()->current() }}" target="_blank" class="btn btn-sm btn-outline-success rounded-circle" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        {{-- Email --}}
                        <a href="mailto:?subject={{ $post->title }}&body=Check out this news: {{ url()->current() }}" class="btn btn-sm btn-outline-secondary rounded-circle" title="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                         {{-- Instagram (Icon only as API is limited) --}}
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-sm btn-outline-danger rounded-circle" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        {{-- Print --}}
                        <button onclick="window.print()" class="btn btn-sm btn-outline-dark rounded-circle" title="Print">
                            <i class="fas fa-print"></i>
                        </button>
                    </div>

                    {{-- Featured Image --}}
                    <div class="mb-3">
                        <img src="{{ $post->image ? asset($post->image) : 'https://placehold.co/800x450/eee/333' }}" class="img-fluid w-100 rounded-1" alt="{{ $post->title }}">
                        @if($post->image_caption)
                            <small class="text-muted d-block mt-1 bg-light p-1 border-bottom">{{ $post->image_caption }}</small>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="article-content text-justify" id="newsBodyContent">
                        @if($post->subtitle)
                            <h5 class="fw-bold mb-3 text-secondary">{{ $post->subtitle }}</h5>
                        @endif
                        
                        {!! $post->content !!}
                    </div>
                    
                    <hr class="my-5 no-print">

                    {{-- RESTORED: Previous / Next News --}}
                    <div class="row g-3 mb-5 no-print">
                        <div class="col-6">
                            @if($previousPost)
                                <a href="{{ route('front.news.details', $previousPost->slug) }}" class="d-block border p-3 text-decoration-none hover-bg-light h-100 shadow-sm">
                                    <small class="text-muted d-block mb-1"><i class="fas fa-arrow-left me-1"></i> পূর্ববর্তী সংবাদ</small>
                                    <h6 class="fw-bold text-dark m-0 small">{{ Str::limit($previousPost->title, 40) }}</h6>
                                </a>
                            @endif
                        </div>
                        <div class="col-6 text-end">
                            @if($nextPost)
                                <a href="{{ route('front.news.details', $nextPost->slug) }}" class="d-block border p-3 text-decoration-none hover-bg-light h-100 shadow-sm">
                                    <small class="text-muted d-block mb-1">পরবর্তী সংবাদ <i class="fas fa-arrow-right ms-1"></i></small>
                                    <h6 class="fw-bold text-dark m-0 small">{{ Str::limit($nextPost->title, 40) }}</h6>
                                </a>
                            @endif
                        </div>
                    </div>

                    {{-- REACTION SECTION --}}
                    <div class="reaction-section mb-5 p-3 bg-light rounded text-center no-print">
                        <h5 class="fw-bold mb-3">খবরটি নিয়ে আপনার প্রতিক্রিয়া জানান</h5>
                        <div class="d-flex justify-content-center gap-3 flex-wrap" id="reaction-buttons">
                            
                            <button class="btn btn-white border shadow-sm rounded-pill px-3 reaction-btn" onclick="submitReaction('like')">
                                👍 <span id="count-like">{{ convertToBangla($post->like_count) }}</span>
                            </button>
                            
                            <button class="btn btn-white border shadow-sm rounded-pill px-3 reaction-btn" onclick="submitReaction('love')">
                                ❤️ <span id="count-love">{{ convertToBangla($post->love_count) }}</span>
                            </button>
                            
                            <button class="btn btn-white border shadow-sm rounded-pill px-3 reaction-btn" onclick="submitReaction('haha')">
                                😂 <span id="count-haha">{{ convertToBangla($post->haha_count) }}</span>
                            </button>
                            
                            <button class="btn btn-white border shadow-sm rounded-pill px-3 reaction-btn" onclick="submitReaction('sad')">
                                😢 <span id="count-sad">{{ convertToBangla($post->sad_count) }}</span>
                            </button>
                            
                            <button class="btn btn-white border shadow-sm rounded-pill px-3 reaction-btn" onclick="submitReaction('angry')">
                                😡 <span id="count-angry">{{ convertToBangla($post->angry_count) }}</span>
                            </button>

                        </div>
                    </div>

                    {{-- COMMENT SECTION --}}
                    <div class="comment-section no-print">
                        <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                            <h5 class="bg-success text-white d-inline-block px-3 py-2 m-0 fw-bold">মতামত দিন</h5>
                        </div>
                        
                        <form action="{{ route('front.comment.store') }}" method="POST" class="mb-4">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            
                            <div class="row g-2 mb-2">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control rounded-0" placeholder="আপনার নাম (আবশ্যক)" required>
                                </div>
                            </div>

                            <div class="mb-2">
                                <textarea name="body" class="form-control rounded-0" rows="3" placeholder="আপনার মন্তব্য লিখুন..." required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-danger rounded-0 px-4">সাবমিট করুন</button>
                        </form>

                        <div class="existing-comments">
                            <h6 class="mb-3">{{ convertToBangla($post->comments->count()) }} টি মন্তব্য</h6>
                            
                            @foreach($post->comments as $comment)
                                <div class="d-flex mb-3 border-bottom pb-3">
                                    <div class="flex-shrink-0">
                                        <img src="https://ui-avatars.com/api/?name={{ $comment->name }}&background=random" class="rounded-circle me-3" width="50">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-1">
                                            {{ $comment->name }} 
                                            <small class="text-muted fw-normal ms-2" style="font-size: 12px;">
                                                {{ $comment->created_at->diffForHumans() }}
                                            </small>
                                        </h6>
                                        <p class="small text-secondary m-0 mb-2">{{ $comment->body }}</p>
                                        
                                        <button class="btn btn-sm btn-link text-danger text-decoration-none p-0 mb-2" onclick="toggleReplyForm({{ $comment->id }})">
                                            <i class="fas fa-reply"></i> রিপ্লাই দিন
                                        </button>

                                        <div id="reply-form-{{ $comment->id }}" class="reply-form bg-light p-2 mb-2">
                                            <form action="{{ route('front.comment.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                
                                                <input type="text" name="name" class="form-control form-control-sm mb-2" placeholder="আপনার নাম" required>
                                                <textarea name="body" class="form-control form-control-sm mb-2" rows="2" placeholder="রিপ্লাই লিখুন..." required></textarea>
                                                <button type="submit" class="btn btn-sm btn-dark">রিপ্লাই সাবমিট</button>
                                            </form>
                                        </div>

                                        @if($comment->replies->count() > 0)
                                            <div class="ms-4 mt-3 border-start ps-3">
                                                @foreach($comment->replies as $reply)
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="https://ui-avatars.com/api/?name={{ $reply->name }}&background=random" class="rounded-circle me-2" width="40">
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-bold small mb-0">{{ $reply->name }}</h6>
                                                            <p class="small text-secondary m-0">{{ $reply->body }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="col-lg-3 no-print">
                    
                    {{-- RESTORED: Sidebar Ad --}}
                    <div class="mb-4 text-center">
                         <div class="bg-light border d-flex align-items-center justify-content-center text-secondary" style="height: 250px; width: 100%;">
                            <div class="text-center">
                                <h5 class="fw-bold">AD SPACE</h5>
                                <small>300x250</small>
                            </div>
                        </div>
                    </div>

                    {{-- Latest News --}}
                    <div class="mb-4">
                        <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                            <h6 class="bg-success text-white d-inline-block px-3 py-1 m-0 fw-bold">সর্বশেষ সংবাদ</h6>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            @foreach($latestNews as $lNews)
                            <div class="d-flex align-items-start border-bottom pb-2">
                                <img src="{{ $lNews->image ? asset($lNews->image) : 'https://placehold.co/90x60/111/fff' }}" class="me-2 rounded-1" width="90">
                                <a href="{{ route('front.news.details', $lNews->slug) }}" class="small fw-bold text-dark hover-red lh-sm">{{ Str::limit($lNews->title, 50) }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Popular News --}}
                    <div class="mb-4">
                        <div class="section-header-wrapper mb-3" style="border-bottom: 2px solid #dc3545;">
                            <h6 class="bg-success text-white d-inline-block px-3 py-1 m-0 fw-bold">জনপ্রিয় সংবাদ</h6>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            @foreach($popularNews as $pNews)
                            <div class="d-flex align-items-start border-bottom pb-2">
                                <img src="{{ $pNews->image ? asset($pNews->image) : 'https://placehold.co/90x60/222/fff' }}" class="me-2 rounded-1" width="90">
                                <a href="{{ route('front.news.details', $pNews->slug) }}" class="small fw-bold text-dark hover-red lh-sm">{{ Str::limit($pNews->title, 50) }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Helper to convert English Numbers to Bangla (for JS updates)
    function toBanglaNum(num) {
        const bn = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
        return num.toString().replace(/\d/g, d => bn[d]);
    }

    // Font Resizer
    function resizeFont(val) {
        let content = document.getElementById('newsBodyContent');
        let style = window.getComputedStyle(content, null).getPropertyValue('font-size');
        let currentSize = parseFloat(style);
        content.style.fontSize = (currentSize + val) + 'px';
    }

    // Toggle Reply Form
    function toggleReplyForm(id) {
        $('#reply-form-' + id).slideToggle();
    }

    // AJAX Reaction Logic
    function submitReaction(type) {
        $.ajax({
            url: "{{ route('front.reaction.store') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                post_id: "{{ $post->id }}",
                type: type
            },
            success: function(response) {
                // Update specific count
                let countSpan = $('#count-' + type);
                // Simple increment visual (assumes we are adding, accurate logic requires fetching fresh count)
                // Getting current text, converting BN to EN to add 1, then back to BN is complex in JS
                // Simplified: just reloading the page or assuming +1 for UX feedback
                
                // For now, let's just trigger a toast
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000
                });
                Toast.fire({
                    icon: 'success',
                    title: 'ধন্যবাদ! আপনার প্রতিক্রিয়া গ্রহণ করা হয়েছে।'
                });
                
                // Note: To update the number accurately without reload, the controller 
                // should return the new total count, and we should update the span text.
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
</script>
@endsection