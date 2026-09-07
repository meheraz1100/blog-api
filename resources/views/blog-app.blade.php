@extends('layouts.app')

@section('title', 'My Blogs Management')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">My Blog Manager (REST API)</h1>

    <!-- Form for Create / Edit -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h2 id="form-title" class="text-xl font-bold mb-4 text-gray-700">নতুন পোস্ট তৈরি করুন</h2>
        <form id="postForm" onsubmit="handleFormSubmit(event)">
            <input type="hidden" id="postId">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Title</label>
                <input type="text" id="title" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Content</label>
                <textarea id="content" rows="3" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
            </div>
            <div class="flex gap-2">
                <button type="submit" id="submitBtn" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-semibold">Submit Post</button>
                <button type="button" id="cancelBtn" onclick="resetForm()" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 font-semibold hidden">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Post List Container -->
    <h2 class="text-2xl font-bold mb-4 text-gray-800">সকল পোস্ট</h2>
    <div id="postsList" class="grid grid-cols-1 md:grid-cols-2 gap-6"></div>

    <script>
        const API_URL = '/api/posts';

        async function fetchPosts() {
            try {
                const response = await fetch(API_URL, { headers: { 'Accept': 'application/json' } });
                const result = await response.json();
                const container = document.getElementById('postsList');
                container.innerHTML = '';

                if (result.status && result.data.length > 0) {
                    result.data.forEach(post => {
                        container.innerHTML += `
                            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">${post.title}</h3>
                                    <p class="text-gray-600 mt-2">${post.content}</p>
                                </div>
                                <div class="mt-4 flex justify-end gap-2">
                                    <button onclick="editPost(${post.id}, '${post.title.replace(/'/g, "\\'")}', '${post.content.replace(/'/g, "\\'")}')" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm font-semibold">Edit</button>
                                    <button onclick="deletePost(${post.id})" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm font-semibold">Delete</button>
                                </div>
                            </div>
                        `;
                    });
                } else {
                    container.innerHTML = '<p class="text-gray-500 col-span-2 text-center">কোনো পোস্ট পাওয়া যায়নি।</p>';
                }
            } catch (error) {
                console.error('Error fetching posts:', error);
            }
        }

        async function handleFormSubmit(event) {
            event.preventDefault();
            const id = document.getElementById('postId').value;
            const title = document.getElementById('title').value;
            const content = document.getElementById('content').value;
            const isEdit = id !== '';

            try {
                const response = await fetch(isEdit ? `${API_URL}/${id}` : API_URL, {
                    method: isEdit ? 'PUT' : 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify({ title, content })
                });
                const result = await response.json();
                if (response.ok && result.status) {
                    alert(result.message);
                    resetForm();
                    fetchPosts();
                }
            } catch (error) {
                console.error('Error saving post:', error);
            }
        }

        function editPost(id, title, content) {
            document.getElementById('postId').value = id;
            document.getElementById('title').value = title;
            document.getElementById('content').value = content;
            document.getElementById('form-title').innerText = 'পোস্ট এডিট করুন';
            document.getElementById('submitBtn').innerText = 'Update Post';
            document.getElementById('submitBtn').classList.replace('bg-blue-600', 'bg-green-600');
            document.getElementById('cancelBtn').classList.remove('hidden');
        }

        async function deletePost(id) {
            if (!confirm('আপনি কি নিশ্চিত যে এই পোস্টটি মুছে ফেলতে চান?')) return;
            try {
                const response = await fetch(`${API_URL}/${id}`, {
                    method: 'DELETE',
                    headers: { 'Accept': 'application/json' }
                });
                const result = await response.json();
                if (response.ok && result.status) {
                    alert(result.message);
                    fetchPosts();
                }
            } catch (error) {
                console.error('Error deleting post:', error);
            }
        }

        function resetForm() {
            document.getElementById('postForm').reset();
            document.getElementById('postId').value = '';
            document.getElementById('form-title').innerText = 'নতুন পোস্ট তৈরি করুন';
            document.getElementById('submitBtn').innerText = 'Submit Post';
            document.getElementById('submitBtn').classList.replace('bg-green-600', 'bg-blue-600');
            document.getElementById('cancelBtn').classList.add('hidden');
        }

        fetchPosts();
    </script>
@endsection