<div class="col-50-center column">
    <div class="buildy-grid-v-center col-100-center column">
        <h3 class="title-h3">Créer un article</h3>
    </div>
    <div class="space-20"></div>
    <form class="form-classic border-classic-radius" action="/site/article/save" method="post">
        <div class="col-100-space-a">
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20">
                    <label class="label-classic" for="title">Titre :</label>
                    <input class="input-classic" id="title" type="text" name="title">
                </div>
            </div>
            <div class="col-50-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="category">Catégorie : </label>
                    <select class="input-classic" name="category" id="category">
                        <option value="1">Tournois</option>
                        <option value="2">Général</option>
                        <option value="3">Deck</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="content">Contenu :</label>
                <textarea class="input-classic width-100" id="content" name="content" rows="15"></textarea>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Valider">
        </div>
        <div class="space-20"></div>
    </form>
</div>
