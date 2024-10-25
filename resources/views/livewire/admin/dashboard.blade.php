<section>
    @livewire('admin.layouts.breadcrumb', ['parent' => null])
    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                    <i data-lucide="wallet-2"></i>
                </div>
                <h5 class="mt-4 mb-2">$<span class="counter-value" data-target="236.18">0</span>k</h5>
                <p class="text-slate-500 dark:text-zink-200">Total Revenue</p>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                    <i data-lucide="package"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="13461">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Orders</p>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                    <i data-lucide="truck"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="17150">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Delivered</p>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                    <i data-lucide="package-x"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="3519">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Cancelled</p>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
</section>
