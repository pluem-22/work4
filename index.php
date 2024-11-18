<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มกรอกข้อมูล</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">กรอกข้อมูล</h1>
    <form action="index3.php" method="POST" class="row g-3 needs-validation was-validated">
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
            <select class="form-select" id="validationCustom04" required="" name="province" id="province">
        <option selected disabled value="">Choose...</option>
      <option>เชียงใหม่</option>
      <option>นครราชสีมา</option>
      <option>กาญจนบุรี</option>
      <option>ตาก</option>
      <option>อุบลราชธานี	</option>
      <option>สุราษฎร์ธานี</option>
      <option>ชัยภูมิ	</option>
      <option>แม่ฮ่องสอน</option>
      <option>เพชรบูรณ์	</option>
      <option>ลำปาง	</option>
      <option>อุดรธานี	</option>
      <option>เชียงราย	</option>
      <option>น่าน	</option>
      <option>เลย	</option>
      <option>ขอนแก่น	</option>
      <option>พิษณุโลก	</option>
      <option>บุรีรัมย์	</option>
      <option>นครศรีธรรมราช	</option>
      <option>สกลนคร	</option>
      <option>นครสวรรค์	</option>
      <option>ศรีสะเกษ	</option>
      <option>กำแพงเพชร	</option>
      <option>ร้อยเอ็ด</option>
      <option>สุรินทร์	</option>
      <option>อุตรดิตถ์	</option>
      <option>สงขลา	</option>
      <option>สระแก้ว	</option>
      <option>กาฬสินธุ์	</option>
      <option>อุทัยธานี	</option>
      <option>สุโขทัย	</option>
      <option>แพร่	</option>
      <option>ประจวบคีรีขันธ์</option>	
      <option>จันทบุรี	</option>
      <option>พะเยา	</option>
      <option>เพชรบุรี	</option>
      <option>ลพบุรี	</option>
      <option>ชุมพร	</option>
      <option>นครพนม	</option>
      <option>สุพรรณบุรี	</option>
      <option>มหาสารคาม	</option>
      <option>ฉะเชิงเทรา	</option>
      <option>ราชบุรี	</option>
      <option>ตรัง	</option>
      <option>ปราจีนบุรี	</option>
      <option>กระบี่	</option>
      <option>พิจิตร	</option>
      <option>ยะลา	</option>
      <option>ลำพูน	</option>
      <option>นราธิวาส	</option>
      <option>ชลบุรี	</option>
      <option>มุกดาหาร	</option>
      <option>บึงกาฬ	</option>
      <option>พังงา	</option>
      <option>ยโสธร</option>
      <option>หนองบัวลำภู</option>	
      <option>สระบุรี	</option>
      <option>ระยอง</option>
      <option>พัทลุง</option>
      <option>ระนอง</option>
      <option>อำนาจเจริญ</option>	
      <option>หนองคาย	</option>
      <option>ตราด	</option>
      <option>พระนครศรีอยุธยา	</option>
      <option>สตูล	</option>
      <option>ชัยนาท	</option>
      <option>นครปฐม	</option>
      <option>นครนายก	</option>
      <option> ปัตตานี</option>
      <option> 	กรุงเทพมหานคร	</option>
      <option>ปทุมธานี	</option>
      <option>สมุทรปราการ</option>
      <option>อ่างทอง	</option>
      <option>สมุทรสาคร</option>
      <option>สิงห์บุรี	</option>
      <option>นนทบุรี	</option>
      <option>ภูเก็ต</option>
      <option>สมุทรสงคราม</option>



    </select>
        </select>
            
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <select class="form-select" id="validationCustom04" required="" name="district"id="district">
        <option selected disabled value="">Choose...</option>
        <option> อำเภอเมืองเชียงใหม่</option>
        <option>อำเภอแม่ริม</option>
        <option>อำเภอแม่แตง</option>
        <option>อำเภอเชียงดาว</option>
        <option>อำเภอสันทราย</option>
        <option>อำเภอสันกำแพง</option>
        <option>อำเภอหางดง</option>
        <option>อำเภอดอยสะเก็ด</option>
        <option>อำเภอลำพูน</option>
        <option>อำเภอสารภี</option>
        <option>อำเภอพาน</option>
        <option>อำเภอหางดง</option>
        <option>อำเภอช้างเผือก</option>
        <option>อำเภอแม่วาง</option>
        <option>อำเภอแม่ออน</option>
        <option>อำเภอจอมทอง</option>
        <option>อำเภอสะเมิง</option>
        <option>อำเภอป่าแดด</option>
        <option>อำเภอฝาง</option>
        <option>อำเภอแม่แจ่ม</option>
        <option>อำเภออมก๋อย</option>
        <option>อำเภอเวียงแหง</option>
        <option>อำเภอไชยปราการ</option>
        <option>อำเภอแม่ทะ</option>
        <option>อำเภอดอยเต่า </option>
       
    </select>
        </select>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">ตำบล</label>
            <select class="form-select" id="validationCustom04" required="" name="district2"id="district2">
        <option selected disabled value="">Choose...</option>
        <option>ตำบลศรีภูมิ</option>
        <option>ตำบลหายยา</option>
        <option>ตำบลช้างคลาน</option>
        <option>ตำบลป่าตัน</option>
        <option>ตำบลวัดเกต</option>
        <option>ตำบลหนองหอย</option>
        <option>ตำบลฟ้าฮ่าม</option>
        <option>ตำบลสุเทพ</option>
        <option>ตำบลสันติธรรม</option>
        <option>ตำบลตลาดกลาง</option>
        <option>ตำบลแม่แรม</option>
        <option>ตำบลท่าราบ</option>
        <option>ตำบลสันโป่ง</option>
        <option>ตำบลป่าสัก</option>
        <option>ตำบลริมใต้</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลแม่นาแก้ว</option>
        <option>ตำบลป่าแงะ</option>
        <option>ตำบลท่าตอน</option>
        <option>ตำบลบ้านแปะ</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลเชียงดาว</option>
        <option>ตำบลแม่นะ</option>
        <option>ตำบลเชียงดาว</option>
        <option>ตำบลศรีดงเย็น</option>
        <option>ตำบลสันทราย</option>
        <option>ตำบลแม่แฝก</option>
        <option>ตำบลบ้านกาด</option>
        <option>ตำบลดอนแก้ว</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลสันกำแพง</option>
        <option>ตำบลตองเซ็ง</option>
        <option>ตำบลบ้านถวาย</option>
        <option>ตำบลแม่แฝก</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลหางดง</option>
        <option>ตำบลบ้านแหวน</option>
        <option>ตำบลหนองควาย</option>
        <option>ตำบลขี้เหล็ก</option>
        <option>ตำบลดอยสะเก็ด</option>
        <option>ตำบลสบเปิง</option>
        <option>ตำบลป่าสัก</option>
        <option>ตำบลแม่สาบ</option>
        <option>ตำบลลำพูน</option>
        <option>ตำบลแม่ปั๋ง</option>
        <option>ตำบลป่าไม้แดง</option>
        <option>ตำบลสารภี</option>
        <option>ตำบลทุ่งเสี้ยว</option>
        <option>ตำบลหนองผึ้ง</option>
        <option>ตำบลพาน</option>
        <option>ตำบลท่าจำปี</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลช้างเผือก</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลป่าตัน</option>
        <option>ตำบลแม่วาง</option>
        <option>ตำบลแม่สา</option>
        <option>ตำบลหนองผึ้ง</option>
        <option>ตำบลแม่ออน</option>
        <option>ตำบลสบเปิง</option>
        <option>ตำบลป่าแงะ</option>
        <option>ตำบลจอมทอง</option>
        <option>ตำบลท่าข้าม</option>
        <option>ตำบลบ้านอีต่อง</option>
        <option>ตำบลสะเมิง</option>
        <option>ตำบลสะเมิงใต้</option>
        <option>ตำบลป่าแดด</option>
        <option>ตำบลแม่เจดีย์</option>
        <option>ตำบลฝาง</option>
        <option>ตำบลแม่คะ</option>
        <option>ตำบลแม่ฝาง</option>
        <option>ตำบลแม่แจ่ม</option>
        <option>ตำบลห้วยแม่ขมิ้น</option>
        <option>ตำบลแม่ออน</option>
        <option>ตำบลอมก๋อย</option>
        <option>ตำบลแม่ข่า</option>
        <option>ตำบลแม่ตื่น</option>
        <option>ตำบลเวียงแหง</option>
        <option>ตำบลแม่ข้า</option>
        <option>ตำบลไชยปราการ</option>
        <option>ตำบลแม่ทะ</option>
        <option>ตำบลแม่ทะ</option>
        <option>ตำบลแม่ขมิ้น</option>
        <option>ตำบลดอยเต่า</option>
        <option>ตำบลแม่ตื่น</option>
    </select>
        </select>
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
            <select class="form-select" id="validationCustom04" required="" name="province2" id="province2">
        <option selected disabled value="">Choose...</option>
      <option>เชียงใหม่</option>
      <option>นครราชสีมา</option>
      <option>กาญจนบุรี</option>
      <option>ตาก</option>
      <option>อุบลราชธานี	</option>
      <option>สุราษฎร์ธานี</option>
      <option>ชัยภูมิ	</option>
      <option>แม่ฮ่องสอน</option>
      <option>เพชรบูรณ์	</option>
      <option>ลำปาง	</option>
      <option>อุดรธานี	</option>
      <option>เชียงราย	</option>
      <option>น่าน	</option>
      <option>เลย	</option>
      <option>ขอนแก่น	</option>
      <option>พิษณุโลก	</option>
      <option>บุรีรัมย์	</option>
      <option>นครศรีธรรมราช	</option>
      <option>สกลนคร	</option>
      <option>นครสวรรค์	</option>
      <option>ศรีสะเกษ	</option>
      <option>กำแพงเพชร	</option>
      <option>ร้อยเอ็ด</option>
      <option>สุรินทร์	</option>
      <option>อุตรดิตถ์	</option>
      <option>สงขลา	</option>
      <option>สระแก้ว	</option>
      <option>กาฬสินธุ์	</option>
      <option>อุทัยธานี	</option>
      <option>สุโขทัย	</option>
      <option>แพร่	</option>
      <option>ประจวบคีรีขันธ์</option>	
      <option>จันทบุรี	</option>
      <option>พะเยา	</option>
      <option>เพชรบุรี	</option>
      <option>ลพบุรี	</option>
      <option>ชุมพร	</option>
      <option>นครพนม	</option>
      <option>สุพรรณบุรี	</option>
      <option>มหาสารคาม	</option>
      <option>ฉะเชิงเทรา	</option>
      <option>ราชบุรี	</option>
      <option>ตรัง	</option>
      <option>ปราจีนบุรี	</option>
      <option>กระบี่	</option>
      <option>พิจิตร	</option>
      <option>ยะลา	</option>
      <option>ลำพูน	</option>
      <option>นราธิวาส	</option>
      <option>ชลบุรี	</option>
      <option>มุกดาหาร	</option>
      <option>บึงกาฬ	</option>
      <option>พังงา	</option>
      <option>ยโสธร</option>
      <option>หนองบัวลำภู</option>	
      <option>สระบุรี	</option>
      <option>ระยอง</option>
      <option>พัทลุง</option>
      <option>ระนอง</option>
      <option>อำนาจเจริญ</option>	
      <option>หนองคาย	</option>
      <option>ตราด	</option>
      <option>พระนครศรีอยุธยา	</option>
      <option>สตูล	</option>
      <option>ชัยนาท	</option>
      <option>นครปฐม	</option>
      <option>นครนายก	</option>
      <option> ปัตตานี</option>
      <option> 	กรุงเทพมหานคร	</option>
      <option>ปทุมธานี	</option>
      <option>สมุทรปราการ</option>
      <option>อ่างทอง	</option>
      <option>สมุทรสาคร</option>
      <option>สิงห์บุรี	</option>
      <option>นนทบุรี	</option>
      <option>ภูเก็ต</option>
      <option>สมุทรสงคราม</option>



    </select>
        </select>
            
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">อำเภอ</label>
            <select class="form-select" id="validationCustom04" required="" name="district_2"id="district_2">
        <option selected disabled value="">Choose...</option>
        <option> อำเภอเมืองเชียงใหม่</option>
        <option>อำเภอแม่ริม</option>
        <option>อำเภอแม่แตง</option>
        <option>อำเภอเชียงดาว</option>
        <option>อำเภอสันทราย</option>
        <option>อำเภอสันกำแพง</option>
        <option>อำเภอหางดง</option>
        <option>อำเภอดอยสะเก็ด</option>
        <option>อำเภอลำพูน</option>
        <option>อำเภอสารภี</option>
        <option>อำเภอพาน</option>
        <option>อำเภอหางดง</option>
        <option>อำเภอช้างเผือก</option>
        <option>อำเภอแม่วาง</option>
        <option>อำเภอแม่ออน</option>
        <option>อำเภอจอมทอง</option>
        <option>อำเภอสะเมิง</option>
        <option>อำเภอป่าแดด</option>
        <option>อำเภอฝาง</option>
        <option>อำเภอแม่แจ่ม</option>
        <option>อำเภออมก๋อย</option>
        <option>อำเภอเวียงแหง</option>
        <option>อำเภอไชยปราการ</option>
        <option>อำเภอแม่ทะ</option>
        <option>อำเภอดอยเต่า </option>
       
    </select>
        </select>
        </div>
        <div class="col-md-4">
            <label for="district" class="form-label">ตำบล</label>
            <select class="form-select" id="validationCustom04" required="" name="district22"id="district22">
        <option selected disabled value="">Choose...</option>
        <option>ตำบลศรีภูมิ</option>
        <option>ตำบลหายยา</option>
        <option>ตำบลช้างคลาน</option>
        <option>ตำบลป่าตัน</option>
        <option>ตำบลวัดเกต</option>
        <option>ตำบลหนองหอย</option>
        <option>ตำบลฟ้าฮ่าม</option>
        <option>ตำบลสุเทพ</option>
        <option>ตำบลสันติธรรม</option>
        <option>ตำบลตลาดกลาง</option>
        <option>ตำบลแม่แรม</option>
        <option>ตำบลท่าราบ</option>
        <option>ตำบลสันโป่ง</option>
        <option>ตำบลป่าสัก</option>
        <option>ตำบลริมใต้</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลแม่นาแก้ว</option>
        <option>ตำบลป่าแงะ</option>
        <option>ตำบลท่าตอน</option>
        <option>ตำบลบ้านแปะ</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลเชียงดาว</option>
        <option>ตำบลแม่นะ</option>
        <option>ตำบลเชียงดาว</option>
        <option>ตำบลศรีดงเย็น</option>
        <option>ตำบลสันทราย</option>
        <option>ตำบลแม่แฝก</option>
        <option>ตำบลบ้านกาด</option>
        <option>ตำบลดอนแก้ว</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลสันกำแพง</option>
        <option>ตำบลตองเซ็ง</option>
        <option>ตำบลบ้านถวาย</option>
        <option>ตำบลแม่แฝก</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลหางดง</option>
        <option>ตำบลบ้านแหวน</option>
        <option>ตำบลหนองควาย</option>
        <option>ตำบลขี้เหล็ก</option>
        <option>ตำบลดอยสะเก็ด</option>
        <option>ตำบลสบเปิง</option>
        <option>ตำบลป่าสัก</option>
        <option>ตำบลแม่สาบ</option>
        <option>ตำบลลำพูน</option>
        <option>ตำบลแม่ปั๋ง</option>
        <option>ตำบลป่าไม้แดง</option>
        <option>ตำบลสารภี</option>
        <option>ตำบลทุ่งเสี้ยว</option>
        <option>ตำบลหนองผึ้ง</option>
        <option>ตำบลพาน</option>
        <option>ตำบลท่าจำปี</option>
        <option>ตำบลแม่แตง</option>
        <option>ตำบลช้างเผือก</option>
        <option>ตำบลหนองหาร</option>
        <option>ตำบลป่าตัน</option>
        <option>ตำบลแม่วาง</option>
        <option>ตำบลแม่สา</option>
        <option>ตำบลหนองผึ้ง</option>
        <option>ตำบลแม่ออน</option>
        <option>ตำบลสบเปิง</option>
        <option>ตำบลป่าแงะ</option>
        <option>ตำบลจอมทอง</option>
        <option>ตำบลท่าข้าม</option>
        <option>ตำบลบ้านอีต่อง</option>
        <option>ตำบลสะเมิง</option>
        <option>ตำบลสะเมิงใต้</option>
        <option>ตำบลป่าแดด</option>
        <option>ตำบลแม่เจดีย์</option>
        <option>ตำบลฝาง</option>
        <option>ตำบลแม่คะ</option>
        <option>ตำบลแม่ฝาง</option>
        <option>ตำบลแม่แจ่ม</option>
        <option>ตำบลห้วยแม่ขมิ้น</option>
        <option>ตำบลแม่ออน</option>
        <option>ตำบลอมก๋อย</option>
        <option>ตำบลแม่ข่า</option>
        <option>ตำบลแม่ตื่น</option>
        <option>ตำบลเวียงแหง</option>
        <option>ตำบลแม่ข้า</option>
        <option>ตำบลไชยปราการ</option>
        <option>ตำบลแม่ทะ</option>
        <option>ตำบลแม่ทะ</option>
        <option>ตำบลแม่ขมิ้น</option>
        <option>ตำบลดอยเต่า</option>
        <option>ตำบลแม่ตื่น</option>
    </select>
        </select>
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
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </div>
    </form>
</div>
</body>
</html>
