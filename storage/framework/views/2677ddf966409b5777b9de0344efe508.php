<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>

<body>
    <h1>INI HALAMAN MAHASISWA</h1>

    <h4>Halaman Tabel Mahasiswa</h4>
    <a href="/mahasiswa/create">Tambah Mahasiswa</a>

    <!-- INI CONTOH TABLE -->
    <table border="1" style="border-collapse: collapse;">
        <thead style="background-color: pink
        ;">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($m->id); ?></td>
                    <td><?php echo e($m->nim); ?></td>
                    <td><?php echo e($m->nama_mahasiswa); ?></td>
                    <td><?php echo e($m->jk); ?></td>
                    <td><?php echo e($m->ttl); ?></td>
                    <td><?php echo e($m->alamat); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <form action="" method="get"></form>
</body>

</html>
<?php /**PATH D:\ELAA\elaa-pbwd\resources\views/mahasiswa.blade.php ENDPATH**/ ?>