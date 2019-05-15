@extends('layouts.back')
@section('title','مدیریت کاربران سیستم')
@section('content')
<div class="container">
    <h1 class="sans-light">مدیریت کاربران سیستم</h1>
    <div class="row rtl mb-3">
        <div class="col-md-12">
            <a href="{{ route('admin.users.new') }}" class="btn btn-success btn-block">ثبت کاربر جدید <span
                    class="fa fa-user-plus"></span></a>
        </div>
    </div>
    <table class="table" id="usertable">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تلفن</th>
                <th>نقش کاربر</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>@forelse ($user->roles as $role)
                    {{ $role->name }}
                    @empty
                    مهمان
                    @endforelse</td>
                <td>
                    <button data="{{ $user->id }}" url="{{ route('admin.users.delete',[$user->id]) }}"
                        class="btn btn-danger btn-sm btn-xs delete"><span class="fa fa-user-times"></span></button>
                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-warning btn-sm btn-xs"><span
                            class="fa fa-user-edit"></span></a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">
                    موردی در سرور یافت نشد
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>
    <div class="new-alert">
        <div class="alert alert-danger alert-dismissible confirm d-none fixed-bottom" role="alert">
            آیا مایل به حذف این کاربر هستید؟
            <br>
            <hr>
            <button type="button" class="close closed" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <button class="btn btn-danger yes" url="">بلی</button>
            <button class="btn btn-info closed">خیر</button>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        // $('.confirm').alert('dispose');
        $('#usertable').DataTable({
            "language": {
                "lengthMenu": "نمایش _MENU_ رکورد در صفحه",
                "zeroRecords": "متاسفانه موردی پیدا نشد",
                "info": "نمایش صفحه _PAGE_ از _PAGES_",
                "infoEmpty": "موردی جهت نمایش وجود ندارد",
                "infoFiltered": " فیلتر از _MAX_ رکورد ",
                "search": "جستجو",
                "next": "بعدی"
            }
        });
        $('#usertable_next a').text('بعدی');
        $('#usertable_previous a').text('قبلی');
        $('.delete').click(function () {
            $data = $(this).attr("data");
            $url = $(this).attr('url');
            $('.confirm').removeClass('d-none');
            $('.closed').click(function () {
                $('.confirm').addClass('d-none');
            });
            $('.yes').click(function () {
                window.open($url);
            });
        });
    });

</script>
@endsection
