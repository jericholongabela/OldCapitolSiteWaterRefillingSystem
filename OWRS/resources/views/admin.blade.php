<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full h-screen">
        <x-adminHeader/>
        <!-- Queue -->
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
        <!-- Current Orders -->
        <div class="mt-5">
            <p class="text-lg font-bold sm:ml-12 text-center sm:text-left"> List of current active orders: </p>
                <!-- While Loop -->
                <div class="flex flex-row justify-center">
                <div class="md:w-5/6 w-full mx-15 hover:scale-105 transition">
                    <div class="w-full rounded-xl border shadow-xl mx-15 my-8">
                        <div class="sm:ml-8 ml-4 flex flex-row my-2 flex-wrap justify-evenly items-center font-semibold">
                            <p class="text-lg my-2">ayaya ayaya ayaya ayaya </p>
                            <p class="text-lg my-2">January 31, 2024 </p>        
                            <div class="flex justify-center">
                                <div>
                                    <div class="relative" data-te-dropdown-ref>
                                    <button
                                        class="flex items-center whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-lg font-medium uppercase leading-normal transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                                        type="button"
                                        id="dropdownMenuButton1"
                                        data-te-dropdown-toggle-ref
                                        aria-expanded="false"
                                        data-te-ripple-init
                                        data-te-ripple-color="light">
                                        {Status}
                                        <span class="ml-2 w-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            class="h-5 w-5">
                                            <path
                                            fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                        </svg>
                                        </span>
                                    </button>
                                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                        aria-labelledby="dropdownMenuButton1"
                                        data-te-dropdown-menu-ref>
                                        <li>
                                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                            href="#"
                                            data-te-dropdown-item-ref
                                        >On Queue
                                        </a>
                                        </li>
                                        <li>
                                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                            href="#"
                                            data-te-dropdown-item-ref
                                        >Processing
                                        </a>
                                        </li>
                                        <li>
                                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                            href="#"
                                            data-te-dropdown-item-ref
                                        >To Deliver
                                        </a>
                                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                            href="#"
                                            data-te-dropdown-item-ref
                                        >Delivered
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <button id="buttonstatus" type="button" class="sm:w-36 sm:h-12 w-32 h-12 bg-purple text-lg text-slate-50 my-2 rounded-lg">View Order</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="{{url('/js/homepage.js')}}">
        const dropdownElementList = [].slice.call(document.querySelectorAll('[data-te-dropdown-toggle-ref]'));
        const dropdownList = dropdownElementList.map((dropdownToggleEl) => {
            return new te.Dropdown(dropdownToggleEl);
        });
    </script>
</body>
</html>