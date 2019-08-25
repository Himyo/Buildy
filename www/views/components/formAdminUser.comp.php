<div class="col-50-center column">
  <div class="buildy-grid-v-center col-100-center column">
    <p class="title-h3">Ajouter / modifier un membre</p>
    <span>Entrer l'id du membre pour le modifier</span>
  </div>
  <div class="space-20"></div>
  <form class="form-classic border-classic-radius" action="/Admin/dashboard/users/save" method="post">
    <div class="col-100-space-a">
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="id">Id :</label>
          <input class="input-classic" id="id" type="number" name="id">
        </div>
      </div>
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="photo">Id photo :</label>
          <input class="input-classic" id="photo" type="number" name="photo_id">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="firstname">Prénom :</label>
          <input class="input-classic" id="firstname" type="text" name="firstname">
        </div>
      </div>
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="lastname">Nom :</label>
          <input class="input-classic" id="lastname" type="text" name="lastname">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="email">Email :</label>
          <input class="input-classic" id="email" type="email" name="email">
        </div>
      </div>
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="pwd">Mot de passe :</label>
          <input class="input-classic" id="pwd" type="password" name="pwd">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="status">Status :</label>
          <select class="input-classic" name="status" id="status">
            <option value="PENDING" >En attente</option>
            <option value="ACCEPTED">Accepté</option>
            <option value="DENIED">Refusé</option>
          </select>
        </div>
      </div>
      <div class="col-100-center">
        <div class="label-input-column-classic padding-20 width-100">
          <label class="label-classic" for="role">Rôle :</label>
            <select class="input-classic" name="role" id="role">
                <option value="USER">UTILISATEUR</option>
                <option value="MODERATOR">MODERATEUR</option>
            </select>
        </div>
      </div>
    </div>
    <div class="space-20"></div>
    <div class="col-100-center">
      <input class="button-classic-succes" type="submit" value="Valider">
    </div>
    <div class="col-100-center">
      <p class="font-14">*Champs obligatoires</p>
    </div>
    <div class="space-20"></div>
  </form>
</div>
