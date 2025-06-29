@extends('UserLayout.main')

@push('title-tag')
    <title>Client Testimonials | Hear from Our Happy Clients | Naudi Estates</title>
@endpush
@push('meta-description')
    <meta name="description"
        content="See what our happy clients say about their experience with Naudi Estates. Real stories from property buyers and sellers in San Gwann.">
@endpush
@section('main-section')
    <div class="w-full bg-cover bg-no-repeat h-52 md:h-[662px] text-white flex flex-col justify-start p-10"
        style="background-image: url('{{ asset('assets/Feedback/banner.png') }}')">
        <h1 class="text-2xl md:text-6xl font-medium md:mt-30">
            Real
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

    <div class="container mx-auto my-10 md:my-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10">
            @foreach ($fetchFeedback as $record)
                <div class="bg-white border-b-5 border-[#C9A578] h-fit md:h-80 rounded-xl p-5 m-5 md:m-0">
                    <h5 class="font-semibold text-lg md:text-[25px] mb-0">{{ $record->username }}</h5>
                    <p class="font-light text-base md:text-[25px] mb-0">{{ $record->designation }}</p>
                    <div class="text-[#ffc200] text-lg mb-5 space-x-1">
                        {!! str_repeat('<i class="fa-solid fa-star"></i>', $record->rating) !!}
                    </div>
                    <p class="font-light text-base md:text-[20px] mb-0">“{{ $record->message }}”</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mx-auto my-10 md:my-20 block">
        <h3 class="text-xl md:text-[45px] text-center font-light">Share Your <span
                class="text-[#2D241A] font-medium">Story</span>
        </h3>
    </div>

    <div class="container mx-auto">
        <form action="{{ route('createFeedback') }}" autocomplete="off" method="post"
            class="w-80 md:w-3/5 mx-auto space-y-5 mb-20">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="mb-1 font-light text-base md:text-[25px]">Enter your name: </label>
                <input type="text" name="username" id="name"
                    class="bg-white rounded-lg px-3 py-2 border-b-5 border-[#C9A578] focus:outline-none"
                    value="{{ old('username') }}">
                <span class="text-red-800">
                    @error('username')
                        {{ 'Please enter your name' }}
                    @enderror
                </span>
            </div>

            <div class="flex flex-col">
                <label for="designation" class="mb-1 font-light text-base md:text-[25px]">Enter your designation: </label>
                <input type="text" name="designation" id="designation"
                    class="bg-white rounded-lg px-3 py-2 border-b-5 border-[#C9A578] focus:outline-none"
                    value="{{ old('designation') }}">
                <span class="text-red-800">
                    @error('designation')
                        {{ 'Please enter your designation' }}
                    @enderror
                </span>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-light text-base md:text-[25px]">Rating: </label>
                <div class="flex flex-row-reverse justify-end gap-1 text-3xl">
                    @for ($i = 5; $i >= 1; $i--)
                        <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}"
                            class="hidden peer" required value="{{ old('rating') }}" />
                        <label for="star{{ $i }}"
                            class="cursor-pointer text-gray-400 peer-checked:text-yellow-500 hover:text-yellow-500">&#9733;</label>
                    @endfor
                </div>
            </div>

            <div class="flex flex-col">
                <label for="message" class="mb-1 font-light text-base md:text-[25px]">Enter your message: </label>
                <textarea name="message" id="message" rows="5"
                    class="bg-white rounded-lg px-3 py-2 border-b-5 border-[#C9A578] focus:outline-none resize-none"></textarea>
                <span class="text-red-800">
                    @error('message')
                        {{ 'Please share your feedback message' }}
                    @enderror
                </span>
            </div>


            <button
                class="bg-[#2D241A] text-white font-light md:text-3xl rounded-lg px-3 py-2 block w-full hover:cursor-pointer">Submit
                Message
            </button>
        </form>
    </div>
@endsection
