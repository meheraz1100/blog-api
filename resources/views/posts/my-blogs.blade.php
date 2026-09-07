<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Personal Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Alert Message for Success -->
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Create New Blog Form -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Create New Blog Post</h3>

                <form action="{{ route('blogs.store') }}" method="POST">
                    @csrf
                    
                    <!-- Title Input -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Blog Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('title') border-red-500 @enderror" 
                            placeholder="Enter title..." required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content Input -->
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Blog Content</label>
                        <textarea name="content" id="content" rows="4" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('content') border-red-500 @enderror" 
                            placeholder="Write your blog content here..." required>{{ old('content') }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 font-medium px-4 py-2 rounded-md shadow-sm text-sm">
                            Publish Blog
                        </button>
                    </div>
                </form>
            </div>

            <!-- List of My Blogs -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Your Published Posts</h3>

                @if(isset($posts) && $posts->count() > 0)
                    <div class="space-y-6">
                        @foreach($posts as $post)
                            <div class="p-4 border rounded-md border-gray-100 bg-gray-50 flex justify-between items-start gap-4">
                                <div class="space-y-2">
                                    <h4 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h4>
                                    <p class="text-gray-600 whitespace-pre-line text-sm">{{ $post->content }}</p>
                                    <span class="text-xs text-gray-400 block pt-1">
                                        Published on {{ $post->created_at->format('M d, Y - h:i A') }} ({{ $post->created_at->diffForHumans() }})
                                    </span>
                                </div>

                                <!-- Delete Button -->
                                <div>
                                    <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-xl     px-3 py-1.5 rounded transition">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-6 text-gray-500">
                        আপনি এখনো কোনো ব্লগ পোস্ট তৈরি করেননি। উপরের ফর্ম ব্যবহার করে আপনার প্রথম পোস্ট তৈরি করুন!
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-public-layout>