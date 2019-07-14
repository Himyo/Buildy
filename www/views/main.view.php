<div id="container" class="container">
    <div class="content" id="mainContent">
        <?php
        if (isset($content)) {
            if ($content['slug'] == $_SERVER['REQUEST_URI']) {
                echo $content['content'];
            }
        }
        ?>
    </div>
</div>