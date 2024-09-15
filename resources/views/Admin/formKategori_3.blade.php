@extends('Admin.index')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h4 class="box-title">Form Kategori</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col">
                <form novalidate>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h5>Nama Section <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required">
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