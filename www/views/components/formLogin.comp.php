<div class="col-100-center column">
  <div class="space-15"></div>
  <div class="buildy-grid-v-center col-100-center column">
    <p class="title-h3">Connexion</p>
  </div>
  <div class="space-20"></div>
  <form class="form-classic border-classic-radius" action="/site/connexion" method="post">
    <div class="col-100-center">
      <div class="label-input-column-classic padding-10">
        <label class="label-classic" for="email">Email :</label>
        <input class="input-classic" id="email" type="email" name="email">
      </div>
    </div>
    <div class="col-100-center">
      <div class="label-input-column-classic padding-10">
        <label class="label-classic" for="pwd">Password :</label>
        <input class="input-classic" id="pwd" type="password" name="pwd">
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


<form action="/site/connexion" method="post" class="form-classic">
    <div>
        <label for="email">Email :</label>
        <input id="email" type="email" name="email">
    </div>
    <div>
        <label for="pwd">Password :</label>
        <input id="pwd" type="password" name="pwd">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
