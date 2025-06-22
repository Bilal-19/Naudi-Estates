@extends('UserLayout.main')

@push('title-tag')
    <title>Naudi Estates - Home</title>
@endpush
@section('main-section')
    <div class="w-full bg-cover bg-no-repeat h-80 md:h-200 text-white flex flex-col justify-center space-y-3 p-10" style="background-image: url('{{asset('assets/Home/banner.png')}}')">
        <h1 class="text-2xl md:text-6xl">Long Term <span class="text-[#C9A578]">Property Management</span></h1>
        <h2 class="text-xl md:text-[45px]">Maximizing Value, Minimizing Stress</h2>
        <p class="text-md md:text-3xl">
            Professional Services for Property Owners in Malta
        </p>
        <div class="mt-4 md:mt-8 space-x-2 md:space-x-5">
            <button class="bg-[#C9A578] text-[#2D241A] uppercase font-medium rounded-full px-4 md:px-8 py-1 md:py-3 text-sm md:text-xl">Contact Me</button>
            <button class="bg-[#C9A578] text-[#2D241A] uppercase font-medium rounded-full px-4 md:px-8 py-1 md:py-3 text-sm md:text-xl">Book a Consultation</button>
        </div>
    </div>
@endsection
