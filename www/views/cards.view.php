<div id="container-user" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Liste des cartes</h1>
      </div>
      <div class="space-40"></div>
        <input id='searchbar' type="text" placeholder="Search.." name="search" />
        <div class="list-card-classic">
            <div id="cards" class="list-card-classic-content">
                <?php
                    if(!empty($cards)) {
                        foreach ($cards as $card) {
                            $this->addComponent('card', $card);
                        }
                    }
                    else {
                        echo "<h3>No Card found in the BDD</h3>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
   $(window).keyup(k => {
       if(k.target.id === 'searchbar') {
           searchterm();
       }
   });

    const cardsid = $('#cards').find('img');

    const searchterm = () => {
        const name = $('#searchbar').val();
        console.log(name);
        let tohide = [];
        for(const id of cardsid) {
            const idname= id.id.substring(0, name.length).toLowerCase();
            if ( idname !== name.toLowerCase()) {
                tohide.push(id.id);
            } else {
                $(`#${id.id}`).attr('hidden', false);
            }
        }
        console.log(tohide);
        tohide.forEach(id => {
            $(`#${id}`).attr('hidden', true);
        });
    };

</script>


