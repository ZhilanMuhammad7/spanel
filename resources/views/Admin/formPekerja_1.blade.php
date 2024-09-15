@extends('Admin.index')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h4 class="box-title">Form Pekerja</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form novalidate>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h5>No Pekerja <span class="text-danger">*</span></h5>
                                <input type="number" name="noPekerja" class="form-control" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Nama Pekerja <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="namaPekerja" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Email <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Cost Center <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="costCenter" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Pos <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="pos" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Jabatan <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="jabatan" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Mulai Isi <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="mulaiIsi" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Selesai Isi <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="selesaiIsi" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="submit" class="btn btn-warning">Cencel</button>
                        </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>
@endsection