<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Fantasy PHP Profile & Loop (New Design)</title>

<style>
    /* ---------------- GLOBAL ---------------- */
    body{
        font-family: "Prompt", sans-serif;
        margin: 0;
        padding: 0;
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
        max-width: 900px;
        margin: auto;
        padding: 40px 20px 80px;
    }

    .section{
        background: rgba(255,255,255,0.12);
        backdrop-filter: blur(12px);
        padding: 30px;
        border-radius: 20px;
        margin-bottom: 30px;
        border: 1px solid rgba(255,255,255,0.25);
        box-shadow: 0 10px 30px rgba(0,0,0,0.45);
        animation: fadeIn .7s ease;
    }

    @keyframes fadeIn{
        from{opacity: 0; transform: translateY(10px);}
        to{opacity: 1; transform: translateY(0);}
    }

    h1,h2{
        margin-top: 0;
    }

    /* ---------------- PROFILE ---------------- */
    .profile-box{
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        align-items: flex-start;
    }

    .profile-box img{
        width: 200px;
        height: 200px;
        border-radius: 18px;
        object-fit: cover;
        border: 2px solid rgba(255,255,255,0.55);
        box-shadow: 0 5px 25px rgba(0,0,0,0.45);
    }

    .contact a{
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #fff;
        padding: 8px 15px;
        margin-right: 6px;
        margin-top: 10px;
        border-radius: 12px;
        background: rgba(255,255,255,0.2);
        border: 1px solid rgba(255,255,255,0.3);
        transition: 0.25s;
    }

    .contact a:hover{
        background: rgba(255,255,255,0.3);
    }

    .contact img{
        width: 20px;
        height: 20px;
    }

    /* ---------------- ACCORDION ---------------- */
    .accordion-item{
        margin-bottom: 15px;
        border-radius: 14px;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.25);
    }

    .accordion-title{
        width: 100%;
        text-align: left;
        background: rgba(0,0,0,0.3);
        padding: 15px 20px;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        border: none;
        outline: none;
        transition: .3s;
    }

    .accordion-title:hover{
        background: rgba(255,255,255,0.2);
    }

    .accordion-content{
        display: none;
        padding: 20px;
        background: rgba(255,255,255,0.1);
    }

    pre{
        background: rgba(0,0,0,0.55);
        padding: 15px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.2);
        overflow-x: auto;
        font-size: 16px;
        color: #00f7ff;
        white-space: pre-wrap;
    }
</style>
</head>

<body>

<div class="container">

<?php
// ===========================
// PHP ข้อมูลนักศึกษา
// ===========================
$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$fullname = "นายธีรภัทร์ จันทรา";
$nickname = "บาส";
$student_id = "67040233102";
$intro = "ฟังเพลง เล่นเกม ดูหนัง เล่นดนตรี เล่นกีฬา และเขียนโค้ด";
$picture = "IMG_9061.jpg";

// Social icons
$icon_fb = "https://cdn-icons-png.flaticon.com/512/124/124010.png";
$icon_ig = "https://cdn-icons-png.flaticon.com/512/2111/2111463.png";
$icon_email = "https://cdn-icons-png.flaticon.com/512/732/732200.png";

$facebook = "https://www.facebook.com/bas.teerapat.984509";
$instagram = "https://www.instagram.com/_blackbas.z";
$email = "67040233102@udru.ac.th";
?>

<!-- =========================== PROFILE =========================== -->
<div class="section">
    <h1>ข้อมูลนักศึกษา</h1>

    <div class="profile-box">

        <!-- รูป -->
        <img src="<?= $picture ?>" alt="Profile">

        <!-- รายละเอียด -->
        <div>
            <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
            <p><b>คณะ:</b> <?= $faculty ?></p>
            <p><b>สาขา:</b> <?= $major ?></p>
            <p><b>ชื่อ–นามสกุล:</b> <?= $fullname ?></p>
            <p><b>ชื่อเล่น:</b> <?= $nickname ?></p>
            <p><b>รหัสนักศึกษา:</b> <?= $student_id ?></p>
            <p><b>งานอดิเรก:</b> <?= $intro ?></p>

            <div class="contact">
                <a href="<?= $facebook ?>" target="_blank"><img src="<?= $icon_fb ?>">Facebook</a>
                <a href="<?= $instagram ?>" target="_blank"><img src="<?= $icon_ig ?>">Instagram</a>
                <a href="mailto:<?= $email ?>"><img src="<?= $icon_email ?>"><?= $email ?></a>
            </div>
        </div>
    </div>
</div>


<!-- =========================== LOOP MENU =========================== -->
<div class="section">
    <h1>งาน LOOP ทั้งหมด</h1>

    <!-- ------------ FOR ------------ -->
    <div class="accordion-item">
        <button class="accordion-title">Loop FOR</button>
        <div class="accordion-content">
            <pre>
<?php
for($i=1;$i<=4;$i++){ echo str_repeat("*",$i)."\n"; }
for($i=1;$i<=3;$i++){ echo str_repeat($i." ",4)."\n"; }
for($i=1;$i<=3;$i++){ echo str_repeat($i." ",$i)."\n"; }

echo str_repeat("* ",6)."\n";
for($i=1;$i<=3;$i++){ echo "* ".str_repeat($i." ",4)."*\n"; }
echo str_repeat("* ",6)."\n";

for($i=3;$i>=1;$i--){ echo str_repeat($i." ",$i)."\n"; }
?>
            </pre>
        </div>
    </div>

    <!-- ------------ WHILE ------------ -->
    <div class="accordion-item">
        <button class="accordion-title">Loop WHILE</button>
        <div class="accordion-content">
            <pre>
<?php
$i=1; while($i<=4){ echo str_repeat("*",$i)."\n"; $i++; }
$i=1; while($i<=3){ echo str_repeat($i." ",4)."\n"; $i++; }
$i=1; while($i<=3){ echo str_repeat($i." ",$i)."\n"; $i++; }

echo str_repeat("* ",6)."\n";
$i=1; while($i<=3){ echo "* ".str_repeat($i." ",4)."*\n"; $i++; }
echo str_repeat("* ",6)."\n";

$i=3; while($i>=1){ echo str_repeat($i." ",$i)."\n"; $i--; }
?>
            </pre>
        </div>
    </div>

    <!-- ------------ DO-WHILE ------------ -->
    <div class="accordion-item">
        <button class="accordion-title">Loop DO-WHILE</button>
        <div class="accordion-content">
            <pre>
<?php
$i=1; 
do{ echo str_repeat("*",$i)."\n"; $i++; }while($i<=4);

$i=1;
do{ echo str_repeat($i." ",4)."\n"; $i++; }while($i<=3);

$i=1;
do{ echo str_repeat($i." ",$i)."\n"; $i++; }while($i<=3);

echo str_repeat("* ",6)."\n";
$i=1;
do{ echo "* ".str_repeat($i." ",4)."*\n"; $i++; }while($i<=3);
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
    // ========== ระบบ accordion ==========
    const accordions = document.querySelectorAll(".accordion-title");

    accordions.forEach(btn => {
        btn.addEventListener("click", () => {
            const content = btn.nextElementSibling;
            const isOpen = content.style.display === "block";
            
            // ปิดทั้งหมดก่อน
            document.querySelectorAll(".accordion-content").forEach(c => c.style.display = "none");

            // ถ้าไม่ได้เปิดอยู่ ให้เปิด
            if (!isOpen){
                content.style.display = "block";
            }
        });
    });
</script>

</body>
</html>
