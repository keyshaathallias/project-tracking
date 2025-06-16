@extends('layouts.layout')

@section('content')
  <div class="flex justify-between items-center">
    <div>
      <h2 class="flex gap-3 items-center text-base md:text-lg font-semibold text-dark">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <defs>
            <linearGradient id="inquiryIconGradient" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#4598F2" />
              <stop offset="100%" stop-color="#1A76D8" />
            </linearGradient>
          </defs>
          <path
            d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"
            fill="url(#inquiryIconGradient)" />
        </svg>
        Inquiry
      </h2>

      {{-- Categories --}}
      <div class="">
        <div class="flex gap-4 my-5 flex-wrap">
          <a href=""
            class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out
      bg-gradient-to-r from-secondary to-[#B43D3D] text-white">
            All Inquiries
          </a>
          <a href=""
            class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out
      bg-light text-primary border border-primary hover:bg-light-blue hover:border-light-blue hover:text-primary">
            Waiting for Review
          </a>
          <a href=""
            class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out
      bg-light text-primary border border-primary hover:bg-light-blue hover:border-light-blue hover:text-primary">
            Awaiting Payment
          </a>
          <a href=""
            class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out
      bg-light text-primary border border-primary hover:bg-light-blue hover:border-light-blue hover:text-primary">
            Paid
          </a>
        </div>
      </div>
    </div>

    {{-- Button New Inquiry --}}
    {{-- DESKTOP: Normal Button --}}
    <a href="/create-inquiry"
      class="hidden sm:flex items-center gap-3 bg-gradient-to-r from-primary to-[#1A76D8] hover:from-[#1A76D8] hover:to-primary hover:shadow-lg text-white px-5 py-3 rounded-full shadow-md transition duration-200 ease-in-out">
      <svg class="size-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
          d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32v144H48c-17.7 0-32 14.3-32 32s14.3 32 32 32h144v144c0 17.7 14.3 32 32 32s32-14.3 32-32V288h144c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
      </svg>
      <p>New Inquiry</p>
    </a>

    {{-- MOBILE: Floating Button --}}
    <div class="fixed bottom-22 right-6 z-50 sm:hidden">
      <a href="/create-inquiry"
        class="group w-12 hover:w-40 h-12 bg-gradient-to-r from-primary to-[#1A76D8] hover:from-[#1A76D8] hover:to-primary text-white rounded-full shadow-md flex items-center justify-center transition-all duration-500 ease-in-out overflow-hidden relative"
        style="transition-property: width, background, box-shadow;">
        <span
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 ease-in-out group-hover:justify-start group-hover:pl-4 w-full h-full">
          <svg class="size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32v144H48c-17.7 0-32 14.3-32 32s14.3 32 32 32h144v144c0 17.7 14.3 32 32 32s32-14.3 32-32V288h144c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
          </svg>
        </span>
        <span class="opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out whitespace-nowrap pl-8">
          New Inquiry
        </span>
      </a>
    </div>
  </div>

  {{-- Inquiry Cards --}}
  <div class="flex flex-wrap gap-6">
    {{-- Inquiry 1 --}}
    <div class="max-w-md w-full bg-white rounded-xl border border-primary p-6 shadow space-y-4">
      <!-- Title -->
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-lg">Redesign Landing Page</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3A59A6" class="bi bi-chevron-right"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </div>

      <hr class="my-2 border-light-blue">

      <!-- Details -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
        <div class="text-primary font-medium">Sent On</div>
        <div class="md:col-span-3">May 4, 2025</div>

        <div class="text-primary font-medium">Service</div>
        <div class="md:col-span-3">Website Design</div>

        <div class="text-primary font-medium">Brief Summary</div>
        <div class="md:col-span-3 text-justify leading-relaxed">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quis vitae provident nihil quam, odio
          beatae
          accusamus nemo autem dicta.
        </div>

        <div class="text-primary font-medium">Attached File</div>
        <div class="md:col-span-3 flex items-center gap-2">
          <span class="text-xl">📄</span>
          <span>brief.pdf</span>
        </div>
      </div>

      <hr class="my-2 border-light-blue">

      {{-- Status Payment Received --}}
      <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-green-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
          </svg>
          Payment Received
        </span>
      </div>

      <button
        class="w-full bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white py-2 rounded-full font-medium hover:opacity-90 transition">
        Track Your Project
      </button>

      {{-- Status Awaiting Payment --}}
      {{-- <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-yellow-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z" />
          </svg>
          Awaiting Payment
        </span>
      </div>

      <button class="w-full bg-green text-white py-2 rounded-full font-medium hover:bg-green-600 transition">
        Make a Payment
      </button>

      Status Waiting for Review
      <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-gray-500 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
            <path
              d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM288 437l0 11L96 448l0-11c0-25.5 10.1-49.9 28.1-67.9L192 301.3l67.9 67.9c18 18 28.1 42.4 28.1 67.9z" />
          </svg>
          Waiting for Review
        </span>
      </div> --}}

    </div>

    {{-- Inquiry 2 --}}
    <div class="max-w-md w-full bg-white rounded-xl border border-primary p-6 shadow space-y-4">
      <!-- Title -->
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-lg">Redesign Landing Page</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3A59A6" class="bi bi-chevron-right"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </div>

      <hr class="my-2 border-light-blue">

      <!-- Details -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
        <div class="text-primary font-medium">Sent On</div>
        <div class="md:col-span-3">May 4, 2025</div>

        <div class="text-primary font-medium">Service</div>
        <div class="md:col-span-3">Website Design</div>

        <div class="text-primary font-medium">Brief Summary</div>
        <div class="md:col-span-3 text-justify leading-relaxed">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quis vitae provident nihil quam, odio
          beatae
          accusamus nemo autem dicta.
        </div>

        <div class="text-primary font-medium">Attached File</div>
        <div class="md:col-span-3 flex items-center gap-2">
          <span class="text-xl">📄</span>
          <span>brief.pdf</span>
        </div>
      </div>

      <hr class="my-2 border-light-blue">

      {{-- Status Payment Received --}}
      {{-- <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-green-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
          </svg>
          Payment Received
        </span>
      </div>

      <button
        class="w-full bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white py-2 rounded-full font-medium hover:opacity-90 transition">
        Track Your Project
      </button> --}}

      {{-- Status Awaiting Payment --}}
      <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-yellow-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z" />
          </svg>
          Awaiting Payment
        </span>
      </div>

      <button class="w-full bg-green text-white py-2 rounded-full font-medium hover:bg-green-600 transition">
        Make a Payment
      </button>

      {{-- Status Waiting for Review --}}
      {{-- <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-gray-500 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
            <path
              d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM288 437l0 11L96 448l0-11c0-25.5 10.1-49.9 28.1-67.9L192 301.3l67.9 67.9c18 18 28.1 42.4 28.1 67.9z" />
          </svg>
          Waiting for Review
        </span>
      </div> --}}

    </div>

    {{-- Inquiry 3 --}}
    <div class="max-w-md w-full bg-white rounded-xl border border-primary p-6 shadow space-y-4">
      <!-- Title -->
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-lg">Redesign Landing Page</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3A59A6"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </div>

      <hr class="my-2 border-light-blue">

      <!-- Details -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
        <div class="text-primary font-medium">Sent On</div>
        <div class="md:col-span-3">May 4, 2025</div>

        <div class="text-primary font-medium">Service</div>
        <div class="md:col-span-3">Website Design</div>

        <div class="text-primary font-medium">Brief Summary</div>
        <div class="md:col-span-3 text-justify leading-relaxed">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quis vitae provident nihil quam, odio
          beatae
          accusamus nemo autem dicta.
        </div>

        <div class="text-primary font-medium">Attached File</div>
        <div class="md:col-span-3 flex items-center gap-2">
          <span class="text-xl">📄</span>
          <span>brief.pdf</span>
        </div>
      </div>

      <hr class="my-2 border-light-blue">

      {{-- Status Payment Received --}}
      {{-- <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-green-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
          </svg>
          Payment Received
        </span>
      </div>

      <button
        class="w-full bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white py-2 rounded-full font-medium hover:opacity-90 transition">
        Track Your Project
      </button> --}}

      {{-- Status Awaiting Payment --}}
      {{-- <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-yellow-600 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
            <path
              d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z" />
          </svg>
          Awaiting Payment
        </span>
      </div>

      <button class="w-full bg-green text-white py-2 rounded-full font-medium hover:bg-green-600 transition">
        Make a Payment
      </button> --}}

      {{-- Status Waiting for Review --}}
      <div class="flex justify-between items-center mt-4">
        <span class="text-primary font-medium">Status</span>
        <span class="text-gray-500 font-medium flex items-center gap-1">
          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
            <path
              d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM288 437l0 11L96 448l0-11c0-25.5 10.1-49.9 28.1-67.9L192 301.3l67.9 67.9c18 18 28.1 42.4 28.1 67.9z" />
          </svg>
          Waiting for Review
        </span>
      </div>

    </div>
  </div>

  
@endsection
