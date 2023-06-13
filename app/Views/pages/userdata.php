<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>會員資料</title>
    <!-- 導入Bootstrap的CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/userdata.css') ?>" />
  </head>
  <body>
    <!-- 導入navbar -->
    <nav>
    <div class="logo">
      <a href="./index.html" id="logo">LOGO</a>
    </div>
    <div class="card_list">
      <a href="<?= base_url('/wordplay')?>" id="card">單字卡</a>
      <div class="list">
        <a href="<?= base_url('/wordsearch')?>">單字列表</a>
        <hr style="color: #58805e" />
        <a href="<?= base_url('/wordcollect')?>">收藏單字</a>
        <hr style="color: #58805e" />
        <a href="<?= base_url('/wordpractice')?>">單字練習</a>
      </div>
    </div>
    <a href="#">影片推薦</a>
    <a href="#">AI對話</a>
    <a href="./analysis.html">學習分析</a>

    <a href="<?= base_url('/userdata')?>" id="member" style="right: 140px">會員資料</a>
    <a href="<?= base_url('/logout')?>" id="member">登出</a>
  </nav>


    <h1>會員資料</h1>
    <hr width="80%" />
    <div class="container">
      <form action="">
        <label for="">UID</label>
        <input type="text" placeholder="#10" disabled />
        <br />
        <label for="">帳號/Email</label>
        <input type="text" placeholder="Admin@gmail.com" disabled />
        <br />
        <label for="">密碼</label>
        <input type="text" placeholder="******" disabled />
        <br />
        <button>
          <a href="<?= base_url('/userdataedit')?>">修改資料</a>
        </button>
      </form>
    </div>

    <!-- 導入footer -->
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

    <!-- 導入Bootstrap5的JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
