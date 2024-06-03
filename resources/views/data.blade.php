@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card p-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                <button type="button" class="btn btn-dark create">Tambah Data</button>
                                <a href="{{ url('download-pdf') }}"><button class="btn btn-success">Download PDF</button></a>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <form method="GET" action="/data/filter">
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <input type="date" name="start_date" class="form-control">
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <input type="date" name="end_date" class="form-control">
                                            </div>
                                            <div class="col-md-1 text-end">
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                    </form>
                                    <div class="col-2 text-end">
                                        <a href="{{ url('data') }}" class="btn btn-secondary">Clear Filter</a>
                                    </div>
                                </div>

                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Tanggal</th>
                                        <th>Tipe</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->tipe }}</td>
                                            <td>{{ number_format($item->nominal, 2, ',', '.') }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <button type="click" class="btn btn-primary edit" data-id="{{ $item->id }}">Edit</button>
                                                <a href="{{ url($item->id.'/delete') }}">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
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

    {{-- modal create --}}
    @include('modal.modalcreate')
    {{-- modal update --}}
    @include('modal.modalupdate')

    {{-- JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection


