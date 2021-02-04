<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Add new Blog</h1>
                    <form action="/create/blog" method="post">
                        @csrf

                        <div class="flex flex-col mb-4">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Name Blog</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="text" name="name_blog">
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button class="block bg-teal hover:bg-teal-dark uppercase text-lg mx-auto p-4 rounded" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
