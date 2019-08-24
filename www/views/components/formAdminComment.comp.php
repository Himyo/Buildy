<div class="col-50-center column">
    <div class="buildy-grid-v-center col-100-center column">
        <p class="title-h3">Ajouter / modifier un Commentaire</p>
        <span>Entrer l'id du commentaire pour le modifier</span>
    </div>
    <div class="space-20"></div>
    <form class="form-classic border-classic-radius" action="/Admin/dashboard/comments/save" method="post">
        <div class="col-100-space-b">
            <div class="col-100-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="id">Id :</label>
                    <input class="input-classic" id="id" type="number" name="id">
                </div>
            </div>
            <div class="col-100-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="users_id">Id membre :</label>
                    <input class="input-classic" id="users_id" type="number" name="users_id">
                </div>
            </div>
        </div>
        <div class="col-100-space-b">
            <div class="col-100-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="comments_id">Id commentaire :</label>
                    <input class="input-classic" id="comments_id" type="number" name="comments_id">
                </div>
            </div>
            <div class="col-100-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="articles_id">Id article :</label>
                    <input class="input-classic" id="articles_id" type="number" name="articles_id">
                </div>
            </div>
        </div>
        <div class="col-100-center">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="content">Contenu :</label>
                <textarea class="input-classic-textarea width-100" id="content" name="content" rows="15"></textarea>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Valider">
        </div>
        <div class="space-20"></div>
    </form>
</div>
