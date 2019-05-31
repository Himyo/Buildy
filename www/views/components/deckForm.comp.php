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
            <input type='checkbox' name='standard' value='0' >Standard
            <input type='checkbox' name='pauper' value='0' >Pauper
            <input type='checkbox' name='modern' value='0' > Modern
            <input type='checkbox' name='legacy' value='0' > Legacy
            <input type='checkbox' name='vintage' value='0' > Vintage 
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
