<x-public-layout>

    <!-- =========================================================
         HERO SECTION
    ========================================================== -->
    <section class="relative isolate overflow-hidden bg-white">

        <!-- Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute left-1/2 top-0 h-[600px] w-[900px] -translate-x-1/2 rounded-full bg-indigo-100/60 blur-3xl"></div>
            <div class="absolute -left-40 top-40 h-72 w-72 rounded-full bg-violet-100/70 blur-3xl"></div>
            <div class="absolute -right-40 bottom-0 h-80 w-80 rounded-full bg-blue-100/60 blur-3xl"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid min-h-[680px] items-center gap-16 py-20 lg:grid-cols-2 lg:py-24">

                <!-- Hero Content -->
                <div>

                    <!-- Badge -->
                    <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-indigo-100 bg-white/80 px-4 py-2 text-sm font-medium text-indigo-700 shadow-sm backdrop-blur">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-indigo-600 text-[10px] text-white">
                            ✦
                        </span>

                        A modern place for meaningful ideas
                    </div>

                    <!-- Heading -->
                    <h1 class="max-w-3xl text-5xl font-black leading-[1.02] tracking-[-0.04em] text-gray-950 sm:text-6xl lg:text-7xl">

                        Ideas deserve
                        <span class="relative whitespace-nowrap text-indigo-600">
                            to be heard.
                        </span>

                    </h1>

                    <!-- Description -->
                    <p class="mt-7 max-w-xl text-lg leading-8 text-gray-600 sm:text-xl">
                        Write what you know. Share what you believe.
                        Discover stories that make you think, learn and see
                        the world from a different perspective.
                    </p>

                    <!-- Buttons -->
                    <div class="mt-9 flex flex-wrap gap-4">

                        <a href="{{ route('blogs.all') }}"
                           class="group inline-flex items-center gap-3 rounded-xl bg-gray-950 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-gray-200 transition duration-300 hover:-translate-y-1 hover:bg-indigo-600">

                            Explore Stories

                            <span class="transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                        @auth
                            <a href="{{ route('blogs.my') }}"
                               class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-6 py-3.5 text-sm font-bold text-gray-800 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:text-indigo-600">
                                Start Writing
                                <span>✎</span>
                            </a>
                        @else
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-6 py-3.5 text-sm font-bold text-gray-800 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:text-indigo-600">
                                Start Writing
                                <span>✎</span>
                            </a>
                        @endauth

                    </div>

                    <!-- Small Stats -->
                    <div class="mt-10 flex flex-wrap items-center gap-7 text-sm">

                        <div>
                            <p class="text-2xl font-black text-gray-950">100%</p>
                            <p class="mt-1 text-gray-500">Free to write</p>
                        </div>

                        <div class="h-10 w-px bg-gray-200"></div>

                        <div>
                            <p class="text-2xl font-black text-gray-950">∞</p>
                            <p class="mt-1 text-gray-500">Ideas to explore</p>
                        </div>

                        <div class="h-10 w-px bg-gray-200"></div>

                        <div>
                            <p class="text-2xl font-black text-gray-950">✦</p>
                            <p class="mt-1 text-gray-500">Your voice matters</p>
                        </div>

                    </div>

                </div>


                <!-- Hero Visual -->
                <div class="relative mx-auto w-full max-w-xl lg:ml-auto">

                    <!-- Glow -->
                    <div class="absolute inset-10 rounded-full bg-indigo-200/50 blur-3xl"></div>

                    <!-- Main Card -->
                    <div class="relative rotate-1 rounded-[2rem] border border-gray-200 bg-white p-3 shadow-[0_30px_80px_-25px_rgba(0,0,0,0.25)] transition duration-500 hover:rotate-0">

                        <!-- Browser top -->
                        <div class="flex items-center gap-2 rounded-t-[1.5rem] bg-gray-950 px-5 py-4">

                            <span class="h-3 w-3 rounded-full bg-red-400"></span>
                            <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                            <span class="h-3 w-3 rounded-full bg-green-400"></span>

                            <div class="ml-4 flex-1 rounded-lg bg-white/10 px-4 py-2 text-xs text-gray-400">
                                blogify.com
                            </div>

                        </div>

                        <!-- Article -->
                        <div class="p-7 sm:p-9">

                            <div class="flex items-center justify-between">

                                <span class="rounded-full bg-indigo-50 px-3 py-1.5 text-xs font-bold text-indigo-600">
                                    FEATURED STORY
                                </span>

                                <span class="text-xs text-gray-400">
                                    5 min read
                                </span>

                            </div>

                            <h3 class="mt-7 text-3xl font-black leading-tight tracking-tight text-gray-950">
                                The power of
                                <span class="text-indigo-600">sharing ideas.</span>
                            </h3>

                            <p class="mt-5 text-sm leading-7 text-gray-500">
                                Every meaningful change starts with an idea.
                                Sometimes all it needs is a place to be heard.
                            </p>

                            <!-- Fake lines -->
                            <div class="mt-7 space-y-2.5">
                                <div class="h-2.5 w-full rounded-full bg-gray-100"></div>
                                <div class="h-2.5 w-[92%] rounded-full bg-gray-100"></div>
                                <div class="h-2.5 w-[75%] rounded-full bg-gray-100"></div>
                            </div>

                            <!-- Author -->
                            <div class="mt-8 flex items-center justify-between border-t border-gray-100 pt-6">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-violet-500 font-bold text-white">
                                        B
                                    </div>

                                    <div>
                                        <p class="text-sm font-bold text-gray-900">
                                            Blogify Writer
                                        </p>

                                        <p class="text-xs text-gray-400">
                                            Community author
                                        </p>
                                    </div>

                                </div>

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-50 text-gray-400">
                                    ↗
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Floating card 1 -->
                    <div class="absolute -left-5 top-24 hidden rounded-2xl border border-gray-200 bg-white p-4 shadow-xl sm:block">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl">
                                ✍️
                            </div>

                            <div>
                                <p class="text-xs text-gray-400">
                                    New story
                                </p>

                                <p class="text-sm font-bold text-gray-900">
                                    Just published
                                </p>
                            </div>

                        </div>

                    </div>


                    <!-- Floating card 2 -->
                    <div class="absolute -bottom-7 -right-5 hidden rounded-2xl border border-gray-200 bg-white p-4 shadow-xl sm:block">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-xl">
                                ✦
                            </div>

                            <div>
                                <p class="text-xs text-gray-400">
                                    Community
                                </p>

                                <p class="text-sm font-bold text-gray-900">
                                    Ideas are growing
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================
         LATEST STORIES
    ========================================================== -->
    <section class="bg-gray-50 py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <!-- Section Header -->
            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <div class="flex items-center gap-2 text-sm font-bold uppercase tracking-[0.15em] text-indigo-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-600"></span>
                        Community stories
                    </div>

                    <h2 class="mt-3 text-4xl font-black tracking-tight text-gray-950 sm:text-5xl">
                        Fresh ideas,
                        <span class="text-indigo-600">just for you.</span>
                    </h2>

                    <p class="mt-4 max-w-xl text-gray-500">
                        Explore the latest thoughts, experiences and
                        perspectives shared by our community.
                    </p>

                </div>

                <a href="{{ route('blogs.all') }}"
                   class="group inline-flex items-center gap-2 text-sm font-bold text-gray-900 transition hover:text-indigo-600">

                    View all stories

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>

                </a>

            </div>


            @if(isset($posts) && $posts->count() > 0)

                @php
                    $latestPosts = $posts->take(6);
                    $featuredPost = $latestPosts->first();
                    $remainingPosts = $latestPosts->skip(1);
                @endphp


                <!-- Featured Story -->
                @if($featuredPost)

                    <div class="mt-12 overflow-hidden rounded-[2rem] border border-gray-200 bg-white shadow-sm transition duration-500 hover:shadow-2xl">

                        <div class="grid lg:grid-cols-5">

                            <!-- Left -->
                            <div class="relative overflow-hidden bg-gray-950 p-8 sm:p-10 lg:col-span-2 lg:p-12">

                                <div class="absolute -right-20 -top-20 h-60 w-60 rounded-full bg-indigo-600/30 blur-3xl"></div>
                                <div class="absolute -bottom-20 -left-20 h-60 w-60 rounded-full bg-violet-600/20 blur-3xl"></div>

                                <div class="relative">

                                    <span class="inline-flex rounded-full border border-white/10 bg-white/10 px-3 py-1.5 text-xs font-bold text-indigo-300">
                                        LATEST STORY
                                    </span>

                                    <div class="mt-24">

                                        <p class="text-sm text-gray-400">
                                            {{ $featuredPost->created_at->diffForHumans() }}
                                        </p>

                                        <h3 class="mt-4 text-3xl font-black leading-tight text-white sm:text-4xl">
                                            {{ $featuredPost->title }}
                                        </h3>

                                    </div>

                                </div>

                            </div>


                            <!-- Right -->
                            <div class="flex flex-col justify-between p-8 sm:p-10 lg:col-span-3 lg:p-12">

                                <div>

                                    <div class="flex items-center justify-between">

                                        <span class="rounded-full bg-indigo-50 px-3 py-1.5 text-xs font-bold text-indigo-600">
                                            Blog
                                        </span>

                                        <span class="text-xs text-gray-400">
                                            {{ $featuredPost->created_at->format('M d, Y') }}
                                        </span>

                                    </div>

                                    <p class="mt-7 line-clamp-5 text-base leading-8 text-gray-600">
                                        {{ $featuredPost->content }}
                                    </p>

                                </div>


                                <div class="mt-10 flex items-center justify-between border-t border-gray-100 pt-6">

                                    <div>

                                        <p class="text-xs text-gray-400">
                                            Written by
                                        </p>

                                        <p class="mt-1 font-bold text-gray-900">
                                            {{ $featuredPost->user->name ?? 'Anonymous' }}
                                        </p>

                                    </div>

                                    <a href="{{ route('blogs.all') }}"
                                       class="group inline-flex items-center gap-2 rounded-xl bg-gray-950 px-5 py-3 text-sm font-bold text-white transition hover:bg-indigo-600">

                                        Read story

                                        <span class="transition-transform group-hover:translate-x-1">
                                            →
                                        </span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                @endif


                <!-- Other Stories -->
                @if($remainingPosts->count() > 0)

                    <div class="mt-7 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                        @foreach($remainingPosts as $post)

                            <article class="group rounded-2xl border border-gray-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-indigo-100 hover:shadow-xl">

                                <div class="flex items-center justify-between">

                                    <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-bold text-gray-600">
                                        Blog
                                    </span>

                                    <span class="text-xs text-gray-400">
                                        {{ $post->created_at->diffForHumans() }}
                                    </span>

                                </div>


                                <h3 class="mt-6 line-clamp-2 text-xl font-black leading-7 text-gray-950 transition group-hover:text-indigo-600">
                                    {{ $post->title }}
                                </h3>


                                <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-500">
                                    {{ $post->content }}
                                </p>


                                <div class="mt-7 flex items-center justify-between border-t border-gray-100 pt-5">

                                    <div>

                                        <p class="text-[11px] uppercase tracking-wider text-gray-400">
                                            Author
                                        </p>

                                        <p class="mt-1 text-sm font-bold text-gray-800">
                                            {{ $post->user->name ?? 'Anonymous' }}
                                        </p>

                                    </div>

                                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gray-50 text-sm text-gray-400 transition group-hover:bg-indigo-50 group-hover:text-indigo-600">
                                        →
                                    </span>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @endif

            @else

                <!-- Empty State -->
                <div class="mt-12 rounded-[2rem] border border-dashed border-gray-300 bg-white px-6 py-20 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-indigo-50 text-2xl">
                        ✍️
                    </div>

                    <h3 class="mt-6 text-2xl font-black text-gray-950">
                        Nothing here yet.
                    </h3>

                    <p class="mx-auto mt-3 max-w-md text-gray-500">
                        Be the first person to share an idea with the community.
                    </p>

                    @guest

                        <a href="{{ route('register') }}"
                           class="mt-7 inline-flex rounded-xl bg-gray-950 px-6 py-3 text-sm font-bold text-white transition hover:bg-indigo-600">
                            Create Your Account →
                        </a>

                    @else

                        <a href="{{ route('blogs.my') }}"
                           class="mt-7 inline-flex rounded-xl bg-gray-950 px-6 py-3 text-sm font-bold text-white transition hover:bg-indigo-600">
                            Write First Story →
                        </a>

                    @endguest

                </div>

            @endif

        </div>

    </section>


    <!-- =========================================================
         WHY BLOGIFY
    ========================================================== -->
    <section class="bg-white py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid gap-16 lg:grid-cols-3">

                <!-- Intro -->
                <div>

                    <div class="text-sm font-bold uppercase tracking-[0.15em] text-indigo-600">
                        Why Blogify?
                    </div>

                    <h2 class="mt-4 text-4xl font-black leading-tight tracking-tight text-gray-950">
                        A home for
                        <span class="text-indigo-600">your ideas.</span>
                    </h2>

                    <p class="mt-5 leading-7 text-gray-500">
                        Blogging should be simple. Write your thoughts,
                        publish them and let people discover your perspective.
                    </p>

                </div>


                <!-- Feature 1 -->
                <div class="group">

                    <div class="flex items-start gap-5">

                        <div class="text-4xl font-black text-gray-200 transition group-hover:text-indigo-200">
                            01
                        </div>

                        <div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-xl">
                                ✍️
                            </div>

                            <h3 class="mt-6 text-xl font-black text-gray-950">
                                Write without limits
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-gray-500">
                                Turn your experiences, knowledge and
                                imagination into stories worth reading.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Feature 2 -->
                <div class="group">

                    <div class="flex items-start gap-5">

                        <div class="text-4xl font-black text-gray-200 transition group-hover:text-indigo-200">
                            02
                        </div>

                        <div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-xl">
                                🌍
                            </div>

                            <h3 class="mt-6 text-xl font-black text-gray-950">
                                Discover perspectives
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-gray-500">
                                Read different viewpoints, discover new
                                ideas and learn from other writers.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         BIG CTA
    ========================================================== -->
    <section class="relative overflow-hidden bg-gray-950">

        <div class="absolute inset-0">

            <div class="absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-indigo-600/20 blur-3xl"></div>

            <div class="absolute -right-20 top-0 h-72 w-72 rounded-full bg-violet-600/10 blur-3xl"></div>

        </div>


        <div class="relative mx-auto max-w-5xl px-6 py-24 text-center sm:py-28">

            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-2xl text-white">
                ✦
            </div>

            <p class="mt-7 text-sm font-bold uppercase tracking-[0.2em] text-indigo-400">
                Your voice matters
            </p>

            <h2 class="mx-auto mt-4 max-w-3xl text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">
                Your next idea could inspire someone.
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-400">
                Don't keep your best ideas in your head.
                Put them into words and share them with the world.
            </p>


            @guest

                <a href="{{ route('register') }}"
                   class="group mt-9 inline-flex items-center gap-3 rounded-xl bg-white px-7 py-4 text-sm font-black text-gray-950 shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-indigo-500 hover:text-white">

                    Create Your Account

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>

                </a>

            @else

                <a href="{{ route('blogs.my') }}"
                   class="group mt-9 inline-flex items-center gap-3 rounded-xl bg-white px-7 py-4 text-sm font-black text-gray-950 shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-indigo-500 hover:text-white">

                    Write Your Story

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>

                </a>

            @endguest

        </div>

    </section>


    <!-- =========================================================
         FOOTER
    ========================================================== -->
    <footer class="bg-gray-950 border-t border-gray-800">

        <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <div class="text-xl font-black text-white">
                        Blog<span class="text-indigo-400">ify</span>
                    </div>

                    <p class="mt-2 text-sm text-gray-500">
                        A place where ideas become stories.
                    </p>

                </div>


                <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">

                    <a href="{{ route('home') }}"
                       class="transition hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('blogs.all') }}"
                       class="transition hover:text-white">
                        All Blogs
                    </a>

                    <a href="{{ route('external.blogs') }}"
                       class="transition hover:text-white">
                        External Blogs
                    </a>

                    @guest
                        <a href="{{ route('login') }}"
                           class="transition hover:text-white">
                            Login
                        </a>
                    @endguest

                </div>

            </div>


            <div class="mt-8 border-t border-gray-800 pt-6">

                <p class="text-xs text-gray-600">
                    © {{ date('Y') }} Blogify. Built with Laravel.
                </p>

            </div>

        </div>

    </footer>

</x-public-layout>