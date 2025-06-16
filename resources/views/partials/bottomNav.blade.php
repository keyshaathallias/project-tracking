<nav class="fixed -bottom-1 left-0 right-0 z-50 bg-white shadow md:hidden">
  <div class="flex justify-around items-center h-20">
    <!-- Dashboard -->
    <a href="/dashboard"
      class="flex flex-col items-center transition duration-200 ease-in-out {{ request()->is('dashboard') ? 'text-primary' : 'text-gray-400' }} hover:text-dusty-blue relative group">
      @if (request()->is('dashboard'))
        <span class="absolute -top-5 left-1/2 -translate-x-1/2 w-full h-1 bg-primary rounded-b shadow"></span>
      @endif
      <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path
          d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
      </svg>
      <span class="text-xs mt-1">Dashboard</span>
    </a>
    <a href="/projects"
      class="flex flex-col items-center transition duration-200 ease-in-out {{ request()->is('projects') ? 'text-primary' : 'text-gray-400' }} hover:text-dusty-blue relative group">
      @if (request()->is('projects'))
        <span class="absolute -top-5 left-1/2 -translate-x-1/2 w-full h-1 bg-primary rounded-b shadow"></span>
      @endif
      <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path
          d="M448 160l-128 0 0-32 128 0 0 32zM48 64C21.5 64 0 85.5 0 112l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 64zM448 352l0 32-256 0 0-32 256 0zM48 288c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 288z" />
      </svg>
      <span class="text-xs mt-1">Projects</span>
    </a>
    <a href="/inquiry"
      class="flex flex-col items-center transition duration-200 ease-in-out {{ request()->is('inquiry') ? 'text-primary' : 'text-gray-400' }} hover:text-dusty-blue relative group">
      @if (request()->is('inquiry'))
        <span class="absolute -top-5 left-1/2 -translate-x-1/2 w-full h-1 bg-primary rounded-b shadow"></span>
      @endif
      <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path
          d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
      </svg>
      <span class="text-xs mt-1">Inquiry</span>
    </a>
  </div>
</nav>
