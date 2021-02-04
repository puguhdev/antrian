<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/frontend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/frontend/css/styles.css')?>">
</head>
<body>

    <div class="jumbotron jumbotron-fluid bg-primary text-white text-center">
        <div class="container">
            <h4>Silahkan Sentuh Tombol Sesuai Dengan Tujuan Anda</h4>
            <a href="<?=site_url('admin/antrian/reset')?>" class="btn btn-danger"><i class="fas fa-fw fa-times"></i> Reset Antrian</a>
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center no-gutters">
            <div class="col-md-3 text-center">
                <h5>Nomor Antrian Anda Adalah :</h5> <h1><?=$antrian;?></h1>
            </div>
        </div>

        <div class="row" style="margin-top:30px;">
            <div class="col-md-3 mb-3">
                <form method="post" action="<?=site_url('admin/antrian/poli_gigi')?>">
                    <input type="hidden" name="no_antrian" value="<?=$antrian;?>">
                    <button type="submit" name="submit" class="btn btn-antrian btn-block btn-lg btn-primary"><i class="fas fa-fw fa-print"></i> Poli Gigi</button>
                </form>
            </div>
            <div class="col-md-3 mb-3">
                <form method="post" action="<?=site_url('admin/antrian/poli_umum')?>">
                    <input type="hidden" name="no_antrian" value="<?=$antrian;?>">
                    <button type="submit" name="submit" class="btn btn-antrian btn-block btn-lg btn-success"><i class="fas fa-fw fa-print"></i> Poli Umum</button>
                </form>
            </div>
            <div class="col-md-3 mb-3">
                <form method="post" action="<?=site_url('admin/antrian/poli_ibu_anak')?>">
                    <input type="hidden" name="no_antrian" value="<?=$antrian;?>">
                    <button type="submit" name="submit" class="btn btn-antrian btn-block btn-lg btn-info"><i class="fas fa-fw fa-print"></i> Poli Ibu & Anak</button>
                </form>
            </div>
            <div class="col-md-3 mb-3">
                <form method="post" action="<?=site_url('admin/antrian/poli_mata')?>">
                    <input type="hidden" name="no_antrian" value="<?=$antrian;?>">
                    <button type="submit" name="submit" class="btn btn-antrian btn-block btn-lg btn-warning"><i class="fas fa-fw fa-print"></i> Poli Mata</button>
                </form>
            </div>
        </div>

    </div>
    

    <!-- Script JS -->
    <script src="<?=site_url('vendor/backend/js/jquery.min.js')?>"></script>
    <script src="<?=site_url('vendor/frontend/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>