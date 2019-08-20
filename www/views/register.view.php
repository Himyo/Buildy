<div id="container-user" class="container">
    <div class="content">
        <?php
            if(isset($_GET['errors'])) {
                $errors = $_GET['errors'];
                foreach ($errors as $field) {
                    switch ($field) {
                        case 'firstname':
                            echo "<div style='background-color: #d9534f; border-color: #d43f3a;'><p>". ucfirst($field) ." doit faire entre 2 et 25 characteres</p></div>";
                            break;
                        case 'lastname':
                            echo "<div style='background-color: #d9534f; border-color: #d43f3a;'><p>". ucfirst($field) ." doit faire entre 2 et 50 characteres</p></div>";
                            break;
                        case 'email':
                            echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Cette email est invalide</p></div>';
                            break;
                        case 'password':
                            echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Le mot de passe doit contenir un nombre une majuscule, miniscule et faire au moins 5 characteres </p></div>';
                            break;
                        case 'password2':
                            echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Les mots de passe ne correspondent pas</p></div>';
                            break;
                    }
                }
            }
            $this->addComponent("formRegister", "");
        ?>
    </div>
</div>
