<h1>Data User</h1>
<a href="/home/tambah">Tambah Data</a> <!-- Penambahan Button tambah data  -->
<ul>
<?php foreach($user as $u): ?>
    <li><?= $u['nama'] ?> - <?= $u['email'] ?></li>
<?php endforeach; ?>
</ul>
