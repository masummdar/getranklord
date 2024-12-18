<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ranklord</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center  selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="flex w-full flex-wrap py-4 text-sm md:flex-nowrap md:justify-start md:py-0 rounded-md mt-5">
                        <x-tob-bar></x-tob-bar>
                    </header>
                </div>

                <main class="mt-6 w-full">
                </main>

                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        <div class="flex justify-between align-middle flex-col md:flex-row gap-3">
                            <div class="copyright">&copy; {{now()->year}} Devzet LLC. All rights reserved.</div>
                            <div class="footer-links">
                                <nav class="footer-menu">
                                    <ul class="flex flex-col md:flex-row gap-2">
                                        <li><a href="/terms-and-conditions" aria-label="View Terms and Conditions">Terms & Conditions</a></li>
                                        <li><a href="/privacy-policy" aria-label="View Terms and Conditions">Privacy Policy</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
