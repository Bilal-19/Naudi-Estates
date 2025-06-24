@extends('UserLayout.main')

@push('title-tag')
    <title>Naudi Estates - Home</title>
@endpush
@section('main-section')
    <div class="w-full bg-cover bg-no-repeat h-80 md:h-200 text-white flex flex-col justify-center space-y-3 p-10"
        style="background-image: url('{{ asset('assets/Home/banner.png') }}')">
        <h1 class="text-2xl md:text-6xl font-medium">Long Term <span class="text-[#C9A578]">Property Management</span></h1>
        <h2 class="text-xl md:text-[45px] font-medium">Maximizing <span class="text-[#C9A578]">Value</span>, Minimizing <span
                class="text-[#C9A578]">Stress</span></h2>
        <p class="text-md md:text-3xl font-light">
            Professional Services for Property Owners in Malta
        </p>
        <div class="mt-4 md:mt-8 space-x-2 md:space-x-5">
            <button
                class="bg-[#C9A578] text-[#2D241A] hover:bg-[#2D241A] hover:text-[#C9A578] hover:cursor-pointer transition duration-100 ease-in-out uppercase font-medium rounded-full px-4 md:px-8 py-1 md:py-3 text-sm md:text-xl">Contact
                Me</button>
            <button
                class="bg-[#C9A578] text-[#2D241A] hover:bg-[#2D241A] hover:text-[#C9A578] hover:cursor-pointer transition duration-100 ease-in-out uppercase font-medium rounded-full px-4 md:px-8 py-1 md:py-3 text-sm md:text-xl">Book
                a Consultation</button>
        </div>
    </div>


    <div class="container mx-auto py-30">
        <div class="w-full flex flex-col md:flex-row justify-center items-start md:space-x-15 space-y-5 md:space-y-0">
            <div class="mx-auto md:m-5 w-80 md:w-1/2">
                <img src="{{ asset('assets/Home/Intro.png') }}" alt="house key" class="md:h-160 object-cover rounded-xl">
            </div>
            <div class="mx-auto md:m-5 w-80 md:w-1/2">
                <h3 class="text-[#2D241A] font-medium text-xl md:text-[40px]">Your Trusted Property Manager</h3>
                <p class="text-justify text-md md:text-[24px] font-light">
                    I embarked on my Realtor career back in May of 2021, with Sky Estates & Co. I received the constant
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

    <div class="container mx-auto pt-30 pb-5">
        <h3 class="text-xl md:text-[40px] text-center"><span class="font-light">Why</span> <span
                class="text-[#2D241A] font-semibold">Long Term Property Management?</span></h3>
    </div>

    <div class="container mx-auto pb-30">
        <div class="flex flex-col md:flex-row justify-center items-center md:items-start md:space-x-10 space-y-8 md:space-y-0">
            <div class="text-center w-80 md:w-1/6">
                <img src="{{asset('assets/Home/Icons/Income.png')}}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
                <p class="font-light text-md md:text-xl">Consistent rental income</p>
            </div>
            <div class="text-center w-80 md:w-1/6">
                <img src="{{asset('assets/Home/Icons/Tenant.png')}}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
                <p class="font-light text-md md:text-xl">Lower tenant turnover</p>
            </div>
            <div class="text-center w-80 md:w-1/6">
                <img src="{{asset('assets/Home/Icons/Cost.png')}}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
                <p class="font-light text-md md:text-xl">Reduced Maintenance Costs</p>
            </div>
            <div class="text-center w-80 md:w-1/6">
                <img src="{{asset('assets/Home/Icons/Asset.png')}}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
                <p class="font-light text-md md:text-xl">Asset Protection and Appreciation</p>
            </div>
            <div class="text-center w-80 md:w-1/6">
                <img src="{{asset('assets/Home/Icons/Landlord.png')}}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
                <p class="font-light text-md md:text-xl">Peace of Mind for Property Owners</p>
            </div>
        </div>
    </div>
@endsection
