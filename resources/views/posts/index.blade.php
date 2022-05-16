@extends('layouts.layout', ['title' => 'Главная страница'])
@section('content')


    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Результаты поиска по запросу "<?=$_GET['search']?>"</h2>
            <p class="lead">Всего найдено постов: {{ count($posts) }} </p>
        @else
            <h2>По запросу "<?= htmlspecialchars($_GET['search']) ?>" постов не найдено</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $post->short_title }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="card-img"
                             style="background-image: url({{ $post->img ?? asset('img/img.png') }})"></div>
                        <div class="card-author">
                            Автор: {{ $post->name }}
                        </div>
                        <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Посмотреть
                            пост</a>
                    </div>
                </div>
            </div>
        @endforeach

        @if(!isset($_GET['search']))
            {{ $posts->links() }}
        @endif
    </div>

@endsection
