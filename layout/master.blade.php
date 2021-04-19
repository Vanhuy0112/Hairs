<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.js') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    @livewireStyles
</head>

<body>

    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-3 mx-auto">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <div class="text-xl font-semibold text-gray-700">
                        <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                            href="{{ '/' }}">Shop</a>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="flex-1 md:flex md:items-center md:justify-between">
                    <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                        <a href="{{ '/promotional' }}"
                            class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Ưu
                            đãi</a>
                        <a href="{{ '/service' }}"
                            class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Dịch
                            vụ</a>
                        <a href="{{ '/list' }}"
                            class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Store</a>
                        <a href="{{ '/blog' }}"
                            class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Blog</a>
                        <a href="{{ '/member' }}"
                            class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Member</a>
                    </div>

                    <div class="flex items-center ">
                        <!--giỏ hàng-->
                        <div class="flex justify-center">
                            <div x-data="{ show: false }" @click.away="show = false">
                                <button @click="show = ! show" type="button"
                                    class="flex text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-black text-sm">
                                    <span class=" w-8 text-black "><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg></span>
                                </button>
                                <div x-show="show"
                                    class="absolute bg-gray-100 shadow-md w-96 divide-y divide-light-blue-400">
                                    <div
                                        class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100 ">
                                        <div class="p-2 w-12"><img
                                                src="https://dummyimage.com/50x50/bababa/0011ff&amp;text=50x50"
                                                alt="img product"></div>
                                        <div class="flex-auto text-sm w-32">
                                            <div class="font-bold">Product 1</div>
                                            <div class="truncate">Product 1 description</div>
                                            <div class="text-gray-400">Qt: 2</div>
                                        </div>
                                        <div class="flex flex-col w-18 font-medium items-end ">
                                            <div
                                                class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 ">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </div>
                                            $12.22
                                        </div>
                                    </div>
                                    <div class="divide-y divide-light-blue-400">
                                        <div class="p-4 flex justify-between">
                                            <p class="font-bold" >Tổng tiền: </p>
                                            <p class="text-red-500">Tiền
                                                <sup class="">đ</sup>
                                            </p>
                                        </div>
                                        <div class="p-4 flex justify-between">
                                            <a href="" class="">
                                                <button
                                                    class="bg-yellow-600 hover:bg-black hover:text-white font-semibold text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                                    Giỏ hàng
                                                </button>
                                            </a>
                                            <a href="" class="">
                                                <button
                                                    class="bg-yellow-600 hover:bg-black hover:text-white font-semibold text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                                    Thanh toán
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dăng nhập-->

                        <div x-data="{ show: false }" @click.away="show = false">
                            <button @click="show = ! show" type="button"
                                class="flex text-black text-base rounded-lg px-2 py-2 focus:outline-none focus:border-white text-sm">
                                <span>Đăng nhập</span>
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" height="24"
                                    viewBox="0 0 24 24" width="24" >
                                    <path d="M7 10l5 5 5-5z" />
                                    <path d="M0 0h24v24H0z" fill="none" />
                                </svg>
                            </button>
                            <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">

                                <!-- component -->
                                <form action="">

                                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                                    <div class="mb-4">
                                        <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                                            Username
                                        </label>
                                        <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                            id="username" type="text" placeholder="Username">
                                    </div>
                                    <div class="mb-6">
                                        <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                                            Password
                                        </label>
                                        <input
                                            class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                                            id="password" type="password" placeholder="****************">
                                        <p class="text-red text-xs italic">Please choose a password.</p>
                                    </div>
                                    <div class=" justify-between bg-yellow-600">
                                        <button type="submit" class="border border-indigo-600 text-white hover:bg-black hover:text-white text-center w-full p-2">
                                            Sign In
                                        </button>
                                    </div>

                                        <div class="flex justify-between py-4">
                                            <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker"
                                                href="#">
                                                Sign Up
                                            </a>
                                            <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker"
                                                href="#">
                                                Forgot Password?
                                            </a>
                                        </div>

                                </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-gray-900">

        <div class="container max-w-6xl mx-auto items-center px-2 py-8 divide-y divide-light-blue-400">
            <div class="flex py-4 -py-2">
                <div class="text-white w-1/3">
                    <p class="text-2xl font-bold">
                        Salon hair
                    </p>
                    <p>
                        82 Trần Đại Nghĩa, P. Đồng Tâm, Q. Hai Bà Trưng, HN
                    </p>
                    <p>
                        Chấp nhận thanh toán
                    </p>
                    <p class="w-12 flex">
                        <img src="https://30shine.com/static/media/visa.689e1cc5.svg">
                        <img src="https://30shine.com/static/media/mastercard.7d32e23f.svg">
                    </p>
                </div>
                <div class="text-white px-12 w-1/3">
                    <p class="text-2xl font-bold">
                        Giờ phục vụ
                    </p>
                    <span>
                        Giờ phục vụ: T2 - T6 (8h30 - 20h30)
                        <br>T7, CN (7h30 - 23h30)
                    </span>
                    <p>
                        HOTLINE GÓP Ý CHẤT LƯỢNG DỊCH VỤ
                    </p>
                </div>
            </div>
            <div class="w-full mx-auto flex flex-wrap items-center">
                <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                    <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                        👻 <span class="text-base text-gray-200">Salon</span>
                    </a>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                    <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                        <li>
                            <a class="inline-block py-2 px-3 text-white no-underline" href="#">Blog</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">Dịch vụ</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">Store</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    </footer>

    <script src="{{ 'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js' }}"></script>
    <script src="{{ 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js' }}" defer></script>
    <script>
        var index = 1;
        changeImage = function() {
            var imgs = ["https://storage.30shine.com/banner/210117_BannerSC_10_w.jpg",
                "https://storage.30shine.com/banner/210122_Banner_NewHairStyle_w.jpg",
                "https://storage.30shine.com/banner/Banner_LK_w.jpg"];
            document.getElementById("img").src = imgs[index];
            index++;
            if (index ==3){
                index = 0;
            }
        }
        setInterval(changeImage,3000);
    </script>
</body>

</html>
