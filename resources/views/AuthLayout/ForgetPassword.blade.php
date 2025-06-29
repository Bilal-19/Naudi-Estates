<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css' rel='stylesheet' />
    <title>Naudi Estate - Forget Password</title>
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>

<body>

    <div class="w-full h-screen bg-cover bg-no-repeat flex flex-col justify-center"
        style="background-image:url({{ asset('assets/Auth/login.jpg') }})">
        <div class="bg-black w-80 md:w-1/2 mx-auto rounded-2xl p-10">
            <img src="{{ asset('assets/realestateLogo.png') }}" alt="logo" class="h-24 mx-auto mb-5">
            <h4 class="text-white text-xl md:text-3xl mb-1 text-center">Forgot Your Password?</h4>
            <p class="text-white text-xs md:text-sm font-light text-center mx-auto mb-5">
                Enter your email address below and we’ll send you a new password if it exists in our system.
            </p>
            <form action="{{route('ResetPassword')}}" method="post" autocomplete="off" class="space-y-3 text-sm md:text-base">
                @csrf
                <div>
                    <input type="email" placeholder="Enter your email address" name="email"
                        class="bg-white rounded-md px-3 py-2 focus:outline-none md:w-2/3 block mx-auto">
                </div>
                <div>
                    <button
                        class="bg-[#2D241A] text-white font-light text-base md:text-md rounded-lg px-3 py-2 block md:w-2/3 mx-auto hover:cursor-pointer">
                        Send New Password
                    </button>
                </div>
            </form>
            <p class="text-white text-sm font-light text-center my-3">Don't have an account? <a href="{{route('SignUp')}}" class="text-[#C9A578] font-medium">Sign Up</a></p>
        </div>
    </div>

</body>

</html>
