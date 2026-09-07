<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('External API Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">External API Blogs</h1>

            <div id="externalPostsList" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <p class="text-center text-gray-500 col-span-2">Loading posts from JSONPlaceholder API...</p>
            </div>
        </div>
    </div>

    <script>
        async function fetchExternalPosts() {
            try {
                const response = await fetch('https://jsonplaceholder.typicode.com/posts');
                const posts = await response.json();
                
                const container = document.getElementById('externalPostsList');
                container.innerHTML = '';

                // প্রথম ১০টি পোস্ট দেখাচ্ছে
                posts.slice(0, 10).forEach(post => {
                    container.innerHTML += `
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                            <span class="text-xs bg-blue-100 text-blue-800 font-semibold px-2.5 py-0.5 rounded">ID: ${post.id}</span>
                            <h2 class="text-xl font-bold text-gray-800 mt-2 capitalize">${post.title}</h2>
                            <p class="text-gray-600 mt-2">${post.body}</p>
                        </div>
                    `;
                });
            } catch (error) {
                console.error('Error fetching external posts:', error);
            }
        }

        fetchExternalPosts();
    </script>
</x-public-layout>