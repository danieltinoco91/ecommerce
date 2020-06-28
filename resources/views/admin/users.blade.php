@extends('admin.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table id="dtUsers" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>E mail</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td style="width: 200px; text-align: center;" >                                
                                <button class="btn btn-primary" onclick="edit(<?= $user->id ?>, '<?= $user->name ?>', '<?= $user->email ?>')">Edit</button>    
                                <button class="btn btn-danger" onclick="deleteUser(<?= $user->id ?>)">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->        
</section>


<div class="modal" id="mdUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmRegUs">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="txtName" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input  id="txtEmail" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input id="txtPassword" type="password" name="password" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="txtPassword2" type="password" name="password_again" class="form-control" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="save()" id="btnSave" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" id="btnCancel" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="mdUserEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmEditUs">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input id="txtNameEdit" name="name" class="form-control" />
                                <input type="hidden" id="txtIDUser">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input  id="txtEmailEdit" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="editUser()" id="btnEdit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" id="btnCancelEdit" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $('#dtUsers').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "paging": true
        });
        $(".dt-buttons").prepend("<button class='dt-button buttons-html5' data-toggle='modal' data-target='#mdUser' data-keyboard='false' data-backdrop='static' tabindex='0' aria-controls='dtUsers' type='button'><span>Add</span></button>");
        $("#frmRegUs").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },
                password: {
                    required: true,
                    maxlength: 50,
                    minlength: 3
                },
                password_again: {
                    required: true,
                    equalTo: "#txtPassword",
                    maxlength: 50,
                    minlength: 3
                }
            }
        });
        $("#frmEditUs").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                }
            }
        });


        $('#mdUser').on('shown.bs.modal', function () {
            $("#txtName").val("");
            $("#txtEmail").val("");
            $("#txtPassword").val("");
        });
        $('#mdUserEdit').on('shown.bs.modal', function () {
            $("#txtNameEdit").val("");
            $("#txtEmailEdit").val("");
            $("#txtIDUser").val("");
        });
    });
    function save() {
        if ($("#frmRegUs").valid()) {
            $("#btnSave,#btnCancel").attr("disabled", true);
            var data = {
                name: $("#txtName").val(),
                email: $("#txtEmail").val(),
                password: $("#txtPassword").val()
            };
            savedata(data, $("#btnSave,#btnCancel"));
        }
    }
    function editUser() {
        if ($("#frmEditUs").valid()) {
            $("#btnEdit,#btnCancelEdit").attr("disabled", true);
            var data = {
                name: $("#txtNameEdit").val(),
                email: $("#txtEmailEdit").val(),
                id: $("#txtIDUser").val()
            };
            savedata(data, $("#btnEdit,#btnCancelEdit"));
        }
    }
    function savedata(data, buttons) {
        axios.post('/api/users', data)
                .then(function (response) {
                    Swal.fire({
                        title: 'Success',
                        text: "User was saved",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }
                    })
                })
                .catch(function (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    })
                    $(buttons).attr("disabled", false);
                });
    }
    function edit(id, name, email) {
        $("#mdUserEdit").modal({backdrop: 'static', keyboard: false});
        $("#txtNameEdit").val(name);
        $("#txtEmailEdit").val(email);
        $("#txtIDUser").val(id);        
    }

    function deleteUser(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                axios.get('/api/users/' + id)
                        .then(function (response) {
                            Swal.fire({
                                title: 'Deleted',
                                text: "Your user has been deleted.",
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            })
                        })
                        .catch(function (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            })
                            $(buttons).attr("disabled", false);
                        });
            }
        })
    }

</script>

@endsection