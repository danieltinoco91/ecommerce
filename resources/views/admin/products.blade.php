@extends('admin.admin')

@section('content')
<script src="/assets/js/dropzone.js"></script>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table id="dtProducts" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                                @if($product->image)
                                <img style="width: 300px; height: 450px;" src="{{ $product->image->getUrl() }}" />
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td style="text-align: right;">{{ number_format($product->price,2) }}</td>
                            <td style="text-align: center;">{{ ($product->status?'Active':'Inactive') }}</td>
                            <td style="width: 200px; text-align: center;" >                                
                                <button class="btn btn-primary" onclick="edit(<?= $product->id ?>, '<?= $product->name ?>', '<?= $product->description ?>',<?= $product->status ?>,<?= $product->price ?>, '<?= ($product->image ? $product->image->getUrl() : '') ?>')">Edit</button>    
                                <button class="btn btn-danger" onclick="deleteProduct(<?= $product->id ?>)">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->        
</section>



<div class="modal" id="mdProduct" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmRegProd">
                    <div class="row" id="templates">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="txtID" name="id" type="hidden" class="form-control" />
                                        <input id="txtName" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input id="txtPrice" type="number" name="price" class="form-control" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12" id="dropZone">
                                    <div class="table table-striped files" id="previews">

                                        <div id="template" class="file-row">
                                            <!-- This is used as the file preview template -->
                                            <div>
                                                <span class="preview"><img data-dz-thumbnail /></span>
                                            </div>
                                            <div>
                                                <p class="name" data-dz-name></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                            <div>
                                                <p class="size" data-dz-size></p>
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                </div>
                                            </div>                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="3" style="resize: none;"  id="txtDescription" name="description" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="divStatus" style="display: none">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="chStatus" value="1">
                                            <label for="chStatus" class="custom-control-label">Active</label>
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img id="imgPreview" width="200" />
                                    </div>
                                </div>   
                            </div>                            
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button"  id="btnAddimg" class="btn btn-primary pull-left fileinput-button">Add image</button>
                <button type="button" onclick="save()" id="btnSave" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" id="btnCancel" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<script>
    $(document).ready(function () {
        $('#dtProducts').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "paging": true
        });
        $(".dt-buttons").prepend("<button class='dt-button buttons-html5' data-toggle='modal' data-target='#mdProduct' data-keyboard='false' data-backdrop='static' tabindex='0' aria-controls='dtUsers' type='button'><span>Add</span></button>");

        $("#frmRegProd").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
                description: {
                    required: true,
                    maxlength: 1200
                },
                price: {
                    required: true,
                    number: true
                }
            }
        });

        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(document.getElementById("dropZone"), {// Make the whole body a dropzone
            url: "/api/products", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 1,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button",
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        });

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            document.querySelector("#btnSave").onclick = function () {
                myDropzone.enqueueFile(file);
            };
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            //document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });

        myDropzone.on("sending", function (file, xhr, formData) {
            // Show the total progress bar when upload starts
            //document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            //file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
            if ($("#txtID").val() != "" && $("#txtID").val() > 0) {
                formData.append("id", $("#txtID").val());
                formData.append("status", ($("#chStatus").is(":checked") ? 1 : 0));
            }
            formData.append("name", $("#txtName").val());
            formData.append("description", $("#txtDescription").val());
            formData.append("price", $("#txtPrice").val());
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function (progress) {
            //document.querySelector("#total-progress").style.opacity = "0";
            $("#mdProduct").modal("hide");
            Swal.fire({
                title: 'Success',
                text: "Product was saved",
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
        });

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#btnSave").onclick = function () {
            if ($("#frmRegProd").valid()) {
                if (myDropzone.getFilesWithStatus(Dropzone.ADDED).length > 0) {
                    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
                } else {
                    if ($("#txtID").val() != "" && $("#txtID").val() > 0 && $("#imgPreview").attr("src") != "") {
                        var data = {
                            id: $("#txtID").val(),
                            status: ($("#chStatus").is(":checked") ? 1 : 0),
                            name: $("#txtName").val(),
                            description: $("#txtDescription").val(),
                            price: $("#txtPrice").val()
                        };
                        axios.post('/api/products', data)
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
                    } else {
                        Swal.fire("Select an image.")
                    }
                }
            }
        };

        $('#mdProduct').on('shown.bs.modal', function () {
            $("#txtID").val("");
            $("#txtName").val("");
            $("#txtDescription").val("");
            $("#chStatus").attr("checked", false);
            $("#txtPrice").val(0);
            $("#imgPreview").attr("src", "");
            $("#divStatus").hide();
        });

    });

    function edit(id, name, description, status, price, img) {
        $("#mdProduct").modal();
        $("#txtID").val(id);
        $("#txtName").val(name);
        $("#txtDescription").val(description);
        $("#chStatus").attr("checked", status);
        $("#txtPrice").val(price);
        $("#imgPreview").attr("src", img);
        $("#divStatus").show();
    }

    function deleteProduct(id) {
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
                axios.get('/api/products/' + id)
                        .then(function (response) {
                            Swal.fire({
                                title: 'Deleted',
                                text: "Your product has been deleted.",
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            });
                        })
                        .catch(function (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        });
            }
        });
    }
</script>

@endsection
