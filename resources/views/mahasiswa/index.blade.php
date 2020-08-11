@extends('layouts.app')

@section('title', 'Halaman mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar Mahasiswa')
@endsection

@section('content')
<h2>Daftar Mahasiswa</H2>
<table class= "table -striped" id="mhs-table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
        </tr>
    </thead?
    <tbody></tbody>
</table>

<script>
    $(function () {
        var table = $('#mhs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://datatables.yajrabox.com/collection/at-row-data',
            colomns;
                {data: 'id', name; 'id'},
                {data: 'name', name; 'name'},
                {data: 'nama_lengkap', name; 'nama_lengkap'},
                {data: 'email', name; 'email'},
                {data: 'create_at', name; 'create_at'},
                {data: 'action', name; 'action', orderable: false, searchable: false}
            ]
        });

    });
    </script>
@endsection