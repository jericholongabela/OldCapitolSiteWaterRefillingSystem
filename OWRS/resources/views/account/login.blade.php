<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite('resources/css/app.css')

</head>
<body>
    <div class="flex w-full h-screen md:items-center md:justify-center">
        <div class="flex flex-wrap w-full md:w-4/5  md:h-4/5">
            <div class="flex w-full md:w-1/2 items-center justify-center">
                <h1 class="text-center text-4xl font-bold m-6">Old Capitol Site's Online Purified-Water Delivery System</h1>
            </div>
            <div class=" md:w-1/2 md:flex md:items-center md:justify-center w-4/5 mx-auto hover:drop-shadow-xl">
                <div class="w-4/5 shadow-xl rounded-3xl mx-auto">
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
                            <button class="w-full mb-4 mt-8 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit">
                                Login
                            </button>
                        </div>
                        <div class="mb-4">
                            <p class="text-center font-bold">or</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="w-full mb-4 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
