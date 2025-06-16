@extends('layouts.layout')

@section('content')
  <div class="flex justify-between items-center mb-7">
    {{-- Overview --}}
    <div>
      <h1 class="text-base mb-4">Overview</h1>

      <div class="flex gap-4">
        {{-- Ongoing Project --}}
        <div class="flex gap-3 justify-center items-center bg-white rounded-xl px-6 py-7 w-fit">
          <div class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] p-3 rounded-lg w-fit">
            <svg class="w-8 h-8" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z" />
            </svg>
          </div>
          <div class="text-dark-blue">
            <p class="text-sm">Ongoing Projects</p>
            <h5 class="font-bold text-xl">8</h5>
          </div>
        </div>

        {{-- Completed Project --}}
        <div class="flex gap-3 justify-center items-center bg-white rounded-xl px-6 py-7 w-fit">
          <div class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] p-3 rounded-lg w-fit">
            <svg class="w-8 h-8" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
          </div>
          <div class="text-dark-blue">
            <p class="text-sm">Completed Projects</p>
            <h5 class="font-bold text-xl">6</h5>
          </div>
        </div>
      </div>
    </div>

    {{-- Notification --}}
    <div class="bg-white rounded-xl p-6 hidden md:block">
      <div class="flex items-center justify-between mb-4">
        <h1 class="text-base">Notification</h1>
        <a href="" class="text-primary items-center text-xs flex gap-1">
          See All
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>
      </div>

      <div class="flex flex-col items-center gap-4 mb-4">
        <div>
          <p class="text-sm"><span class="font-semibold">CDIasia</span> telah menyelesaikan desain UI pada projek
            website portfolio</p>
          <div class="flex items-center gap-4 text-sm text-primary">
            Just Now
            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
              class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8" />
            </svg>
            Review →
          </div>
        </div>
        <div>
          <p class="text-sm"><span class="font-semibold">CDIasia</span> telah menyelesaikan desain UI pada projek
            website portfolio</p>
          <div class="flex items-center gap-4 text-sm text-primary">
            May 3
            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
              class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8" />
            </svg>
            Review →
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Ongoing Projects --}}
  <div class="bg-white rounded-xl p-6 -mx-8 md:mx-0">
    <div class="flex items-center justify-between mb-4">
      <h3 class="font-semibold text-lg">Ongoing Projects</h3>
      <a href="" class="text-primary items-center text-xs flex gap-1">
        See All
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </a>
    </div>

    {{-- Project cards --}}
    <div class="flex flex-wrap justify-left items-center gap-8">

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="space-y-4">
          <!-- Step 1 -->
          <div class="space-y-3">
            <div class="flex items-start gap-4">
              <div
                class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
                1
              </div>

              <div class="flex-1 space-y-1">
                <a href="/detail-project" class="flex justify-between items-center">
                  <h3 class="font-semibold">Wireframe</h3>
                  <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
                </a>
                <p class="text-sm text-gray-700 leading-snug">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                </p>
                <div class="text-sm text-primary">
                  <span class="font-medium">See Progress:</span>
                  <div class="space-y-1">
                    <p>📂 file_name</p>
                    <p>🔗 link</p>
                  </div>
                </div>

                <div class="flex gap-2 mt-2">
                  <button
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition">
                    Request Revision
                  </button>
                  <button
                    class="bg-green text-white px-3 py-1 rounded-full text-sm font-medium hover:bg-green-600 transition">
                    Accept
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="flex items-start gap-4">
            <div
              class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
              2
            </div>

            <div class="flex-1 space-y-1">
              <div class="flex justify-between items-center">
                <h3 class="font-semibold">UI Design</h3>
                <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="space-y-4">
          <!-- Step 1 -->
          <div class="space-y-3">
            <div class="flex items-start gap-4">
              <div
                class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
                1
              </div>

              <div class="flex-1 space-y-1">
                <a href="/detail-project" class="flex justify-between items-center">
                  <h3 class="font-semibold">Wireframe</h3>
                  <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
                </a>
                <p class="text-sm text-gray-700 leading-snug">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                </p>
                <div class="text-sm text-primary">
                  <span class="font-medium">See Progress:</span>
                  <div class="space-y-1">
                    <p>📂 file_name</p>
                    <p>🔗 link</p>
                  </div>
                </div>

                <div class="flex gap-2 mt-2">
                  <button
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition">
                    Request Revision
                  </button>
                  <button
                    class="bg-green text-white px-3 py-1 rounded-full text-sm font-medium hover:bg-green-600 transition">
                    Accept
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="flex items-start gap-4">
            <div
              class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
              2
            </div>

            <div class="flex-1 space-y-1">
              <div class="flex justify-between items-center">
                <h3 class="font-semibold">UI Design</h3>
                <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="space-y-4">
          <!-- Step 1 -->
          <div class="space-y-3">
            <div class="flex items-start gap-4">
              <div
                class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
                1
              </div>

              <div class="flex-1 space-y-1">
                <a href="/detail-project" class="flex justify-between items-center">
                  <h3 class="font-semibold">Wireframe</h3>
                  <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
                </a>
                <p class="text-sm text-gray-700 leading-snug">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                </p>
                <div class="text-sm text-primary">
                  <span class="font-medium">See Progress:</span>
                  <div class="space-y-1">
                    <p>📂 file_name</p>
                    <p>🔗 link</p>
                  </div>
                </div>

                <div class="flex gap-2 mt-2">
                  <button
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition">
                    Request Revision
                  </button>
                  <button
                    class="bg-green text-white px-3 py-1 rounded-full text-sm font-medium hover:bg-green-600 transition">
                    Accept
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="flex items-start gap-4">
            <div
              class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
              2
            </div>

            <div class="flex-1 space-y-1">
              <div class="flex justify-between items-center">
                <h3 class="font-semibold">UI Design</h3>
                <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  {{-- Project History --}}
  <div class="bg-white rounded-xl p-6 mt-7 -mx-8 md:mx-0">
    <div class="flex items-center justify-between mb-4">
      <h3 class="font-semibold text-lg">Project History</h3>
      <a href="" class="text-primary items-center text-xs flex gap-1">
        See All
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </a>
    </div>

    <div class="flex flex-wrap justify-left items-center gap-8">

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="flex gap-5 items-center">
          <p>Completed On</p>
          <p>May 10, 2025</p>
        </div>
      </div>

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="flex gap-5 items-center">
          <p>Completed On</p>
          <p>May 10, 2025</p>
        </div>
      </div>

      <div class="border border-primary rounded-xl p-4 space-y-4 w-full max-w-md">
        <a href="" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">Website Portfolio</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="flex gap-5 items-center">
          <p>Completed On</p>
          <p>May 10, 2025</p>
        </div>
      </div>

    </div>
  </div>
@endsection
