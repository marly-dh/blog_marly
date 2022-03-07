<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex w-full justify-between">
                    <div class="mr-5">
                        <a href="/" class="hover:underline font-medium  text-xl">< back</a>

                        <h1 class="font-semibold text-2xl text-gray-800 leading-tight my-3 text-xl my-4">
                            {{ $post->title }}
                        </h1>

                        <p class="mb-4">{{ $post->content }}</p>

                        <span class="text-gray-500">Posted at: {{ $post->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
