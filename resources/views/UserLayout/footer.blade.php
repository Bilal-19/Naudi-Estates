{{-- Footer --}}
<div
    class="w-full bg-[#040404] text-white flex flex-col md:flex-row justify-around md:items-center py-10 space-y-10 md:space-y-0">
    <div class="m-5 md:m-0">
        <a href="{{ route('Home') }}">
            <img src="{{ asset('assets/realestateLogo.png') }}" alt="logo" class="object-contain h-18 m-3">
        </a>
    </div>
    <div class="flex flex-col font-light text-base md:text-xl m-5 md:m-0">
        <a href="mailto:propertymanagernaudi@gmail.com" class="hover:text-[#C9A578]">propertymanagernaudi@gmail.com</a>
        <a href="tel:+356 77120233" class="hover:text-[#C9A578]">+356 77120233</a>
    </div>
    <div class="m-5 md:m-0">
        <h4 class="text-lg md:text-[25px] font-medium">Quick Links</h4>
        <div class="flex flex-col">
            <a href="{{ route('Service') }}"
                class="font-light text-base md:text-xl hover:text-[#C9A578] {{ request()->routeIs('Service') ? 'text-[#C9A578]' : 'text-white' }}">Services</a>
            <a href="{{ route('Pricing') }}"
                class="font-light text-base md:text-xl hover:text-[#C9A578] {{ request()->routeIs('Pricing') ? 'text-[#C9A578]' : 'text-white' }}">Pricing</a>
            <a href="{{ route('Contact') }}"
                class="font-light text-base md:text-xl hover:text-[#C9A578] {{ request()->routeIs('Contact') ? 'text-[#C9A578]' : 'text-white' }}">Contact</a>
        </div>
    </div>
</div>
@stack('script-tag')
<script>
    const toggleBtn = document.getElementById("toggleMenu")
    const menuOptions = document.getElementById("menuOptions")
    toggleBtn.addEventListener("click", () => {
        menuOptions.classList.toggle("hidden")
    })
</script>
</body>

</html>
