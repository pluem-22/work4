<?php
include 'config.php'; // เชื่อมต่อฐานข้อมูลผ่าน config.php

// CREATE: เพิ่มข้อมูล
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    $sql = "INSERT INTO `post_office` (`name`, `last`, `home`, `province`, `district`, `district_2`,`zip`, `number`, `date`,`name2`, `last2`, `home2`, `province2`, `district2`, `district22`,`zip2`, `number2`, `date2`) 
            VALUES (:name, :last, :home, :province, :district, :district_2, :zip, :number, :date,:name2, :last2, :home2, :province2, :district2, :district22, :zip2, :number2, :date2)";
    $query = $dbcon->prepare($sql);
    $data = [
        ':name' => $_POST['name'],
        ':last' => $_POST['last'],
        ':home' => $_POST['home'],
        ':province' => $_POST['province'],
        ':district' => $_POST['district'],
        ':district_2' => $_POST['district_2'],
        ':zip' => $_POST['zip'],
        ':number' => $_POST['number'],
        ':date' => $_POST['date'],
        ':name2' => $_POST['name2'],
        ':last2' => $_POST['last2'],
        ':home2' => $_POST['home2'],
        ':province2' => $_POST['province2'],
        ':district2' => $_POST['district2'],
        ':district22' => $_POST['district22'],
        ':zip2' => $_POST['zip2'],
        ':number2' => $_POST['number2'],
        ':date2' => $_POST['date2']
    ];
    if ($query->execute($data)) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ!'); window.location='read.php';</script>";
        exit;
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูล!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">เพิ่มข้อมูลใหม่</h1>
    <form method="POST" class="row g-3 needs-validation was-validated">
        <input type="hidden" name="action" value="create">
        <div class="col-md-6">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-6">
            <label for="last" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="last" name="last" required>
        </div>
        <div class="col-md-4">
            <label for="home" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" id="home" name="home" required>
        </div>
        <div class="col-md-4">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" id="province" name="province" required>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district" name="district" required>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district_2" name="district_2" required>
        </div>
        <div class="col-md-4">
            <label for="zip" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="zip" name="zip" required>
        </div>
        <div class="col-md-4">
            <label for="number" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="col-md-4">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="col-md-12">
        </div>
    </form>
</div>
<div class="container">
    <h1 class="mt-4">เพิ่มข้อมูลใหม่</h1>
    <form method="POST" class="row g-3 needs-validation was-validated">
        <input type="hidden" name="action" value="create">
        <div class="col-md-6">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name2" name="name2" required>
        </div>
        <div class="col-md-6">
            <label for="last" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="last2" name="last2" required>
        </div>
        <div class="col-md-4">
            <label for="home" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" id="home2" name="home2" required>
        </div>
        <div class="col-md-4">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" id="province2" name="province2" required>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district2" name="district2" required>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district22" name="district22" required>
        </div>
        <div class="col-md-4">
            <label for="zip" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="zip2" name="zip2" required>
        </div>
        <div class="col-md-4">
            <label for="number" class="form-label">เบอร์โทร</label>
            <input type="text" class="form-control" id="number2" name="number2" required>
        </div>
        <div class="col-md-4">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date2" name="date2" required>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
            <a href="read.php" class="btn btn-secondary">ดูรายการข้อมูล</a>
        </div>
    </form>
</div>
</body>
</html>
