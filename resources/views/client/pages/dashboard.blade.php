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
    {{-- <div class="bg-white rounded-xl p-6 hidden md:block">
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
    </div> --}}
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
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition request-revision-btn">
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
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition request-revision-btn">
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
                    class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition request-revision-btn">
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

  {{-- Notification Modal --}}
  <div id="notificationModal" class="absolute top-20 right-25 hidden z-50 transition-opacity duration-300 opacity-0">
    <div class="bg-white rounded-xl p-6 w-[28rem] transform transition-transform duration-300 scale-95 shadow-lg">
      <div class="flex items-center justify-between mb-4">
        <h1 class="text-base font-semibold">Notification</h1>
        <div class="flex items-center gap-4">
          <a href="#" class="text-primary text-xs flex items-center gap-1">
            See All
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
            </svg>
          </a>
          <button id="closeModal" class="text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="flex flex-col gap-4 mb-4">
        <div>
          <p class="text-sm"><span class="font-semibold">CDIasia</span> telah menyelesaikan desain UI pada projek website portfolio</p>
          <div class="flex items-center gap-4 text-sm text-primary mt-1">
            Just Now
            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8" />
            </svg>
            Review →
          </div>
        </div>
        <div>
          <p class="text-sm"><span class="font-semibold">CDIasia</span> telah menyelesaikan desain UI pada projek website portfolio</p>
          <div class="flex items-center gap-4 text-sm text-primary mt-1">
            May 3
            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8" />
            </svg>
            Review →
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Request Revision Modal -->
  <div id="requestRevisionModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition-opacity duration-300 opacity-0">
    <div class="bg-white rounded-xl p-8 w-full max-w-2xl transform transition-transform duration-300 scale-95 shadow-lg">
      <!-- Modal Header -->
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Request Revision</h2>
        <button id="closeRevisionModal" class="text-gray-400 hover:text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
          </svg>
        </button>
      </div>

      <!-- Modal Body -->
      <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div>
            <label for="revisionTitle" class="block text-sm font-medium text-primary mb-1">Revision Title<span class="text-red-500">*</span></label>
            <input type="text" id="revisionTitle" placeholder="Enter a short title for your revision" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-primary">
          </div>
          <div>
            <label for="priority" class="block text-sm font-medium text-primary mb-1">Priority<span class="text-red-500">*</span></label>
            <div class="relative">
              <select id="priority" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-primary appearance-none bg-white">
                <option class="text-gray-500">Select priority</option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <label for="description" class="block text-sm font-medium text-primary mb-1">Description<span class="text-red-500">*</span></label>
          <textarea id="description" rows="4" placeholder="Describe the revision you want us to make" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
        </div>
        <div class="mb-6">
          <p class="block text-sm font-medium text-gray-700 mb-1">Supporting Files or Links</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative">
              <input type="text" placeholder="Upload file" class="w-full border border-gray-300 rounded-lg p-3 pr-10 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer">
              <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text text-gray-400" viewBox="0 0 16 16">
                  <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                  <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                </svg>
              </span>
            </div>
            <div class="relative">
              <input type="text" placeholder="Link" class="w-full border border-gray-300 rounded-lg p-3 pr-10 focus:outline-none focus:ring-2 focus:ring-primary">
              <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg text-gray-400" viewBox="0 0 16 16">
                  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                </svg>
              </span>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-end gap-4">
          <button type="button" id="cancelRevisionModal" class="border border-gray-300 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-100 transition">Cancel</button>
          <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Notification Modal Script
    document.addEventListener('DOMContentLoaded', function () {
      const notificationButton = document.querySelector('#notificationButton');
      const modal = document.getElementById('notificationModal');
      const closeModal = document.getElementById('closeModal');

      notificationButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent document click from immediately closing the modal
        modal.classList.remove('hidden');
        setTimeout(() => {
          modal.classList.remove('opacity-0');
          modal.querySelector('.transform').classList.remove('scale-95');
        }, 10);
      });

      closeModal.addEventListener('click', function () {
        modal.classList.add('opacity-0');
        modal.querySelector('.transform').classList.add('scale-95');
        setTimeout(() => {
          modal.classList.add('hidden');
        }, 300);
      });

      // Close modal when clicking outside of it
      document.addEventListener('click', function (event) {
        if (!modal.contains(event.target) && event.target !== notificationButton) {
          modal.classList.add('opacity-0');
          modal.querySelector('.transform').classList.add('scale-95');
          setTimeout(() => {
            modal.classList.add('hidden');
          }, 300);
        }
      });
    });
  </script>

  <script>
    // All Modals Script
    document.addEventListener('DOMContentLoaded', function () {
      // --- Notification Modal ---
      const notificationButton = document.querySelector('#notificationButton');
      const notificationModal = document.getElementById('notificationModal');
      const closeNotificationModal = document.getElementById('closeModal');

      if (notificationButton) {
        notificationButton.addEventListener('click', function (event) {
          event.stopPropagation();
          notificationModal.classList.remove('hidden');
          setTimeout(() => {
            notificationModal.classList.remove('opacity-0');
            notificationModal.querySelector('.transform').classList.remove('scale-95');
          }, 10);
        });
      }

      if (closeNotificationModal) {
        closeNotificationModal.addEventListener('click', function () {
          notificationModal.classList.add('opacity-0');
          notificationModal.querySelector('.transform').classList.add('scale-95');
          setTimeout(() => {
            notificationModal.classList.add('hidden');
          }, 300);
        });
      }

      document.addEventListener('click', function (event) {
        if (notificationModal && !notificationModal.classList.contains('hidden') && !notificationModal.contains(event.target) && event.target !== notificationButton) {
          notificationModal.classList.add('opacity-0');
          notificationModal.querySelector('.transform').classList.add('scale-95');
          setTimeout(() => {
            notificationModal.classList.add('hidden');
          }, 300);
        }
      });

      // --- Request Revision Modal ---
      const requestRevisionButtons = document.querySelectorAll('.request-revision-btn');
      const revisionModal = document.getElementById('requestRevisionModal');
      const closeRevisionButton = document.getElementById('closeRevisionModal');
      const cancelRevisionButton = document.getElementById('cancelRevisionModal');

      const openRevisionModal = () => {
        revisionModal.classList.remove('hidden');
        revisionModal.classList.add('flex');
        setTimeout(() => {
          revisionModal.classList.remove('opacity-0');
          revisionModal.querySelector('.transform').classList.remove('scale-95');
        }, 10);
      };

      const closeRevisionModal = () => {
        revisionModal.classList.add('opacity-0');
        revisionModal.querySelector('.transform').classList.add('scale-95');
        setTimeout(() => {
          revisionModal.classList.add('hidden');
          revisionModal.classList.remove('flex');
        }, 300);
      };

      requestRevisionButtons.forEach(button => {
        button.addEventListener('click', openRevisionModal);
      });

      if (closeRevisionButton) closeRevisionButton.addEventListener('click', closeRevisionModal);
      if (cancelRevisionButton) cancelRevisionButton.addEventListener('click', closeRevisionModal);


    });
  </script>
@endsection
