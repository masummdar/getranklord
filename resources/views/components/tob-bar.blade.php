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
                <a href="#" class="menu-title">Business Automation</a>
                <ul class="menu">
                    <li><a href="#">Professionally Desigend Website</a></li>
                    <li><a href="#">Customer Management</a></li>
                    <li><a href="#">Order Management</a></li>
                    <li><a href="#">Invoice Management</a></li>
                </ul>
                </li>
                <li>
                <a href="#" class="menu-title">Bulk Email Sender</a>
                <ul class="menu">
                    <li><a href="#">Inbox Ready Setup</a></li>
                    <li><a href="#">Custom Reporting</a></li>
                    <li><a href="#">Dedicated IP</a></li>
                    <li><a href="#">All done for you</a></li>
                </ul>
                </li>
                <li>
                <a href="#" class="menu-title">Email Validator</a>
                <ul class="menu">
                    <li><a href="#">No more email bounce</a></li>
                    <li><a href="#">Simple Pricing</a></li>
                    <li><a href="#">Inbox test</a></li>
                </ul>
                </li>
                <li>
                <a href="#" class="menu-title">Managed Hosting</a>
                <ul class="menu">
                    <li><a href="#">High Performance VPS</a></li>
                    <li><a href="#">Fully Managed</a></li>
                    <li><a href="#">Advanced Security</a></li>
                    <li><a href="#">Daily Backups</a></li>
                </ul>
                </li>
                <li>
                <a href="#" class="menu-title">Websites Manager</a>
                <ul class="menu">
                    <li><a href="#">Expert Webmasters</a></li>
                    <li><a href="#">24/7 Support</a></li>
                    <li><a href="#">All in one solution</a></li>
                </ul>
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
