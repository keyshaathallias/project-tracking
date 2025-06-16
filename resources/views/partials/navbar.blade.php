<header
  class="bg-white shadow px-4 md:px-10 py-7 rounded-b-4xl flex items-center justify-between flex-col-reverse md:flex-row gap-4 md:gap-0">
  <!-- Search bar -->
  <div class="relative w-full md:max-w-lg">
    <input type="text" placeholder="Search"
      class="w-full border border-primary text-primary rounded-full py-4 pl-16 md:pl-18 focus:outline-none" />
    <svg class="absolute left-10 top-5 w-4 h-4" fill="#3A59A6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path
        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
    </svg>
  </div>

  <!-- Right user info -->
  <div class="flex items-center gap-2 md:gap-4 w-full md:w-auto justify-between md:justify-end">
    {{-- User Info --}}
    <div
      class="flex items-center flex-row-reverse md:flex-row gap-2 md:gap-4 w-full md:w-auto justify-between md:justify-end">
      {{-- Notification Icon --}}
      <svg class="size-5 md:size-6 text-primary" fill="#3A59A6" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512">
        <path
          d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
      </svg>

      <div class="md:text-right md:ml-10 text-left">
        <p class="font-bold text-sm md:text-lg">John Doe</p>
        <p class="font-medium text-xs md:text-base">Company Name</p>
        <p class="text-xs md:text-sm">john.doe@gmail.com</p>
      </div>
    </div>

    <img src="/assets/default profile.jpg" class="w-12 h-12 rounded-full" alt="User Avatar">
  </div>
</header>
