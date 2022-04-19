<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

{{-- TODO: is this antialiased thingie needed? --}}
<body class="antialiased">
<div class="relative overflow-hidden">
    <header class="relative">
        <div class="bg-gray-900 pt-6">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div>
                    <a href="#">
                        <span class="sr-only">Home</span>
                        <img class="h-8 w-auto sm:h-10"
                             src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="">
                    </a>
                </div>
                <div>
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-gray-600 hover:bg-gray-700">
                        Log in</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">
                            <h1 class="text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                <span>Wrapping paper for your</span>
                                <span class="text-indigo-400">digital gifts</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Shorten your links and customize the preview so opening your digital gifts feels truly
                                special.
                            </p>
                            <div class="mt-10 sm:mt-12">
                                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                    <div class="sm:flex">
                                        <div class="min-w-0 flex-1">
                                            <label for="email" class="sr-only">Email address</label>
                                            <input id="email" type="email" placeholder="Enter your email"
                                                   class="block w-full px-4 py-3 rounded-sm border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                        </div>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <button type="submit"
                                                    class="block w-full py-3 px-4 rounded-sm shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                                Sign up to create your first link
                                            </button>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4">No password needed. You'll receive an
                                        email with a
                                        magic link to get started.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                 src="https://tailwindui.com/img/component-images/cloud-illustration-indigo-400.svg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More main page content here... -->
    </main>
</div>
</body>

</html>
