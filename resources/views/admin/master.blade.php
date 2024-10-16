<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg"
      data-mode="dark" data-topbar="dark" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>
        Ecommerce | Tailwick - Admin & Dashboard Template
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('back/images/favicon.ico')}}"/>
    <!-- Layout config Js -->
    <script src="{{ asset('back/js/layout.js')}}"></script>
    <!-- Icons CSS -->
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('back/css/tailwind2.css')}}"/>
</head>
<body
    class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
{{ $slot }}
<script src='{{ asset('back/libs/choices.js/public/assets/scripts/choices.min.js')}}'></script>
<script src="{{ asset('back/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{ asset('back/libs/tippy.js/tippy-bundle.umd.min.js')}}"></script>
<script src="{{ asset('back/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('back/libs/prismjs/prism.js')}}"></script>
<script src="{{ asset('back/libs/lucide/umd/lucide.js')}}"></script>
<script src="{{ asset('back/js/tailwick.bundle.js')}}"></script>
<!-- App js -->
<script src="{{ asset('back/js/app.js')}}"></script>
</body>
</html>
