<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-History</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Transaction</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full h-screen">
        <x-Header time="{{$transaction->prefferedTime}}"/>
        <div class="mt-5">
            <p class="text-lg font-bold sm:ml-12 text-center sm:text-left"> Transaction History: </p>
                <!-- While Loop -->
                <div class="flex flex-row justify-center">
                <div class="md:w-5/6 w-full mx-15">
                   @foreach ($history as $item)
                   <div class="w-full rounded-xl border shadow-xl mx-15 my-8 hover:scale-105 transition">
                    <div class="sm:ml-8 ml-4 flex flex-row my-2 justify-evenly font-semibold">
                        <p class="text-lg my-2">Transaction Number:{{$item->refID}} </p>
                        <p class="text-lg my-2">Date: {{$item->created_at}}</p>
                        <p class="text-lg my-2">Price: </p>
                        <p class="text-lg my-2">Delivered: </p>
                    </div>
                </div>
                   @endforeach
                </div>
        </div>
    </div>
</body>
</html>
