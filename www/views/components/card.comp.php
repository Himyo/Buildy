<article>
    <div class="container">
        <div class="view">
        <span>
            <h5>
                <?php echo $card['name']?>
            </h5>
            <p><?php echo $card['mana_cost']?></p>
            <p><?php echo $card['code']?></p>
        </span>
        <?php
        echo "<img src='".$card['image_url']."' 
                alt='".$card['name']."' >";
        ?>
    </div>
</article>
