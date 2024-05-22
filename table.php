<?php 

include("layout/header.php");

$data = select("SELECT * FROM `usr` ORDER BY id DESC"); 

?>

<div class="container mt-5">

<h1>DataUser</h1>
<hr>
<a href="create.php" class="btn btn-primary mb-4">Tambah</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        <?php foreach( $data as $table ) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $table['nama'] ?></td>
                <td><?= $table['email'] ?></td>
                <td><?= $table['password'] ?></td>
                <td width="20%">
                    <a href="edit.php?id=<?= $table['id']; ?>" class="btn btn-outline-success">Ubah</a>
                    <a href="hapus.php?id=<?= $table['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('Yakin mau dihapus?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include("layout/footer.php"); ?>