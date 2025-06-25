@extends('UserLayout.main')

@section('main-section')
    @push('title-tag')
        <title>Naudi Estate - Testimonials</title>
    @endpush

    <div class="w-full bg-cover bg-no-repeat h-56 md:h-[662px] text-white flex flex-col justify-start p-10"
        style="background-image: url('{{ asset('assets/Feedback/banner.png') }}')">
        <h1 class="text-2xl md:text-6xl font-medium mt-30">
            Real Stories
            <span class="text-[#C9A578]">Stories</span>
            from Real
            <span class="text-[#C9A578]">Customers</span>
        </h1>
        <p class="text-md md:text-[25px] font-light">
            Read authentic experiences shared by our valued customers.
        </p>
    </div>
@endsection
