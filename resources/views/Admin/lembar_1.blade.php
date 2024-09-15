<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Uji Kompetensi Teknis 2023</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px;
        }

        .header,
        .footer {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 16px;
            margin: 0;
        }

        .header h2 {
            font-size: 14px;
            margin: 0;
        }

        .info-table,
        .competency-table,
        .summary-table,
        .score-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .info-table th,
        .info-table td,
        .competency-table th,
        .competency-table td,
        .summary-table th,
        .summary-table td,
        .score-table th,
        .score-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        .competency-table th,
        .summary-table th,
        .score-table th {
            background-color: #f0f0f0;
        }

        .competency-table td {
            text-align: left;
        }

        .summary-table td {
            text-align: right;
        }

        .score-table td {
            text-align: center;
        }

        .chart-container,
        .legend {
            width: 50%;
            /* Set each to take half of the container width */
            float: left;
            /* Float left to align side by side */
        }

        .chart-container {
            height: 500px;
            /* Reduce the height of the chart container */
        }

        .legend {
            width: 50%;
            float: left;
        }

        .legend ul {
            list-style: none;
            padding: 0;
        }

        .legend ul li {
            margin-bottom: 5px;
        }

        .legend ul li span {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: lightblue;
        }

        .green {
            background-color: lightgreen;
        }

        .yellow {
            background-color: yellow;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>HASIL UJI KOMPETENSI TEKNIS 2023</h1>
            <h2>PT KILANG PERTAMINA INTERNATIONAL REFINERY UNIT II DUMAI</h2>
        </div>
        <table class="info-table">
            <tr>
                <th>Kode Soal</th>
                <td>: 123</td>
                <th>No Peserta</th>
                <td>: 00045</td>
            </tr>
            <tr>
                <th></th>
                <td>Fireman II RUI II-Dumai</td>
                <th>Nama Peserta</th>
                <td>: Wandi / No.Pek: 99999</td>
            </tr>
            <tr>
                <th>Tanggal / Waktu Pengerjaan</th>
                <td>: 10.02.2023 14:09</td>
                <th>Fungsi</th>
                <td>: HSE</td>
            </tr>
            <tr>
                <th>Durasi Max</th>
                <td>: 90 Menit</td>
                <th>Bagian</th>
                <td>: Fire & Insurance</td>
            </tr>
        </table>
        <table class="competency-table">
            <tr>
                <th>No</th>
                <th>Elemen Kompetensi</th>
                <th>Target</th>
                <th>Jumlah Soal</th>
                <th>Jumlah Benar</th>
                <th>Nilai / Competency</th>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <table>
                        <tr>
                            <th>Fire & Emergency Management</th>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <th>Tema</th>
                                        <th>Jumlah Soal</th>
                                        <th>Benar</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Fire Equipment & Maintenance</td>
                                        <td>29</td>
                                        <td>28</td>
                                        <td>97%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Emergency Response</td>
                                        <td>29</td>
                                        <td>28</td>
                                        <td>97%</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>2</td>
                <td>90</td>
                <td>87</td>
                <td>96,67 % Excellence</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td></td>
                <td>90</td>
                <td>87</td>
                <td></td>
            </tr>
        </table>
        <table class="summary-table">
            <tr>
                <td></td>
                <th>FORMULA</th>
                <th>RESULT</th>
                <th>COMPETENCY</th>
            </tr>
            <tr>
                <th>NILAI OVERALL</th>
                <td>(87/90) x 100</td>
                <td>96,66</td>
                <td>Excellence</td>
            </tr>
        </table>
        <div class="chart-container">
            <canvas id="radarChart" style="width: 100%;"></canvas>
        </div>

        <div style="display: flex; justify-content: space-between;">
            <div class="legend">
                <ul>
                    <li><span class="red"></span> Elemen kompetensi</li>
                    <li><span class="blue"></span> Target kompetensi</li>
                </ul>
                <h3>Kekuatan</h3>
                <ul>
                    <li>1. Incident Investigation</li>
                    <li>2. Safe Work Practice</li>
                </ul>
                <h3>Area Pengembangan</h3>
                <ul>
                    <li>1. Fire & Emergency Management</li>
                    <li>2. Safety Risk Management</li>
                </ul>
                <h3>Program Pengembangan & Pelatihan Pekerja</h3>
                <ul>
                    <li>1. Upskilling kompetensi teknis melalui coaching & monitoring</li>
                    <li>2. Pengayaan kompetensi teknis pekerja dapat melalui On Job Training (OJT), Job Assignment atau Project</li>
                    <li>3. Usulan pengembangan berupa training dapat diajukan melalui aplikasi People Review</li>
                </ul>
            </div>
            <div class="score-table-container" style="width: 50%;">
                <div class="keterangan" style="border: 1px solid #000; padding: 10px; margin-bottom: 20px;">
                    <p><strong>keterangan</strong></p>
                    <p>
                        <span>
                            < 60=Need Improvement</span> &nbsp;&nbsp;&nbsp;&nbsp; <span>75 - 90 = Good</span><br>
                                <span>60 - 75 = Suitable</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>> 90 = Excellence</span>
                    </p>
                </div>
                <table class="score-table" style="width: 100%;">
                    <tr>
                        <td></td>
                        <th>Jumlah Soal</th>
                        <th>Jumlah Benar</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                        <td>Awareness</td>
                        <td>108</td>
                        <td>106</td>
                        <td>98%</td>
                    </tr>
                    <tr>
                        <td>Fundamental</td>
                        <td>53</td>
                        <td>51</td>
                        <td>96%</td>
                    </tr>
                    <tr>
                        <td>Skillful</td>
                        <td>19</td>
                        <td>19</td>
                        <td>100%</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="footer">
            <div class="footer-content" style="display: flex; justify-content: space-between; align-items: flex-end; text-align: left;">
                <div class="left-footer" style="text-align: left;">
                    <p>Peserta</p>
                    <br><br><br>
                    <p>(Nama Peserta)</p>
                </div>
                <div class="right-footer" style="text-align: right;">
                    <p>Dumai, dd MMM yyyy</p>
                    <p>Mengetahui,</p>
                    <p>Section Head Fire & Insurance</p>
                    <br><br><br>
                    <p>Nama Section Head</p>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        const ctx = document.getElementById('radarChart').getContext('2d');
        const data = {
            labels: ['Fire & Emergency Management', 'Safe Work Practice', 'Incident Investigation', 'Safety'],
            datasets: [{
                label: 'Safety Metrics',
                data: [1.5, 1.8, 1.2, 2.0],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(54, 162, 235, 1)'
            }]
        };

        const options = {
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0,
                    suggestedMax: 2,
                    ticks: {
                        stepSize: 0.5
                    }
                }
            }
        };

        const radarChart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
        });
    </script>
</body>

</html>