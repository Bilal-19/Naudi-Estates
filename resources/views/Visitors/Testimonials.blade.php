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

    <div class="container mx-auto my-10 md:my-20">
        <h3 class="text-xl md:text-[45px] text-center font-light">My <span class="text-[#2D241A] font-medium">Clients</span>
            Say It <span class="text-[#2D241A] font-medium">Best</span>
        </h3>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10" id="clientFeedback">
        </div>
    </div>

    <script src="{{asset("assets/JS/feedback.js")}}"></script>
@endsection
