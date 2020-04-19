@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 p-5">

                <img src="{{ $user->profile->profileImage()}}" class="rounded-circle mx-auto d-block mh-100"  style="width: 150px; height: 150px;">

        </div>
        <div class="col-sm-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h4 pr-4">{{$user->username}}</div>


                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}" ></follow-button>
                </div>


                @can('update', $user->profile)
                    <a href="/p/create" style="color:black;">Create Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id}}/edit" style="color:black;">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><stong>{{ $postCount }}</stong>posts</div>
                <div class="pr-5"><stong>{{ $followers }}</stong>followers</div>
                <div class="pr-5"><stong>{{ $following }}</stong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#" style="color:black;">{{$user->profile->url ?? 'N?A'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>

            </div>
        @endforeach
    </div>

</div>
@endsection
