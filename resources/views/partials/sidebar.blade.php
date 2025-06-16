<aside class="relative w-80 bg-primary text-white flex-col justify-between min-h-screen overflow-hidden hidden md:block">
  <div class="absolute z-0 top-0 right-0">
    <img src="/assets/shape dashboard.svg" alt="shape">
  </div>

  <div class="relative z-10">
    <div class="pt-18 pb-10">
      <img src="assets/logo CDIAsia.svg" alt="CDIAsia" class="h-10 mb-4 mx-auto">
    </div>

    <!-- Menu -->
    <nav class="space-y-1">
      <p class="text-light font-semibold pl-10 text-lg mb-2">Menu</p>
      <a href="/dashboard"
        class="flex items-center gap-5 py-5 px-10 {{ request()->is('dashboard') ? 'bg-light-blue text-primary' : '' }} transition duration-200 ease-in-out hover:bg-dusty-blue hover:text-light">
        <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path
            d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
        </svg>
        Dashboard
      </a>
      <a href="/projects"
        class="flex items-center gap-5 py-5 px-10 {{ request()->is('projects', 'project-detail') ? 'bg-light-blue text-primary' : '' }} transition duration-200 ease-in-out hover:bg-dusty-blue hover:text-light">
        <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M448 160l-128 0 0-32 128 0 0 32zM48 64C21.5 64 0 85.5 0 112l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 64zM448 352l0 32-256 0 0-32 256 0zM48 288c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 288z" />
        </svg>
        Projects
      </a>
      <a href="/inquiry"
        class="flex items-center gap-5 py-5 px-10 {{ request()->is('inquiry', 'create-inquiry', 'inquiry-detail', 'payment') ? 'bg-light-blue text-primary' : '' }} transition duration-200 ease-in-out hover:bg-dusty-blue hover:text-light">
        <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
        </svg>
        Inquiry
      </a>

      <p class="text-light font-semibold pl-10 text-lg mt-6 mb-2">General</p>
      <form id="logout-form" action="{{ route('logout') }}" method="POST"
        class="flex items-center gap-5 py-5 px-10 hover:bg-dusty-blue hover:text-light transition duration-200 ease-in-out">
        @csrf
        <button type="submit"
          class="flex items-center gap-5 bg-transparent border-0 p-0 m-0 cursor-pointer hover:text-light">
          <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7-14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
          </svg>
          Logout
        </button>
      </form>
    </nav>
  </div>
</aside>
