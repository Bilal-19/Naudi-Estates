@extends('AdminLayout.main')

@section('section')
    <div class="container mx-auto p-5">
        <div class="w-full flex flex-col md:flex-row justify-between md:space-x-5 space-y-5 md:space-y-0">
            <div class="w-80 md:w-1/3 bg-white p-5 border-b-5 border-b-5 border-[#C9A578] rounded-xl text-center">
                <h2 class="text-md md:text-2xl font-medium">Total Enquiries</h2>
                <p class="text-base md:text-lg font-light"><i class="fa-solid fa-circle-question"></i> 400</p>
            </div>

            <div class="w-80 md:w-1/3 bg-white p-5 border-b-5 border-b-5 border-[#C9A578] rounded-xl text-center">
                <h2 class="text-md md:text-2xl font-medium">Testimonials</h2>
                <p class="text-base md:text-lg font-light"><i class="fa-solid fa-comments"></i> 20</p>
            </div>

            <div class="w-80 md:w-1/3 bg-white p-5 border-b-5 border-b-5 border-[#C9A578] rounded-xl text-center">
                <h2 class="text-md md:text-2xl font-medium">Users</h2>
                <p><i class="fa-solid fa-user-tie"></i> 1000</p>
            </div>
        </div>
    </div>
@endsection
