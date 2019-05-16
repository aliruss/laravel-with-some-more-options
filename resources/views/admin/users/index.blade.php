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
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <table class="table table-responsive-sm" id="usertable">
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
                            <a href="#delete-popup" url="{{ route('admin.users.delete',[$user->id]) }}"
                                class="btn btn-danger btn-sm btn-xs delete"><span class="fa fa-user-times"></span></a>
                            <a href="{{ route('admin.users.edit',[$user->id]) }}"
                                class="btn btn-warning btn-sm btn-xs"><span class="fa fa-user-edit"></span></a>
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
        </div>

    </div>

    <div class="white-popup mfp-hide" id="delete-popup">آیا مایل به حذف این کاربر هستید؟<br>
        <hr><a href="" class="btn btn-danger btn-sm" id="yes">بلی</a>
        <button class="btn btn-light mr-2 btn-sm" id="pop-close">خیر</button></div>
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
            },
            responsive: true
        });
        $('#usertable_next a').text('بعدی');
        $('#usertable_previous a').text('قبلی');
        $url = '';
        $('.delete').click(function () {
            $url = '';
            $url = $(this).attr('url');
            $('#yes').attr('href',$url);
        }).magnificPopup({
            items: {
                src: '#delete-popup',
                type: 'inline'
            },
            closeBtnInside: true,
        });
        $('#pop-close').click(function(){
            $.magnificPopup.close();
        });
    });

</script>
@endsection
