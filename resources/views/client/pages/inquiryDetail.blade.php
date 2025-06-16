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
        class="hover:text-dusty-blue transition duration-200 ease-in-out text-sm font-semibold">Inquiry</a>
      <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </span>
      <span class="text-primary text-sm font-semibold">Inquiry Detail</span>
    </nav>
  </div>

  {{-- Inquiry Detail --}}
  <div class="bg-white px-6 md:px-10 py-8 rounded-lg shadow -mx-6 md:mx-0">
    {{-- Project Title --}}
    <h1 class="font-semibold text-2xl mb-6">Website Company</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
      {{-- Client Info --}}
      <div class="text-primary font-medium">Client</div>
      <div class="md:col-span-3">Jane Doe</div>

      <div class="text-primary font-medium">Company</div>
      <div class="md:col-span-3">Company Name</div>

      <div class="text-primary font-medium">Phone Number</div>
      <div class="md:col-span-3">085156566565</div>

      <div class="text-primary font-medium">Email</div>
      <div class="md:col-span-3">client@gmail.com</div>

      {{-- Divider --}}
      <div class="md:col-span-4">
        <div class="border-t border-light-blue my-4"></div>
      </div>

      {{-- Project Info --}}
      <div class="text-primary font-medium">Service</div>
      <div class="md:col-span-3">Website Development</div>

      <div class="text-primary font-medium">Description</div>
      <div class="md:col-span-3 text-justify leading-relaxed">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam laudantium veritatis id cum laboriosam beatae
        dolores quaerat ipsam illo, ratione corporis maiores consequatur quae aspernatur similique nam quam inventore
        blanditiis libero, commodi, labore impedit eligendi nesciunt! Ex aliquam laboriosam, voluptate distinctio
        ratione, officia quam quia ullam in, at necessitatibus enim.
      </div>

      <div class="text-primary font-medium">Attachment</div>
      <div class="md:col-span-3 flex flex-col gap-1">
        <span>📂 file_name</span>
        <span>🔗 link</span>
      </div>

      <div class="text-primary font-medium">Sent On</div>
      <div class="md:col-span-3">Jun 1, 2025</div>

      <div class="text-primary font-medium">Due Date</div>
      <div class="md:col-span-3">Jun 16, 2025</div>

      {{-- Status Waiting for Review --}}
      <div class="text-primary font-medium">Status</div>
      <div class="md:col-span-3 flex items-center gap-2">
        <span class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
          <svg class="size-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
            <path
              d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM288 437l0 11L96 448l0-11c0-25.5 10.1-49.9 28.1-67.9L192 301.3l67.9 67.9c18 18 28.1 42.4 28.1 67.9z" />
          </svg>
          Waiting for Review
        </span>
      </div>

      {{-- Status Paid --}}
      {{-- <div class="text-primary font-medium">Status</div>
        <div class="md:col-span-3 flex items-center gap-2">
          <span class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold bg-green-100 text-green-800">
            <svg class="size-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
              <path
                d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            Payment Received
          </span>
        </div>
        <div class="md:col-span-4 flex justify-end mt-2">
          <button
            class="w-full md:w-auto bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white px-7 py-3 rounded-full shadow-lg flex items-center justify-center gap-2 transition text-center font-medium hover:opacity-90">
            Track Your Project
          </button>
        </div> --}}

      {{-- Status Awaiting Payment --}}
      {{-- <div class="text-primary font-medium">Status</div>
        <div class="md:col-span-3 flex items-center gap-2">
          <span
            class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
            <svg class="size-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
              <path
                d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z" />
            </svg>
            Awaiting Payment
          </span>
        </div>
        <div class="md:col-span-4 flex justify-end mt-2">
          <a href="#"
            class="w-full md:w-auto bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-7 py-3 rounded-full shadow-lg flex items-center justify-center gap-2 transition text-center">
            Make a Payment
          </a>
        </div> --}}

    </div>
  </div>
@endsection
