<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jual Barang Dengan Barang | Tukerin</title>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <script src="<?= base_url('assets/plugins/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <style>
    
        body {
            height: 100vh;
            position: relative;
        }

        table {
            margin-top: 80px;
            background-color: #f7f7f7;
            padding: 10px;
            width: 100%;
            height: 200px;
            border-radius: 8px;
        }

        /* .dropdown-menu>li>a, .btn-group>.btn:first-child {
            width: 100%;
        } */

        td, th {
            vertical-align: top;
            padding: 0px;
        }
        p {
            margin: 0;
            margin-top: 10px;
        }
        #title {
            height: 1px;
            text-align: left;
        }
        td>p:not(#title) {
            width: 1%;
            white-space: nowrap;
        }
    
    </style>

</head>
<body>

    <?php $this->load->view('header'); ?>

    <div class="container">

        <table class="text-center">
            <div id="cari">
                <tr>
                    <td colspan="3" id="title"><p>Apa yang kamu cari?</p></td>
                </tr>
                <tr>
                    <td>
                        <p>Pilih Wilayah</p>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Seluruh Indonesia<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <p>Pilih kategori</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Semua kategori <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <p>Pilih kategori</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Semua kategori <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </div>

            <div id="punya">
                <tr>
                    <td colspan="3" id="title"><p>Apa yang kamu punya?</p></td>
                </tr>
                <tr>
                    <td>
                        <p>Pilih Wilayah</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Seluruh Indonesia<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <p>Pilih kategori</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Semua kategori <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <p>Pilih kategori</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Semua kategori <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Motor</a></li>
                                <li><a href="#">Mobil</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </div>
        </table>

    </div>
</body>
</html>