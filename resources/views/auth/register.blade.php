<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth group" data-layout="vertical"
      data-sidebar="dark" data-sidebar-size="lg" data-mode="dark" data-topbar="dark" data-skin="default"
      data-navbar="sticky" data-content="fluid" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>
        @lang('auth.register') | {{ $settings->title }}
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("storage/settings/$settings->favicon") }}"/>
    <!-- Layout config Js -->
    <script src="{{ asset('back/js/layout.js')}}"></script>
    <!-- Icons CSS -->
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('back/css/tailwind2.css')}}">
</head>
<body
    class="flex items-center justify-center min-h-screen py-16 lg:py-10 bg-slate-50 dark:bg-zink-800 dark:text-zink-100 font-public">

<div class="relative">
    <div class="absolute hidden opacity-50 ltr:-left-16 rtl:-right-16 -top-10 md:block">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125 316" width="125" height="316">
            <title>&lt;Group&gt;</title>
            <g id="&lt;Group&gt;">
                <path id="&lt;Path&gt;" class="fill-custom-100/50 dark:fill-custom-950/50"
                      d="m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-100 dark:fill-custom-950"
                      d="m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200/50 dark:fill-custom-900/50"
                      d="m39 237.4l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200/75 dark:fill-custom-900/75"
                      d="m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200 dark:fill-custom-900"
                      d="m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300/50 dark:fill-custom-800/50"
                      d="m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300/75 dark:fill-custom-800/75"
                      d="m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300 dark:fill-custom-800"
                      d="m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400/50 dark:fill-custom-700/50"
                      d="m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400/75 dark:fill-custom-700/75"
                      d="m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400 dark:fill-custom-700"
                      d="m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-500/50 dark:fill-custom-600/50"
                      d="m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z"/>
            </g>
        </svg>
    </div>
    <div class="absolute hidden -rotate-180 opacity-50 ltr:-right-16 rtl:-left-16 -bottom-10 md:block">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125 316" width="125" height="316">
            <title>&lt;Group&gt;</title>
            <g id="&lt;Group&gt;">
                <path id="&lt;Path&gt;" class="fill-custom-100/50 dark:fill-custom-950/50"
                      d="m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-100 dark:fill-custom-950"
                      d="m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200/50 dark:fill-custom-900/50"
                      d="m39 237.4l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200/75 dark:fill-custom-900/75"
                      d="m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-200 dark:fill-custom-900"
                      d="m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300/50 dark:fill-custom-800/50"
                      d="m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300/75 dark:fill-custom-800/75"
                      d="m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-300 dark:fill-custom-800"
                      d="m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400/50 dark:fill-custom-700/50"
                      d="m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400/75 dark:fill-custom-700/75"
                      d="m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-400 dark:fill-custom-700"
                      d="m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z"/>
                <path id="&lt;Path&gt;" class="fill-custom-500/50 dark:fill-custom-600/50"
                      d="m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z"/>
            </g>
        </svg>
    </div>
    <div class="mb-0 w-screen lg:mx-auto lg:w-[500px] card shadow-lg border-none shadow-slate-100 relative">
        <div class="!px-10 !py-12 card-body">
            <a href="#!">
                <img src="{{ asset("storage/settings/$settings->logo") }}" alt=""
                     class="hidden h-6 mx-auto dark:block"/>
                <img src="{{ asset("storage/settings/$settings->logo") }}" alt=""
                     class="block h-6 mx-auto dark:hidden"/>
            </a>
            <div class="mt-8 text-center">
                <h4 class="mb-1 text-custom-500 dark:text-custom-500">
                    @lang('auth.create_account')
                </h4>
            </div>
            <form action="{{ route('register') }}" method="POST" class="mt-10">
                @csrf
                <div class="mb-3">
                    <label for="name" class="inline-block mb-2 text-base font-medium">
                        @lang('main.name')
                    </label>
                    <input type="text" id="name" name="name" :value="old('name')" autofocus
                           placeholder="@lang('main.name')"
                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                </div>
                <div class="mb-3">
                    <label for="email" class="inline-block mb-2 text-base font-medium">
                        Email
                    </label>
                    <input type="email" id="email" name="email" :value="old('email')" autofocus
                           placeholder="Email"
                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="inline-block mb-2 text-base font-medium">
                        @lang('main.password')
                    </label>
                    <input type="password" id="password" placeholder="@lang('main.password')" name="password"
                           autocomplete="new-password"
                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">
                        @lang('auth.confirm_password')
                    </label>
                    <input type="password" id="password_confirmation" placeholder="@lang('auth.confirm_password')"
                           name="password_confirmation" autocomplete="new-password"
                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                </div>
                <div class="mt-10">
                    <button type="submit"
                            class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                        @lang('auth.register')
                    </button>
                </div>
            </form>
            <div class="mt-10 text-center">
                <p class="mb-0 text-slate-500 dark:text-zink-200">
                    @lang('auth.have_account')
                    <a href="{{ route('login') }}"
                       class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                        @lang('auth.login')
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<script src='{{ asset('back/libs/choices.js/public/assets/scripts/choices.min.js')}}'></script>
<script src="{{ asset('back/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{ asset('back/libs/tippy.js/tippy-bundle.umd.min.js')}}"></script>
<script src="{{ asset('back/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('back/libs/prismjs/prism.js')}}"></script>
<script src="{{ asset('back/libs/lucide/umd/lucide.js')}}"></script>
<script src="{{ asset('back/js/tailwick.bundle.js')}}"></script>
<script src="{{ asset('back/js/pages/auth-login.init.js')}}"></script>
</body>
</html>
