<form action="/dashboard/admin/pages/save" method="post" class="form-classic">
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
        <label for="slug">Slug :</label>
        <input id="slug" type="text" name="slug"></input>
    </div>
    <br>
    <div>
        <label for="content">Content :</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>