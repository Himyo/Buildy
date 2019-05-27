<div id="container" class="container">
    <div class="content">
        <?php
          echo '<h1>Base de données '.ucwords($data['modelName']).'</h1>';
            $this->addComponent('database', $data);
        ?>
    </div>
</div>