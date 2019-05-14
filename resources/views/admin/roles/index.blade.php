@extends('layouts.back')

@section('title', 'مدیریت نقش‌ها')

@section('content')
<div class="container rtl">
    <h1 class="sans-light page-header">مدیریت نقش‌ها</h1>
    <form method="post" action="{{route('admin.roles.store')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">اسلاگ</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success float-right">ذخیره</button><br><br>
    </form>
    <hr>
    <table class="table table-hover">
        <thead class="bg-info">
            <tr>
                <th>نام</th>
                <th>اسلاگ</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
        @forelse($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>{{ $role->slug }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{route('admin.roles.edit', $role->id)}}">ویرایش</a>
                <a class="btn btn-sm btn-danger btn-delete" href="{{route('admin.roles.delete', $role->id)}}">حذف</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-info">موردی جهت نمایش وجود ندارد.</td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
