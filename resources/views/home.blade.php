@extends('layouts.main')

@section('title', 'Home')

@section('content')
<main class="container">
    <section class="hero">
        <div>
            <div class="hero text-center my-5">
                <h1>Welcome to Adam's Blog</h1>
                <p>Find the best tutorials, tips & tricks and more!</p>
            </div>
        </div>
    </section>
    <section>
        <div class="new-post">
            <div class="new-post-header">
                <h1>New Post</h1>
            </div>
            <div class="row">
                @foreach ($datas as $data)
                <div class="col-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x300" alt="image-card">
                        <div class="card-body">
                            <div class="card-head">
                                <h4>{{ $data->title }}</h4>
                            </div>
                            <p class="card-text">{{ $data->excerpt }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
