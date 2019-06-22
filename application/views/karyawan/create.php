<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            KARYAWAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Karyawan</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('karyawan/create') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Nama" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Kualitas Kerja</label>
                        <input type="number" class="form-control" name="c1" placeholder="Enter Kualitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kuantitas Kerja</label>
                        <input type="number" class="form-control" name="c2" placeholder="Enter Kuantitas Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Inisiatif Kerja</label>
                        <input type="number" class="form-control" name="c3" placeholder="Enter Inisiatif Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c4" placeholder="Enter Disiplin Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Tanggung Jawab pada Pekerjaan</label>
                        <input type="number" class="form-control" name="c5" placeholder="Tanggung Jawab pada Pekerjaan" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c6" placeholder="Motivasi Kerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c7" placeholder="Motivasi dalam Bekerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c8" placeholder="Pemahaman dalam Bekerja" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Disiplin Kerja</label>
                        <input type="number" class="form-control" name="c9" placeholder="Penyesuaian Diri dalam Lingkungan" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->