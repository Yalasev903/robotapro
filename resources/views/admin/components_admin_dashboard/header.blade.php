<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Admin Panel </title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/admin_assets/images/logo/favicon.png') }}"> --}}

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/fontawesome-all.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/slick.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/magnific-popup.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/line-awesome.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/admin_assets/css/main.css') }}">
    <script src="https://cdn.tiny.cloud/1/zz5yzfkvutel7xxsey78ithzogwrudzczlqmwlyft73cupew/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea[name="content"]',
            height: 400,
            plugins: 'link image code lists table',
            toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
            language: 'uk'
        });
    </script>

</head>
<body>

<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->
