<div class="content">

    <?php
        $title = $deckForm->getField('name');
        $action = $deckForm->getAction();
        $method = $deckForm->getMethod();
        $class = $deckForm->getClassname();


        echo "<form
                action='".$action."' 
                method='".$method."'
                class='".$class."'
            >
            <input type='checkbox' name='legalities[]' value='standard' >Standard
            <input type='checkbox' name='legalities[]' value='pauper' >Pauper
            <input type='checkbox' name='legalities[]' value='modern' > Modern
            <input type='checkbox' name='legalities[]' value='legacy' > Legacy
            <input type='checkbox' name='legalities[]' value='vintage' > Vintage 
            ";
        echo "<div>";
        echo "<input
                    type='".$title->getType()."'
                    name='".$title->getId()."'
                    placeholder='".$title->getPlaceholder()."'
                    id='".$title->getId()."'
                    class='".$title->getClassname()."'>";
        echo "</div>";

        echo "<div>";

        echo "</div>";

        echo '<button type="submit" class="btn btn-primary btn-block">Submit</button>';
        echo "</form>";
    ?>

</div>
