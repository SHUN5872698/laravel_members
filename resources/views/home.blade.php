{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-20" style="margin-left:-10px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="my-3">{{ $user->name }}さん、こんにちは！</p>
                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media flex-wrap w-100 align-items-center">
                                <div class="media-body ml-3"> {{ $post->title }}
                                    <div class="text-muted small"> {{ $post->user->name }}</div>
                                </div>
                                <div class="text-muted small ml-3">
                                    <div>投稿日</div>
                                    <div><strong>{{ $post->created_at->diffForHumans() }}</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>{{ $post->body }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
