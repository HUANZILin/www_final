<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>註冊會員</title>
    <!-- 導入Bootstrap的CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles/register.css" />
  </head>

  <body>
    <!-- 導入navbar -->
    <nav>
      <div class="logo">
        <a href="./index.html" id="logo">LOGO</a>
      </div>

      <a href="./userdata.html" id="member" style="right: 140px">登入</a>
      <a href="./login.html" id="member">註冊</a>
    </nav>

    <h1>註冊會員</h1>
    <div id="line"></div>
    <div class="container">
      <form action="">
        <div class="formTop">
          <div class="label">
            <label for="email" id="email">帳號/Email</label>
            <label for="password" id="password">密碼</label>
            <label for="rePassword" id="rePassword">確認密碼</label>
          </div>
          <div class="input">
            <input type="text" required />
            <input type="password" required />
            <input type="password" required />
          </div>
        </div>

        <div class="formButtom">
          <button type="submit">送出</button>
        </div>
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
