<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full">
        <x-Header/>
        <div class="flex justify-center items-center">
            <div class="w-full">
                <div class="md:w-2/3 w-full mx-auto">
                    <div class="w-full mt-4 hover:scale-105 transition">
                        <div class="w-4/5 rounded-xl border border-gray-400 shadow-xl mx-auto my-8">
                            <div class="w-full border-b border-gray-400 flex">
                                <p class="font-bold text-lg text-green-500  ml-2 basis-11/12">Your personal information</p>
                                <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                            </div>
                            <div class="sm:ml-8 ml-4">
                                <p class="text-lg my-2">Mark Vincent Divida</p>
                                <p class="text-lg my-2">Address</p>
                                <p class="text-lg my-2">Email</p>
                                <p class="text-lg my-2">Contect Number</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-2/3 w-full mx-auto">
                    <div class="w-full mt-4 hover:scale-105 transition">
                        <div class="w-4/5 rounded-xl border border-gray-400 shadow-xl mx-auto my-8">
                            <div class="w-full border-b border-gray-400 flex">
                                <p class="font-bold text-lg text-amber-500  ml-2 basis-11/12">Your default container</p>
                                <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                            </div>
                            <div class="sm:ml-8 ml-4">
                                <p class="text-lg my-2">Mark Vincent Divida</p>
                                <p class="text-lg my-2">Address</p>
                                <p class="text-lg my-2">Email</p>
                                <p class="text-lg my-2">Contect Number</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center hover:scale-105 transition m-8">
            <button><a class="bg-red-500 px-8 py-2 rounded-lg shadow-lg" href="/logout">Logout</a></button>
        </div>
    </div>
</body>
</html>
