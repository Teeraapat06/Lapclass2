<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Fantasy PHP Profile & Loop</title>

<style>
    body{
        font-family: "Prompt", sans-serif;
        margin: 0;
        padding: 40px;
        display: flex;
        justify-content: center;
        background: linear-gradient(120deg,#0a0f33,#12003b,#24004f,#000);
        background-size: 300% 300%;
        animation: spaceMove 15s infinite alternate ease-in-out;
        color: white;
    }

    @keyframes spaceMove{
        0%{background-position: 0% 0%;}
        100%{background-position: 100% 100%;}
    }

    .container{
        width: 900px;
    }

    /* ========== Glass Card ========== */
    .card{
        background: rgba(255,255,255,0.12);
        backdrop-filter: blur(12px);
        padding: 30px;
        margin-bottom: 30px;
        border-radius: 18px;
        border: 1px solid rgba(255,255,255,0.25);
        box-shadow: 0 10px 30px rgba(0,0,0,0.45);
        animation: fadeIn .5s ease;
    }

    @keyframes fadeIn{
        from{opacity: 0; transform: translateY(10px);}
        to{opacity: 1; transform: translateY(0); }
    }

    h2{
        margin-top: 0;
        color: #fff;
        font-size: 28px;
        font-weight: 600;
    }

    /* โปรไฟล์ */
    .profile-box{
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
        align-items: flex-start;
    }

    .profile-box img{
        width: 190px;
        height: 190px;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.35);
        border: 2px solid rgba(255,255,255,0.5);
    }

    .contact a{
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        background: rgba(255,255,255,0.15);
        padding: 10px 14px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.3);
        box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        transition: 0.3s;
        margin-bottom: 8px;
    }

    .contact a:hover{
        background: rgba(255,255,255,0.22);
    }

    .contact img{
        width: 22px;
        height: 22px;
    }

    /* ปุ่ม */
    .btn{
        padding: 10px 20px;
        background: #8935ffff;
        color: white;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        margin-top: 20px;
        font-size: 15px;
        transition: 0.25s;
        box-shadow: 0 5px 14px rgba(0,0,0,0.4);
    }

    .btn:hover{
        background: #6ca4ffff;
    }

    /* ส่วนของ Loop */
    .loop-container{
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .col{
        flex: 1;
        min-width: 260px;
        background: rgba(255,255,255,0.12);
        padding: 20px;
        border-radius: 15px;
        border: 1px solid rgba(255,255,255,0.25);
        box-shadow: 0 6px 20px rgba(0,0,0,0.35);
    }

    .col h3{
        text-align: center;
        color: #fff;
        margin: 0 0 10px 0;
    }

    pre{
        background: rgba(0,0,0,0.45);
        padding: 10px;
        border-radius: 10px;
        font-size: 17px;
        white-space: pre-wrap;
        margin-top: 10px;
        display: none;
        color: #0ff7ff;
        border: 1px solid rgba(255,255,255,0.25);
    }

    .show-btn{
        background: #00b4ff;
        padding: 8px 15px;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 14px;
        margin-bottom: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        transition: 0.25s;
    }

    .show-btn:hover{
        background: #0092d1;
    }

</style>
</head>
<body>

<div class="container">

<?php
// ------------------------------
// ข้อมูลแนะนำตัว
// ------------------------------
$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$fullname = "นายธีรภัทร์ จันทรา";
$nickname = "บาส";
$intro = "ฟังเพลง เล่นเกม ดูหนัง เล่นดนตรี เล่นกีฬา และเขียนโค้ด";
$picture = "IMG_9061.jpg";

// Social Icons
$icon_fb = "https://cdn-icons-png.flaticon.com/512/124/124010.png";
$icon_ig = "https://cdn-icons-png.flaticon.com/512/2111/2111463.png";
$icon_email = "https://cdn-icons-png.flaticon.com/512/732/732200.png";

$facebook = "https://www.facebook.com/bas.teerapat.984509";
$instagram = "https://www.instagram.com/_blackbas.z";
$email = "67040233102@udru.ac.th";
?>

<!-- ========= PAGE 1 : PROFILE ========= -->
<div id="profile-page" class="card">
    <h2>ข้อมูลนักศึกษา</h2>

    <div class="profile-box">
        <img src="<?= $picture ?>">

        <div>
            <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
            <p><b>คณะ:</b> <?= $faculty ?></p>
            <p><b>สาขา:</b> <?= $major ?></p>
            <p><b>ชื่อ–นามสกุล:</b> <?= $fullname ?></p>
            <p><b>ชื่อเล่น:</b> <?= $nickname ?></p>
            <p><b>งานอดิเรก:</b> <?= $intro ?></p>

            <div class="contact">
                <a href="<?= $facebook ?>" target="_blank"><img src="<?= $icon_fb ?>"> Facebook</a>
                <a href="<?= $instagram ?>" target="_blank"><img src="<?= $icon_ig ?>"> Instagram</a>
                <a href="mailto:<?= $email ?>"><img src="<?= $icon_email ?>"> <?= $email ?></a>
            </div>

            <button class="btn" onclick="showPage('loop-page')">ดูงานเขียน Loop</button>
        </div>
    </div>
</div>


<!-- ========= PAGE 2 : LOOP ========= -->
<div id="loop-page" class="card" style="display:none;">
    <h2>งาน LOOP ทั้งหมด</h2>

    <button class="btn" onclick="showPage('profile-page')">ย้อนกลับ</button>

    <div class="loop-container">

        <!-- FOR -->
        <div class="col">
            <h3>Loop FOR</h3>
            <button class="show-btn" onclick="toggle('for-loop')">แสดงผลลัพธ์</button>
            <pre id="for-loop">
<?php
// 1) *
for($i=1;$i<=4;$i++){ echo str_repeat("*",$i)."\n"; }

// 2) 1 1 1 1
for($i=1;$i<=3;$i++){ echo str_repeat($i." ",4)."\n"; }

// 3) 1 / 2 2 / 3 3 3
for($i=1;$i<=3;$i++){ echo str_repeat($i." ",$i)."\n"; }

// 4) กรอบ 5x5 พร้อมตัวเลขตรงกลาง
echo str_repeat("* ",6)."\n";
for($i=1;$i<=3;$i++){
    echo "* ".str_repeat($i." ",4)."*\n";
}
echo str_repeat("* ",6)."\n";

// 5) 3 3 3 / 2 2 / 1
for($i=3;$i>=1;$i--){ echo str_repeat($i." ",$i)."\n"; }
?>
            </pre>
        </div>

        <!-- WHILE -->
        <div class="col">
            <h3>Loop WHILE</h3>
            <button class="show-btn" onclick="toggle('while-loop')">แสดงผลลัพธ์</button>
            <pre id="while-loop">
<?php
$i=1; while($i<=4){ echo str_repeat("*",$i)."\n"; $i++; }

$i=1; while($i<=3){ echo str_repeat($i." ",4)."\n"; $i++; }

$i=1; while($i<=3){ echo str_repeat($i." ",$i)."\n"; $i++; }

// กรอบ
echo str_repeat("* ",6)."\n";
$i=1;
while($i<=3){
    echo "* ".str_repeat($i." ",4)."*\n";
    $i++;
}
echo str_repeat("* ",6)."\n";

$i=3; while($i>=1){ echo str_repeat($i." ",$i)."\n"; $i--; }
?>
            </pre>
        </div>

        <!-- DO WHILE -->
        <div class="col">
            <h3>Loop DO-WHILE</h3>
            <button class="show-btn" onclick="toggle('do-loop')">แสดงผลลัพธ์</button>
            <pre id="do-loop">
<?php
$i=1; 
do{ echo str_repeat("*",$i)."\n"; $i++; }while($i<=4);

$i=1;
do{ echo str_repeat($i." ",4)."\n"; $i++; }while($i<=3);

$i=1;
do{ echo str_repeat($i." ",$i)."\n"; $i++; }while($i<=3);

// กรอบ
echo str_repeat("* ",6)."\n";
$i=1;
do{
    echo "* ".str_repeat($i." ",4)."*\n";
    $i++;
}while($i<=3);
echo str_repeat("* ",6)."\n";

$i=3;
do{ echo str_repeat($i." ",$i)."\n"; $i--; }while($i>=1);
?>
            </pre>
        </div>

    </div>
</div>

</div>

<script>
function toggle(id){
    const e = document.getElementById(id);
    e.style.display = e.style.display === "block" ? "none" : "block";
}

function showPage(id){
    document.getElementById("profile-page").style.display = "none";
    document.getElementById("loop-page").style.display = "none";
    document.getElementById(id).style.display = "block";
}
</script>

</body>
</html>
