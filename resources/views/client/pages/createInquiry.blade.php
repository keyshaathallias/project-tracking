@extends('layouts.layout')

@section('content')
  <div class="">
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
        <span class="text-primary text-sm font-semibold">New Inquiry</span>
      </nav>
    </div>

    {{-- Create Inquiry Form --}}
    <div class="bg-white px-6 md:px-10 py-8 rounded-lg shadow -mx-6 md:mx-0">
      <h1 class="font-semibold text-2xl mb-6">Create New Inquiry</h1>

      <form method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        {{-- Project Name & Phone Number --}}
        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
          <div class="w-full">
            <label for="name" class="block text-sm font-medium text-primary mb-1">
              Project Name <span class="text-red">*</span>
            </label>
            <input type="text" name="name" id="name"
              class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary font-semibold text-sm focus:outline-2 focus:outline-primary focus:border-primary"
              placeholder="Project Name" required>
          </div>
          <div class="w-full">
            <label for="phone_number" class="block text-sm font-medium text-primary mb-1">
              Phone Number <span class="text-red">*</span>
            </label>
            <input type="tel" name="phone_number" id="phone_number"
              class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary font-semibold text-sm focus:outline-2 focus:outline-primary focus:border-primary"
              placeholder="Your Phone Number" required>
          </div>
        </div>

        {{-- Service & Due Date --}}
        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
          <div class="w-full">
            <label for="service" class="block text-sm font-medium text-primary mb-1">
              Service <span class="text-red">*</span>
            </label>
            <select name="service" id="service"
              class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary text-sm focus:outline-2 focus:outline-primary focus:border-primary"
              required>
              <option value="" disabled selected>Select Service</option>
              <option value="web_development">Web Development</option>
              <option value="ui_ux_design">UI/UX Design</option>
              <option value="option_3">Option 3</option>
            </select>
          </div>
          <div class="w-full">
            <label for="due_date" class="block text-sm font-medium text-primary mb-1">
              Due Date <span class="text-red">*</span>
            </label>
            <input type="date" name="due_date" id="due_date"
              class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary text-sm focus:outline-2 focus:outline-primary focus:border-primary"
              required>
          </div>

        </div>

        {{-- Attachment --}}
        <div>
          <label for="attachment" class="block text-sm font-medium text-primary mb-1">
            Attachment
          </label>
          <input type="file" name="attachment" id="attachment"
            class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary text-sm focus:outline-2 focus:outline-primary focus:border-primary">
        </div>

        {{-- Message --}}
        <div>
          <label for="message" class="block text-sm font-medium text-primary mb-1">
            Message <span class="text-red">*</span>
          </label>
          <textarea name="message" id="message"
            class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary font-semibold text-sm focus:outline-2 focus:outline-primary focus:border-primary"
            rows="4" placeholder="Your Message" required></textarea>
        </div>

        {{-- Actions --}}
        <div class="flex gap-4 justify-end">
          <a href="/inquiry"
            class="w-40 px-0 flex items-center justify-center rounded-full py-3 font-medium border border-gray-400 text-gray-700 bg-light hover:bg-gray-100 transition">
            Cancel
          </a>
          <button type="submit"
            class="w-40 bg-gradient-to-r from-[#4598F2] to-[#1A76D8] px-0 flex items-center justify-center text-white rounded-full py-3 font-medium hover:opacity-90 transition duration-200 ease-in-out">
            Submit
          </button>
        </div>
      </form>
    </div>
  @endsection
