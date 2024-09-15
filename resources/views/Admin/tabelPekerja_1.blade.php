@extends('Admin.index')
@section('content')
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="dt-buttons btn-group">
                <a class="btn btn-primary" href="/formPekerja_1"><i class="icon-Plus"><span class="path1"></span><span class="path2"></span></i></a>
            </div>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pekerja</th>
                        <th>Nama Pekerja</th>
                        <th>Email</th>
                        <th>Cost Center</th>
                        <th>Pos</th>
                        <th>Jabatan</th>
                        <th>Mulai Isi</th>
                        <th>Selesai Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>007</td>
                    <td>Sugiono Nax Bandoeng</td>
                    <td>sugi@gmail.com</td>
                    <td>Cos Center</td>
                    <td>Pos</td>
                    <td>Jabatan</td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#">Tampil </a> |
                        <a href="#">Reset </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>008</td>
                    <td>Ipul</td>
                    <td>ipul@gmail.com</td>
                    <td>Cos Center</td>
                    <td>Pos</td>
                    <td>Jabatan</td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#">Tampil </a> |
                        <a href="#">Reset </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection