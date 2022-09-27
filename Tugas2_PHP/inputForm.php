<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inpuf Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center pt-4">FORM DATA PEGAWAI</h2>
    <!-- first form -->
    <div class="container px-5 my-5">
    <form action="tableData.php" method="POST" id="contactForm" >
        <div class="mb-3">
            <label class="form-label" >NAMA PEGAWAI</label>
            <input class="form-control" name="nama_pegawai" type="text"  placeholder="Input Your Name"/>
            </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">AGAMA</label>
            <select name="agama" class="form-select" id="newField4" aria-label="New Field 4">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">JABATAN</label>
            <div class="form-check form-check-inline">
                <input value="Manager" name="jabatan"  class="form-check-input" id="manager" type="radio" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Asisten" name="jabatan" class="form-check-input" id="asisten" type="radio"  data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Kabag" name="jabatan" class="form-check-input" id="kabag" type="radio"  data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Staff" name="jabatan" class="form-check-input" id="staff" type="radio"  data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">STATUS</label>
            <div class="form-check form-check-inline">
                <input value="Menikah" name="status" class="form-check-input" id="menikah" type="radio"  data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Belum_Menikah" name="status" class="form-check-input" id="belum" type="radio"  data-sb-validations="" />
                <label class="form-check-label" for="belum">Belum</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">JUMLAH ANAK</label>
            <input value="" name="jumlahAnak" class="form-control" id="newField9" type="text" placeholder="input number" data-sb-validations="required" />
        </div>
        
        
        <div class="d-grid">
            <button name="proses" class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
  </body>
</html>