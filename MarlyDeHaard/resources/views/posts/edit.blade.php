<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Post - Edit') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                    @method('PUT')
                    @csrf
                    <div>
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" class="block mt-1 w-full mb-5" type="text" name="title" value="{{ $post->title }}"/>
                    </div>
                    <div>
                        <x-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" class=" mb-5 block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" required rows="5">{{ $post->description }}</textarea>
                    </div>
                    <div>
                        <x-label for="content" :value="__('Content')" />
                        <textarea id="content" name="content" class=" mb-5 block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="content" required rows="5">{{ $post->content }}</textarea>
                    </div>

                    <x-button class="mt-10">
                        {{ __('Update') }}
                    </x-button>
                </form>

                <form method="POST" action="{{ route('posts.destroy', $post->id) }}" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <x-button-delete>
                        {{ __('Delete') }}
                    </x-button-delete>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
