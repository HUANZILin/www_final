<?= $this->extend("layout/template")?>
<?= $this->section('content')?>
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
<?= $this->endSection()?>