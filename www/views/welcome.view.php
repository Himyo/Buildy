<div id="container" class="container">
    <div class="content">
        <br>
        <div style="border: 1px solid">
            <h2>Les liens</h2>
            <ul>
                <?php foreach ($pages as $page): ?>
                <li><a href="<?= $page['slug'] ?>"><p><?= $page['title']; ?></p></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <br>
        <?php $this->addComponent('welcome', ""); ?>
    </div>
</div>