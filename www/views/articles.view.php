<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1>Articles</h1>
            <h2>Search for your favorite articles here</h2>
            <?php
            if(!empty($articles)) {
                foreach ($articles as $article) {
                    $this->addComponent('article', $article);
                }
            }
            else {
                echo "<h3>No Articles found in the BDD</h3>";
            }
            ?>
        </div>
    </div>
</div>
