{{-- slide --}}
<div class="py-1 mb-4 h-4/5">
    <img id="img" onclick="changeImage()" src="https://storage.30shine.com/banner/Banner_LK_w.jpg" alt=""
        class="h-3/6 w-full  ">
</div>
<form action="" method="post" class="container mx-auto text-center w-4/12">
    <label class="text-gray-600 font-bold">
        <span>Nhập số điện thoại</span>
        <input type='text' placeholder="Enter your input here"
            class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
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


<div class="container mx-auto">
<div class="w-11/12 mx-auto">
<div>
    <div class="flex justify-between p-2 mb-2">
    <div>
    <span class="text-3xl font-bold">
        Dịch vụ 30shine
    </span><br>
    <span class="text-gray-500 text-lg font">Thư giãn 30 phút giúp bạn tỏa sáng</span>
    </div>
    <div>
        <span><a href="#" class="text-lg italic underline">Các dịch vụ khác</a></span>
    </div>
</div>
<div class=" mx-auto">
    <img class="w-full" src="https://storage.30shine.com/banner/20210319_BannerService_80K_w.jpg" alt="">
</div>
        <div class=" mx-auto grid grid-cols-4 my-12 gap-8 p-2">
            <section class="flex">
                <div>
                    <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">
                </div>
                <div class="ml-4">
                    <a href="#">
                        <span class="text-lg font-bold">Cắt gội massage</span><br>
                        <span>Bảng giá 2021 (Hấp dẫn)</span>
                    </a>
                </div>
            </section>
            <section class="flex">
                <div>
                    <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">
                </div>
                <div class="ml-4">
                    <a href="#">
                        <span class="text-lg font-bold">Cắt gội massage</span><br>
                        <span>Bảng giá 2021 (Hấp dẫn)</span>
                    </a>
                </div>
            </section>
            <section class="flex">
                <div>
                    <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                </div>
                <div class="ml-4">
                    <a href="#">
                        <span class="text-lg font-bold">Cắt gội massage</span><br>
                        <span>Bảng giá 2021 (Hấp dẫn)</span>
                    </a>
                </div>
            </section>
            <section class="flex">
                <div>
                    <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/service/30shine-cat-goi-massage-2.jpg" alt="">

                </div>
                <div class="ml-4">
                    <a href="#">
                        <span class="text-lg font-bold">Dịch vụ khác</span><br>
                        <span>Bảng giá 2021 (Hấp dẫn)</span>
                    </a>
                </div>
            </section>
        </div>
        </div>
        <div class="">
        <div class=" justify-between flex p-2">
            <div class="">
                <span class="text-3xl font-bold">
                    ƯU ĐÃI - QUÀ TẶNG 30SHINE
                </span><br>
                <span class="text-gray-500 text-lg font">Hàng ngàn ưu đãi hấp dẫn đang chờ</span>
            </div>
            <div>
                <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
            </div>
        </div>
        <div class=" mx-auto grid grid-cols-3  my-12 gap-8">
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                </div>
                </a>
            </div>
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                </div>
                </a>
            </div>
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div >
        <div>
            <div class="  justify-between flex p-2">
              <div class="">
                <span class="text-3xl font-bold">
                    30SHINE STORE
                </span><br>
                <span class="text-gray-500 text-lg font">Số 1 mỹ phẩm về nam</span>
              </div>
              <div>
                <a href="#" class="text-lg italic underline">Xem tât cả</a>
              </div>
            </div>

        </div>
        <div class=" mx-auto">
            <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg" alt="">
        </div>
    </div>
    <div>
        <div class=" mx-auto my-2 flex justify-between">
            <div>
            <span class="font-bold">Top sản phẩm nổi bật</span>
            </div>
            <div class="flex gap-4">
                <div>
                    <button class="bg-black text-white w-12 h-12 rounded-full"><</button>
                </div>
                <div>
                    <button class="bg-black text-white w-12 h-12 rounded-full">></button>
                </div>
            </div>
        </div>
        <div class="  grid grid-cols-4  my-12  ">
            <section>
                <div>
                <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                </div>
                <div>
                    Glanzen Box Tạo Kiểu Basic <br> 1
                </div>
                <div class="my-4">
                    <span class="text-lg font-bold">399.000 ₫</span>
                    <span class="line-through">653.000 ₫</span>
                </div>
                <div>
                    <button class="w-64 bg-yellow-500 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                </div>
            </section>
            <section>
                <div>
                <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                </div>
                <div>
                    Glanzen Box Tạo Kiểu Basic <br> 1
                </div>
                <div class="my-4">
                    <span class="text-lg font-bold">399.000 ₫</span>
                    <span class="line-through">653.000 ₫</span>
                </div>
                <div>
                    <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                </div>
            </section>
            <section>
                <div>
                <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                </div>
                <div>
                    Glanzen Box Tạo Kiểu Basic <br> 1
                </div>
                <div class="my-4">
                    <span class="text-lg font-bold">399.000 ₫</span>
                    <span class="line-through">653.000 ₫</span>
                </div>
                <div>
                    <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                </div>
            </section>
            <section>
                <div>
                <img class="w-64" src="https://product.hstatic.net/1000306701/product/box77_cb5f13f87b734bbd9bda11c65b5eb167.jpg" alt="">
                </div>
                <div>
                    Glanzen Box Tạo Kiểu Basic <br> 1
                </div>
                <div class="my-4">
                    <span class="text-lg font-bold">399.000 ₫</span>
                    <span class="line-through">653.000 ₫</span>
                </div>
                <div>
                    <button class="w-64 bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                </div>
            </section>
        </div>
        </div>
        <div class="bg-black">
        <div >
            <div class=" justify-between flex bg-black p-2">
              <div class="">
                <span class="text-3xl font-bold text-white">
                    HỆ THỐNG 81 SALON
                </span><br>
                <span class="text-gray-500 text-lg font">Giờ mở cửa: T2-T6(8h30-20h30) | T7,CN(7h30-23h30) </span>
              </div>
              <div>
                <a href="#" class="text-lg italic underline text-gray-500">Xem tât cả</a>
              </div>
            </div>

         </div>
          <div class="">
            <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg" alt="">
           </div>
           <div>
               <div class="h-40">
            <div class=" grid grid-cols-4  my-12 gap-8 p-2">
                <section class="flex">
                    <div>
                        <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-hcm.png" alt="">

                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <span class="text-lg font-bold text-white">TP.Hồ Chí Minh</span><br>
                            <span class="text-white">40 salon</span>
                        </a>
                    </div>
                </section>
                <section class="flex">
                    <div>
                        <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-hanoi.png" alt="">

                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <span class="text-lg font-bold text-white">Hà Nội</span><br>
                            <span class="text-white">18 salon</span>
                        </a>
                    </div>
                </section>
                <section class="flex">
                    <div>
                        <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-danang.png" alt="">

                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <span class="text-lg font-bold text-white">Đà nẵng</span><br>
                            <span class="text-white">1 salon</span>
                        </a>
                    </div>
                </section>
                <section class="flex">
                    <div>
                        <img class="rounded-md w-28" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/salon-other.png" alt="">

                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <span class="text-lg font-bold text-white">Các tỉnh thành khác</span><br>
                            <span class="text-white">22 salon</span>
                        </a>
                    </div>
                </section>
            </div>
            </div>
           </div>
        </div>
        <div class="">
        <div class=" justify-between flex p-2">
            <div class="">
                <span class="text-3xl font-bold">
                    LOOKBOOK
                </span><br>
                <span class="text-gray-500 text-lg font">Bí quyết đẹp trai 30shine</span>
            </div>
            <div>
                <a href="#" class="text-lg italic underline">Xem tất cả</a>
            </div>
        </div>
        <div class=" grid grid-cols-2  my-12 gap-8">
            <div>
                <a href="#">
                <div>
                    <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/dynamic-style.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Diện Mạo Khỏe Khoắn Đầy Nam Tính Cùng 4 Kiểu Tóc Trong "Bứt Phá" Collection Của 30Shine</span>
                </div>
                </a>
            </div>
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/genz-style.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Khẳng Định Cá Tính Bản Thân Cùng 8 Kiểu Tóc Cực Phong Cách Trong "Bùng Nổ" Collection Từ 30Shine</span>
                </div>
                </a>
            </div>

        </div>
        </div>
        <div class=" justify-between flex p-2">
            <div class="">
                <span class="text-3xl font-bold">
                    Người nổi tiếng đồng hành cùng 30shine
                </span><br>
                <span class="text-gray-500 text-lg font">Bí quyết đẹp trai 30Shine</span>
            </div>

        </div>
        <div class=" grid grid-cols-2  my-12 gap-8">
            <div>
                <a href="#">
                <div>
                    <img class="w-full" src="https://storage.30shine.com/banner/20210225_Da+LAB.jpg" alt="">
                </div>

                </a>
            </div>
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://storage.30shine.com/banner/20210225_Dinh+Trong.jpg" alt="">
                </div>

                </a>
            </div>

        </div>
        <div class=" justify-between flex p-2">
            <div class="">
                <span class="text-3xl font-bold">
                    SHINE MEMBER
                </span><br>
                <span class="text-gray-500 text-lg font">Thành viên 30Shine, tưng bừng ưu đãi</span>
            </div>
            <div>
                <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
            </div>
        </div>
        <div class=" grid grid-cols-3  my-12 gap-8">
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/bsg.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">Black/Silver/Gold</span>
                </div>
                </a>
            </div>
            <div>
                <a href="#">
                <div>
                    <img class="" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/shine-topup.jpg" alt="">
                </div>
                <div>
                    <span class="font-bold">TOPUP</span>
                </div>
                </a>
            </div>
        </div>


    <div class="my-20">
                <div class="  justify-between flex p-2 w-full">
                  <div class="">
                    <span class="text-3xl font-bold">
                       CAM KẾT 30SHINE CARE
                    </span><br>
                    <span class="text-gray-500 text-lg font">Chất lượng hàng đầu,hậu mãi dài lâu</span>
                  </div>

                </div>

            </div>
            <div class="w-full">
                <img class="w-full" src="https://storage.30shine.com/ResourceWeb/data/images/newHome/banner-shinecare.jpg" alt="">
            </div>
 </div>
</div>
<section class="text-gray-600 body-font">

    <div class="container px-5 mx-auto ">
      <div class="flex flex-wrap -m-4 p-12">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Đổi trả 7 ngày</h2>
            </div>
          </div>
        </div>

        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">15 ngày bảo hành uốn nhuộm</h2>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
a
