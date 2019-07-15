<div class="col-50-center column">
  <div class="buildy-grid-v-center col-100-center column">
    <p class="title-h3">Ajouter / modifier un page</p>
    <span>Entrer l'id de la page pour le modifier</span>
  </div>
  <div class="space-20"></div>
  <form class="form-classic border-classic-radius" action="/dashboard/admin/pages/save" method="post">
    <div class="col-100-space-a">
      <div class="col-33-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="id">ID :</label>
          <input class="input-classic" id="id" type="number" name="id">
        </div>
      </div>
      <div class="col-33-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="title">Title :</label>
          <input class="input-classic" id="title" type="text" name="title">
        </div>
      </div>
      <div class="col-33-center">
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="slug">Slug :</label>
          <input class="input-classic" id="slug" type="text" name="slug">
        </div>
      </div>
    </div>
    <div class="space-20"></div>
    <div class="col-100-space-a">
      <div class="label-input-column-classic padding-20 width-100">
        <label class="label-classic" for="content">Content :</label>
        <textarea class="input-classic width-100" id="content" name="content" rows="15"></textarea>
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
