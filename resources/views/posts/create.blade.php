@section('title', '新增貼文')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新增貼文') }}
        </h2>
    </x-slot>
    <div class="container" style="padding: 20px">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title"" class="form-label">標題</label>
                <input type="text" value="{{ old('title') }}" class="form-control" id="title" placeholder="請輸入標題" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">內文:</label>
                <textarea class="form-control" id="content" rows="20" name="content">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出</button><br>
            <a href="/posts">取消</a>
        </form>
    </div>
</x-app-layout>
