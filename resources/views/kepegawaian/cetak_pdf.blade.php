
<style>
    @page {
        size: A4 landscape;
    }
</style>

<h2>Daftar Pegawai PT Ngalor Ngidul Sejati, Tbk.</h2>
<table>
    <tr align="left">
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