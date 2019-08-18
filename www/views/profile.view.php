<?php
    use MVC\Core\Auth;
    $profile = Auth::get();
?>
<div id="container-user" class="container">
    <div class="content">
        <h1 class="title-h1"> Profile </h1>
        <h2>Firstname: <?php echo $profile['firstname']?> </h2>
        <h2>Lastname: <?php echo $profile['lastname']?> </h2>
        <h2>Email: <?php echo $profile['email']?> </h2>
        <img src="<?php echo $profile['photo_path']?>" alt="<?php echo $profile['photo_name'] ?>" />
    </div>
    <a href="/">Home </a>
</div>