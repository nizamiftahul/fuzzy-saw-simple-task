<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            KARYAWAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Karyawan</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="<?= site_url('karyawan/view_saw') ?>" class="btn btn-primary">Perangkingan</a>
                <a href="<?= site_url('karyawan/create') ?>" class="btn btn-success">Create</a>
            </div>

            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th style="text-align:center">C1</th>
                            <th style="text-align:center">C2</th>
                            <th style="text-align:center">C3</th>
                            <th style="text-align:center">C4</th>
                            <th style="text-align:center">C5</th>
                            <th style="text-align:center">C6</th>
                            <th style="text-align:center">C7</th>
                            <th style="text-align:center">C8</th>
                            <th style="text-align:center">C9</th>
                            <th width="100" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v->nama . '</td>';
                            echo '<td style="text-align:center">' . $v->c1 . '</td>';
                            echo '<td style="text-align:center">' . $v->c2 . '</td>';
                            echo '<td style="text-align:center">' . $v->c3 . '</td>';
                            echo '<td style="text-align:center">' . $v->c4 . '</td>';
                            echo '<td style="text-align:center">' . $v->c5 . '</td>';
                            echo '<td style="text-align:center">' . $v->c6 . '</td>';
                            echo '<td style="text-align:center">' . $v->c7 . '</td>';
                            echo '<td style="text-align:center">' . $v->c8 . '</td>';
                            echo '<td style="text-align:center">' . $v->c9 . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('karyawan/update/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a href="' . site_url('karyawan/delete/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->