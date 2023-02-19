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
    <div class="w-full bg-green-500 h-screen">
        <div class="md:h-12 bg-red-500 md:block hidden">
            <div class=" h-full w-full grid grid-cols-5">
                <a href="#" class="text-center my-auto">Home</a>
                <a href="#" class="text-center my-auto">Place an Order</a>
                <p class="text-center my-auto">Youhave currently Order</p>
                <a href="#" class="text-center my-auto">Transaction History</a>
                <a href="#" class="text-center my-auto">Profile</a>
            </div>
        </div>
    </div>
</body>
</html>
