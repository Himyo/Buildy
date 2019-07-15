<div id="container" class="container">
    <div class="content">
      <div class="space-20"></div>
        <div class="col-100-center">
            <button class="button-classic-succes" id="saveInsert">SAUVEGARDER</button>
        </div>
        <div class="space-20"></div>
      <div style="border: 1px solid">
          <div style="height: 50px; width: 100%; background-color: #87fffd; border-bottom: 1px solid;">
              <p class="buildy-grid-v-center col-100-center" style="height: 100%">Votre header</p>
          </div>
          <?php include "main.view.php"; ?>
      </div>
    </div>
</div>
<?php include 'templates/back/side_menu_right.php'; ?>

<script src="/public/js/dragAndDrop.js" type="text/javascript"></script>

<script>
    $('#saveInsert').click(function() {
        insertContent();
    });
    function insertContent() {
        var content = $('#dropper').html();
        $.ajax({
            url: '/mysite/page/edit/insert',
            type: 'POST',
            data: 'content=' + content + '&id=' + <?= $page["id"]?>,
            success: () => {
                alert('Succès!');
            }
        })
    }
</script>
