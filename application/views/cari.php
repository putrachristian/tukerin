<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jual Barang Dengan Barang | Tukerin</title>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">

    <style>

        div.row {
            background-image: url("<?= base_url('assets/img/background.png'); ?>");
            background-position: center;
            background-repeat: no-repeat;
        }

        td {
            width: 120px;
            height: 140px;
        }

        td:hover {
            background-color: #e2e2e2;
        }

        section {
            
        }

    </style>

    <?php $this->load->view('header'); ?>
    <br/><br/><br/><br/>
    <div class="container">
        <form class="produk">
            <div class="mobil">
                <div class="col-md-4 mb-3">
                    <label for="inputState">Pilih Lokasi</label>
                    <select class="form-control">
                    <option selected>Semua Provinsi</option>
                    <option>Semua Provinsi</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Tengah</option>
                    <option>Jawa Timur</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="inputState">Pilih Kategori</label>
                    <select class="form-control">
                    <option selected>Mobil</option>
                    <option>Motor</option>
                    <option>Rumah</option>
                    <option>Jalan</option>
                    <option>Sawah</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="inputState">Kata Pencarian</label>
                    <input class="form-control" type="search" placeholder="Cari">
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disable>
                    <label class="form-check-label" for="disabledFieldsetCheck">Cari Di Deskripsi Iklan
                    </label>
                </div>
            </div>
        </form>
        
    </div>
    

    <!-- <?php $this->load->view('footer'); ?> -->

</body>
</html>