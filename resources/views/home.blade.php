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
                        <nav class="mx-auto w-full bg-base-100 rounded-md" aria-label="Global">
                            <div class="relative md:flex md:items-center px-4">
                            <div class="flex items-center justify-between">
                                <a class="flex w-full min-w-40" href="/" >
                                    <x-application-logo></x-application-logo>
                                </a>
                                <div class="md:hidden">
                                <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square" data-collapse="#navbar-mega-menu-click" aria-controls="navbar-mega-menu-click" aria-label="Toggle navigation" >
                                    <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                                    <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                                </button>
                                </div>
                            </div>
                            <div id="navbar-mega-menu-click" class="collapse hidden grow basis-full overflow-hidden rounded-lg transition-all duration-300 md:block" >
                                <div class="flex flex-col rounded-lg max-md:mt-3 max-md:border max-md:p-2 md:flex-row md:items-center md:justify-end md:ps-5 md:pe-0.5 gap-2" >
                                <div class="dropdown [--adaptive:none] [--auto-close:inside] [--strategy:static] md:[--strategy:absolute]">
                                    <button type="button" class="dropdown-toggle btn btn-text text-base-content/80 dropdown-open:bg-base-content/10 dropdown-open:text-base-content/90 max-md:px-3" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Products
                                    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-open:opacity-100 start-0 top-full hidden w-full min-w-60 rounded-lg py-2 opacity-0 transition-[opacity,margin] duration-[0.1ms] before:absolute max-md:border max-md:shadow-none" role="menu" aria-orientation="vertical">
                                    <ul class="menu md:menu-horizontal rounded-box w-full max-xl:gap-4 p-0">
                                        <li>
                                        <a href="#" class="menu-title">Ranklord</a>
                                        <ul class="menu">
                                            <li><a href="#">Design Solutions</a></li>
                                            <li><a href="#">Software Development</a></li>
                                            <li><a href="#">Web Hosting</a></li>
                                            <li><a href="#">Domain Registration</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <a href="#" class="menu-title">Ranklord Hosting</a>
                                        <ul class="menu">
                                            <li><a href="#">CRM</a></li>
                                            <li><a href="#">Management Solutions</a></li>
                                            <li><a href="#">Security Services</a></li>
                                            <li><a href="#">Consulting Services</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <a href="#" class="menu-title">Ranklord Mailer</a>
                                        <ul class="menu">
                                            <li><a href="#">UI Kits</a></li>
                                            <li><a href="#">Component Library</a></li>
                                            <li><a href="#">WordPress Plugins</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <a href="#" class="menu-title">Ranklord Webmaster</a>
                                        <ul class="menu">
                                            <li><a href="#">UI Kits</a></li>
                                            <li><a href="#">Component Library</a></li>
                                            <li><a href="#">WordPress Plugins</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <div class="w-full">
                                            <div class="card sm:max-w-sm">
                                                <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-7.png" alt="headphone" /></figure>
                                                <div class="card-body">
                                                    <h5 class="card-title mb-2.5">Get free consultation</h5>
                                                    <p class="mb-4">A perfect balance of exhilarating high-fidelity audio and the effortless magic of Airpods.</p>
                                                    <div class="card-actions">
                                                    <button class="btn btn-primary">Let's go</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                <ul class="menu md:menu-horizontal text-base px-0 max-md:w-fit max-md:py-0 gap-2">
                                    <li><a href="{{route('pricing')}}">Pricing</a></li>
                                    <li><a href="{{route('support')}}">Support<sup>24/7</sup></a></li>
                                    <li><a href="#">Resources</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </nav>
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
