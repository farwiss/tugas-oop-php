<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h2 style="text-align:center; background-color:lightcyan">FORM NILAI UJIAN</h2>
    <div class="container pt-4 pb-2 mb-4 mt-4" style="background-color:lightblue">
        <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label"><b>NIM</b></label>
                <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukkan NIM anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label"><b>Nama</b></label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan nama anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="kuliah" class="col-4 col-form-label"><b>Kuliah</b></label>
                <div class="col-8">
                    <select id="kuliah" name="kuliah" class="custom-select">
                        <option value="">--- PILIH KAMPUS ---</option>
                        <option value="IPB">IPB</option>
                        <option value="UI">UI</option>
                        <option value="ITB">ITB</option>
                        <option value="IBIK">IBIK</option>
                        <option value="MERCUBUANA">MERCUBUANA</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label"><b>Mata Kuliah</b></label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="">--- PILIH MATA KULIAH ---</option>
                        <option value="HTML">HTML</option>
                        <option value="PHP">PHP</option>
                        <option value="JAVASCRIPT">JAVASCRIPT</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="ASSEMBLY">ASSEMBLY</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label"><b>Nilai</b></label>
                <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Masukkan nilai anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-10 col-2">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>
    </form>

    <?php
    require_once 'Mahasiswa.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];

    $nm = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);

    ?>
    <!-- menampilkan data dalam bentuk tabel -->
    <div>
        <h2 style="text-align: center; background-color:lightcoral">Keterangan Nilai Mahasiswa</h2>
        <div class="container mt-4">
            <table border="1" width="100%" align="center" style="background-color:peachpuff">
                <thead align="center">
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kuliah</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Status</th>
                    </tr>
                </thead>


                <?php
                if (isset($nm)) {
                    $no = 1;
                    // cetak hasil dengan tabel 
                    echo '<tbody style="text-align:center">';
                    echo '<tr>';
                    echo '<td>' . $no . '</td>';
                    echo '<td>' . $nm->nim . '</td>';
                    echo '<td>' . $nm->nama . '</td>';
                    echo '<td>' . $nm->kuliah . '</td>';
                    echo '<td>' . $nm->matkul . '</td>';
                    echo '<td>' . $nm->nilai . '</td>';
                    echo '<td>' . $nm->grade . '</td>';
                    echo '<td>' . $nm->predikat . '</td>';
                    echo '<td>' . $nm->status  . '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    $no++;
                }
                ?>
            </table>
            <div class="offset-10 col-2 mt-4">
                <button onclick='window.location.href= "objmahasiswa.php"' name="submit" type="submit" class="btn btn-danger">Clear</button>
            </div>
        </div>
    </div>
</body>

</html>