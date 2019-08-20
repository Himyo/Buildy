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


        <a href="/">Home </a>
        <a href="#articles" onclick="list(<?= $profile['id'] ?>, 'articles');">Mes Articles</a>
        <a href="#decks" onclick="list(<?= $profile['id'] ?>, 'decks');">Mes decks</a>
        <a href="#tournaments" onclick="list(<?= $profile['id'] ?>, 'tournaments');">Mes Tournois</a>
        <table id="datatable"></table>
    </div>

</div>

    <script>
    function list(id, el) {
        console.log(id, el);
        $.ajax({
            url: `/site/profile/${el}`,
            type: 'POST',
            dataType: 'json',
            data: `id=${id}`,
            success: (result) => {
                maketable(result);
            }
        });
    }

    const maketable = table => {
      const keys = Object.keys(table[0]);
      let head = '';

    for(const key in keys) {
          head += `<th> ${keys[key]} </th>`;
      }
      $('#datatable').append(`<tr colspan> ${head} </tr>`);

      for(let i=0; i< table.length ; ++i) {
          let body ='';
          for(const key in keys) {
              console.log(key);
              body += `<td> ${table[i][keys[key]]} </td>`;
          }
          $('#datatable').append(`<tr> ${body} </tr>`);
      }
    };

    const datatable = () => {
        $('#datatable').DataTable();
    }
</script>
