<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $front_ins_d }}">
    <meta name="keywords" content="{{ $front_ins_k }}">
    <meta name="author" content="{{ $front_ins_name }} Team">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.dailybanglatimes.com/">
    <meta property="og:title" content="Daily Bangla Times | সর্বদা সত্যের সন্ধানে">
    <meta property="og:description" content="বাংলাদেশের সর্বশেষ এবং ব্রেকিং নিউজ পড়ুন ডেইলি বাংলা টাইমসে।">
    <meta property="og:image" content="https://placehold.co/1200x630/red/white?text=Daily+Bangla+Times">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Daily Bangla Times | সর্বদা সত্যের সন্ধানে">
    <meta name="twitter:description" content="বাংলাদেশের সর্বশেষ এবং ব্রেকিং নিউজ পড়ুন ডেইলি বাংলা টাইমসে।">
    <meta name="twitter:image" content="https://placehold.co/1200x630/red/white?text=Daily+Bangla+Times">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/style.css">
      @yield('css')
</head>
<body class="bg-light">


    <!-- Top Header Include -->
    @include('front.include.topHeader')
    <!-- End Top Header Include -->

     <!-- Header include -->
     @include('front.include.header')
    <!-- End Header include -->

    <!-- Headline Include -->
    @include('front.include.headline')
    <!-- End Headline Include -->

    <!-- Last Header Include -->
    @include('front.include.lastHeader')
    <!-- End Last Header Include -->


    <!-- Main Content -->
    @yield('body')
    <!-- End Main Content -->

    <!-- Footer Include -->
    @include('front.include.footer')
    <!-- End Footer Include -->

    <!-- Offcanvas Include -->
    @include('front.include.offcanvas')
    <!-- End Offcanvas Include -->
   
   
    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
    function updateBanglaTime() {
        const date = new Date();
        const options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true,
            timeZone: 'Asia/Dhaka'
        };
        
        // Get the standard Bangla string
        let formattedDate = new Intl.DateTimeFormat('bn-BD', options).format(date);
        
        // Manually replace English AM/PM with Bangla equivalents
        formattedDate = formattedDate
            .replace('AM', 'পূর্বাহ্ণ')
            .replace('PM', 'অপরাহ্ণ')
            .replace('am', 'পূর্বাহ্ণ')
            .replace('pm', 'অপরাহ্ণ');

        document.getElementById('banglaTime').innerHTML = '<i class="far fa-clock text-danger"></i> ' + formattedDate;
    }
    setInterval(updateBanglaTime, 1000);
    updateBanglaTime(); // Initial call
</script>
  @yield('scripts')
</body>
</html>