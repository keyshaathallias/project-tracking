@extends('layouts.layout')

@section('content')
  {{-- Breadcrumbs --}}
  <div class="md:mb-8 mb-6">
    <nav class="flex items-center text-sm text-medium-gray mb-4 gap-3">
      <a href="/dashboard" class="hover:text-dusty-blue transition duration-200 ease-in-out text-sm font-semibold">
        <svg class="size-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path
            d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
        </svg>
      </a>
      <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </span>
      <a href="/inquiry"
        class="hover:text-dusty-blue transition duration-200 ease-in-out text-sm font-semibold flex items-center">
        <svg class="size-4 md:hidden" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
        </svg>
        <span class="hidden md:inline ml-1">Inquiry</span>
      </a>
      <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </span>
      <a href="/inquiry-detail"
        class="hover:text-dusty-blue transition duration-200 ease-in-out text-sm font-semibold flex items-center">
        <svg class="size-4 mr-1 md:hidden" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
        </svg>
        <span class="ml-1 whitespace-nowrap"><span class="md:hidden">Detail</span><span class="hidden md:inline">Inquiry
            Detail</span></span>
      </a>
      <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </span>
      <span class="text-primary text-sm font-semibold">Make a Payment</span>
    </nav>
  </div>

  {{-- Payment Detail --}}
  <div class="bg-white px-6 md:px-10 py-8 rounded-lg shadow -mx-6 md:mx-0">
    <h1 class="font-semibold text-2xl mb-6">Payment Details</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
      {{-- Payment Info --}}
      <div class="text-primary font-medium">Total Amount Due</div>
      <div class="md:col-span-3">Rp 3.000.000,00</div>

      <div class="text-primary font-medium">Description</div>
      <div class="md:col-span-3 text-justify leading-relaxed">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam laudantium veritatis id cum laboriosam beatae
        dolores quaerat ipsam illo, ratione corporis maiores consequatur quae aspernatur similique nam quam inventore
        blanditiis libero, commodi, labore impedit eligendi nesciunt! Ex aliquam laboriosam, voluptate distinctio
        ratione, officia quam quia ullam in, at necessitatibus enim.
      </div>

      {{-- Divider --}}
      <div class="md:col-span-4">
        <div class="border-t border-light-blue my-4"></div>
      </div>

      <div class="text-primary font-medium">Account Number</div>
      <div class="md:col-span-3">4321 8765 0987 6543</div>

      <div class="text-primary font-medium">Proof of Payment <span class="text-red">*</span></div>
      <div class="md:col-span-3">
        <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
          @csrf
          <input type="file" name="proof" id="proof"
            class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary text-sm focus:outline-2 focus:outline-primary focus:border-primary"
            required>
          <button type="submit"
            class="w-full md:w-auto bg-gradient-to-r from-[#4598F2] to-[#1A76D8] px-0 flex items-center justify-center text-white rounded-full py-3 font-medium hover:opacity-90 transition duration-200 ease-in-out mt-5 md:mt-2">
            Upload Proof of Payment
          </button>
        </form>
      </div>

    </div>
  </div>
@endsection
