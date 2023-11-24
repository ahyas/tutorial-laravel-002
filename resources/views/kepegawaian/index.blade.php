@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Daftar pegawai </div>

        <div class="card-body">
            <a class="btn btn-danger btn-sm" href="cetak_pdf" style="margin-bottom:15px">Cetak PDF</a>

            <table class="table table-striped table-sm">
                <tr>
                    <th>Name</th>
                    <th width="150px">Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Region</th>
                    <th>Currency</th>
                </tr>
                @foreach($table as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->country}}</td>
                    <td>{{$row->region}}</td>
                    <td>{{$row->currency}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
