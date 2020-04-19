@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <a href="/profile/{{ $post->user->id}}">
                    <img src="/storage/{{ $post->image}}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-sm-6 offset-sm-3">
                <!-- <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px;">
                    </div>

                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id}}">
                                <span class="text-dark">{{ $post->user->username}}</span>
                            </a>
                            <a href="#" class="pl-3">FOLLOW ME</a>
                        </div>
                    </div>

                </div>

                <hr> -->

                <p> <span class="font-weight-bold"><a href="/profile/{{ $post->user->id}}"><span class="text-dark p-2">{{ $post->user->username}}</span> </a></span>{{ $post->caption}}</p>
            </div>
        </div>

    @endforeach
</div>

<div class="row-">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links()}}
    </div>
</div>
@endsection
