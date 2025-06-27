<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naudi Estate - Admin Dashboard</title>
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
    <style>
        body {
            font-family: "Inter", sans-serif;
            background-color: #EAE7E7;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Topbar -->
    <header class="bg-[#2d241a] text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-lg md:text-2xl font-semibold">Naudi Estate Dashboard</h1>
        <button id="menu-btn" class="md:hidden text-white text-md">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    <!-- Main Layout -->
    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="bg-[#2d241a] text-white w-64 space-y-4 py-6 px-4 absolute md:relative z-10 top-16 left-0 md:top-0 md:flex md:flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out h-min-screen">
            <nav class="space-y-10 text-sm">
                <a href="{{route('Dashboard')}}"
                    class="mt-10 flex items-center space-x-2 px-4 py-2 {{ request()->routeIs('Dashboard') ? 'bg-[#a66616] text-white rounded-lg' : 'text-white' }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="inline">Dashboard</span>
                </a>
                <a href="{{route('Enquiries')}}"
                    class="flex items-center space-x-2 px-4 py-2 {{ request()->routeIs('Enquiries') ? 'bg-[#a66616] text-white rounded-lg' : 'text-white' }}">
                    <i class="fa-solid fa-circle-question"></i>
                    <span class="inline">Enquiries</span>
                </a>
            </nav>
        </aside>
