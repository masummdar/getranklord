<div id="toggle-count-destroy" class="bg-white p-5 rounded-md">
    <div class="mb-3 flex justify-center">
        <div id="toggle-count-example" class="border-base-content/20 flex gap-0.5 rounded-btn border p-0.5">
        <label for="toggle-count-monthly-based" class="btn btn-sm btn-text has-[:checked]:btn-active">
            <span>Monthly</span>
            <input id="toggle-count-monthly-based" name="toggle-count-example" type="radio" class="hidden" checked="" />
        </label>
        <label for="toggle-count-annual-based" class="btn btn-sm btn-text has-[:checked]:btn-active">
            <span>Annually</span>
            <input id="toggle-count-annual-based" name="toggle-count-example" type="radio" class="hidden" />
        </label>
        </div>
    </div>

    <div class="border-base-content/20 grid grid-cols-1 items-center rounded-xl border sm:grid-cols-2 md:grid-cols-4">
        <div class="flex flex-col items-center justify-center gap-2 p-4">
            <p class="mb-1 font-medium">Free</p>
            <div class="text-base-content/90 flex gap-x-1 font-semibold">
                <span class="text-xl">$</span>
                <p
                data-toggle-count='{
                    "target": "#toggle-count-example",
                    "min": 0,
                    "max": 0
                }'
                class="text-3xl sm:text-5xl">
                0
                </p>
            </div>
            <p class="text-sm text-center">All the basics for the business that are just getting started!</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
        <div class="flex flex-col items-center justify-center gap-2 p-4">
            <p class="mb-1 font-medium">Essential</p>
            <div class="text-base-content/90 flex gap-x-1 font-semibold">
                <span class="text-xl">$</span>
                <p
                data-toggle-count='{
                    "target": "#toggle-count-example",
                    "min": 15,
                    "max": 159
                }'
                class="text-3xl sm:text-5xl">
                15
                </p>
            </div>
            <p class="text-sm text-center">All the essentials for the business that need some added support!</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
        <div class="flex flex-col items-center justify-center gap-2 p-4">
            <div class="flex justify-between">
                <p class="mb-1 font-medium">Standard</p>
            </div>
            <div class="text-base-content/90 flex gap-x-1 font-semibold">
                <span class="text-xl">$</span>
                <p
                data-toggle-count='{
                    "target": "#toggle-count-example",
                    "min": 60,
                    "max": 699
                }'
                class="text-3xl sm:text-5xl">
                60
                </p>
            </div>
            <p class="text-sm text-center">All the standards for the businesses that need more growth.</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
        <div class="flex flex-col items-center justify-center gap-2 p-4">
            <p class="mb-1 font-medium">Pro</p>
            <div class="text-base-content/90 flex gap-x-1 font-semibold">
                <span class="text-xl">$</span>
                <p
                data-toggle-count='{
                    "target": "#toggle-count-example",
                    "min": 100,
                    "max": 999
                }'
                class="text-3xl sm:text-5xl">
                100
                </p>
            </div>
            <p class="text-sm text-center">All the advanced features with pro support & customizations!</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
</div>
