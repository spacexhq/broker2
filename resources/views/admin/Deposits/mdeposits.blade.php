@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1">Manage Clients Deposits</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />
                <div class="mb-5 row">
                    <div class="col-12 card shadow p-4">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $deposit)
                                        <tr>
                                            <td>{{ optional($deposit->duser)->name ?? 'No user found' }}</td>
                                            <td>{{ optional($deposit->duser)->email ?? 'No email available' }}</td>
                                            <td>{{ $settings->currency }} {{ number_format((float) $deposit->amount, 2) }}</td>
                                            <td>{{ $deposit->payment_mode }}</td>
                                            <td>
                                                @if ($deposit->status == 'Processed')
                                                    <span class="badge badge-success">{{ $deposit->status }}</span>
                                                @else
                                                    <span class="badge badge-danger">{{ $deposit->status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $deposit->created_at->toDayDateTimeString() }}</td>
                                            <td>
                                                <a href="{{ route('viewdepositimage', $deposit->id) }}"
                                                    class="btn btn-info btn-sm m-1" title="View Payment Screenshot">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ url('admin/dashboard/deldeposit/' . $deposit->id) }}"
                                                    class="btn btn-danger btn-sm m-1">Delete</a>
                                                @if ($deposit->status != 'Processed')
                                                    <a href="{{ url('admin/dashboard/pdeposit/' . $deposit->id) }}"
                                                        class="btn btn-primary btn-sm">Process</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection