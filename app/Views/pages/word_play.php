<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EZ</title>
    <link rel="shortcut icon" href="" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />
  </head>
  <body>
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

    <a href="./userdata.html" id="member" style="right: 140px">會員資料</a>
    <a href="<?= base_url('/logout')?>" id="member">登出</a>
  </nav>



    <div class="my-3">
      <br />
    </div>

    <section class="bg_two">
      <div class="container p-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <h3 class="p-3 m-3 text-center c_light">單字列表</h3>
            <hr class="c_light" />

            <div class="py-3">
              <a href="./cardlist.html" class="btn btn-primary mx-1"
                ><i class="fa-regular fa-hand-point-left"></i
              ></a>
            </div>

            <div class="slider">
              <div class="owl-carousel px-5">
                <div class="card m-3 slider-card p-3 bg_one">
                  <div class="card-body">
                    <br />
                    <br />
                    <div class="text-center">
                      <span class="h3 my_font">enjoy</span>(n.)
                    </div>
                    <br />
                    <div>
                      derive or receive pleasure from; get enjoyment from; take
                      pleasure in
                    </div>
                    <div>從中獲得或獲得快樂;從中獲得樂趣;享受樂趣</div>
                  </div>
                </div>
                <div class="card m-3 slider-card p-3 bg_one">
                  <div class="card-body">
                    <br />
                    <br />
                    <div class="text-center">
                      <span class="h3 my_font">Apple1</span>(n.)
                    </div>
                    <br />
                    <div>
                      derive or receive pleasure from; get enjoyment from; take
                      pleasure in
                    </div>
                    <div>從中獲得或獲得快樂;從中獲得樂趣;享受樂趣</div>
                    <br />
                    <br />
                  </div>
                </div>
                <div class="card m-3 slider-card p-3 bg_one">
                  <div class="card-body">
                    <br />
                    <br />
                    <div class="text-center">
                      <span class="h3 my_font">Apple2</span>(n.)
                    </div>
                    <br />
                    <div>
                      derive or receive pleasure from; get enjoyment from; take
                      pleasure in
                    </div>
                    <div>從中獲得或獲得快樂;從中獲得樂趣;享受樂趣</div>
                    <br />
                    <br />
                  </div>
                </div>
                <div class="card m-3 slider-card p-3 bg_one">
                  <div class="card-body">
                    <br />
                    <br />
                    <div class="text-center">
                      <span class="h3 my_font">Apple3</span>(n.)
                    </div>
                    <br />
                    <div>
                      derive or receive pleasure from; get enjoyment from; take
                      pleasure in
                    </div>
                    <div>從中獲得或獲得快樂;從中獲得樂趣;享受樂趣</div>
                    <br />
                    <br />
                  </div>
                </div>
                <div class="card m-3 slider-card p-3 bg_one">
                  <div class="card-body">
                    <br />
                    <br />
                    <div class="text-center">
                      <span class="h3 my_font">Apple4</span>(n.)
                    </div>
                    <br />
                    <div>
                      derive or receive pleasure from; get enjoyment from; take
                      pleasure in
                    </div>
                    <div>從中獲得或獲得快樂;從中獲得樂趣;享受樂趣</div>
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg_two">
      <div class="container p-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <h3 class="p-3 m-3 text-center c_light">單字列表</h3>
            <hr class="c_light" />

            <br />
            <div class="row g-0 justify-content-center c_light">
              <div class="col-1 text-center">收藏</div>
              <div class="col-3 text-center">單字</div>
              <div class="col-3 text-center">詞性</div>
              <div class="col-3 text-center">翻譯</div>
              <div class="col-2 text-end">編輯</div>
            </div>
            <hr class="c_light" />

            <div class="card my-3 bg_one">
              <div class="card-body">
                <div class="row g-0 align-items-center">
                  <div class="col-1 text-center">
                    <i class="starclass fa-regular fa-star"></i>
                  </div>
                  <div class="col-3 text-center">
                    <div class="h3 my_font">Apple</div>
                  </div>
                  <div class="col-3 text-center">
                    (n.)
                  </div>
                  <div class="col-3  text-center">
                    蘋果
                  </div>
                  <div class="col-2  text-center">
                    <div class="float-end mx-1">
                      <a href="" class="btn btn-primary"
                        ><i class="fa-solid fa-pen-to-square"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      function myFunction() {
        for (
          let i = 0;
          i < document.getElementsByClassName("starclass").length;
          i++
        ) {
          let starclass = document.getElementsByClassName("starclass");

          starclass.item(i).addEventListener("click", (event) => {
            if (starclass.item(i).classList.contains("fa-regular")) {
              starclass.item(i).classList.add("fa-solid");
              starclass.item(i).classList.remove("fa-regular");
            } else {
              starclass.item(i).classList.add("fa-regular");
              starclass.item(i).classList.remove("fa-solid");
            }
          });
        }
      }
      myFunction();
    </script>

    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          nav: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          center: true,
          navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>",
          ],
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            1000: {
              items: 3,
            },
          },
        });
      });
    </script>
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

  </body>
</html>
