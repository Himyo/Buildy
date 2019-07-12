
<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1><?php echo ucfirst($data['modelName']) ?></h1>
            <h2>Search for your favorite <?php echo $data['modelName'] ?> here</h2>
            <?php
                $this->addComponent('database', $data);
            ?>
        </div>
    </div>
</div>
