@extends('layouts.admin')

@section('admin_content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            {{ __('Employee List') }}
                        </h1>
                        <div class="page-header-subtitle">{{ __('Employee Attendance App') }}</div>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div id="alert" class="alert alert-success alert-block mb-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div id="alert" class="alert alert-success alert-block mb-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
            @endif
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-2">
            <div class="card-header">
                {{ __('Employee List') }}
                
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="employee_table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('No') }}</th>
                                <th>{{ __('Hotel') }}</th>
                                <th>{{ __('Arrival Date') }}</th>
                                <th>{{ __('Departure Date') }}</th>
                                <th>{{ __('Tamu') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i = 1;
                            @endphp
                            @foreach ($booking as $h)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $h->nama }}</td>
                                    <td>{{ $h->arrival_date }}</td>
                                    <td>{{ $h->departure_date }}</td>
                                    <td>{{ $h->tamu }}</td>
                                    <td>{{ $h->nama_tamu }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@push('after-script')
    <script>
        var timeout = 3000;
        $('#alert').delay(timeout).fadeOut(300);
        $(document).ready(function() {
            $('#employee_table').DataTable();
        });
    </script>
@endpush