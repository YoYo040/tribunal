@extends('admin.dashboard')
@section('title', 'Employer')
@section('adminContent')
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                <h2 class="ml-lg-2">تدبر الموظفين</h2>
            </div>
            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                <a href="{{route('employer.create')}}" class="btn btn-success" >
                    <i class="material-icons">&#xE147;</i>
                    <span>اضافة موظف</span>
                </a>

            </div>
        </div>
    </div>
    <table id="dataTable3" class="table table-hover table-striped text-center">
        <thead class="text-capitalize">
            <tr>
                <th>Employe ID</th>
                <th>Name</th>
                <th>Prénom</th>
                <th>Department</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer['id'] }}</td>
                    <td>{{ $employer['nome'] }}</td>
                    <td>{{ $employer['prenom'] }}</td>
                    <td>{{ $employer['group'] }}</td>
                    <td>{{ $employer['role'] }}</td>
                    <td class=" d-flex justify-content-center statu-btn">
                        <span class="form-check form-switch">

                            <input data-id="{{ $employer['id'] }}" class="form-check-input " type="checkbox" role="switch"
                                id="flexSwitchCheckDefault"{{ $employer->statu ? 'checked' : '' }}>
                        </span>


                    </td>
                    <td>
                        <a href="{{ route('employer.edit', ['employer' => $employer['id']]) }}"><i class='bx bxs-edit-alt'
                                style="color:green" title="Edit"></i></a>


                        <a href="{{ route('employer.makeUser', ['employer' => $employer['id']]) }}"><i class='bx bxs-user-circle'
                                style="color:rgb(0, 255, 221)" title="User"></i></a>

                                <a href="{{ route('employer.makeUser', ['employer' => $employer['id']]) }}"><i class='bx bx-trash'
                                        style="color:rgb(255, 0, 0)" title="Delet"></i></a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <script>
        $(function() {
            $('.form-check-input').change(function() {
                var statu = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {
                        'statu': statu,
                        'user_id': user_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection
