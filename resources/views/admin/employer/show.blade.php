@extends('admin.dashboard')
@section('title','Profile')


@section('adminContent')
Profile

<table id="dataTable3" class="table table-hover table-striped text-center">
    <thead class="text-capitalize">
        <tr>
            <th>Employe ID</th>
            <th>Name</th>
            <th>Prénom</th>
            <th>Department</th>
            <th>Role</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    <tr>
        <td>{{$employer['id']}}</td>
        <td>{{$employer['nome']}}</td>
        <td>{{$employer['prenom']}}</td>
        <td>{{$employer['group']}}</td>
        <td>{{$employer['role']}}</td>
        <td>{{$employer['statu']}}</td>


    </tr>


</tbody>
</table>

@endsection
