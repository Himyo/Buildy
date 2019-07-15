<div class="col-50-center column">
    <div class="buildy-grid-v-center col-100-center column">
        <p class="title-h3">Ajouter / modifier un deck</p>
        <span>Entrer l'id de l'deck pour le modifier</span>
    </div>
    <div class="space-20"></div>
    <form class="form-classic border-classic-radius" action="/dashboard/admin/decks/save" method="post">
        <div class="col-100-space-a">
            <div class="col-33-center">
                <div class="label-input-column-classic padding-20">
                    <label class="label-classic" for="id">ID :</label>
                    <input class="input-classic" id="id" type="number" name="id">
                </div>
            </div>
            <div class="col-33-center">
                <div class="label-input-column-classic padding-20">
                    <label class="label-classic" for="name">Name :</label>
                    <input class="input-classic" id="name" type="text" name="name">
                </div>
            </div>
            <div class="col-33-center">
                <div class="label-input-column-classic padding-20 width-100">
                    <label class="label-classic" for="users_id">Users_id :</label>
                    <input class="input-classic" id="users_id" type="number" name="users_id">
                </div>
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="upvotes">Upvotes :</label>
                <input class="input-classic" id="upvotes" type="number" name="upvotes">
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <div class="label-input-column-classic padding-20 width-100">
                <label class="label-classic" for="downvotes">Downvotes :</label>
                <input class="input-classic" id="downvotes" type="number" name="downvotes">
            </div>
        </div>
        <div class="space-20"></div>
        <div class="col-100-center">
            <input class="button-classic-succes" type="submit" value="Submit">
        </div>
        <div class="space-20"></div>
    </form>
</div>
