@extends('layouts.layout')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow rounded-lg p-8 mt-8">
    <h2 class="text-xl font-bold mb-6 text-primary">Tambah Project</h2>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label for="project_name" class="block font-medium text-gray-700">Nama Project</label>
            <input type="text" name="project_name" id="project_name" value="{{ old('project_name') }}" required class="mt-1 block w-full rounded border-gray-300 focus:border-primary focus:ring focus:ring-primary/50">
            @error('project_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="project_description" class="block font-medium text-gray-700">Deskripsi Project</label>
            <textarea name="project_description" id="project_description" rows="4" required class="mt-1 block w-full rounded border-gray-300 focus:border-primary focus:ring focus:ring-primary/50">{{ old('project_description') }}</textarea>
            @error('project_description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="service" class="block font-medium text-gray-700">Service</label>
            <input type="text" name="service" id="service" value="{{ old('service') }}" required class="mt-1 block w-full rounded border-gray-300 focus:border-primary focus:ring focus:ring-primary/50">
            @error('service')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="phone_number" class="block font-medium text-gray-700">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required class="mt-1 block w-full rounded border-gray-300 focus:border-primary focus:ring focus:ring-primary/50">
            @error('phone_number')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="due_date" class="block font-medium text-gray-700">Due Date</label>
            <input type="date" name="due_date" id="due_date" value="{{ old('due_date') }}" required class="mt-1 block w-full rounded border-gray-300 focus:border-primary focus:ring focus:ring-primary/50">
            @error('due_date')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="attachment" class="block font-medium text-gray-700">Attachment (optional)</label>
            <input type="file" name="attachment" id="attachment" class="mt-1 block w-full">
            @error('attachment')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('projects.index') }}" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 text-gray-700">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-primary text-white hover:bg-blue-700">Simpan</button>
        </div>
    </form>
</div>
@endsection
