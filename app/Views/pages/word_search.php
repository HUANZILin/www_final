<?= $this->extend("layout/template")?>
<?= $this->section('content')?>
<section class="bg_two">
    <div class="my-3">
      <br />
    </div>
      <div class="container p-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8 col-12">
          <div class="row justify-content-center mb-3">
            <div class="col-12">
              <h3 class="p-3 m-3 text-center c_light">搜尋單字</h3>
              <hr class="c_light" />
            </div>
          </div>

          <div class="row justify-content-center mb-3" id="">
            <div class="col-12">
                        <form id="cardSearchForm">
                            <div class="form-group row mb-3">
                                <div class="col-3">
                                    <label for="word" class="form-label">單字</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="word" class="form-control" placeholder="請輸入單字" required>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn">送出</button>
                            </div>
                        </form>
                        <br>
          <br>
            </div>
          </div>

          <div class="row justify-content-center mb-3" id="">
          <div class="col-12">
              <h3 class="p-3 m-3 text-center c_light">加入收藏</h3>
              <hr class="c_light" />
            </div>
            <div class="col-12">
              <div class="card my-3 bg_one">
                <div class="card-body">
                  <div class="row g-0 align-items-center">
                    <div class="col-1">
                      <i class="starclass fa-regular fa-star"></i>
                    </div>
                    <div class="col-4">
                      <div class="h3 my_font">Apple</div>
                    </div>
                    <div class="col-2">
                      <div>(n.)</div>
                    </div>
                    <div class="col-3">
                      <div>蘋果</div>
                    </div>
                    <div class="col-2">
                      <div class="float-end mx-1">
                        <a href="" class="btn btn-primary"
                          ><i class="fa-solid fa-pen-to-square"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
          <br>
            </div>
          </div>

          <div class="row justify-content-center mb-3" id="">
            <div class="col-12">
              <h3 class="p-3 m-3 text-center c_light">創建自己的單字</h3>
              <hr class="c_light" />
            </div>
            <div class="col-12">
              <div id="radioGroup"></div>
            </div>
            <br>
          <br>
          </div>

          <div class="row justify-content-center mb-3" id="">
            <div class="col-12">
                        <form id="cardCreateForm">
                                <div class="form-group row mb-3">
                                    <div class="col-3">
                                        <label for="title" class="form-label">卡片英文</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="title" id="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-3">
                                        <label for="part_of_speech" class="form-label">卡片詞性</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="part_of_speech" id="part_of_speech" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-3">
                                        <label for="content" class="form-label">卡片短譯</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="content" id="content" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-3">
                                        <label for="e_content" class="form-label">卡片英譯</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea  name="e_content" id="e_content" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" name="submit" class="btn">送出</button>
                                </div>
                        </form>
            </div>
            <br>
          <br>
          </div>
          </div>
          </div>

      </div>
</section>

<script>
  document.getElementById("cardSearchForm").addEventListener("submit",(e) => {
        e.preventDefault();
        let formdata= new FormData(cardSearchForm);
        myLib1.POST("<?= base_url('/dictionary') ?>",formdata);
    })

    let myLib1 = {
        POST: (url,formdata) => {
            axios.post(url,formdata)
            .then((response) => {
                console.log(response.data);
                innerMsg(response.data);
            }).catch((e) => {
                console.log(e);
            })
        },
    }

    function innerMsg(data){
        let radioGroup = document.getElementById("radioGroup");
        radioGroup.innerHTML = "";
        for(let i = 0; i < Object.keys(data.def).length; i++){
            let mytext = `<div class="form-check">
                            <input type="radio" class="form-check-input" name="theWord" id="${i}">
                            (${i+1}). <strong>${data.word}</strong> <small>(${data.def[i][0]}.)</small></br>
                            ${data.def[i][1]}</br></div>`;
            $(radioGroup).append(mytext);

            let wordid=document.getElementById(i);
                wordid.addEventListener('click', function () {
                    document.getElementById("title").value = data.word;
                    document.getElementById("part_of_speech").value = data.def[i][0];
                    document.getElementById("content").value = data.trans;
                    document.getElementById("e_content").value = data.def[i][1];
            });
        }
    }

    document.getElementById("cardCreateForm").addEventListener("submit",(e) => {
        e.preventDefault();
        let formdata= new FormData(cardCreateForm);
        myLib2.POST("<?= base_url('/wordsearch') ?>",formdata);
    })

    let myLib2 = {
        POST: (url,formdata) => {
            axios.post(url,formdata)
            .then((response) => {
                window.location.href = `<?= base_url('/')?>`;
            }).catch((e) => {
                console.log(e.response.data);
            })
        },
    }
</script>
<?= $this->endSection()?>