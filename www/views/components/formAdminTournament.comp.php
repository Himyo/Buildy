<div class="col-50-center column">
  <div class="buildy-grid-v-center col-100-center column">
    <p class="title-h3">Ajouter / modifier un tournois</p>
    <span>Entrer l'id du tournois pour le modifier</span>
  </div>
  <div class="space-20"></div>
  <form class="form-classic border-classic-radius" action="/dashboard/admin/tournaments/save" method="post">
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
        <div class="label-input-column-classic padding-20">
          <label class="label-classic" for="nb_contenders">Number of contenders : </label>
          <input class="input-classic" id="nb_contenders" type="number" name="nb_contenders">
        </div>
      </div>
    </div>
    <div class="space-20"></div>
    <div class="col-100-space-b">
      <div class="label-input-column-classic padding-20 width-100">
        <label class="label-classic" for="description">Description :</label>
        <textarea class="input-classic width-100" id="description" name="description" rows="15"></textarea>
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

<form action="/dashboard/admin/tournaments/save" method="post" class="form-classic">
    <div>
        <label for="id">ID :</label>
        <input id="id" type="number" name="id">
    </div>
    <div>
        <label for="name">Name :</label>
        <input id="name" type="text" name="name">
    </div>
    <br>
    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <br>
    <div>
        <label for="nb_contenders">Number of contenders : </label>
        <input id="nb_contenders" type="number" name="nb_contenders">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
