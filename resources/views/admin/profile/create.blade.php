<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
content="IE=edge">
        <meta name="viewport" content="width=device-width,
initial-scale=1">

        <title>MyProfile</title>
    </head>
    <body>
      <h1>Myプロフィール作成画面</h1>
      @extends('layouts.profile')
      @section('title', 'プロフィールの新規作成')

      @section('content')
          <div class="container">
              <div class="row">
                  <div class="col-md-8 mx-auto">
                      <h2>Myプロフィール</h2>
                      <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form/data">

                        @if (count($errors) > 0)
                            <ul>
                              @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                              @endforeach
                            </ul>
                        @endif
                        <div class="form-group row">
                            <label class="col-md-2">氏名</label>
                            <div class="col-md-10">
                              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">性別</label>
                            <div class="col-md-10">
                              <select class="form-control" name="gender">
                                <option value="{{ old('select') }}">選択してください</option>
                                <option value="{{ old('men') }}">男</option>
                                <option value="{{ old('women') }}">女</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                              <input type="text" class="form-control" name="name" value="{{ old('hobby') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">自己紹介欄</label>
                            <div class="col-md-10">
                              <textarea class="form-control" name="introduction" rows="20">{{ old('introdaction') }}</textarea>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="保存">
                      </form>
                  </div>
              </div>
          </div>
      @endsection
    </body>
</html>






