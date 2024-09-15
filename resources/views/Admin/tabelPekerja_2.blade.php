@extends('Admin.index')
@section('content')
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="dt-buttons btn-group">
                <a class="btn btn-primary" href="/formPekerja_2"><i class="icon-Plus"><span class="path1"></span><span class="path2"></span></i></a>
            </div>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Selesai</th>
                        <th>No Pekerja</th>
                        <th>Nama Pekerja</th>
                        <th>Email</th>
                        <th>Cos Center</th>
                        <th>Pos</th>
                        <th>Jabatan</th>
                        <th>Jml Soal</th>
                        <th>Jml Salah</th>
                        <th>Jml Benar</th>
                        <th>Result</th>
                        <th>Status</th>
                        <th>R1</th>
                        <th>R2</th>
                        <th>R3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>dd-MM-yyyy</td>
                        <td>xx</td>
                        <td>aa</td>
                        <td>ipul@gmail.com</td>
                        <td>Cos Center</td>
                        <td>Pos</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>dd-MM-yyyy</td>
                        <td>xx</td>
                        <td>aa</td>
                        <td>ipul@gmail.com</td>
                        <td>Cos Center</td>
                        <td>Pos</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection