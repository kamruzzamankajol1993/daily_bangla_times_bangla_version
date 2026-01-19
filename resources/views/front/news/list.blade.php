@extends('front.master.master')

@section('title')
{{ $category->name ?? 'News' }} | {{ $front_ins_name ?? '' }} 
@endsection

@section('css')
<style>
    /* Loading Overlay Style */
    #loading-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(255, 255, 255, 0.8);
        z-index: 10;
        display: none; /* Hidden by default */
        align-items: center;
        justify-content: center;
    }
    
    /* Smooth transition for content replacement */
    #post-data-container {
        position: relative;
        min-height: 400px;
        transition: opacity 0.3s ease;
    }
</style>
@endsection

@section('body')
 <section class="category-body py-4 bg-white">
        <div class="container">
            
            {{-- Breadcrumb --}}
            <div class="d-flex align-items-center mb-4 text-secondary small border-bottom pb-2">
                <a href="{{ route('front.index') }}" class="text-dark"><i class="fas fa-home"></i></a>
                <span class="mx-2">/</span>
                <span class="fw-bold text-danger">{{ $category->name ?? 'News' }}</span>
            </div>

            <div class="row g-4">
                
                {{-- MAIN CONTENT COLUMN --}}
                <div class="col-lg-9">
                    
                    {{-- Container for AJAX Data --}}
                    <div id="post-data-container">
                        {{-- Loading Spinner --}}
                        <div id="loading-overlay">
                            <div class="spinner-border text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        {{-- INITIAL DATA LOAD --}}
                        @include('front.news._category_posts_partial')

                    </div>

                </div>

                {{-- SIDEBAR AD COLUMN --}}
                <div class="col-lg-3">
                    <div class="sticky-top" style="top: 100px; z-index: 5;">
                        <div class="bg-light border d-flex align-items-center justify-content-center text-secondary" style="height: 600px; width: 100%;">
                            <div class="text-center">
                                <h5 class="fw-bold">AD SPACE</h5>
                                <small>300x600</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        
        // Handle Pagination Click
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault(); // Prevent default browser reload
            
            let pageUrl = $(this).attr('href'); // Get the URL (e.g., ...?page=2)
            
            // 1. Show Loading State
            $('#loading-overlay').fadeIn(200);
            $('#post-data-container').css('opacity', '0.6');

            // 2. Perform AJAX
            fetchPosts(pageUrl);
        });

        function fetchPosts(url) {
            $.ajax({
                url: url,
                type: "get",
                datatype: "html",
            })
            .done(function(data) {
                // 3. Update Content
                $('#post-data-container').empty().html(data);
                
                // Re-add loading overlay structure (because empty() removed it)
                $('#post-data-container').prepend(`
                    <div id="loading-overlay">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `);

                // 4. Update Browser URL History (Advanced UX)
                // This allows the user to use the "Back" button correctly
                window.history.pushState({path: url}, '', url);
                
                // 5. Scroll to top of container smoothly
                $('html, body').animate({
                    scrollTop: $(".category-body").offset().top - 60
                }, 500);

                // 6. Restore Opacity
                $('#post-data-container').css('opacity', '1');
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
                $('#loading-overlay').fadeOut();
                $('#post-data-container').css('opacity', '1');
            });
        }
    });
</script>
@endsection