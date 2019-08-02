<div class="col-50-center column">
  <div class="buildy-grid-v-center col-100-center column">
    <p class="title-h3">Ajouter / modifier un membre</p>
    <span>Entrer l'id du membre pour le modifier</span>
  </div>
  <div class="space-20"></div>
  <form class="form-classic border-classic-radius" action="/Admin/dashboard/users/save" method="post">
    <div class="col-100-space-a">
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="id">ID :</label>
          <input class="input-classic" id="id" type="number" name="id">
        </div>
      </div>
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="photo">Photo_id :</label>
          <input class="input-classic" id="photo" type="number" name="photo_id">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="firstname">Firstname :</label>
          <input class="input-classic" id="firstname" type="text" name="firstname">
        </div>
      </div>
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="lastname">Lastname :</label>
          <input class="input-classic" id="lastname" type="text" name="lastname">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="email">Email :</label>
          <input class="input-classic" id="email" type="email" name="email">
        </div>
      </div>
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="pwd">Password :</label>
          <input class="input-classic" id="pwd" type="password" name="pwd">
        </div>
      </div>
    </div>
    <div class="col-100-space-b">
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="status">Status :</label>
          <select name="status" id="status">
            <option value="PENDING" >PENDING</option>
            <option value="ACCEPTED">ACCEPTED</option>
            <option value="DENIED">DENIED</option>
          </select>
        </div>
      </div>
      <div class="col-50-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="role">Role :</label>
          <input class="input-classic" id="role" type="number" name="role">
        </div>
      </div>
    </div>
    <div class="space-20"></div>
    <div class="col-100-center">
      <input class="button-classic-succes" type="submit" value="Submit">
    </div>
    <div class="col-100-center">
      <p class="font-14">*Champs obligatoires</p>
    </div>
    <div class="space-20"></div>
  </form>
</div>
