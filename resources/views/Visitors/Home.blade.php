@extends('UserLayout.main')

@push('title-tag')
    <title>Naudi Estates | Trusted Real Estate Experts in San Gwann</title>
@endpush
@push('meta-description')
    <meta name="description"
        content="Discover trusted real estate services with Naudi Estates in San Gwann. Buy, sell, or rent properties with confidence.
    Local experts, transparent deals.">
@endpush
@section('main-section')
    <div class="w-full bg-cover bg-no-repeat h-80 md:h-200 text-white flex flex-col justify-center space-y-3 p-5 md:p-10"
        style="background-image: url('{{ asset('assets/Home/banner.png') }}')">
        <h1 class="text-xl md:text-6xl font-medium">Long Term <span class="text-[#C9A578]">Property Management</span></h1>
        <h2 class="text-lg md:text-[45px] font-medium">Maximizing <span class="text-[#C9A578]">Value</span>, Minimizing <span
                class="text-[#C9A578]">Stress</span></h2>
        <p class="text-md md:text-3xl font-light">
            Professional Services for Property Owners in Malta
        </p>
        <div class="mt-4 md:mt-8 space-x-2 md:space-x-5">
            <a href="{{ route('Contact') }}"
                class="bg-[#C9A578] text-[#2D241A] hover:bg-[#2D241A] hover:text-[#C9A578] hover:cursor-pointer transition duration-100 ease-in-out uppercase font-medium rounded-full px-2 md:px-8 py-2 md:py-3 text-xs md:text-xl">
                Contact Me
            </a>
        </div>
    </div>


    <div class="container mx-auto my-25 md:my-50">
        <div class="w-full flex flex-col md:flex-row justify-center items-start md:space-x-15 space-y-5 md:space-y-0">
            <div class="mx-auto md:m-5 w-80 md:w-1/2">
                <img src="{{ asset('assets/Home/Intro.png') }}" alt="house key" class="md:h-160 object-cover rounded-xl">
            </div>
            <div class="mx-auto md:m-5 w-80 md:w-1/2">
                <h3 class="text-[#2D241A] font-medium text-xl md:text-[40px]">Your Trusted Property Manager</h3>
                <p class="text-justify text-md md:text-[24px] font-light">
                    I embarked on my Realtor career back in May of 2021, with a small company. I received the constant
                    appropriate training, guidance and support to further my knowledge within the industry. I spent 1 year,
                    and 3 months working in the company and was even promoted to Team Leader within the first 6 months
                    further being offered a Managerial Role as Office Manager after 1 year. I turned down this opportunity
                    for the Managerial Role as I wished to pursue my role in Property Management. Therefore, I slowly gained
                    my experience in this line of work from the beginning 2022 whilst still a rental agent and I can gladly
                    say that my career is focused more on the Property Management industry. I am a very organized,
                    disciplined and well time-managed individual who has a great drive, passion and motivation towards the
                    property industry in Malta!
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mb-5">
        <h3 class="text-lg md:text-[40px] text-center"><span class="font-light">Why</span> <span
                class="text-[#2D241A] font-semibold">Long Term Property Management?</span></h3>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-center items-center md:items-start md:space-x-10 space-y-8 md:space-y-0"
            id="whyUs">
        </div>
    </div>

    <div class="container mx-auto mt-50 mb-5">
        <h3 class="text-lg md:text-[40px] text-center"><span class="font-light">What</span> <span
                class="text-[#2D241A] font-semibold">Sets Me Apart?</span></h3>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-around md:gap-x-3 gap-y-8 md:gap-y-0">
            <div
                class="w-80 mx-auto md:mx-0 md:w-1/4 text-center rounded-xl bg-white p-5 border-b-5 border-[#C9A578] shadow-md">
                <img src="{{ asset('assets/Home/Icons/Map.png') }}" class="mx-auto md:mb-3 h-10 md:h-15" alt="Map Icon">
                <p class="font-light text-md md:text-xl">Local expertise in Maltese property law</p>
            </div>
            <div
                class="w-80 mx-auto md:mx-0 md:w-1/4 text-center rounded-xl bg-white p-5 border-b-5 border-[#C9A578] shadow-md">
                <img src="{{ asset('assets/Home/Icons/Support.png') }}" class="mx-auto md:mb-3 h-10 md:h-15" alt="Support Icon">
                <p class="font-light text-md md:text-xl">24/7 support for landlords and tenants</p>
            </div>
            <div
                class="w-80 mx-auto md:mx-0 md:w-1/4 text-center rounded-xl bg-white p-5 border-b-5 border-[#C9A578] shadow-md">
                <img src="{{ asset('assets/Home/Icons/Communication.png') }}" class="mx-auto md:mb-3 h-10 md:h-15"
                    alt="Communication Icon">
                <p class="font-light text-md md:text-xl">Transparent, real-time communication</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center md:gap-x-15 gap-y-8 md:gap-y-0 mt-15">
            <div
                class="w-80 mx-auto md:mx-0 md:w-1/4 text-center rounded-xl bg-white p-5 border-b-5 border-[#C9A578] shadow-md">
                <img src="{{ asset('assets/Home/Icons/HomePlan.png') }}" class="mx-auto md:mb-3 h-10 md:h-15"
                    alt="Home Plan Icon">
                <p class="font-light text-md md:text-xl">Custom-tailored management plans</p>
            </div>
            <div
                class="w-80 mx-auto md:mx-0 md:w-1/4 text-center rounded-xl bg-white p-5 border-b-5 border-[#C9A578] shadow-md">
                <img src="{{ asset('assets/Home/Icons/Globe.png') }}" class="mx-auto md:mb-3 h-10 md:h-15" alt="Global Icon">
                <p class="font-light text-md md:text-xl">Trusted by international and local clients</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-50 mb-5">
        <h3 class="text-lg md:text-[40px] text-center"><span class="font-light">What</span> <span
                class="text-[#2D241A] font-semibold">You Get?</span></h3>
    </div>

    <div class="container mx-auto">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8" id="userBenefits">
        </div>
    </div>

    <div class="container mx-auto mt-50 mb-5">
        <h3 class="text-xl md:text-[40px] text-center"><span class="font-light">How do I add </span> <span
                class="text-[#2D241A] font-semibold">value?</span></h3>
    </div>

    <div class="container mx-auto mb-25 md:mb-50">
        <div class="flex flex-col md:flex-row justify-center items-center md:items-start md:space-x-10 space-y-8 md:space-y-0"
            id="ourValues">
        </div>
    </div>

    @push('script-tag')
        <script src="{{ asset('assets/JS/home.js') }}"></script>
    @endpush
@endsection
