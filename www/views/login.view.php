<div id="container-user" class="container">
    <div class="content">
        <?php
           if(isset($_GET['error'])) {
            $error = $_GET['error'];
            switch($error) {
                case 'notfound':
                    echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Ce compte n\'a pas ete trouve</p></div>';
                break;
                case 'wrongcredentials':
                    echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Le mot de passe n\'est pas valide </p></div>';
                break;
                case 'banneduser':
                    echo '<div style="background-color: #d9534f; border-color: #d43f3a;"><p>Ce compte a ete suspendu</p></div>';
                break;
            }
        }
            $this->addComponent("formLogin", "");
         ?>
    </div>
</div
