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
    <div class="w-full h-full">
        <x-Header/>
        <div class="flex flex-row gap-5 sm:gap-3">
            <div class="w-5/6 flex flex-col ml-10 sm:ml-20 mt-10 gap-3">
                <!-- Left Side Section that includes the Name up until the Edit button -->
                <div class="w-auto text-xl font-bold gap-6">
                    Name: <label class="">Jericho Longabela</label>
                </div>
                <div class="w-auto text-xl text-justify font-bold">
                    Address: <label class="">19-B Lirio St., Brgy. Old Capitol Site, Quezon City</label>
                </div>
                <div class="w-auto text-xl font-bold">
                    Birthdate: <label class="">June 08, 2001</label>
                </div>
                <div class="w-auto text-xl font-bold">
                    Contact Number: <label class="">09479746612</label>
                </div>
                <div class="w-auto text-xl font-bold">
                    Email: <label class="">jericholongabela@gmail.com</label>
                </div>
                <div class="w-auto text-xl mb-12 font-bold">
                    Container type:
                </div>
                <div class="w-auto text-xl font-bold">
                    Quantity: <label class="">2</label>
                </div>
                <button class="w-fit mt-12 p-3 bg-green-500 rounded-xl text-silver text-xl">
                    Edit Profile
                </button>
                <!-- Right side that holds Order History and Logout Button -->
            </div>
            <div class="flex flex-col h-fit mx-auto mt-10 pr-22 items-center text-center gap-5">
                <button class="sm:w-auto sm:h-auto w-28 bg-sky-400 rounded-xl text-silver text-xl">
                    Order History
                </button>
                <a class="sm:w-auto sm:h-auto w-28 bg-green-500 rounded-xl text-silver text-xl" href="/">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
