<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>Homepage</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full h-screen">
        <x-Header/>
        <div>
            <div class="flex h-48 justify-center items-center">
                <div class="w-96 grid grid-cols-3">
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-red-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">3</p>
                        </div>
                        <p class="text-center font-bold">On Queue</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-amber-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">3</p>
                        </div>
                        <p class="text-center font-bold">Processing</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-green-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">3</p>
                        </div>
                        <p class="text-center font-bold">To Deliver</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-lg font-bold sm:ml-12 text-center sm:text-left">Know more about water</p>
                <div class="w-full flex justify-center items-center h-96">
                    <div class="w-4/5 flex overflow-x-auto overflow-y-hidden scroll-smooth">

                        <button class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
