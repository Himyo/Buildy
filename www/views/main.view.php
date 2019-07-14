<div id="container-user" class="container">
    <div class="content" id="mainContent">
      <?php
        if (isset($content)) {
            if ($content['slug'] == $_SERVER['REQUEST_URI']) {
                echo $content['content'];
            }
        }
        ?>
      <div class="space-40"></div>
      <div id="website-preview" class="buildy-grid-v-center column" style="border: 1px solid">
        <div id="dropper" class="dropper">
          <div id="example" class="buildy-grid-v-center col-100-center column">
            <div class="space-10"></div>
            <img src="/public/img/up-arrow.svg" alt="" width="40">
            <h1 class="title-h1 text-align-center padding-10">Drag and drop</h1>
            <img src="/public/img/down-arrow.svg" alt="" width="40">
            <div class="space-10"></div>
          </div>
        </div>
      </div>
      <div class="space-40"></div>
    </div>
</div>
