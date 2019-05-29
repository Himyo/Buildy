<article>
    <div class="container">
        <div class="view">
            <?php
                echo "<img src='".$config['image_url']."' 
                alt='".$config['name']."'>";
            ?>
        </div>
        <span>
            <h5>
                <?php echo $config['name']?>
                <?php echo $config['mana_cost']?>
            </h5>
        </span>
    </div>
</article>
