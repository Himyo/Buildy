<div id="container-user" class="container">
    <div class="content">
        <?php 
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                switch($error) {
                    case 'emailnotunique':
                        echo '<div class="background-color: #d9534f; border-color: #d43f3a;"><p>Cette email est deja pris</p></div>';
                    break;
                    case 'pwdmatching':
                        echo '<div class="background-color: #d9534f; border-color: #d43f3a;"><p>Les mots de passe ne correspondent pas</p></div>';
                    break;
                    case 'missingfield':
                        echo '<div class="background-color: #d9534f; border-color: #d43f3a;"><p>Veuillez remplir les champs principaux</p></div>';
                    break;
                }

            }
            $this->addComponent("formRegister", "");
        ?>
    </div>
</div
