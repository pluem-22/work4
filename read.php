<?php
include 'config.php'; // เชื่อมต่อฐานข้อมูลผ่าน config.php

// READ: ดึงข้อมูลทั้งหมด
function readData($dbcon) {
    $sql = "SELECT * FROM `post_office`";
    $query = $dbcon->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// ดึงข้อมูลทั้งหมด
$data = readData($dbcon);

// DELETE: ลบข้อมูล
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $sql = "DELETE FROM `post_office` WHERE `id` = :id";
    $query = $dbcon->prepare($sql);
    $query->bindParam(':id', $_GET['delete']);
    $query->execute();
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการข้อมูล</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">รายการข้อมูล</h1>
    <a href="index.php" class="btn btn-primary mb-3">เพิ่มข้อมูลใหม่</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>บ้านเลขที่</th>
            <th>จังหวัด</th>
            <th>อำเภอ</th>
            <th>ตำบล</th>
            <th>รหัสไปรษณีย์</th>
            <th>เบอร์โทร</th>
            <th>วันที่</th>
            <th>การจัดการ</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['last']) ?></td>
                    <td><?= htmlspecialchars($row['home']) ?></td>
                    <td><?= htmlspecialchars($row['province']) ?></td>
                    <td><?= htmlspecialchars($row['district']) ?></td>
                    <td><?= htmlspecialchars($row['district_2']) ?></td>
                    <td><?= htmlspecialchars($row['zip']) ?></td>
                    <td><?= htmlspecialchars($row['number']) ?></td>
                    <td><?= htmlspecialchars($row['date']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                        <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ?');">ลบ</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="10" class="text-center">ไม่มีข้อมูล</td>
            </tr>
        <?php endif; ?>
        </tbody>
        <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>บ้านเลขที่</th>
            <th>จังหวัด</th>
            <th>อำเภอ</th>
            <th>ตำบล</th>
            <th>รหัสไปรษณีย์</th>
            <th>เบอร์โทร</th>
            <th>วันที่</th>
            <th>การจัดการ</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name2']) ?></td>
                    <td><?= htmlspecialchars($row['last2']) ?></td>
                    <td><?= htmlspecialchars($row['home2']) ?></td>
                    <td><?= htmlspecialchars($row['province2']) ?></td>
                    <td><?= htmlspecialchars($row['district2']) ?></td>
                    <td><?= htmlspecialchars($row['district22']) ?></td>
                    <td><?= htmlspecialchars($row['zip2']) ?></td>
                    <td><?= htmlspecialchars($row['number2']) ?></td>
                    <td><?= htmlspecialchars($row['date2']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                        <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ?');">ลบ</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="10" class="text-center">ไม่มีข้อมูล</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    </table>
</div>

</body>
</html>
