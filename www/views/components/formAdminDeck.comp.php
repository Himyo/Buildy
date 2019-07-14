<form action="/dashboard/admin/decks/save" method="post" class="form-classic">
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
        <label for="users_id">Users_id :</label>
        <input id="users_id" type="number" name="users_id">
    </div>
    <br>
    <div>
        <label for="upvotes">Upvotes :</label>
        <input id="upvotes" type="number" name="upvotes">
    </div>
    <br>
    <div>
        <label for="downvotes">Downvotes :</label>
        <input id="downvotes" type="number" name="downvotes">
    </div>
    <br>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>