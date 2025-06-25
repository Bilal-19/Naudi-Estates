@extends('UserLayout.main')

@section('main-section')
    @push('title-tag')
        <title>Naudi Estate - Pricing</title>
    @endpush

    <div class="w-full bg-cover bg-no-repeat h-56 md:h-120 text-white flex flex-col justify-center space-y-3 p-10"
        style="background-image: url('{{ asset('assets/Pricing/banner.png') }}')">
        <h1 class="text-2xl md:text-6xl font-medium">
            <span class="text-[#C9A578]">Charges</span>
            &
            <span class="text-[#C9A578]">Fees</span>
        </h1>
        <p class="text-md md:text-[25px] font-light">
            Apartment-Based Rates
        </p>
    </div>

    <div class="container mx-auto my-10 md:my-20">
        <h3 class="text-xl md:text-[45px] text-center font-light">
            <span class="text-[#2D241A] font-medium">Transparent</span> Pricing, <span
                class="text-[#2D241A] font-medium">Commission</span> Based
        </h3>
        <p class="w-90 md:w-2/3 mx-auto text-base md:text-[25px] font-light text-center">
            All charges will be commission based at a percentage of the monthly rental value excluding VAT. Each commission
            rate is monthly per unit. VAT is charged only on top of the commission rate.
        </p>
    </div>

    <div class="container mx-auto mb-30 md:mb-70">
        <ul class="space-y-3 ml-5 md:ml-20">
            <li class="flex flex-row items-center text-base md:text-3xl"><img src="{{asset("assets/Pricing/Checkmark.png")}}" alt="checkmark" class="h-6 md:h-12 mr-2 md:mr-4">1 - 3 Apartments: 10% + VAT</li>
            <li class="flex flex-row items-center text-base md:text-3xl"><img src="{{asset("assets/Pricing/Checkmark.png")}}" alt="checkmark" class="h-6 md:h-12 mr-2 md:mr-4">4 - 7 Apartments: 9% + VAT</li>
            <li class="flex flex-row items-center text-base md:text-3xl"><img src="{{asset("assets/Pricing/Checkmark.png")}}" alt="checkmark" class="h-6 md:h-12 mr-2 md:mr-4">8 - 12 Apartments: 8% + VAT</li>
            <li class="flex flex-row items-center text-base md:text-3xl"><img src="{{asset("assets/Pricing/Checkmark.png")}}" alt="checkmark" class="h-6 md:h-12 mr-2 md:mr-4">13+ Apartments: 7% + VAT</li>
            <li class="flex flex-row items-center text-base md:text-3xl"><img src="{{asset("assets/Pricing/Checkmark.png")}}" alt="checkmark" class="h-6 md:h-12 mr-2 md:mr-4">Entire Block of Units: 6% + VAT</li>
        </ul>
    </div>
@endsection
