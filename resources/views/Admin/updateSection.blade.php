@extends('Admin.index')
@section('content')
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="dt-buttons btn-group">
                <button class="btn btn-primary" type="button"><i class="icon-Plus"><span class="path1"></span><span class="path2"></span></i></button>
            </div>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bagian</th>
                        <th>Nama Section Head</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>xxx</td>
                        <td>aaa</td>
                        <td>
                            <a href="#">Hapus </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>xxx</td>
                        <td>aaa</td>
                        <td>
                            <a href="#">Hapus </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection