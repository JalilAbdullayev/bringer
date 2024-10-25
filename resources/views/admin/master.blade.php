<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth group" data-layout="vertical"
      data-sidebar="dark" data-sidebar-size="lg" data-mode="dark" data-topbar="dark" data-skin="default"
      data-navbar="sticky" data-content="fluid" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>
        @yield('title', $settings->title)
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("storage/settings/$settings->favicon")}}"/>
    <!-- Layout config Js -->
    <script src="{{ asset('back/js/layout.js')}}"></script>
    <!-- Icons CSS -->
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('back/css/tailwind2.css')}}"/>
    @vite([])
</head>
<body
    class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    @livewire('admin.layouts.sidebar')
    <!-- Left Sidebar End -->
    <div id="sidebar-overlay" class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"></div>
    @livewire('admin.layouts.header')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <div
            class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <main class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
                {{ $slot }}
            </main>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @livewire('admin.layouts.footer')
    </div>
</div>
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
