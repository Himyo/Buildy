<form action="/dashboard/admin/articles/save" method="post" class="form-classic">
    <div>
        <label for="id">ID :</label>
        <input id="id" type="number" name="id">
    </div>
    <div>
        <label for="title">Title :</label>
        <input id="title" type="text" name="title">
    </div>
    <br>
    <div>
        <label for="content">Content :</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <br>
    <div>
        <label for="category">Category : </label>
        <select name="category" id="category">
            <option value="1">Tournament</option>
            <option value="2">General</option>
            <option value="3">Deck</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>