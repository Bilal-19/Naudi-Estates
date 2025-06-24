@extends('UserLayout.main')

@section('main-section')
    @push('title-tag')
        <title>Naudi Estates | Services</title>
    @endpush

    <div class="w-full bg-cover bg-no-repeat h-48 md:h-120 text-white flex flex-col justify-center space-y-3 p-10"
        style="background-image: url('{{ asset('assets/Services/banner.png') }}')">
        <h1 class="text-2xl md:text-6xl font-medium">Core <span class="text-[#C9A578]">Services</span></h1>
    </div>


    <div class="container mx-auto mt-25 md:mt-50 md:mb-10">
        <h3 class="text-2xl md:text-[40px] text-center"><span class="font-light">Professional</span> <span
                class="text-[#2D241A] font-semibold">Services</span></h3>
    </div>

    <div class="container mx-auto">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-x-10 md:gap-y-10" id="services">
        </div>
    </div>

    <div class="container mx-auto mt-25 md:mt-50 mb-5">
        <h3 class="text-xl md:text-[40px] text-center"><span class="font-light">Ideal </span> <span
                class="text-[#2D241A] font-semibold">For?</span></h3>
    </div>

    <div class="container mx-auto mb-25 md:mb-50">
        <div
            class="flex flex-col md:flex-row justify-center items-center md:items-start md:space-x-10 space-y-8 md:space-y-0" id="potentialAudience">
        </div>
    </div>

    @push('script-tag')
        <script src="{{ asset('assets/JS/services.js') }}"></script>
    @endpush
@endsection
