<div id="container-user" class="container">
    <div class="content">
    <?php
        if(isset($_GET['xss'])) {
            echo "<div style='background-color: #d9645f; border-color: #d43f3a;'><p> Une erreur a eu lieu sur le formulaire veuiller reesayer plus tard </p></div>";
        }
    ?>
        <div class="space-40"></div>
        <div class="col-100-center" style="box-shadow: 0px 5px 5px #525374; padding: 10px; border-radius: 5px;">
            <div style="border: 2px solid; border-radius: 5px" class="buildy-grid-v-center column col-20-center">
                <h2 class="title-h2">Les liens</h2>
                <ul>
                    <?php foreach ($pages as $page): ?>
                        <li><a href="<?= $page['slug'] ?>"><p style="color: #0c2033"><?= ucfirst($page['title']); ?></p></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-80-center">
                <?php $this->addComponent('welcome', ""); ?>
            </div>
        </div>
    </div>
</div>
