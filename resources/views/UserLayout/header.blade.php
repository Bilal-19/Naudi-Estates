<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    @stack('title-tag')
    <style>
        body{
            font-family: "Inter", sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-black text-white flex flex-col md:flex-row justify-between md:items-center h-auto md:h-20">
        <div class="flex flex-row justify-between items-center">
            <img src="{{ asset('assets/realestateLogo.png') }}" alt="logo" class="object-contain h-18 m-3">
            <button class="block md:hidden mr-5" id="toggleMenu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="md:space-x-10 flex flex-col md:flex-row hidden md:flex" id="menuOptions">
            <a href="" class="hover:text-[#C9A578] ml-2 md:ml-0">Services</a>
            <a href="" class="hover:text-[#C9A578] ml-2 md:ml-0">Pricing</a>
            <a href="" class="hover:text-[#C9A578] ml-2 md:ml-0">Consultation</a>
            <a href="" class="hover:text-[#C9A578] ml-2 md:ml-0">Testimonials</a>
            <a href="" class="mr-5 hover:text-[#C9A578] ml-2 md:ml-0">Contact</a>
        </div>
    </div>
