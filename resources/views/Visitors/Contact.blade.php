@extends('UserLayout.main')

@push('title-tag')
    <title>Contact Naudi Estates | Get in Touch with Our Team in San Gwann</title>
@endpush
@push('meta-description')
    <meta name="description"
        content="Get in touch with Naudi Estates for expert real estate help in San Gwann. We're here to assist with all your property needs. Contact us today!">
@endpush
@section('main-section')

    <div class="w-full bg-cover bg-no-repeat h-40 md:h-160 text-white flex flex-col justify-center space-y-3 p-10"
        style="background-image: url('{{ asset('assets/Contact/banner.png') }}')">
    </div>

    <div class="container mx-auto my-20">
        <div class="w-full flex flex-col md:flex-row items-center justify-around space-y-10 md:space-y-0">
            <div class="w-80 mx-auto md:w-2/5 md:mx-0 bg-white rounded-xl p-2 md:p-5 space-y-5 md:mr-5">
                <div class="flex flex-row">
                    <div class="mr-2">
                        <img src="{{ asset('assets/Contact/Phone.png') }}" alt="Phone Icon" class="h-10 md:h-8">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="font-medium md:text-3xl">Phone</h5>
                        <a href="" class="font-light text-base md:text-[25px]">356 77120233</a>
                        <a href="" class="font-light text-base md:text-[25px]">356 77192141</a>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="mr-2">
                        <img src="{{ asset('assets/Contact/Email.png') }}" alt="Email Icon" class="h-10 md:h-8">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="font-medium md:text-3xl">Email</h5>
                        <a href="" class="font-light text-base md:text-[25px]">propertymanagernaudi@gmail.com</a>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="mr-2">
                        <img src="{{ asset('assets/Contact/Location.png') }}" alt="Location Icon" class="h-10 md:h-8">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="font-medium md:text-3xl">Location</h5>
                        <a class="font-light text-base md:text-[25px]">San Gwann</a>
                    </div>
                </div>

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12926.0713049548!2d14.465746395434001!3d35.90982318979666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e4557b66a07af%3A0x2375a4a87544f9ce!2sSan%20%C4%A0wann%2C%20Malta!5e0!3m2!1sen!2s!4v1750867586744!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-xl h-80 w-full"></iframe>
                </div>
            </div>
            <div class="w-80 md:w-1/2">
                <h2 class="text-2xl md:text-[45px] font-light text-center md:text-start">Contact <span class="font-medium">Us</span></h2>
                <form action="{{ route('createEnquiry') }}" autocomplete="off" method="post"
                    class="space-y-4 md:space-y-8">
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
                        <label for="email" class="mb-1 font-light text-base md:text-[25px]">Enter your email: </label>
                        <input type="email" name="useremail" id="name"
                            class="bg-white rounded-lg px-3 py-2 border-b-5 border-[#C9A578] focus:outline-none"
                            value="{{ old('useremail') }}">
                        <span class="text-red-800">
                            @error('useremail')
                                {{ 'Please enter your email' }}
                            @enderror
                        </span>
                    </div>

                    <div class="flex flex-col">
                        <label for="message" class="mb-1 font-light text-base md:text-[25px]">Enter your message: </label>
                        <textarea name="message" id="message" rows="5"
                            class="bg-white rounded-lg px-3 py-2 border-b-5 border-[#C9A578] focus:outline-none resize-none"></textarea>
                        <span class="text-red-800">
                            @error('message')
                                {{ 'Please share your message' }}
                            @enderror
                        </span>
                    </div>


                    <button
                        class="bg-[#2D241A] text-white font-light text-base md:text-3xl rounded-lg px-3 py-2 block w-full hover:cursor-pointer">Submit
                        Message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
