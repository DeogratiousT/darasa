@extends('dashboard.layouts.main')

@section('title','Users')

@section('page-imports')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" />
@endsection

@section('page-title', 'Users')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Layout Vertical Navbar
        </li>
    </ol>
@endsection

@section('page-right')
    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary m-4">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <span class="svg-icon svg-icon-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->New User
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="users-laratable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role(s)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection

@push('scripts')
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#users-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [                
                        { name: 'name' },
                        { name: 'email' },
                        { name: 'role' , orderable : false},
                        { name: 'status' , orderable : false},
                        { name: 'action' , orderable : false, searchable : false }
                ],
                "language": {
                "lengthMenu": "Show _MENU_",
                },
                "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
            });
        });

    </script>
@endpush