@extends('layouts.back')
@section('title','ثبت یک کاربر جدید')
@section('content')
<div class="container rtl">
    <form action="{{ route('admin.users.update',[$user->id]) }}" method="POST">
    @csrf
    <h1 class="sans-light">ثبت یک کاربر جدید</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">نام</label>
                <input type="text" name="name" class="form-control" required value="{{ $user->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">ایمیل</label>
                <input type="email" name="email" class="form-control" required  value="{{ $user->email }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">پسورد</label>
                <input type="password" name="password" class="form-control" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="password_confirmation">تکرار پسورد</label>
                <input type="password" name="password_confirmation" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">شماره تلفن</label>
                <input type="number" name="phone" class="form-control" required value="{{ $user->phone }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">نقش کاربر</label>
                <select class="select form-control" name="role">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @foreach ($user->roles as $item)
                        @if ($item->id == $role->id)
                            selected
                        @endif
                    @endforeach >{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 rtl">
            <div class="switch-field">
                <p>کاربر فعال است؟</p>
                <input type="radio" id="switch_left" name="active" value="0" />
                <label for="switch_left">غیر فعال</label>
                <input type="radio" id="switch_right" name="active" value="1" checked />
                <label for="switch_right">فعال</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success ">ذخیره</button>
    <button type="reset" class="btn btn-danger">خالی کردن</button>
    </form>
</div>
@endsection
