<?php
// ====== แก้ข้อมูลตรงนี้ได้เลย ======
$data = [
  "name" => "CHANATHIP\nCHANGKAEW",
  "contact" => [
    "chanatip18366@gmail.com",
    "+66944240821",
    "IG chanatip_art",
    "FB chanatip_changkaew",
  ],
  "objective" => "เป้าหมายในการสร้างสรรค์ผลงานและประสบการณ์ดิจิทัลที่ตอบโจทย์ทั้งด้านสุนทรียภาพและฟังก์ชันการใช้งาน ผ่านความเชี่ยวชาญด้าน UX/UI Research & Design และควบคู่กับการเขียนโค้ด เพื่อสร้างผลงานที่ตอบโจทย์ทั้งด้านการใช้งานและความสวยงาม มุ่งเน้นการออกแบบที่เข้าใจผู้ใช้จริง และสามารถนำไปพัฒนาเป็นผลิตภัณฑ์ดิจิทัลที่ใช้งานได้จริง ทั้งในเว็บไซต์ แอปพลิเคชัน และระบบเชิงโต้ตอบต่าง ๆ",
  "skills" => [
    ["Photoshop", 92],
    ["Illustrator", 88],
    ["Dreamweaver", 75],
    ["May(a)", 70],
    ["Blender", 78],
    ["VS Code", 82],
  ],
  "education" => [
    "2023 - ปัจจุบัน",
    "สถาบันเทคโนโลยีจิตรลดา",
    "ระดับปริญญาตรี",
    "วุฒิการศึกษาหลักสูตรศิลศาสตรบัณฑิต",
    "คณะเทคโนโลยีดิจิทัล",
    "สาขาการออกแบบดิจิทัลและเทคโนโลยี",
  ],
  "experiences" => [
    [
      "time" => "2023 - ปัจจุบัน",
      "title1" => "FiveM",
      "title2" => "Texture Editing &\n3D Model Modifications",
      "desc" => "รับงานด้านการพัฒนาเกมการแก้ไข TextureลดขนาดโพลิกอนของMode",
    ],
    [
      "time" => "2024 - ปัจจุบัน",
      "title1" => "FiveM",
      "title2" => "Write code",
      "desc" => "สำหรับเกมและสร้างสคริปเกมรวมถึงการออกแบบ Ui",
    ],
  ],
];

function e($s){ return htmlspecialchars($s, ENT_QUOTES, "UTF-8"); }
?>
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resume</title>

  <!-- ใกล้เคียงต้นฉบับ: หนา-เหลี่ยม + ไทยอ่านง่าย -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600;700&family=Orbitron:wght@600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="page">

    <!-- จุดด้านบนกลาง -->
    <div class="top-dots" aria-hidden="true">
      <?php for($i=0;$i<9;$i++): ?><span></span><?php endfor; ?>
    </div>

    <!-- กากบาทมุมๆ -->
    <div class="corner corner-tl" aria-hidden="true">
      <span>×</span><span>×</span><span>×</span><span>×</span>
    </div>
    <div class="corner corner-tr" aria-hidden="true">
      <span>×</span><span>×</span><span>×</span><span>×</span>
    </div>
    <div class="corner corner-bl" aria-hidden="true">
      <span>×</span><span>×</span><span>×</span><span>×</span>
    </div>
    <div class="corner corner-br" aria-hidden="true">
      <span>×</span><span>×</span><span>×</span><span>×</span>
    </div>

    <!-- จุดด้านล่างกลาง -->
    <div class="bottom-dots" aria-hidden="true">
      <?php for($i=0;$i<9;$i++): ?><span></span><?php endfor; ?>
    </div>

    <div class="cols">

      <!-- ===== LEFT ===== -->
      <section class="col left">
        <div class="logo-wrap">
          <!-- โลโก้ ART แบบ SVG ไล่สี + เส้นวงโค้ง -->
          <svg class="art-logo" viewBox="0 0 520 260" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="ART logo">
            <defs>
              <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                <stop offset="0" stop-color="#41f0ff"/>
                <stop offset="0.35" stop-color="#6a53ff"/>
                <stop offset="0.7" stop-color="#ff4bd8"/>
                <stop offset="1" stop-color="#ff5a2a"/>
              </linearGradient>
              <linearGradient id="g2" x1="0" x2="1" y1="1" y2="0">
                <stop offset="0" stop-color="#6a53ff"/>
                <stop offset="1" stop-color="#ff4bd8"/>
              </linearGradient>
            </defs>

            <!-- จุดสีๆ ซ้ายบน -->
            <g opacity="0.95">
              <circle cx="70" cy="62" r="10" fill="#6a53ff"/>
              <circle cx="105" cy="62" r="10" fill="#41f0ff"/>
              <circle cx="140" cy="62" r="10" fill="#ff4bd8"/>
              <circle cx="70" cy="95" r="10" fill="#2c1cff"/>
              <circle cx="105" cy="95" r="10" fill="#6a53ff"/>
            </g>

            <!-- วงโค้ง -->
            <path d="M345,40 C410,25 460,80 430,125 C395,178 305,172 285,110 C265,55 310,45 345,40 Z"
                  fill="none" stroke="url(#g2)" stroke-width="14" stroke-linecap="round"/>
            <path d="M330,58 C385,48 420,88 402,118 C382,152 320,150 308,112 C296,76 304,63 330,58 Z"
                  fill="none" stroke="url(#g2)" stroke-width="8" stroke-linecap="round" opacity="0.7"/>

            <!-- ART -->
            <text x="60" y="170" font-family="Orbitron, sans-serif" font-size="110" font-weight="800"
                  fill="url(#g1)" letter-spacing="6">ART</text>
          </svg>

          <div class="name">
            <?php foreach(explode("\n", $data["name"]) as $line): ?>
              <div><?= e($line) ?></div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="block contact-block">
          <div class="vlabel">CONTACT</div>
          <div class="block-body">
            <?php foreach($data["contact"] as $c): ?>
              <div class="contact-line"><?= e($c) ?></div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="block edu-block">
          <div class="vlabel big">EDUCATION</div>
          <div class="block-body edu-text">
            <div class="edu-year"><?= e($data["education"][0]) ?></div>
            <div class="edu-school"><?= e($data["education"][1]) ?></div>
            <?php for($i=2;$i<count($data["education"]);$i++): ?>
              <div class="edu-line"><?= e($data["education"][$i]) ?></div>
            <?php endfor; ?>
          </div>
        </div>
      </section>

      <!-- ===== RIGHT ===== -->
      <section class="col right">

        <div class="block obj-block">
          <div class="vlabel big">WORK<br/>OBJECTIVES</div>
          <div class="block-body">
            <p class="objective"><?= e($data["objective"]) ?></p>
          </div>
        </div>

        <div class="block skill-block">
          <div class="vlabel big">EXPERTISE</div>
          <div class="block-body skill-area">
            <div class="skill-list">
              <?php foreach($data["skills"] as [$label, $pct]): ?>
                <div class="skill-row">
                  <div class="skill-name"><?= e($label) ?></div>
                  <div class="bar">
                    <div class="bar-fill" style="width: <?= (int)$pct ?>%"></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="block exp-block">
          <div class="vlabel big exp">EXPERIENCES</div>

          <!-- เส้นแนวตั้ง + จุดหัวท้าย -->
          <div class="rail" aria-hidden="true">
            <span class="rail-dot top"></span>
            <span class="rail-dot bottom"></span>
          </div>

          <div class="block-body exp-area">
            <?php foreach($data["experiences"] as $ex): ?>
              <div class="exp-item">
                <div class="exp-time"><?= e($ex["time"]) ?></div>
                <div class="exp-title1"><?= e($ex["title1"]) ?></div>
                <div class="exp-title2">
                  <?php foreach(explode("\n", $ex["title2"]) as $tline): ?>
                    <div><?= e($tline) ?></div>
                  <?php endforeach; ?>
                </div>
                <div class="exp-desc"><?= e($ex["desc"]) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </section>
    </div>
  </div>
</body>
</html>
