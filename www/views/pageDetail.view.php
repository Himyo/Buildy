<div id="container" class="container">
    <div class="content">
      <div class="space-40"></div>
      <button class="button-classic-succes" id="saveInsert">SAUVEGARDER</button>
      <div style="border: 1px solid">
          <?php include "templates/front/header.php"; ?>
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
        var content = $('#mainContent').html();
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
