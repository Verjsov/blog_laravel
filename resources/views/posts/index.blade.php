<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts of blog') }} - {{ $blog->name }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('create.post',['blog'=>$blog->id]) }}">{{ __('Add new Post !') }}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc">
                        @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <li>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post->title}}</a>
                            <a href="{{ route('posts.delete', ['id' => $post->id]) }}"> Delete</a>
                        </li>
                    @endforeach
                        @else
                            <li>
                                Нет новых постов, создайте новые с помощью по кнопке "Add new Post!"
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
