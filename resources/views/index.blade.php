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
  <header class="flex flex-wrap w-full py-4 text-sm bg-white sm:justify-start sm:flex-nowrap dark:bg-[#08323D]">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between"
      aria-label="Global">
      <a class="flex-none text-xl font-semibold sm:order-1 dark:text-white" href="#"><img src="/img/logo.png"
          alt="Logo"></a>

      <div id="navbar-alignment"
        class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2">
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
          <a class="uppercase font-light text-[#D5FD05]" href="#" aria-current="page">Book a Car</a>
          <a class="uppercase text-gray font-light-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500"
            href="#">Pickup Locations</a>
          <a class="uppercase text-gray font-light-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500"
            href="#">How it Works</a>
          <a class="uppercase text-gray font-light-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500"
            href="#">Support</a>
        </div>
      </div>
      <div class="flex items-center sm:order-3 gap-x-2">
        <div>
          <a href=""
            class="font-bold inline-flex border-2 border-[#D5FD05] bg-[#D5FD05] text-[#08323D] py-2 px-4 rounded-lg">Log
            In / Sign Up</a>
        </div>

        <button type="button"
          class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10"
          data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment" aria-label="Toggle navigation">
          <svg class="flex-shrink-0 hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" x2="21" y1="6" y2="6" />
            <line x1="3" x2="21" y1="12" y2="12" />
            <line x1="3" x2="21" y1="18" y2="18" />
          </svg>
          <svg class="flex-shrink-0 hidden hs-collapse-open:block size-4" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>
    </nav>
  </header>

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
      <div class="grid w-10/12 grid-cols-5 gap-3 bg-white rounded-lg shadow-xl p-7">
        <div class="">
          <p class="mb-3 text-gray-600 text-md">Pickup Location</p>
          <div class="relative">
            <input type="text" class="w-full p-4 text-xl rounded-lg ring-1 ring-gray-200 focus:ring-red-500 ps-12">
            <iconify-icon icon="carbon:location"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-gray-600 text-md">Drop-off Location</p>
          <div class="relative">
            <input type="text" class="w-full p-4 text-xl border border-gray-200 rounded-lg ps-12">
            <iconify-icon icon="carbon:location"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-gray-600 text-md">Pickup date & time</p>
          <div class="relative">
            <input type="date" class="w-full p-4 text-xl border-2 border-gray-200 rounded-lg ps-14">
            <iconify-icon icon="formkit:datetime"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>
        </div>
        <div class="">
          <p class="mb-3 text-gray-600 text-md">Drop-off date & time</p>
          <div class="relative">
            <input type="date" class="w-full p-4 text-xl border-2 border-gray-200 rounded-lg ps-14">
            <iconify-icon icon="formkit:datetime"
              class="absolute text-3xl text-gray-500 bottom-4 left-2"></iconify-icon>
          </div>

        </div>
        <div class="text-center text-white">
          <a href=""
            class="bg-[#08323D] mt-9 justify-center flex items-center p-5 rounded-md font-semibold"><iconify-icon
              icon="uiw:search" class="me-3"></iconify-icon> Find a Car</a>
        </div>
      </div>
    </section>


    <section class="">
      <div class="container flex justify-center">
        <div class="grid w-10/12 grid-cols-3 p-8">
          <div class="text-[#08323D] ">
            <h1 class="flex items-center mb-3 text-6xl font-semibold">24/7 <img src="/img/icon-2.png" alt=""
                class="ms-3"></h1>
            <h1 class="text-4xl uppercase">On Spot Support</h1>
          </div>
          <div class="">
            <img src="/img/icon-award.png" alt="" class="w-8/12 mx-auto">
          </div>
          <div class="text-[#08323D]flex-row">
            <div class="flex items-center py-2 border-b-2">
              <iconify-icon icon="fluent:home-garage-20-filled" class="text-2xl"></iconify-icon>
              <p class="text-lg ms-2">300+ Pickup locations to pick from</p>
            </div>
            <div class="flex items-center py-2 border-b-2">
              <iconify-icon icon="bxs:badge-dollar" class="text-2xl"></iconify-icon>
              <p class="text-lg ms-2">We provide the best pricing in the market</p>
            </div>
            <div class="flex items-center py-2">
              <iconify-icon icon="gis:car" class="text-2xl"></iconify-icon>
              <p class="text-lg ms-2">Over 3,000+ Registered and verified cars</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="flex justify-center mt-20">
      <div class="w-10/12">
        <hr>
      </div>
    </div>

    <section class="mt-20 mb-40">
      <div class="flex justify-center">
        <div class="w-10/12">
          <header class="text-[#08323D] mb-14">
            <h2 class="text-4xl font-semibold">Browse cars <br> by brand</h2>
          </header>

          <div class="grid grid-cols-6 gap-4">
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-1.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">380 Cars</span>
              </div>
            </div>
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-2.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">290 Cars</span>
              </div>
            </div>
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-3.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">264 Cars</span>
              </div>
            </div>
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-4.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">245 Cars</span>
              </div>
            </div>
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-5.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">234 Cars</span>
              </div>
            </div>
            <div class="flex justify-center p-4 text-center border-2 rounded-lg">
              <div>
                <img src="/img/brand-6.png" alt="" class="w-full mb-3">
                <span class="font-normal text-slate-400">109 Cars</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-[#08323D] py-20">
      <div class="flex justify-center">
        <div class="w-10/12">
          <header class="mb-16 text-center text-white">
            <h1 class="text-4xl font-bold">Top rated cars</h1>
          </header>

          <div class="grid grid-cols-4 gap-3">
            <div class="overflow-hidden bg-white rounded-2xl">
              <img src="/img/car-1.png" alt="" class="w-full">
              <div class="p-5">
                <span class="flex items-center text-lg text-orange-400"><iconify-icon icon="ph:star-fill"
                    class="me-2"></iconify-icon> 4.5 (32 Trips)</span>
                <h3 class="my-3 text-2xl font-bold">Toyota Hatchback</h3>
                <span class="flex items-center text-lg text-slate-400"><iconify-icon icon="carbon:location"
                    class="text-2xl me-2"></iconify-icon> 2.3
                  Miles
                  away
                </span>
                <hr class="my-3">
                <div class="flex items-center justify-between">
                  <span class="text-gray-400">
                    <span class="font-bold text-black">$36</span>/day
                  </span>
                  <a href=""
                    class="block bg-[#D5FD05] py-2 px-4 rounded-full font-semibold border-black border-2">Book
                    Now</a>
                </div>
              </div>
            </div>
            <div class="overflow-hidden bg-white rounded-2xl">
              <img src="/img/car-2.png" alt="" class="w-full">
              <div class="p-5">
                <span class="flex items-center text-lg text-orange-400"><iconify-icon icon="ph:star-fill"
                    class="me-2"></iconify-icon> 4.8 (24 Trips)</span>
                <h3 class="my-3 text-2xl font-bold">Toyota Camry Hybrid</h3>
                <span class="flex items-center text-lg text-slate-400"><iconify-icon icon="carbon:location"
                    class="text-2xl me-2"></iconify-icon> 8.6
                  Miles
                  away
                </span>
                <hr class="my-3">
                <div class="flex items-center justify-between">
                  <span class="text-gray-400">
                    <span class="font-bold text-black">$32</span>/day
                  </span>
                  <a href=""
                    class="block bg-[#D5FD05] py-2 px-4 rounded-full font-semibold border-black border-2">Book
                    Now</a>
                </div>
              </div>
            </div>
            <div class="overflow-hidden bg-white rounded-2xl">
              <img src="/img/car-3.png" alt="" class="w-full">
              <div class="p-5">
                <span class="flex items-center text-lg text-orange-400"><iconify-icon icon="ph:star-fill"
                    class="me-2"></iconify-icon> 4.9 (22 Trips)</span>
                <h3 class="my-3 text-2xl font-bold">Toyota GR86 PRM</h3>
                <span class="flex items-center text-lg text-slate-400"><iconify-icon icon="carbon:location"
                    class="text-2xl me-2"></iconify-icon> 9.6
                  Miles
                  away
                </span>
                <hr class="my-3">
                <div class="flex items-center justify-between">
                  <span class="text-gray-400">
                    <span class="font-bold text-black">$44</span>/day
                  </span>
                  <a href=""
                    class="block bg-[#D5FD05] py-2 px-4 rounded-full font-semibold border-black border-2">Book
                    Now</a>
                </div>
              </div>
            </div>
            <div class="overflow-hidden bg-white rounded-2xl">
              <img src="/img/car-1.png" alt="" class="w-full">
              <div class="p-5">
                <span class="flex items-center text-lg text-orange-400"><iconify-icon icon="ph:star-fill"
                    class="me-2"></iconify-icon> 4.2 (19 Trips)</span>
                <h3 class="my-3 text-2xl font-bold">Toyota P Supra</h3>
                <span class="flex items-center text-lg text-slate-400"><iconify-icon icon="carbon:location"
                    class="text-2xl me-2"></iconify-icon> 10.9
                  Miles
                  away
                </span>
                <hr class="my-3">
                <div class="flex items-center justify-between">
                  <span class="text-gray-400">
                    <span class="font-bold text-black">$40</span>/day
                  </span>
                  <a href=""
                    class="block bg-[#D5FD05] py-2 px-4 rounded-full font-semibold border-black border-2">Book
                    Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="my-48">
      <div class="flex justify-center">
        <div class="w-10/12">
          <div class="grid grid-cols-2 gap-4">
            <div class="flex justify-start">
              <img src="/img/img-2.png" alt="" class="w-9/12">
            </div>
            <div class="flex items-center">
              <div>
                <p class="font-normal">400+ People listed their cars with us</p>
                <h2 class="text-[#08323D] text-4xl font-bold my-5">List your car with NVCAR for rent to earn more
                  cash
                </h2>
                <p class="font-normal text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                  voluptatum
                  architecto voluptates
                  ullam
                  perferendis qui quibusdam.</p>

                <div class="flex my-14 verified">
                  <div class="flex items-center basis-4/12">
                    <iconify-icon icon="tabler:check" class="text-2xl text-green-500 me-2"></iconify-icon>
                    <p class="font-semibold">Verified renter</p>
                  </div>
                  <div class="flex items-center basis-4/12">
                    <iconify-icon icon="tabler:check" class="text-2xl text-green-500 me-2"></iconify-icon>
                    <p class="font-semibold">Verified renter</p>
                  </div>
                  <div class="flex items-center basis-4/12">
                    <iconify-icon icon="tabler:check" class="text-2xl text-green-500 me-2"></iconify-icon>
                    <p class="font-semibold">Verified renter</p>
                  </div>
                </div>
                <div>
                  <a href=""
                    class="me-2 inline-block py-4 px-10 text-md text-white bg-[#08323D] font-semibold rounded-full">List
                    Your
                    Car</a>
                  <a href=""
                    class="inline-block px-10 py-4 font-semibold border rounded-full text-md text-slate-400">How It
                    Work?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-[#F8F9F9] py-48">
      <div class="flex justify-center">
        <div class="w-10/12">
          <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
              <div>

                <h2 class="text-[#08323D] font-bold text-4xl">I was looking & Looking <br> but didn't find any
                  solusition
                  <br>
                  better
                  than them
                </h2>
                <p class="my-8 text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, neque
                  necessitatibus
                  quo eligendi
                  cumque enim voluptates soluta quae temporibus amet, consectetur molestiae. Culpa, repudiandae
                  architecto! Error</p>
                <div class="text-3xl text-yellow-500">
                  <iconify-icon icon="ph:star-fill"></iconify-icon>
                  <iconify-icon icon="ph:star-fill"></iconify-icon>
                  <iconify-icon icon="ph:star-fill"></iconify-icon>
                  <iconify-icon icon="ph:star-fill"></iconify-icon>
                  <iconify-icon icon="ph:star-fill"></iconify-icon>
                </div>

                <h3 class="text-[#08323D] text-xl mt-12 font-bold uppercase">Devon Lane <span
                    class="font-normal text-slate-500">10/05/2024</span>
                </h3>

              </div>
            </div>
            <div class="flex items-center justify-end">
              <img src="/img/img-3.png" alt="" class="w-7/12">
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="py-44">
      <div class="flex justify-center">
        <div class="w-10/12">
          <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
              <div>
                <h2 class="text-4xl text-[#08323D] font-bold">Frequently asked <br>question &rightarrow;</h2>
                <p class="mt-5 mb-10 text-slate-500">Didn't find your questions and answers? <br> Why not ask us?</p>
                <a href=""
                  class="me-2 inline-block py-4 px-10 text-md text-white bg-[#08323D] font-semibold rounded-full">Ask
                  a
                  Question</a>
              </div>
            </div>

            <div class="flex items-center">
              <div>
                <div class="hs-accordion-group">
                  <div class="py-2 border-b-2 hs-accordion active"
                    id="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <button
                      class="inline-flex items-center justify-between w-full py-3 text-xl font-semibold text-black rounded-lg hs-accordion-toggle hs-accordion-active:text-black hs-accordion-active:font-bold gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-nonedark:focus:outline-none"
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                      How does it works?
                      <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                      <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6"></path>
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                      <p class="text-gray-800 ">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control
                        the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="py-2 border-b-2 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                    <button
                      class="inline-flex items-center justify-between w-full py-3 text-xl font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-black hs-accordion-active:font-bold gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none "
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                      What if my booked car get on accident?
                      <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                      <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6"></path>
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                      <p class="text-gray-800">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control
                        the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>

                  <div class="py-2 hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                    <button
                      class="inline-flex items-center justify-between w-full py-3 text-xl font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-black hs-accordion-active:font-bold gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:text-neutral-400"
                      aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                      What if I want to cancel?
                      <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                      <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6"></path>
                      </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                      aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                      <p class="text-gray-800">
                        <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control
                        the
                        overall appearance, as well as the showing and hiding via CSS transitions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="py-32 bg-[#08323D]">
    <div class="flex justify-center">
      <div class="w-10/12">
        <div class="flex gap-4">
          <div class="flex flex-col font-light leading-10 basis-3/12">
            <a href="" class="text-slate-300">Manage Booking</a>
            <a href="" class="text-slate-300">Pickup Locations</a>
            <a href="" class="text-slate-300">Payments</a>
            <a href="" class="text-slate-300">Terms & Conditions</a>
            <a href="" class="text-slate-300">Privacy Policy</a>
          </div>
          <div class="flex flex-col font-light leading-10 basis-2/12">
            <a href="" class="text-slate-300">Blog</a>
            <a href="" class="text-slate-300">Careers</a>
            <a href="" class="text-slate-300">Joba</a>
            <a href="" class="text-slate-300">Gallery</a>
          </div>
          <div class="flex flex-col font-light leading-10 basis-2/12">
            <a href="" class="text-slate-300">Support</a>
            <a href="" class="text-slate-300">Whatsapp</a>
            <a href="" class="text-slate-300">Instagram</a>
            <a href="" class="text-slate-300">Call Center</a>
          </div>
          <div class="flex flex-col font-light basis-6/12">
            <h3 class="mb-2 text-2xl font-bold text-white">Our news letter</h3>
            <p class="text-slate-300">Be the first one to know about discounts, offers and events. Unsubscribe whenever
              you like.</p>
            <div class="relative mt-8">
              <form action="">
                <iconify-icon icon="mage:email" class="absolute text-2xl left-5 top-4"></iconify-icon>
                <input type="email" name="email" id="email" placeholder="Enter Email"
                  class="w-full p-4 font-semibold text-black rounded-full ps-14 placeholder:font-light">
                <button class="text-white rounded-full bg-[#08323D] px-10 py-2 absolute right-2 top-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="/node_modules/preline/dist/preline.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>

</body>

</html>
