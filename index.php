<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Load file JS -->
    <script src="jquery-3.4.1.js"></script>

</head>
<body>
<div class="container mt-5">
    <h4>Show Hide FORM</h4>

    <form id="form" method="post">
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap" required />
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan e-mail" required />
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl" class="form-control" required />
        </div>

        <div class="form-group">
            <label>Kuliah ? :</label><br>
            <div class="form-check">
                <input type="checkbox" name="ya" class="form-check-input" id="ya" onclick="check()" required />
                <label class="form-check-label" for="ya">Ya</label>&nbsp;
            </div>
            <div class="form-check">
                <input type="checkbox" name="tidak" class="form-check-input" id="tidak" onclick="check()" required />
                <label class="form-check-label" for="tidak">Tidak</label>
            </div>
        </div>

        <div class="form-group" style="display: none;" id="univ">
            <label>Universitas</label>
            <select class="form-control">
                <option hidden="">--Select Universitas--</option>
                <option value="Universitas Indonesia">Universitas Indonesia</option>
                <option value="Politeknik LP3I Cimone">Politeknik LP3I Cimone</option>
                <option value="STMIK Raharja">STMIK Raharja</option>
            </select>
        </div>

        <div class="form-group" style="display: none;" id="jenjang">
            <label>Jenjang</label>
            <select class="form-control">
                <option hidden="">--Select Jenjang--</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <button type="submit" id="Submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="js-show-hide.js"></script>

</body>
</html>
