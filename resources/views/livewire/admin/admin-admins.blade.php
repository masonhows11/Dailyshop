<div>
    @section('dash_page_title')
        مدیریت مدیران
    @endsection
    <div class="container">

        <div class="row d-flex justify-content-center admin-user-alert">
            @if(session()->has('success'))
                <div
                    class="col-xl-7 col-lg-7 col-md-7 alert alert-success alert-dismissible alert-component text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            @if(session()->has('error'))
                <div
                    class="col-xl-7 col-lg-7 col-md-7 alert alert-danger alert-dismissible alert-component text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
        </div>

        <div class="row admin-list-users d-flex justify-content-center align-content-center align-items-center">

            <div class="col-xl-7 col-lg-7 col-md-7 bg-white rounded-3 list-content">
                <table class="table">
                    <thead>
                    <tr class="text-center">
                        <th>شناسه</th>
                        <th>نام کاربری</th>
                        <th>حذف</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($admins)
                        @foreach($admins as $admin)

                            <tr class="text-center">
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                @if($admin->hasRole('admin'))
                                @else
                                    <td class="mb-3">
                                        <a href="javascript:void(0)"
                                           wire:click.prevent="deleteConfirmation({{ $admin->id }})">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td class="mb-3">
                                        <a href="javascript:void(0)"
                                           class="btn
                                        {{ $admin->code_verified_at == null ? 'btn-success' : 'btn-danger' }} btn-sm mb-3">
                                            {{ $admin->code_verified_at == 0 ? 'فعال' : 'غیر فعال' }}
                                        </a>
                                    </td>
                                @endif
                            </tr>

                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-7 mt-5">
                {{ $admins->links() }}
            </div>

        </div>
    </div>

</div>
@push('dash_custom_scripts')
    <script type="text/javascript">
        window.addEventListener('show-delete-confirmation',event => {
            Swal.fire({
                title: 'آیا مطمئن هستید این ایتم حذف شود؟',
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله حذف کن!',
                cancelButtonText: 'خیر',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            });
        })
    </script>
@endpush
