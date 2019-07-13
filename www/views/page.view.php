
<div id="container" class="container">
    <div class="content" style="display: flex;">
        <div>
            <h1>Page list</h1>
            <ul>
                <?php foreach ($pages as $key => $value): ?>
                    <li>
                        <form action="/mysite/page/edit" method="get">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input type="submit" value="<?= $value['title'] ?>">
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

