<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <style>
        .modal{
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modalcontent{
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
        }
        #login{
            filter: none;
        }
        #step2{
            display: none;
        }
        #steplabel1{
            background-color: #85f937;
        }
    </style>

</head>
<body>
    <div id="maincontainer" class="flex w-full h-screen md:items-center md:justify-center transition">
        <div class="flex flex-wrap w-full md:w-4/5  md:h-4/5">
            <div class="flex w-full md:w-1/2 items-center justify-center">
                <h1 class="text-center text-4xl font-bold m-6">Old Capitol Site's Online Purified-Water Delivery System</h1>
            </div>
            <div class=" md:w-1/2 md:flex md:items-center md:justify-center w-4/5 mx-auto hover:drop-shadow-xl">
                <div class="w-4/5 shadow-xl rounded-3xl mx-auto hover:scale-105 transition">
                    <form action="" class="mx-auto w-4/5">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="example@gmail.com" required autocomplete="email">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Your Password" required autocomplete="new-password">
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="w-full mb-4 mt-8 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-110" type="submit">
                                Login
                            </button>
                        </div>
                        <div class="mb-4">
                            <p class="text-center font-bold">or</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p></p>
                            <button id="modalbtn" type="button" class="w-full mb-4 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none transition focus:shadow-outline hover:scale-110">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="registrationmodal" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl hover:-translate-y-1">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <h2 class="font-bold mb-3">Sign Up</h2>
            <div class="mx-2">
                <form action="">

                    <div class="grid grid-cols-2 mb-4">
                        <div class="mr-2">
                            <p id="steplabel1" class="text-center rounded-md">Step 1</p>
                        </div>
                        <div>
                            <p id="steplabel2" class="text-center rounded-md">Step 2</p>
                        </div>
                    </div>

                    <div id="step1">
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="firstname" name="firstname" placeholder="First Name" required>
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="lastname" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="email" name="email" type="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="contactnumber" name="contactnumber" placeholder="Contact Number" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="password" name="password" placeholder="Password" type="password" required>
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="confrimpassword" name="confirmpassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div>
                            <button id="pagebtn" class="w-full mb-4 mt-8 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:-translate-y-2" type="button">
                                Next
                            </button>
                        </div>
                    </div>



                    <div id="step2" class="transition">
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="firstname" name="firstname" placeholder="First Name" required>
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="lastname" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="email" name="email" type="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="contactnumber" name="contactnumber" type="number" placeholder="Contact Number" required>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="password" name="password" placeholder="Password" type="password" required>
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="confrimpassword" name="confirmpassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div>
                            <button class="w-full mt-8 bg-green-400 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-110" type="button">
                                Create Account
                            </button>
                            <button id="back" class="w-full mb-4 mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-110" type="button">
                                Back
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="{{url('/js/registration.js')}}"></script>
</body>
</html>
