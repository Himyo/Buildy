<div class="col-50-center column">
    <div class="space-20"></div>
    <form class="form-classic border-classic-radius" action="/Admin/mysite/page/save" method="post">
        <div class="col-100-space-a">
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="title">Titre :</label>
                    <input class="input-classic" id="title" type="text" name="title">
                </div>
            </div>
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="slug">Route :</label>
                    <input class="input-classic" id="slug" type="text" name="slug">
                </div>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-space-a">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="content">Contenu :</label>
                <textarea id="froala-editor" name="content"></textarea>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Valider">
        </div>
        <div class="space-20"></div>
    </form>
</div>

<script>
  new FroalaEditor('textarea#froala-editor')
</script>
