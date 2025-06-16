@extends('layouts.layout')

@section('content')
  <h2 class="flex gap-3 items-center text-base md:text-lg font-semibold text-dark">
    <svg class="size-4 md:size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <defs>
        <linearGradient id="projectIconGradient" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#4598F2" />
          <stop offset="100%" stop-color="#1A76D8" />
        </linearGradient>
      </defs>
      <path
        d="M448 160l-128 0 0-32 128 0 0 32zM48 64C21.5 64 0 85.5 0 112l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 64zM448 352l0 32-256 0 0-32 256 0zM48 288c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 288z"
        fill="url(#projectIconGradient)" />
    </svg>
    Projects List
  </h2>

  {{-- Categories --}}
  @php
    $statuses = $projects->pluck('project_status')->unique()->filter()->values();
    $currentStatus = request('status');
  @endphp
  <div class="">
    <div class="flex gap-4 my-5 flex-wrap">
      <a href="{{ route('projects.index') }}"
        class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out {{ !$currentStatus ? 'bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white' : 'bg-light text-primary border border-primary hover:bg-light-blue hover:border-light-blue hover:text-primary' }}">
        All
      </a>
      @foreach($statuses as $status)
        <a href="{{ route('projects.index', ['status' => $status]) }}"
          class="px-4 py-2 rounded-full font-medium whitespace-nowrap shadow transition duration-200 ease-in-out {{ $currentStatus == $status ? 'bg-gradient-to-r from-[#4598F2] to-[#1A76D8] text-white' : 'bg-light text-primary border border-primary hover:bg-light-blue hover:border-light-blue hover:text-primary' }}">
          {{ $status }}
        </a>
      @endforeach
    </div>
  </div>


  {{-- Project cards --}}
  <div class="flex flex-wrap justify-left items-center gap-8">
    @forelse($projects as $project)
      <div class="border border-primary rounded-xl bg-light p-4 space-y-4 w-full max-w-md">
        <a href="{{ route('projects.show', $project->id) }}" class="flex items-center justify-between gap-5">
          <h2 class="text-lg font-semibold">{{ $project->project_name }}</h2>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>
        </a>

        <div class="border border-light-blue"></div>

        <div class="space-y-4">
          <!-- Step 1 (default) -->
          <div class="space-y-3">
            <div class="flex items-start gap-4">
              <div
                class="bg-gradient-to-r from-[#4598F2] to-[#1A76D8] w-8 h-8 flex items-center justify-center text-white font-bold rounded-full">
                1
              </div>

              <div class="flex-1 space-y-1">
                <div class="flex justify-between items-center">
                  <h3 class="font-semibold">Wireframe</h3>
                  <p class="text-primary text-sm hidden md:block">{{ $project->due_date }}</p>
                </div>
                <p class="text-sm text-gray-700 leading-snug">
                  {{ Str::limit($project->project_description, 100) }}
                </p>
                <div class="text-sm text-primary">
                  <span class="font-medium">Service:</span> {{ $project->service }}
                </div>
                <div class="text-sm text-primary">
                  <span class="font-medium">Status:</span> {{ $project->project_status }}
                </div>
                @if($project->attachment)
                  <div class="text-sm text-primary">
                    <span class="font-medium">Attachment:</span>
                    <a href="{{ asset('storage/'.$project->attachment) }}" class="underline" target="_blank">{{ basename($project->attachment) }}</a>
                  </div>
                @endif
                <div class="flex gap-2 mt-2">
                  <button class="border border-primary text-primary px-3 py-1 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition">
                    Request Revision
                  </button>
                  <button class="bg-green text-white px-3 py-1 rounded-full text-sm font-medium hover:bg-green-600 transition">
                    Accept
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="w-full text-center text-gray-500 py-8">Tidak ada project.</div>
    @endforelse
  </div>
@endsection
