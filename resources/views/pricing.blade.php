<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pricing - Ranklord</title>

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
                    <div class="relative w-full ma-w-2xl lg:max-w-7xl mx-auto">
                        <nav class="tabs tabs-bordered overflow-x-auto" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                            <button type="button" class="tab active-tab:tab-active active" id="tabs-icons-item-1" data-tab="#tabs-icons-1" aria-controls="tabs-icons-1" role="tab" aria-selected="true">
                                <span class="icon-[tabler--home] size-5 flex-shrink-0 me-2"></span>
                                Ranklord ERP
                            </button>
                            <button type="button" class="tab active-tab:tab-active" id="tabs-icons-item-2" data-tab="#tabs-icons-2" aria-controls="tabs-icons-2" role="tab" aria-selected="false">
                                <span class="icon-[tabler--user] size-5 flex-shrink-0 me-2"></span>
                                Email Sender
                            </button>
                            <button type="button" class="tab active-tab:tab-active" id="tabs-icons-item-3" data-tab="#tabs-icons-3" aria-controls="tabs-icons-3" role="tab" aria-selected="false">
                                <span class="icon-[tabler--message] size-5 flex-shrink-0 me-2"></span>
                                Email Validator
                            </button>
                            <button type="button" class="tab active-tab:tab-active" id="tabs-icons-item-3" data-tab="#tabs-icons-3" aria-controls="tabs-icons-3" role="tab" aria-selected="false">
                                <span class="icon-[tabler--message] size-5 flex-shrink-0 me-2"></span>
                                Managed Hosting
                            </button>
                            <button type="button" class="tab active-tab:tab-active" id="tabs-icons-item-3" data-tab="#tabs-icons-3" aria-controls="tabs-icons-3" role="tab" aria-selected="false">
                                <span class="icon-[tabler--message] size-5 flex-shrink-0 me-2"></span>
                                Websites Manager
                            </button>
                        </nav>

                        <div class="mt-3">
                            <div id="tabs-icons-1" role="tabpanel" aria-labelledby="tabs-icons-item-1">
                            <div class="mb-3 flex justify-center">
                                <div id="toggle-price-count" class="border-base-content/20 flex gap-0.5 rounded-btn border p-0.5">
                                    <label for="toggle-price-count-monthly" class="btn btn-sm btn-text has-[:checked]:btn-active">
                                    <span>Monthly</span>
                                    <input id="toggle-price-count-monthly" name="toggle-price-count" type="radio" class="hidden" checked="" />
                                    </label>
                                    <label for="toggle-price-count-annual" class="btn btn-sm btn-text has-[:checked]:btn-active">
                                    <span>Annually</span>
                                    <input id="toggle-price-count-annual" name="toggle-price-count" type="radio" class="hidden" />
                                    </label>
                                </div>
                                </div>

                                <div class="grid grid-cols-1 items-center gap-2 sm:grid-cols-2 md:grid-cols-3">
                                <div class="card border-base-content/20 border shadow-none">
                                    <div class="card-body gap-3 text-center">
                                    <div>
                                        <span class="text-base-content/90 text-xl font-medium ">Basic</span>
                                        <p class="text-sm truncate">A simple start for everyone</p>
                                    </div>
                                    <div class="text-primary flex justify-center gap-x-1">
                                        <span class="text-base-content/80 text-xl">$</span>
                                        <p
                                        data-toggle-count='{
                                        "target": "#toggle-price-count",
                                        "min": 3,
                                        "max": 29
                                        }'
                                        class="text-5xl font-semibold">
                                        3
                                        </p>
                                    </div>
                                    <ul class="text-sm space-y-3">
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">100 responses a month</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Unlimited forms & surveys</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Unlimited fields</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Basic form creation tools</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Up to 2 subdomains</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline btn-sm btn-primary mt-4">UPGRADE</button>
                                    </div>
                                </div>
                                <div class="card border-primary border shadow-none">
                                    <div class="relative">
                                    <span class="badge badge-soft badge-sm badge-primary absolute end-2 top-2">Popular</span>
                                    </div>
                                    <div class="card-body gap-3 text-center">
                                    <div>
                                        <span class="text-base-content/90 text-xl font-medium ">Standard</span>
                                        <p class="text-sm">For small to medium businesses</p>
                                    </div>
                                    <div class="text-primary flex justify-center gap-x-1">
                                        <span class="text-base-content/80 text-xl">$</span>
                                        <p
                                        data-toggle-count='{
                                        "target": "#toggle-price-count",
                                        "min": 15,
                                        "max": 159
                                        }'
                                        class="text-5xl font-semibold">
                                        15
                                        </p>
                                    </div>
                                    <ul class="text-sm space-y-3">
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Unlimited responses</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Unlimited forms & surveys</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Instagram profile page</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Google Docs integration</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Custom Landing page</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-sm btn-primary mt-4">UPGRADE</button>
                                    </div>
                                </div>
                                <div class="card border-base-content/20 border shadow-none">
                                    <div class="card-body gap-3 text-center">
                                    <div>
                                        <span class="text-base-content/90 text-xl font-medium">Enterprise</span>
                                        <p class="text-sm truncate">Solution for big organizations</p>
                                    </div>
                                    <div class="text-primary flex justify-center gap-x-1">
                                        <span class="text-base-content/80 text-xl">$</span>
                                        <p
                                        data-toggle-count='{
                                        "target": "#toggle-price-count",
                                        "min": 79,
                                        "max": 999
                                        }'
                                        class="text-5xl font-semibold">
                                        79
                                        </p>
                                    </div>
                                    <ul class="text-sm space-y-3">
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">PayPal payments</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Logic Jumps</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">File upload with 5GB storage</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Custom domain support</span>
                                        </li>
                                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <span class="bg-primary/20 text-primary flex items-center justify-center rounded-full p-1">
                                            <span class="icon-[tabler--arrow-right] size-4 rtl:rotate-180"></span>
                                        </span>
                                        <span class="text-base-content/80 truncate">Stripe integration</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline btn-sm btn-primary mt-4">UPGRADE</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div id="tabs-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-icons-item-2">
                                <p class="text-base-content/80">
                                This is your <span class="text-base-content/90 font-semibold">Profile</span> tab, where you can update your personal information and manage your account details.
                                </p>
                            </div>
                            <div id="tabs-icons-3" class="hidden" role="tabpanel" aria-labelledby="tabs-icons-item-3">
                                <p class="text-base-content/80">
                                <span class="text-base-content/90 font-semibold">Messages:</span> View your recent messages, chat with friends, and manage your conversations.
                                </p>
                            </div>
                        </div>
                    </div>
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
