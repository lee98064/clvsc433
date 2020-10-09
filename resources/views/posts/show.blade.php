@section('title', $post->title)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}<br>
            <span class="text-muted text-sm"><i class="fas fa-user fa-fw"></i>{{ $post->user->name }}</span><br>
            <span class="text-muted text-sm"><i class="far fa-clock fa-fw"></i>{{ $post->created_at }}</span>
        </h2>
    </x-slot>

    <div class="container" style="padding-top: 20px">
        <div class="card shadow" style="min-height: 60vh">
            <div class="card-body" style="padding: 20px">
                {!! $post->content !!}
            </div>
            <div class="card-footer">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ route('root')}}">返回</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('posts.edit', $post) }}">編輯</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('posts.destroy', $post) }}" method="post" onsubmit="return confirm('確定刪除嗎?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="nav-link">刪除</button>
                        </form>
                    </li>
                  </ul>
            </div>
          </div>
    </div>
</x-app-layout>
