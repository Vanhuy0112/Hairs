@foreach ($categories as $cate)
<p>{{ $cate->name }}</p>
<p>{{ $cate->id }}</p>
    
@endforeach
    <div class="container mx-auto">
        <section class="text-gray-600 body-font">
            <div class=" py-24 flex flex-col">
                <div class="lg:w-full container mx-auto">
                    <div class="rounded-lg h-full overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="https://theme.hstatic.net/1000306701/1000692581/14/banner_image_collection.jpg?v=137">
                    </div>
        </section>

        <div class="flex p-2">
            <div x-data="{ show: false }" @click.away="show = false" class="mb-2 px-2">
                <button @click="show = ! show" type="button"
                    class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
                    <span class="pr-2">Gía tiền</span>
                    <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 0 24 24" width="24">
                        <path d="M7 10l5 5 5-5z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </button>
                <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
                    <a class="block px-3 py-2" href="">Link 1</a>
                    <a class="block px-3 py-2" href="#">Link 2</a>
                    <a class="block px-3 py-2" href="#">Link 3</a>
                    <hr class="border-t border-gray-200 my-0">
                    <a class="block px-3 py-2" href="#">Another Link</a>
                </div>
            </div>

            <div x-data="{ show: false }" @click.away="show = false" class="mb-2 px-2">
                <button @click="show = ! show" type="button"
                    class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
                    <span class="pr-2">Thương hiệu</span>
                    <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 0 24 24" width="24">
                        <path d="M7 10l5 5 5-5z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </button>
                <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
                    <a class="block px-3 py-2" href="#">Link 1</a>
                    <a class="block px-3 py-2" href="#">Link 2</a>
                    <a class="block px-3 py-2" href="#">Link 3</a>
                    <hr class="border-t border-gray-200 my-0">
                    <a class="block px-3 py-2" href="#">Another Link</a>
                </div>
            </div>
            <div x-data="{ show: false }" @click.away="show = false" class="mb-2 px-2">
                <button @click="show = ! show" type="button"
                    class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
                    <span class="pr-2">Kích thước</span>
                    <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 0 24 24" width="24">
                        <path d="M7 10l5 5 5-5z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </button>
                <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">
                    <a class="block px-3 py-2" href="#">Link 1</a>
                    <a class="block px-3 py-2" href="#">Link 2</a>
                    <a class="block px-3 py-2" href="#">Link 3</a>
                    <hr class="border-t border-gray-200 my-0">
                    <a class="block px-3 py-2" href="#">Another Link</a>
                </div>
            </div>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <p class="text-gray-900 title-font text-3xl font-medium pb-6">Sản phẩm mới</p>
                <div class="flex flex-wrap -m-4">
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/420x260">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                            <p class="mt-1">$16.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/421x261">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                            <p class="mt-1">$21.15</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/422x262">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                            <p class="mt-1">$12.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/423x263">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                            <p class="mt-1">$18.40</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/424x264">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                            <p class="mt-1">$16.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/425x265">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                            <p class="mt-1">$21.15</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/427x267">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                            <p class="mt-1">$12.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/428x268">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                            <p class="mt-1">$18.40</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <p class="text-gray-900 title-font text-3xl font-medium pb-6">Sản phẩm nổi bật</p>
                <div class="flex flex-wrap -m-4">
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/420x260">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                            <p class="mt-1">$16.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/421x261">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                            <p class="mt-1">$21.15</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/422x262">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                            <p class="mt-1">$12.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/423x263">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                            <p class="mt-1">$18.40</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/424x264">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                            <p class="mt-1">$16.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/425x265">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                            <p class="mt-1">$21.15</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/427x267">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                            <p class="mt-1">$12.00</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="https://dummyimage.com/428x268">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                            <p class="mt-1">$18.40</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <div class="flex bg-purple-200 p-2 m-2">
        <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
            previous
        </a>

        <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
            1
        </a>

        <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
            2
        </a>

        <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
            3
        </a>

        <a href="#" class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
            Next
        </a>
    </div>
    </div>
