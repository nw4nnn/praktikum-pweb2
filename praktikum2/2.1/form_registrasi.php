<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
    require_once 'data_form_registrasi.php';
?>

<body style="font-size: 18px;">
    <form method="POST" action="hasil_form_registrasi.php" class="container mt-5">
        <fieldset class="border border-dark p-3 rounded" style="background-color: lightyellow;">
            <legend class="float-none w-auto px-3 fw-bold h3">Form Registrasi</legend>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control"
                            required="required" pattern="[0-9]{10}" title="NIM harus 10 digit angka">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukkan nama lengkap" type="text"
                            class="form-control" required="required" maxlength="50" minlength="3">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_kelamin" class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"
                            required="required" checked>
                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"
                            required="required">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="studi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="studi" name="prodi" class="custom-select" required="required">

                        <?php
                        foreach ($ar_prodi as $k => $v) {
                            echo "<option value='$k'>$v</option>";
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="skills" class="col-4">Skill Web & Programming</label>
                <div class="col-8">

                    <?php
                    foreach ($ar_skill as $k => $v) {
                        echo '<input type="checkbox" name="skills[]" value="' . $k . '">' . $k;
                    }
                    ?>

                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">

                        <?php
                        foreach ($ar_domisili as $k => $v) {
                            echo "<option value='$k'>$v</option>";
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-gg-circle"></i>
                            </div>
                        </div>
                        <input id="email" name="email" placeholder="Masukkan email" type="email" class="form-control"
                            required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
        </legend>
    </form>
</body>

</html>