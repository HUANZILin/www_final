<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ Chat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
<nav>
    <div class="logo">
      <a href="./index.html" id="logo">LOGO</a>
    </div>

    <a href="<?= base_url('/login')?>" id="member" style="right: 140px">登入</a>
    <a href="<?= base_url('/register')?>" id="member">註冊</a>
</nav>
<main>
      <img src="<?= base_url('assets/images/首頁大圖.jpg') ?>" alt="首頁圖" />
    </main>

    <main>
      <section class="box1">
        <a target="_self" href="./cardplay.html">
          <h3>單字卡</h3>
          <hr />
          <h5>Vocabulary Card</h5>
        </a>
      </section>

      <section class="box2">
        <a target="_self" href="#">
          <h3>影片推薦</h3>
          <hr />
          <h5>Recommended Videos</h5>
        </a>
      </section>
    </main>

    <main>
      <section class="box3">
        <a target="_self" href="#">
          <h3>AI對話</h3>
          <hr />
          <h5>AI Interlocution</h5>
        </a>
      </section>

      <section class="box4">
        <a target="_self" href="./analysis.html">
          <h3>學習分析</h3>
          <hr />
          <h5>Learning Analysis</h5>
        </a>
      </section>
    </main>

    <footer>
    <div class="logo"><h3>LOGO</h3></div>
    <div class="block">
      <h2>聯絡我們</h2>
      <ul>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
      </ul>
    </div>
    <div class="block">
      <h2>常見問題</h2>
      <ul>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
      </ul>
    </div>
    <div class="block">
      <h2>使用教學</h2>
      <ul>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
        <li><a href="#">Blabla</a></li>
      </ul>
    </div>
    <p>@2023 copyright</p>
    <button>
      <div class="icon">
        <svg height="50" width="50">
          <line
            x1="0"
            y1="30"
            x2="26"
            y2="9"
            style="stroke: #e2e4dd; stroke-width: 5"
          />
        </svg>
        <svg height="50" width="50">
          <line
            x1="50"
            y1="30"
            x2="24"
            y2="9"
            style="stroke: #e2e4dd; stroke-width: 5"
          />
        </svg>
      </div>
    </button>
  </footer>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>