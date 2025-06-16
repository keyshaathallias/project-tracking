<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project Tracking CDIAsia | Login</title>
  @vite('resources/css/app.css')

  {{-- Font Montserrat --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body class="font-montserrat">
  <div class="hidden md:block">
    <div class="absolute -bottom-10 -left-0">
      <img src="/assets/shape-b-l.svg">
    </div>
    <div class="absolute -top-5 left-110">
      <img src="/assets/shape-t-m.svg">
    </div>
    <div class="absolute -top-14 -right-0">
      <img src="/assets/shape-t-r.svg">
    </div>
  </div>

  <div class="block md:hidden">
    <div class="absolute -top-15 right-0">
      <img src="/assets/shape-t-r mb.svg">
    </div>
    <div class="absolute -bottom-0 -left-12">
      <img src="/assets/shape-b-l mb.svg">
    </div>
  </div>

  <div
    class="min-h-screen flex flex-col md:flex-row items-center justify-center text-white p-4 overflow-hidden bg-gradient-to-r from-[#E70AF9] to-[#3452B4]">

    <!-- Left side: Logo & Title -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center items-start relative z-10">
      <img src="/assets/logo CDIAsia.svg" alt="CDIAsia" class="w-24 md:w-52 mx-auto md:mx-0">
      <img class="my-11 hidden md:block" src="/assets/title.svg" alt="PROJECT TRACKING">
      <img class="my-5 block md:hidden" src="/assets/title mobile.svg" alt="PROJECT TRACKING">

      {{-- <div class="relative inline-block leading-tight mb-6">
        <h2
          class="absolute top-0 left-0 text-5xl md:text-6xl lg:text-7xl font-extrabold text-white 
            drop-shadow-[3px_3px_0_#5D1A98] z-0 select-none pointer-events-none">
          PROJECT <br> TRACKING
        </h2>

        <h2 class="relative text-5xl md:text-6xl lg:text-7xl font-extrabold text-white z-10">
          PROJECT <br> TRACKING
        </h2>
      </div> --}}

      <div
        class="text-lg text-center md:text-left md:text-2xl lg:text-3xl font-medium italic flex gap-2 flex-col whitespace-nowrap text-shadow">
        <p class="text-shadow-md">When <span
            class="text-shadow-none shadow-md bg-white text-violet px-1 font-bold rounded-sm">CREATIVE IDEAS,</span></p>
        <p class="text-shadow-md">meet <span
            class="text-shadow-none shadow-md bg-white text-primary px-1 font-bold rounded-sm">PERFECT
            EXECUTIONS.</span></p>
      </div>
    </div>

    <!-- Right side: Form -->
    <div class="relative w-full max-w-md mx-auto">
      <img src="/assets/glass form.svg" alt="Form BG" class="w-full h-auto object-contain" />

      <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6">
        <h3 class="text-xl md:text-3xl font-bold mb-2 text-dark">Welcome Back</h3>
        <p class="text-dark text-opacity-80 mb-6 text-sm md:text-base">Input your email and password.</p>

        {{-- Form Login --}}
        <form method="POST" action="{{ route('login.submit') }}" class="w-full px-4">
    @csrf
          <input type="email" name="email" id="email"
            class="bg-light w-full px-6 py-4 border border-light-gray rounded-[10px] text-primary font-semibold text-sm focus:outline-2 focus:outline-primary focus:border-primary"
            placeholder="Email" />

          <div class="relative mt-3">
            <input type="password" name="password" id="password"
              class="bg-light w-full px-6 py-4 pr-12 border border-light-gray rounded-[10px] text-primary font-semibold text-sm focus:outline-2 focus:outline-primary focus:border-primary"
              placeholder="Password" />

            <!-- Show Password Icon -->
            <svg id="eye-open"
              class="absolute top-1/2 right-4 transform -translate-y-1/2 w-5 h-5 text-primary cursor-pointer"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor">
              <path
                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
            </svg>

            <!-- Hide Password Icon -->
            <svg id="eye-closed"
              class="hidden absolute top-1/2 right-4 transform -translate-y-1/2 w-5 h-5 text-primary cursor-pointer"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor">
              <path
                d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z" />
            </svg>

          </div>

          <button type="submit"
            class="mt-5 w-full py-3 px-6 rounded-full font-semibold text-sm bg-gradient-to-r from-violet to-primary hover:from-primary hover:to-violet hover:shadow-lg text-white transition duration-300 ease-in-out transform">Login</button>
        </form>
      </div>
    </div>

  </div>

  <script>
    const passwordInput = document.getElementById('password');
    const eyeOpen = document.getElementById('eye-open');
    const eyeClosed = document.getElementById('eye-closed');

    eyeOpen.addEventListener('click', () => {
      passwordInput.type = 'text';
      eyeOpen.classList.add('hidden');
      eyeClosed.classList.remove('hidden');
    });

    eyeClosed.addEventListener('click', () => {
      passwordInput.type = 'password';
      eyeClosed.classList.add('hidden');
      eyeOpen.classList.remove('hidden');
    });
  </script>

</body>

</html>
