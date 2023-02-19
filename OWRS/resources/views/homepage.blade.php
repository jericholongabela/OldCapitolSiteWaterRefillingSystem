<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen">
        <div class="h-12 bg-sky-400">
            <div class=" h-full w-full grid grid-cols-5">
                <a href="#" class="my-auto mx-auto flex flex-cols-2">
                    <img src="{{url('/assets/home.png')}}" class="w-8 h-8  mr-1" alt="">
                    <p class="text-center my-auto hidden sm:block">Home</p>
                </a>
                <a href="#" class="my-auto mx-auto flex flex-cols-2">
                    <img src="{{url('/assets/placeorder.png')}}" class="w-8 h-8  mr-1" alt="">
                    <p class="text-center my-auto hidden sm:block">Place Order</p>
                </a>
                <div class="my-auto mx-auto bg-silver lg:w-48 md:w-32 w-24 rounded-xl">
                    <p class="text-center my-auto">Active Order</p>
                </div>
                <a href="#" class="my-auto mx-auto flex flex-cols-2">
                    <img src="{{url('/assets/history.png')}}" class="w-8 h-8 mr-1" alt="">
                    <p class="text-center my-auto hidden sm:block">History</p>
                </a>
                <a href="#" class="my-auto mx-auto flex flex-cols-2">
                    <img src="{{url('/assets/profile.png')}}" class="w-8 h-8  mr-1" alt="">
                    <p class="text-center my-auto hidden sm:block">Profile</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
