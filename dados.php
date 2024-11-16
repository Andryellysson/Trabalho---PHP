<?php 
include 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Pizza de Cidades</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="20" height="10"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const totalCrateus = <?php echo $totalCrateus; ?>;
        const totalOutrasCidades = <?php echo $totalOutrasCidades; ?>;

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Crateús', 'Outras Cidades'],
                datasets: [{
                    label: 'Número de Endereços',
                    data: [totalCrateus, totalOutrasCidades],
                    backgroundColor: [
                        'rgba(54, 162, 237, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 0
                }]
            }
        });
    </script>   

</body>
</html>