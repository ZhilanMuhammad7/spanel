@extends('Admin.index')
@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <!-- Basic Forms -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="radio">
                                <input name="group1" type="radio" id="Option_2">
                                <label for="Option_2">*) Diurutkan berdasarkan abjad</label>
                            </div>
                            <div class="radio">
                                <input name="group1" type="radio" id="Option_1">
                                <label for="Option_1">AHU</label>
                                <div id="additional-options-1" style="display:none; margin-left: 50px;">
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> AHU Operator</span><br>
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> AHU Operator 2021</span><br>
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> AHU Panelman</span>
                                </div>
                            </div>
                            <div class="radio">
                                <input name="group1" type="radio" id="Option_3">
                                <label for="Option_3">Design Web</label>
                                <div id="additional-options-2" style="display:none; margin-left: 50px;">
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Komunikasi</span><br>
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Programmer</span>
                                </div>
                            </div>
                            <div class="radio">
                                <input name="group1" type="radio" id="Option_4">
                                <label for="Option_4">Lab - Laboratory</label>
                                <div id="additional-options-3" style="display:none; margin-left: 50px;">
                                    <i span class="ti-search"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Tester Laboratory</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <div class="col-lg-6 col-12">
        <!-- Basic Forms -->
        <div class="box">
            <!-- /.box-header -->
            <form>
                <div class="box-body">
                    <h4 class="mt-0 mb-20">Tester Laboratory</h4>
                    <div class="form-group">
                        <a href="tabel_soal_1.html" class="form-label">
                            <i class="ti-angle-left"></i> Kembali
                        </a>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Elemen Kompetensi : <b>Research Methodology</b></label>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tema : <b>Metode Analisa Sifat Kimia Produk Intermediate, BBM dan NBBM</b></label>
                    </div>
                    <div class="form-group">
                        <a href="tabel_soal_1.html" class="form-label">
                            <i class="ti-plus"></i> Insert Soal
                        </a>
                    </div>
                </div>
                <div class="question-container">
                    <div class="question-header">
                        <i class="delete-icon">🗑️</i>
                        <i class="edit-icon">✏️</i>
                        <span>1) Awareness</span>
                    </div>
                    <div class="question-body">
                        <p>Uji komposisi paraffine, olefine, naphtheme dan aromat pada Naptha dilakukan dengan peralatan</p>
                        <div class="options">
                            <div>
                                <input type="radio" id="q1a" name="q1" value="A">
                                <label for="q1a">A. Spektrophotometri</label>
                            </div>
                            <div>
                                <input type="radio" id="q1b" name="q1" value="B">
                                <label for="q1b">B. Densitimeter</label>
                            </div>
                            <div>
                                <input type="radio" id="q1c" name="q1" value="C">
                                <label for="q1c">C. Gastromatograph</label>
                            </div>
                            <div>
                                <input type="radio" id="q1d" name="q1" value="D">
                                <label for="q1d">D. Parafine Analyzer</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question-container">
                    <div class="question-header">
                        <i class="delete-icon">🗑️</i>
                        <i class="edit-icon">✏️</i>
                        <span>1) Awareness</span>
                    </div>
                    <div class="question-body">
                        <p>Uji kandungan bencene dalam mogas dilakukan dengan metode</p>
                        <div class="options">
                            <div>
                                <input type="radio" id="q2a" name="q2" value="A">
                                <label for="q2a">A. ASTM D-3798</label>
                            </div>
                            <div>
                                <input type="radio" id="q2b" name="q2" value="B">
                                <label for="q2b">B. UOP-4492</label>
                            </div>
                            <div>
                                <input type="radio" id="q2c" name="q2" value="C">
                                <label for="q2c">C. ASTM D-6839</label>
                            </div>
                            <div>
                                <input type="radio" id="q2d" name="q2" value="D">
                                <label for="q2d">D. ASTM D-543</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan referensi semua radio button dan elemen tambahan
        var radioOption1 = document.getElementById('Option_1');
        var radioOption2 = document.getElementById('Option_2');
        var radioOption3 = document.getElementById('Option_3');
        var radioOption4 = document.getElementById('Option_4');
        var additionalOptions1 = document.getElementById('additional-options-1');
        var additionalOptions2 = document.getElementById('additional-options-2');
        var additionalOptions3 = document.getElementById('additional-options-3');

        // Fungsi untuk menangani perubahan radio button
        function handleRadioClick() {
            additionalOptions1.style.display = radioOption1.checked ? 'block' : 'none';
            additionalOptions2.style.display = radioOption3.checked ? 'block' : 'none';
            additionalOptions3.style.display = radioOption4.checked ? 'block' : 'none';
        }

        // Menambahkan event listener ke radio button
        radioOption1.addEventListener('click', handleRadioClick);
        radioOption2.addEventListener('click', handleRadioClick);
        radioOption3.addEventListener('click', handleRadioClick);
        radioOption4.addEventListener('click', handleRadioClick);

        // Memanggil fungsi sekali pada saat load untuk set keadaan awal
        handleRadioClick();
    });
</script>
@endsection