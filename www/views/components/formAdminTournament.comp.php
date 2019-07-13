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