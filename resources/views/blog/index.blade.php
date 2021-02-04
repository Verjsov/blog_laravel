<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="link" href="/create/blog">
            {{ __('Create New Blog') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc">
                        @if($blogs->count() > 0)
                    @foreach($blogs as $blog)
                        <li>
                            <a href="{{route('blog_posts.list', ['blog' => $blog->id])}}">{{$blog->name}}</a>
                            <a href="{{route('blog.del', ['id' => $blog->id])}}">Delete</a>
                        </li>
                    @endforeach
                        @else
                            <li>
                                Нет новых блогов, создайте новый с помощью по кнопке "Create New Blog"
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
