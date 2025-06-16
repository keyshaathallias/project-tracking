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
      <a href="/projects"
        class="hover:text-dusty-blue transition duration-200 ease-in-out text-sm font-semibold">Projects</a>
      <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
          class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
      </span>
      <span class="text-primary text-sm font-semibold">Project Detail</span>
    </nav>
  </div>

  {{-- Detail Project --}}
  <div class="bg-white px-6 md:px-10 py-8 rounded-lg shadow -mx-6 md:mx-0">
    {{-- Project Title --}}
    <h1 class="font-semibold text-2xl mb-6">Website Company</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-y-4 gap-x-6 text-sm">
      <div class="text-primary font-medium">Status</div>
      <div class="md:col-span-3">In Progress</div>

      <div class="text-primary font-medium">Due Date</div>
      <div class="md:col-span-3">May 10, 2025</div>

      <div class="text-primary font-medium">Service</div>
      <div class="md:col-span-3">Website Development</div>

      <div class="text-primary font-medium">Description</div>
      <div class="md:col-span-3 text-justify leading-relaxed">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam laudantium veritatis id cum laboriosam beatae
        dolores quaerat ipsam illo, ratione corporis maiores consequatur quae aspernatur similique nam quam inventore
        blanditiis libero, commodi, labore impedit eligendi nesciunt! Ex aliquam laboriosam, voluptate distinctio
        ratione, officia quam quia ullam in, at necessitatibus enim.
      </div>
    </div>


    <div class="border border-light-blue my-6"></div>

    {{-- Progress & Revision Section --}}
    <div class="flex flex-col md:flex-row md:gap-y-0 md:gap-x-10">
      {{-- Progress History --}}
      <div class="w-full md:w-1/2 space-y-4">
        <h5 class="font-semibold text-base mb-3">Progress History</h5>
        {{-- Progress Steps --}}
        <div class="space-y-5">
          {{-- Step 1 --}}
          <div class="flex items-start gap-4">
            <div
              class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
              1
            </div>
            <div class="flex-1 space-y-2">
              <a href="/detail-project" class="flex justify-between items-center">
                <h3 class="font-semibold">Wireframe</h3>
                <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
              </a>
              <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet...</p>
              <div class="text-sm text-primary">
                <span class="font-medium">See Progress:</span>
                <div class="space-y-1">
                  <p>📂 file_name</p>
                  <p>🔗 link</p>
                </div>
              </div>
              <div class="flex flex-wrap gap-2 mt-2">
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

          {{-- Step 2 --}}
          <div class="flex items-start gap-4">
            <div
              class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
              2
            </div>
            <div class="flex-1 space-y-2">
              <div class="flex justify-between items-center">
                <h3 class="font-semibold">UI Design</h3>
                <p class="text-primary text-sm hidden md:block">May 1, 2025 - May 3, 2025</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="border border-light-blue my-6 block md:hidden"></div>

      {{-- Revision History --}}
      <div class="w-full md:w-1/2 space-y-4">
        <h5 class="font-semibold text-base mb-3">Revision History</h5>
        <div class="border border-primary rounded-xl bg-light p-4 w-full text-sm space-y-3">
          <h3 class="font-semibold text-base">Revision Title</h3>
          <div class="grid grid-cols-3 gap-y-2 text-sm">
            <p class="text-primary col-span-1">Priority</p>
            <p class="col-span-2">High</p>

            <p class="text-primary col-span-1">Description</p>
            <p class="col-span-2">Lorem ipsum dolor sit amet...</p>

            <p class="text-primary col-span-1">Attachment</p>
            <div class="col-span-2 space-y-1">
              <p>📂 file_name</p>
              <p>🔗 link</p>
            </div>

            <p class="text-primary col-span-1">Status</p>
            <p class="col-span-2">On progress</p>
          </div>
          <div class="pt-2">
            <button
              id="seeDetailButton"
              class="flex items-center gap-2 border border-primary text-primary px-4 py-1.5 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="w-4 h-4">
                <path
                  d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
              </svg>
              See Detail
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- See Detail Modal -->
  <div id="seeDetailModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition-opacity duration-300 opacity-0">
    <div class="bg-white rounded-xl p-8 w-full max-w-2xl transform transition-transform duration-300 scale-95 shadow-lg">
      <!-- Modal Header -->
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-dark-blue">Revision Title</h2>
        <button id="closeDetailModal" class="text-gray-500 hover:text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-4 text-dark-blue">
        <p class="text-primary md:col-span-1">Priority</p>
        <p class="md:col-span-2 font-semibold">High</p>

        <p class="text-primary md:col-span-1">Description</p>
        <p class="md:col-span-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <p class="text-primary md:col-span-1">Attachment</p>
        <div class="md:col-span-2 space-y-2">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
            </svg>
            <span>file_name</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg text-gray-400" viewBox="0 0 16 16">
                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
              </svg>
            <span>link</span>
          </div>
        </div>

        <p class="text-primary md:col-span-1">Status</p>
        <p class="md:col-span-2">On Progress</p>
      </div>
    </div>
  </div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const seeDetailButton = document.getElementById('seeDetailButton');
    const seeDetailModal = document.getElementById('seeDetailModal');
    const closeDetailModal = document.getElementById('closeDetailModal');

    const openModal = () => {
      seeDetailModal.classList.remove('hidden');
      seeDetailModal.classList.add('flex');
      setTimeout(() => {
        seeDetailModal.classList.remove('opacity-0');
        seeDetailModal.querySelector('.transform').classList.remove('scale-95');
      }, 10);
    };

    const closeModal = () => {
      seeDetailModal.classList.add('opacity-0');
      seeDetailModal.querySelector('.transform').classList.add('scale-95');
      setTimeout(() => {
        seeDetailModal.classList.add('hidden');
        seeDetailModal.classList.remove('flex');
      }, 300);
    };

    if (seeDetailButton) {
      seeDetailButton.addEventListener('click', openModal);
    }

    if (closeDetailModal) {
      closeDetailModal.addEventListener('click', closeModal);
    }

    if (seeDetailModal) {
      seeDetailModal.addEventListener('click', function (event) {
        if (event.target === seeDetailModal) {
          closeModal();
        }
      });
    }

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && !seeDetailModal.classList.contains('hidden')) {
        closeModal();
      }
    });
  });
</script>

@endsection
