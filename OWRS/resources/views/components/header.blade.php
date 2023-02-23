<div>
    <div class="h-12 bg-sky-300">
        <div class=" h-full w-full grid grid-cols-5">
            <a href="/home" class="my-auto mx-auto flex flex-cols-2 hover:bg-sky-500 rounded-full sm:px-2 sm:py-1 p-1 hover:border-2 border-sky-600">
                <img src="{{url('/assets/home.png')}}" class="w-6 h-6 sm:mr-1 " alt="">
                <b><p class="text-center my-auto hidden sm:block">Home</p></b>
            </a>
            <a href="/place-order" class="my-auto mx-auto flex flex-cols-2 hover:bg-sky-500 rounded-full sm:px-2 sm:py-1 p-1 hover:border-2 border-sky-600">
                <img src="{{url('/assets/placeorder.png')}}" class="w-6 h-6  sm:mr-1" alt="">
                <b><p class="text-center my-auto hidden sm:block">Place Order</p></b>
            </a>
            <a href="/active-order" class="my-auto mx-auto">
                <div class="flex justify-center bg-silver lg:w-56 h-8 md:w-32 w-24 rounded-md shadow-xl hover:-translate-y-0.5 overflow-hidden">
                    <p class="text-center my-auto md:text-md sm:text-s text-xs">Order to be delivered before <b>{{$time}}</b></p>
                </div>
            </a>
            <a href="/viewtransaction" class="my-auto mx-auto flex flex-cols-2 hover:bg-sky-500 rounded-full sm:px-2 sm:py-1 p-1 hover:border-2 border-sky-600">
                <img src="{{url('/assets/history.png')}}" class="w-6 h-6 sm:mr-1" alt="">
                <b><p class="text-center my-auto hidden sm:block">History</p></b>
            </a>
            <a href="/profile" class="my-auto mx-auto flex flex-cols-2 hover:bg-sky-500 rounded-full sm:px-2 sm:py-1 p-1 hover:border-2 border-sky-600">
                <img src="{{url('/assets/profile.png')}}" class="w-6 h-6 sm:mr-1" alt="">
                <b><p class="text-center my-auto hidden sm:block">Profile</p></b>
            </a>
        </div>
    </div>
</div>
