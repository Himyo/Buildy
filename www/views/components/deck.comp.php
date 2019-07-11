<article>
    <div class="container">
        <div class="view">
        <span>
            <h5>
                Name: <?php echo $deck['name']?>
            </h5>

            <h5>
                Author: <?php echo $deck['email']?>
            </h5>
            <p>Upvotes: <?php echo $deck['upvotes']?></p>
            <p> Downvotes: <?php echo $deck['downvotes']?></p>
        </span>
        <?php
        echo "<img src='".$deck['image_url']."' 
                alt='".$deck['name']."' >";
        ?>
    </div>
</article>