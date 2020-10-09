@section('title', '資三三班級網頁')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('所有貼文') }}
        </h2>
    </x-slot>
    <div class="posts" style="padding-top: 20px;">
        <div class="container mt-3">
           <div class="row">
                @foreach ($posts as $post)    
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body flex flex-col justify-content-between">
                                <h4 class="card-title mb-2 text-2xl"><a href="{{ route('posts.show', $post) }}" class="card-link">{{ $post->title }}</a></h4>
                                <div class="card-subtitle mb-2 text-muted flex items-center h-12">
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" />
                                    <div class="ml-2">
                                        {{ $post->user->name }}<br>
                                        建立日期: {{ $post->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
           </div>  
           <div class="m-auto">
                {{ $posts->links() }}
            </div> 
        </div>
    </div>
</x-app-layout>