<div class="col-100-center column">
    <div class="buildy-grid-v-center col-100-center column">
        <h3 class="title-h3">Créer un tournois</h3>
    </div>
    <div class="space-20"></div>
    <form class="form-classic border-classic-radius" action="/site/tournament/save" method="post">
        <div class="col-100-space-a">
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20">
                    <label class="label-classic" for="name">Nom :</label>
                    <input class="input-classic" id="name" type="text" name="name">
                </div>
            </div>
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20">
                    <label class="label-classic" for="nb_contenders">Nombre de participants : </label>
                    <input class="input-classic" id="nb_contenders" type="number" name="nb_contenders">
                </div>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-space-b">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="description">Description :</label>
                <textarea id="froala-editor" name="description"></textarea>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Submit">
        </div>
        <div class="space-20"></div>
    </form>
</div>

<script>
  new FroalaEditor('textarea#froala-editor')
</script>
