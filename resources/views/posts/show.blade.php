<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('blog_posts.list',['blog'=>$post->blog_id]) }}">{{ __('Return to Posts') }}</a>
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$post->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $post->content }}
                </div>
                <p>Author: {{ $post->user->name }}</p>
                <p>Create at: {{ (new DateTime($post->create_at))->format('Y m ,d') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
