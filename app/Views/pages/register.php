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
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>" />
  </head>

  <body>
    <!-- 導入navbar -->
    <nav>
      <div class="logo">
        <a href="./index.html" id="logo">LOGO</a>
      </div>

      <a href="<?= base_url('/login')?>" id="member" style="right: 140px">登入</a>
    <a href="<?= base_url('/register')?>" id="member">註冊</a>
    </nav>

    <h1>註冊會員</h1>
    <div id="line"></div>
    <div class="container">
      <form action="Member/doRegister" id="registerForm">
        <div class="formTop">
          <div class="label">
            <label for="email" id="email">帳號/Email</label>
            <label for="password" id="password">密碼</label>
            <label for="rePassword" id="rePassword">確認密碼</label>
          </div>
          <div class="input">
            <input type="email" name="email" required />
            <input type="password" name="password" required />
            <input type="password" name="rePassword" required />
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

    <script>
      let registerForm = document.getElementById("registerForm");

    registerForm.addEventListener("submit",(e) => {
        e.preventDefault();
        formdata= new FormData(registerForm);
        myLib2.POST("<?= base_url('/register') ?>",formdata);
    })

    let myLib2 = {
      POST: (url,formdata) => {
          axios.post(url,formdata)
          .then((response) => {
              window.location.href = `<?= base_url('/login')?>`;
          }).catch((e) => {
              console.log(e.response.data);
          })
      },
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
