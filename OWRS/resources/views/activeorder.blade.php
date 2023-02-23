<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWRS</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-full w-full">
        <x-Header />
        <div class="flex flex-row justify-between px-10 py-10">
            <div name="transaction-details-table" class="w-8/12 mx-5 border-2 rounded-lg border-neutral-600">
                <div class="flex flex-row justify-between border-b-2 px-5 border-neutral-600">
                    <h3 class="text-red-500"><b>Transaction Number: 1540002</b></h3>
                    <button type="button"><b>Edit</b></button>
                </div>
                <div class="px-10 mt-1">
                    <h3><b>Your Delivery Information</b></h3>
                    <div class="px-5 my-2">
                        <p>Jonathan Velasco</p>
                        <p>19B Dandelion St., Brgy. Old Capitol Site, Quezon City</p>
                        <p>jonathanvelasco@gmail.com</p>
                        <p>0939 462 8112</p>
                    </div>
                    <h3><b>Your Order:</b></h3>
                    <div class="px-5 my-2">
                        <p class="text-neutral-600">Order created on <b>Tuesday, November 15, 2022</b> at <b>10:17 AM</b></p>
                        <p class="text-neutral-600">To be delivered by <b>2:45pm</b></p>
                        <div class="flex flex-row h-16 content-center my-1">
                            <img src="{{url('/assets/container2.jpg')}}" class="object-contain w-1/12" alt="">
                            <p class="self-center text-neutral-600 w-7/12"><b>2.5 Gallon</b></p>
                            <p class="self-center text-purple w-2/12"><b>P20.00</b></p>
                            <p class="self-center text-neutral-600 w-2/12"><b>Qty.2</b></p>
                        </div>
                        <div class="flex flex-row h-16 content-center my-1">
                            <img src="{{url('/assets/container4.jpg')}}" class="object-contain w-1/12" alt="">
                            <p class="self-center text-neutral-600 w-7/12"><b>5 Gallon Clear Water Container</b></p>
                            <p class="self-center text-purple w-2/12"><b>P35.00</b></p>
                            <p class="self-center text-neutral-600 w-2/12"><b>Qty.2</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div name="status-order-summary-table" class="w-4/12 mx-5 justify-center">
                <div class="w-full h-10 flex bg-red-500 rounded-lg justify-center">
                    <p class="text-white text-xl self-center"><b>Pending</b></p>
                </div>
                <div class="border-2 mt-4 rounded-lg border-neutral-600">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-green-400"><b>Order Summary</b></h3>
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
                        <button type="button" class="w-full my-2 py-1 rounded-lg border border-neutral-600 text-xl text-neutral-600"><b>Cancel Order</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
