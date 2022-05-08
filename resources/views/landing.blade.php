<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wraps.gift</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-900">
<div class="relative overflow-hidden">
    <header class="relative">
        <div class="bg-gray-900 pt-6">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <x-icons.gift-outline class="block text-indigo-500 h-8 w-auto"></x-icons.gift-outline>
                <a href="#"
                   class="block items-center px-4 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                    Log in</a>
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
                                <span class="text-indigo-400">digital gift</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Create a shortened link and customize the preview so opening your digital gift feels
                                truly
                                special.
                            </p>
                            <div class="mt-10 sm:mt-12">
                                @if(!session()->has('success'))
                                    <form method="post" action="{{ route('signup') }}"
                                          class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                        @csrf
                                        <div class="sm:flex">
                                            <div class="min-w-0 flex-1">
                                                <label for="email" class="sr-only">Email address</label>
                                                <input id="email" name="email" type="email"
                                                       placeholder="Enter your email"
                                                       required
                                                       {{ old('email') ? "autofocus" : null }}
                                                       value="{{ old('email') }}"
                                                       class="block w-full px-4 py-3 rounded-sm border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                                @error('email')
                                                <p class="mt-2 text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                                <button type="submit"
                                                        class="block w-full py-3 px-4 rounded-sm shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                                    Sign up to create your first link
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mt-3 text-sm text-gray-400 sm:mt-4">No password needed. You'll receive
                                            an
                                            email with a
                                            magic link to get started.
                                        </p>
                                    </form>
                                @else
                                    <h1>Success</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <x-illos.hero
                                class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none">
                            </x-illos.hero>
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
