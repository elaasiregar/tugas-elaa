<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prodi</title>
</head>

<body>
    <h1>INI HALAMAN PROGRAM STUDI</h1>

    <h4>Halaman Tabel Program Studi</h4>
    <a href="/prodi/create">Tambah Program Studi</a>

    <!-- INI CONTOH TABLE -->
    <table border="1" style="border-collapse: collapse;">
        <thead style="background-color: yellow;">
            <tr>

                <th>NO</th>
                <th>Nama Prodi</th>
                <th>Fakultas</th>
                <th>Kaprodi</th>
                <th>Sekprodi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p->id); ?></td>
                    <td><?php echo e($p->nama_prodi); ?></td>
                    <td><?php echo e($p->fakultas); ?></td>
                    <td><?php echo e($p->kaprodi); ?></td>
                    <td><?php echo e($p->sekprodi); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <form action="" method="get"></form>
</body>

</html>
<?php /**PATH D:\ELAA\elaa-pbwd\resources\views/prodi.blade.php ENDPATH**/ ?>