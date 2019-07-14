<div id="main-container" class="main-container">
 <div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Dashboard</h1>
      </div>
      <div class="space-40"></div>
      <div class="buildy-grid-v-start media-column">
        <div class="col-50-center column">
          <div class="space-30"></div>
          <div class="col-100-center">
            <h2 class="title-h2">Nombres</h2>
          </div>
          <div class="space-10"></div>
          <canvas id="myChart" width="" height=""></canvas>
          <div class="space-30"></div>
          <h2 class="title-h2">Informations</h2>
          <div class="space-10"></div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vivamus gravida finibus nulla ac varius. Nam porta odio nec fermentum mollis.
            Proin ligula felis, euismod et lacus a, mattis tristique metus.
            Donec at arcu tortor. Aliquam blandit dolor eu mi cursus pretium ut ac justo.
            Ut elementum dui quam, eget euismod tellus posuere ut.
            Praesent quis aliquet sapien. Pellentesque habitant morbi tristique senectus
            et netus et malesuada fames ac turpis egestas. Ut non purus massa.
          </p>
          <div class="space-30"></div>
          <div class="col-100-space-a">
            <button class="button-outline" type="button" name="button">En Savoir plus</button>
            <button class="button-outline" type="button" name="button">En Savoir plus</button>
          </div>
        </div>
        <div class="space-30"></div>
        <div class="col-50-center column">
          <div class="space-30"></div>
          <div class="col-100-center">
            <h2 class="title-h2">Informations</h2>
          </div>
          <div class="space-10"></div>
          <canvas id="doughnut-chart-top" width="" height=""></canvas>
          <div class="space-30"></div>
          <div class="col-100-center">
            <h2 class="title-h2">Informations</h2>
          </div>
          <div class="space-10"></div>
          <canvas id="doughnut-chart-bottom" width="" height=""></canvas>
        </div>
      </div>
      <div class="space-30"></div>
    </div>
 </div>
</div>

<script>
    new Chart(document.getElementById('myChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Membres', 'Articles', 'Tournois', 'Decks', 'Pages', 'Cartes'],
            datasets: [{
                label: '# of Votes',
                data: [<?= count($users); ?>, <?= count($articles); ?>, <?= count($tournaments); ?>, <?= count($decks); ?>, <?= count($pages); ?>, <?= count($cards); ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    new Chart(document.getElementById("doughnut-chart-top"), {
        type: 'doughnut',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    new Chart(document.getElementById("doughnut-chart-bottom"), {
        type: 'doughnut',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>
