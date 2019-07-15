<div id="container-user" class="container">
    <div class="content">
        <?php
           if(isset($_GET['error'])) {
            $error = $_GET['error'];
            switch($error) {
                case 'wrongcredentials':
                    echo '<div class="background-color: #d9534f; border-color: #d43f3a;"><p>Le mot de passe n\'est pas valide </p></div>';
                break;
                case 'pendinguser':
                    echo '<div class="background-color: #d9534f; border-color: #d43f3a;"><p>Ce compte n\'a pas encore ete accepter</p></div>';
                break;
            }

        }
            $this->addComponent("formLogin", "");
         ?>
    </div>
</div
