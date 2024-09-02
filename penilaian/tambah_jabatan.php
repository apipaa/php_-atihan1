<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah jabatan</h3>
    <form action="proses_tambah_jabatan.php" method="post">
        jabatan : 
        <input type="text" name="jabatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah jabatan" class="btn btn-primary">
        
        gaji pokok:
        <input type="decimal" name="gaji_pokok" value="" class="form-control">
        tunjangan:
        <input type="decimal" name="tunjangan" value="" class="form-control">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
