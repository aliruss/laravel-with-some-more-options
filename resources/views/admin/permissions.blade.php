@extends('layouts.back')

@section('title', 'مدیریت مجوزها')

@section('content')
<div class="container">
    <h1 class="page-header sans-light">مدیریت مجوزها</h1>
    <form method="post" action="{{route('admin.permissions.store')}}">
        {{ csrf_field() }}
        <h2 class="sans-light">سایت</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>مجوز</th>
                    @foreach ($roles as $role)
                    <th>{{ $role->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $perm)
                @if(!starts_with($perm->name, 'app')) @continue @endif
                <tr>
                    <td>{{ $perm->description }} <span class="small text-muted">{{ $perm->name }}</span></td>
                    @foreach ($roles as $role)
                    <td><input type="checkbox" name="{{$perm->id}},{{$role->id}}" @if($role->permissions->contains($perm->id)) checked @endif></td>
                    @endforeach
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($roles) + 1 }}" class="text-info">موردی جهت نمایش وجود ندارد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <h2 class="sans-light">API</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>مجوز</th>
                    @foreach ($roles as $role)
                    <th>{{ $role->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $perm)
                @if(!starts_with($perm->name, 'api')) @continue @endif
                <tr>
                    <td>{{ $perm->description }} <span class="small text-muted">{{ $perm->name }}</span></td>
                    @foreach ($roles as $role)
                    <td><input type="checkbox" name="{{$perm->id}},{{$role->id}}" @if($role->permissions->contains($perm->id)) checked @endif></td>
                    @endforeach
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($roles) + 1 }}" class="text-info">موردی جهت نمایش وجود ندارد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <h2 class="sans-light">پنل مدیریت</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>مجوز</th>
                    @foreach ($roles as $role)
                    <th>{{ $role->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $perm)
                @if(!starts_with($perm->name, 'admin')) @continue @endif
                <tr>
                    <td>{{ $perm->description }} <span class="small text-muted">{{ $perm->name }}</span></td>
                    @foreach ($roles as $role)
                    <td><input type="checkbox" name="{{$perm->id}},{{$role->id}}" @if($role->permissions->contains($perm->id)) checked @endif></td>
                    @endforeach
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($roles) + 1 }}" class="text-info">موردی جهت نمایش وجود ندارد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <h2 class="sans-light">متفرقه</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>مجوز</th>
                    @foreach ($roles as $role)
                    <th>{{ $role->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $perm)
                @if(starts_with($perm->name, 'api') || starts_with($perm->name, 'admin') || starts_with($perm->name, 'app')) @continue @endif
                <tr>
                    <td>{{ $perm->description }} <span class="small text-muted">{{ $perm->name }}</span></td>
                    @foreach ($roles as $role)
                    <td><input type="checkbox" name="{{$perm->id}},{{$role->id}}" @if($role->permissions->contains($perm->id)) checked @endif></td>
                    @endforeach
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($roles) + 1 }}" class="text-info">موردی جهت نمایش وجود ندارد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <input type="submit" class="btn btn-success" value="ذخیره">
    </form>
</div>
@endsection
