<article>
    <div class="container">
        <div class="view">
        </div>
        <p>
            <?php
                echo "Written by: {$article['firstname']} {$article['lastname']} <br />";
                echo "Posted the: {$article['created_at']}";
            ?>
        </p>
        <span>
            <h3>
                <?php echo $article['title']?>
            </h3>
            <span>
                <p><?php echo $article['content']?></p>
            </span>
        </span>
    </div>
</article>