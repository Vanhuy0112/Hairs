<div class="py-1 mb-4 h-4/5 w-full">
    <div class="image">
        <img class="w-full" id="img" onclick="changeImage()" src="https://storage.30shine.com/banner/20210309_Banner_40K_w.jpg" alt="">
    </div>
</div>

<form action="" method="post" class="container mx-auto text-center w-4/12">
    <label class="text-gray-600 font-bold">
        <span>Nhập số điện thoại</span>
        <input type='text' placeholder="Enter your input here"
               class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
    </label>

    <label class="text-gray-600 font-bold">
        <span>Thời gian đặt lịch</span>
        <div class="flex space-x-4">
            @foreach ($select_day as $day)
                @if ($date->day == \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->day)
                    <div
                        class="flex-1 border bg-blue-500 text-white hover:bg-blue-600 cursor-pointer hover:text-white rounded px-4 py-2">
                        <span class=" text-black text-center px-4 ">{{ $day }}</span>
                        <p class="capitalize">{{ $date->isoFormat('dddd') }}</p>
                        <p class="uppercase">{{ $date->addDay()->isoFormat('DD/MM') }}</p>
                    </div>
                @else
                    <div class="flex-1 border hover:bg-blue-600 cursor-pointer hover:text-white rounded px-4 py-2">
                        <span class=" text-black text-center px-4 ">{{ $day }}</span>
                        <p class="capitalize">{{ $date->isoFormat('dddd') }}</p>

                        <p class="uppercase">{{ $date->addDay()->isoFormat('DD/MM') }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </label>
    <br>
    <div>
        <label>
            <span class="font-bold">Chọn stylelist</span>
            <select class="w-full border bg-white rounded px-3 py-2 outline-none ">
                <option>Tùy chọn nhân viên (không bắt buộc)</option>
                @foreach ($employee as $emp)
                    <option class="py-1" value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <br>
    <div class="grid grid-cols-4 gap-1 w-full  container ">
        @foreach ($arr_time as $time)
            <div class=" px-4 py-2 border font-medium  cursor-pointer transition-colors duration-200
                transform  rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700
                 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700 ">
                {{ $time }}
            </div>
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        <div>
            <span class="font-bold">Ghi chú</span><br>
            <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
        </div>
        <div>
            <button type="button"
                    class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2 my-2 font-bold">
                Đăt lịch
            </button>
        </div>
    </div>
</form>

<!--content-->
<div class=" leading-normal tracking-normal container mx-auto ">
    <div class="py-4">
        <a class="text-2xl font-bold flex " href="#">
            <p>DỊCH VỤ</p>
            <p class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                </svg>
            </p>
        </a>
    </div>
    <div class="w-full bg-cover"
         style="background-image:url('https://images.pexels.com/photos/3993451/pexels-photo-3993451.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); height: 60vh; max-height:460px;">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <p class="text-white font-extrabold text-2xl md:text-3xl">
                TRẢI NGHIỆM KHÔNG GIAN SALON THẾ HỆ MỚI
            </p>
            <p class="text-xl md:text-2xl text-gray-500 py-6">Thư giãn 30 phút và bạn sẽ tỏa sáng
            </p>
        </div>
    </div>
    <div class="container md:px-0 mx-auto ">
        <div class=" w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            <!--dịch vụ-->
            <div class="flex flex-wrap justify-between pt-12 -mx-6 mb-4">

                <!--1/4 col -->
                <div class="w-full md:w-1/4 p-6 flex flex-col flex-shrink">
                    <div class=" bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://source.unsplash.com/collection/225/800x600"
                                 class="h-36 rounded-t p-2 w-1/2">
                            <div class="w font-bold text-xl text-gray-900 px-2 w-1/2">
                                <p>Nhuộm ( chỉ từ 150k)</p>
                                <p class="text-gray-600 text-xs md:text-sm justify-end py-4">1 dịch vụ</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--1/4 col -->
                <div class="w-full md:w-1/4 p-6 flex flex-col flex-shrink">
                    <div class=" bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://source.unsplash.com/collection/225/800x600"
                                 class="h-36 rounded-t p-2 w-1/2">
                            <div class="w font-bold text-xl text-gray-900 px-2 w-1/2">
                                <p>Nhuộm ( chỉ từ 150k)</p>
                                <p class="text-gray-600 text-xs md:text-sm justify-end py-4">1 MIN READ</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--1/4 col -->
                <div class="w-full md:w-1/4 p-6 flex flex-col flex-shrink">
                    <div class=" bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://source.unsplash.com/collection/225/800x600"
                                 class="h-36 rounded-t p-2 w-1/2">
                            <div class="w font-bold text-xl text-gray-900 px-2 w-1/2">
                                <p>Nhuộm ( chỉ từ 150k)</p>
                                <p class="text-gray-600 text-xs md:text-sm justify-end py-4">1 MIN READ</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--1/4 col -->
                <div class="w-full md:w-1/4 p-6 flex flex-col flex-shrink">
                    <div class=" bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://source.unsplash.com/collection/225/800x600"
                                 class="h-36 rounded-t p-2 w-1/2">
                            <div class="w font-bold text-xl text-gray-900 px-2 w-1/2">
                                <p>Nhuộm ( chỉ từ 150k)</p>
                                <p class="text-gray-600 text-xs md:text-sm justify-end py-4">1 MIN READ</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--1/2 col -->
            <div class="py-8">
                <div>
                    <a class="text-2xl font-bold flex" href="#">
                        <p>ƯU ĐÃI - QUÀ TẶNG 30SHINE</p>
                        <p class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </p>
                    </a>
                </div>
                <div class=" flex gap-8">
                    <div class="w-full md:w-1/2 py-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3657445/800x600"
                                     class="h-full w-full rounded-t p-2">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                    </div>

                    <!--1/2 col -->
                    <div class="w-full md:w-1/2 py-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/764827/800x600"
                                     class="h-4/5 w-full rounded-t p-2">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    </div>
                </div>
            </div>
        </div>
<div>
    <div>
        <a class="text-2xl font-bold flex" href="#">
            <p>SẢN PHẨM </p>
            <p class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                </svg>
            </p>
        </a>
    </div>
    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <div class="flex items-center" id="store-nav-content">
                    </div>
                </div>
            </nav>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Product Name</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>
        </div>

    </section>

</div>

    <!--blog-->
    <div class="py-8">
        <div>
            <a class="text-2xl font-bold flex" href="#">
                <p>TIN TỨC</p>
                <p class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"/>
                    </svg>
                </p>
            </a>
        </div>
        <div class=" flex gap-8">
            <div class="w-full md:w-1/2 py-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/collection/3657445/800x600"
                             class="h-full w-full rounded-t p-2">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                        </div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
            </div>

            <!--1/2 col -->
            <div class="w-full md:w-1/2 py-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/collection/764827/800x600"
                             class="h-4/5 w-full rounded-t p-2">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                        </div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--MEMBER-->
    <div class="">
    <div>
        <a class="text-2xl py-4 font-bold flex" href="#">
            <p>MEMBER</p>
        </a>
        <div class="bg-white">
                <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                            <div class="flex items-center" id="store-nav-content">
                            </div>
                        </div>
                    </nav>

                    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">Product Name</p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                </svg>
                            </div>
                            <p class="pt-1 text-gray-900">£9.99</p>
                        </a>
                    </div>
                    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">Product Name</p>
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                </svg>
                            </div>
                            <p class="pt-1 text-gray-900">£9.99</p>
                        </a>
                    </div>
                </div>

            </div>
    </div>
</div>

<section class="bg-white dark:bg-gray-800 ">
    <div class="container px-6 py-8 mx-auto ">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 ">
            <div>
                <img src="https://storage.30shine.com/ResourceWeb/data/images/newHome/3-care.png" alt="">
                <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">Bảo hành tóc trong 15 ngày</h1>
            </div>
            <div>
                <img src="https://storage.30shine.com/ResourceWeb/data/images/newHome/1-care.png" alt="">
                <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">3 ngày đổi trả hàng miễn phí</h1>
            </div>
            <div >
                <img src="https://storage.30shine.com/ResourceWeb/data/images/newHome/2-care.png" alt="">
                <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">7 ngày chỉnh sửa tóc miễn phí</h1>
            </div>
        </div>
    </div>
</section>


