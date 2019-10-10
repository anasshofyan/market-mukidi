@extends('layout.main')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <!-- Button tambah-->
    <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#modalTambah" ><i class="fa fa-plus"></i>
        Tambah Produk
    </button>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah Stock</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
                <td>sit</td>
                <td>
                    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEdit"><i class="fa
                            fa-pencil"></i></button>
                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalLihat"><i class=" fa
                    fa-eye"></i></button>
                    <button class="btn btn-sm btn-danger"><i class=" fa fa-trash"></i></button>
                </td>
            </tr>
            @endfor
            </tbody>
        </table>
    </div>
    {{--Modals--}}

    <!-- Modal -->
    {{--Modal Edit--}}
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--Modal Lihat--}}
    <div class="modal fade" id="modalLihat" tabindex="-1" role="dialog" aria-labelledby="modalLihat"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--Modal Tambah--}}
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama-produk" placeholder="ayam, bebek"
                                           required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Kategori</label>
                                    <input type="text" class="form-control" name="kategori-produk"
                                           placeholder="unggas"
                                           required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">State</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--End Modals--}}
@endsection


