<div class="content">
    <?php
        $title = $articleForm->getField('title');
        $content = $articleForm->getField('content');
        $action = $articleForm->getAction();
        $method = $articleForm->getMethod();
        $class = $articleForm->getClassname();
        echo "<form
                action='".$action."' 
                method='".$method."'
                class='".$class."'
            >";

        echo "<div>";
        echo '<input
                type="'.$title->getType().'"
                name="'.$title->getId().'"
                placeholder="'.$title->getPlaceholder().'"
                id="'.$title->getId().'"
                class="'.$title->getClassname().'">';

    echo "</div>";
    echo "<div>";
        echo  '<textarea
                type="'.$content->getType().'"
                name="'.$content->getId().'"
                rows="25"
                cols="50"
                placeholder="'.$content->getPlaceholder().'"
                id="'.$content->getId().'"
                class="'.$content->getClassname().'"></textarea>';

    echo "</div>";
        echo '<button type="submit" class="btn btn-primary btn-block">Submit</button>';
        echo "</form>";
    ?>
</div>
