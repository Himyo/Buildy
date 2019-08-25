<div class="col-100-center column">
    <div class="buildy-grid-v-center col-100-center column">
        <h3 class="title-h3">Ecrire un commentaire</h3>
    </div>
    <form action="/site/comment/save" method="post">
        <div class="col-100-space-b">
            <div class="label-input-column-classic padding-20 width-100">
                <textarea id="froala-editor" name="content"></textarea>
            </div>
        </div>
        <input type="hidden" name="users_id" value="<?= $comment['id'] ?>">
        <input type="hidden" name="articles_id" value="<?= $_GET['id'] ?>">
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Poster">
        </div>
        <div class="space-20"></div>
    </form>
</div>

<script>
  new FroalaEditor('textarea#froala-editor')
</script>
