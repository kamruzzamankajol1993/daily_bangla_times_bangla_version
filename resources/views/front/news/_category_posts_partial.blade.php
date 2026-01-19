<div class="row g-4">
    @forelse($posts as $post)
        <div class="col-md-4">
            <div class="card border-0 h-100 category-card shadow-sm">
                <div class="overflow-hidden mb-2 position-relative">
                    {{-- Image --}}
                    <a href="{{ route('front.news.details', $post->slug) }}">
                        <img src="{{ $post->image ? $front_admin_url.$post->image : 'https://placehold.co/400x240/ddd/333?text=No+Image' }}" 
                             class="card-img-top rounded-0 zoom-img" 
                             alt="{{ $post->title }}">
                    </a>
                </div>
                <div class="card-body p-2">
                    <div class="d-flex mb-2">
                        {{-- Show Category Name --}}
                        <span class="badge bg-danger rounded-0 fw-normal py-1 px-2">
                            {{ $post->categories->first()->name ?? 'News' }}
                        </span>
                        
                        {{-- Icon or Date --}}
                        <span class="badge bg-dark rounded-0 py-1 px-2 ms-1">
                            <i class="far fa-clock"></i> {{ $post->created_at->format('d M, Y') }}
                        </span>
                    </div>

                    <h5 class="card-title fw-bold hover-red lh-base mb-2">
                        <a href="{{ route('front.news.details', $post->slug) }}" class="text-dark text-decoration-none">
                            {{ Str::limit($post->title, 60) }}
                        </a>
                    </h5>
                    
                    <p class="card-text text-secondary small text-justify">
                        {{-- Subtitle or Content limit --}}
                         @if($post->subtitle)
                            {{ Str::limit($post->subtitle, 100) }}
                         @else
                            {{ Str::limit(strip_tags($post->content), 100) }}
                         @endif
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">কোনো খবর পাওয়া যায়নি।</h4>
        </div>
    @endforelse
</div>

{{-- Pagination Links --}}
<div class="mt-5 d-flex justify-content-center pagination-wrapper">
    {{ $posts->links('pagination::bootstrap-5') }}
</div>