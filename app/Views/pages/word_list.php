<?= $this->extend("layout/template")?>
<?= $this->section('content')?>
    <section class="bg_two">
    <div class="my-3">
      <br />
    </div>
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
<?= $this->endSection()?>