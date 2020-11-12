@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name p-2">
                                   <p>{{ str_limit($headline->name, 30) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="gender mx-auto">{{ str_limit($headline->gender, 10) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="hobby mx-auto">{{ str_limit($headline->hobby, 50) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                     {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                     {{ "名前：" . str_limit($post->name, 150) }}
                                </div>
                                <div class="gender">
                                     {{ "性別：" . str_limit($post->gender, 150) }}
                                </div>
                                <div class="hobby">
                                     {{ "趣味：" . str_limit($post->hobby, 150) }}
                                </div>
                                <div class="introduction">
                                     {{ "自己紹介：" . str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                     </div>
                     <hr color="c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection

