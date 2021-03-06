<div class="w-full">
    <div class="hidden md:block h-16 shadow-sm w-full {{ $attributes['fixed'] ? 'bg-white top-0 right-0 fixed' : '' }}">
        <div class="flex justify-between max-w-6xl mx-auto items-center h-full">
            <div class="w-2/12">
                <span>{{ config('app.name') }}</span>
            </div>
            <div class="w-8/12 flex flex-row justify-center space-x-8">
                <a href="#">T shirts</a>
                <a href="#">Sun glasses</a>
                <a href="#">Bags</a>
                <a href="#">Wallets</a>
            </div>
            <div class="w-2/12">
                <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="md:hidden w-full shadow-sm bg-red-200 {{ $attributes['fixed'] ? 'bg-white top-0 right-0 fixed' : '' }}"">
    <div>
        <div class="flex flex-row justify-between px-4">
            <div>
                <span>{{ config('app.name') }}</span>
            </div>
            <div id="menubar">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <div id="mobile-center-menu" class="hidden flex flex-col text-center p-4">
            <a href="#">T shirts</a>
            <a href="#">Sun glasses</a>
            <a href="#">Bags</a>
            <a href="#">Wallets</a>
        </div>
    </div>
</div>

<script>

    document.getElementById('menubar').addEventListener('click',(e) => {
        document.getElementById('mobile-center-menu').classList.toggle('hidden')
    })

</script>

