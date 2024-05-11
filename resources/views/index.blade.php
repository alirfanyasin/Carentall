<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

  <nav class="py-8 bg-[#08323D]">
    <div class="container flex justify-between px-32">
      <img src="/img/logo.png" alt="Logo">
      <div class="font-light text-white uppercase">
        <a href="" class="mx-3 hover:text-[#D5FD05] hover:font-semibold">Book a Car</a>
        <a href="" class="mx-3 hover:text-[#D5FD05] hover:font-semibold">Pickup Locations</a>
        <a href="" class="mx-3 hover:text-[#D5FD05] hover:font-semibold">How it Works</a>
        <a href="" class="mx-3 hover:text-[#D5FD05] hover:font-semibold">Support</a>
      </div>
      <div class="font-semibold">
        <a href=""
          class="border-2 border-[#D5FD05] text-[#D5FD05] py-2 px-4 rounded-lg hover:bg-[#D5FD05] hover:text-[#08323D]">Log
          In / Sign Up</a>
        <a href="" class="border-2 border-[#D5FD05] bg-[#D5FD05] text-[#08323D] py-2 px-4 rounded-lg">List Your
          Car</a>
      </div>
    </div>
  </nav>

  <main>
    <section class="h-screen bg-[#08323D] flex items-center">
      <div class="container px-32">
        <div class="grid grid-cols-2">
          <div class="flex items-center">
            <div class="text-white">
              <h1 class="text-5xl font-bold uppercase text-start ">Find And Book The Best <br> Cars <img
                  src="/img/icon-1.png" alt="" class="inline"> Easily
              </h1>
              <p class="my-8 font-light">Want to book a car for camping, City riding or Airport? book the
                best
                cars from us
                to get best experience.</p>
              <div class="flex items-center">

                <div class="flex">
                  <div class="overflow-hidden bg-red-200 rounded-full w-14 h-14">
                    <img src="/img/user-4.png" alt="" class="w-full">
                  </div>
                  <div class="-ml-4 overflow-hidden bg-red-200 rounded-full w-14 h-14">
                    <img src="/img/user-3.png" alt="" class="w-full">
                  </div>
                  <div class="-ml-4 overflow-hidden bg-red-200 rounded-full w-14 h-14">
                    <img src="/img/user-2.png" alt="" class="w-full">
                  </div>
                  <div class="-ml-4 overflow-hidden bg-red-200 rounded-full w-14 h-14">
                    <img src="/img/user-1.png" alt="" class="w-full">
                  </div>
                </div>
                <div class="ms-4">
                  <h4 class="text-[#D5FD05] font-bold">34,000+</h4>
                  <p class="font-light text-white">Happy Customers</p>
                </div>
              </div>
            </div>
          </div>
          <div class="relative">
            <img src="/img/shape-1.png" alt="" class="absolute top-0 right-0 w-72 h-72">
            <img src="/img/img-1.png" alt="Img 1" class="absolute top-0 left-0 w-full">
          </div>
        </div>
      </div>
    </section>

    <section class="flex justify-center mb-16 -mt-20">
      <div class="grid w-10/12 grid-cols-4 gap-3 bg-white rounded-lg shadow-xl p-7">
        <div class="">
          <p class="mb-3 text-xl text-gray-600">Pickup Location</p>
          <div class="relative">
            <input type="text" class="w-full p-4 text-xl rounded-lg ring-1 ring-gray-200 focus:ring-red-500 ps-12">
            <iconify-icon icon="carbon:location" class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-xl text-gray-600">Drop-off Location</p>
          <div class="relative">
            <input type="text" class="w-full p-4 text-xl border border-gray-200 rounded-lg ps-12">
            <iconify-icon icon="carbon:location" class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-xl text-gray-600">Pickup date & time</p>
          <div class="relative">
            <input type="datetime-local" class="w-full p-4 text-xl border-2 border-gray-200 rounded-lg ps-14">
            <iconify-icon icon="formkit:datetime"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-xl text-gray-600">Drop-off date & time</p>
          <div class="relative">
            <input type="datetime-local" class="w-full p-4 text-xl border-2 border-gray-200 rounded-lg ps-14">
            <iconify-icon icon="formkit:datetime"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
      </div>
    </section>
  </main>


  {{-- <div>
    <div class="w-32 h-32 font-bold text-white bg-red-300">1</div>
  </div> --}}


  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
</body>

</html>
