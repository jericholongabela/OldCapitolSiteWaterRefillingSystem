<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place Order</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full">
        <x-Header/>
        <div>
            <div class="flex flex-wrap">

                <div class="md:w-2/3 w-full mt-4 hover:scale-105 transition">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto my-8">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-red-500  ml-2 basis-11/12">Step 1: Verify your information</p>
                            <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                        </div>
                        <div class="sm:ml-8 ml-4">
                            <p class="text-lg my-2">{{$users->name}}</p>
                            <p class="text-lg my-2">{{$users->address}}</p>
                            <p class="text-lg my-2">{{$users->email}}</p>
                            <p class="text-lg my-2">{{$users->contactNumber}}</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/3 w-full md:mt-4 hover:scale-105 transition">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto my-8">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-amber-500 ml-2 basis-11/12">Step 2: Set time for delivery</p>
                            <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                        </div>
                        <div class="flex justify-center my-4">
                            <form class="flex flex-row justify-center">
                                <input name="time" type="text" class="border rounded-md w-1/12 mx-1 text-center">
                                <p><b>:</b></p>
                                <input name="time" type="text" class="border rounded-md w-1/12 mx-1 text-center">
                                <input name="ampm" id="am" type="radio" class="mx-1">
                                <label for="am">AM</label>
                                <input name="ampm" id="pm" type="radio" class="mx-1">
                                <label for="pm">PM</label>
                            </form>
                        </div>
                        <div class="flex justify-center content-end my-4">
                            <div class="px-5 py-1.5 bg-neutral-500 w-11/12 border border-neutral-600 rounded-lg">
                                <p class="text-xs">Note: You must give an allowance of 2 hours for the processing of your order. So if you are ordering at 2pm you must have a preferred time of 4pm and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-wrap">

                <div class="md:w-2/3 w-full mt-4 hover:scale-105 transition">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto my-8">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-green-500  ml-2 basis-11/12">Step 3: View order container</p>
                            <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                        </div>

                        @if($users->container1 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container1.jpg')}}" alt="container1" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">4 Litter container</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container1}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container2 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container2.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">10 Litter mini water container</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container2}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container3 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container3.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">20 Litter container jug</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container3}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container4 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container4.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">18.9 Litter gallon</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container4}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                    </div>
                </div>

                <div class="md:w-1/3 w-full md:mt-4 hover:scale-105 transition">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto my-8">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-sky-500 ml-2 basis-11/12">Step 4: View Order summary</p>
                        </div>
                        <div class="px-5 py-1.5 h-full">
                            <p class="text-lg"><b>Subtotal</b></p>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>2.5 Gallon Jug</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>P20.00</b></p>
                            </div>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>5 Gallon Clear Water Container</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>P35.00</b></p>
                            </div>
                            <br>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>Delivery fee</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>P0.00</b></p>
                            </div>
                            <div class="flex flex-row px-2 mt-2 bg-neutral-500 rounded-md">
                                <p class="w-4/5 text-lg"><b>Total</b></p>
                                <p class="w-1/5 text-lg"><b>P75.00</b></p>
                            </div>
                            <button type="button" class="w-full my-2 py-1 rounded-lg bg-green-400 text-xl text-white"><b>Place Order</b></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
