<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <div class="absolute top-4 left-4">
        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Dashboard>
        </a>
    </div>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg w-96">
            <div class="p-6 text-center">
                <div class="bg-blue-500 w-24 h-24 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <h2 class="text-xl font-semibold mt-4 text-blue-600">{{ Auth::user()->name }}</h2>
                <p class="text-gray-600">{{ Auth::user()->email }}</p>
            </div>
            <div class="border-t">
                <div class="p-4 flex justify-between">
                    <a href="{{ route('edit') }}" class="text-blue-500 hover:underline">Edit Profile</a>
                    <a href="{{ route('logout') }}" class="text-red-500 hover:underline"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
