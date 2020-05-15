<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="" class="btn btn-success">TAMBAH DATA</a>
    </div>
    <?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Berita</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>Pizza Lezat dengan toping daging saus bulgogi</td>
                <td>50000</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pasta</td>
                <td>Pasta Daging saus tomat dengan keju Meleleh</td>
                <td>35000</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ayam Lada</td>
                <td>Ayam goreng lada dengan nasi </td>
                <td>45000</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
