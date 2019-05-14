@extends('layouts.app')

@section('title', $role->name)

@section('content')
<div class="container">
    <h1 class="text-light page-header">{{ $role->name }}</h1>
    <form method="post" action="{{route('admin.roles.update', $role->id)}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">اسلاگ</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{$role->slug}}" required>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="ذخیره">
        <a class="btn btn-default" href="{{route('admin.roles.index')}}">بازگشت</a>
    </form>
</div>
@endsection
