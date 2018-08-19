<!DOCTYPE html>
<html lang="en">
    <style>
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-brand {
            color: white;
        }
        .navbar-default .navbar-brand {
            font-size: 3rem;
        }
        #search-box {
            width: 390%;
        }
        .navbar {
            min-height: 60px;
        }
        div.container {
            margin-top: 5px;
        }
        a.navbar-brand {
            font-family: "Sweet Sensations Personal Use";
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #3B5998">
            <div class="container">
                <a class="navbar-brand" href="<?= site_url('../'); ?>" style="font-size: 5rem;">tuker.in</a>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-left">
                        <div class="input-group" id="search-box">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    
                    <button type="button" class="btn btn-warning navbar-btn navbar-right">+ Pasang Iklan</button>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= site_url('masuk/register'); ?>">Daftar</a></li>
                        <li><a href="<?= site_url('masuk/'); ?>">Masuk</a></li>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right"><li><a href="">Putra Christian</a></li></ul> -->
                </div>
            </div>
        </nav>
</html>