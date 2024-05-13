<?php
session_start();
include_once("connect.php")
?>
<?php
include_once("consultas.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard_f.css">
    <title>Responsive Dashboard Design #2 | AsmrProg</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><?php
                                    if (isset($_SESSION['email'])) {
                                        $email = $_SESSION['email'];
                                        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo  $row['firstName'];
                                        }
                                    }
                                    ?></div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="#"><i class='bx bx-analyse'></i>Analytics</a></li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="./logout.php" class="">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">

            </form>
            <input type="checkbox" id="theme-toggle" hidden>
        
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>

                    </ul>
                </div>

            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            <?php
                            echo $total_admin;
                            ?>
                        </h3>
                        <p>Numero de Administradores</p>
                    </span>
                </li>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            <?php
                            echo $total_registered;
                            ?>
                        </h3>
                        <p>Usuarios Registrados</p>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="orders">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);
                        google.charts.setOnLoadCallback(drawChart_1);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Rango de Edad', 'Cantidad'],
                                ['0-17 años', <?php echo $total_0_17; ?>],
                                ['18-25 años', <?php echo $total_18_25; ?>],
                                ['26-50 años', <?php echo $total_26_50; ?>],
                                ['51-75 años', <?php echo $total_51_75; ?>]
                            ]);

                            var options = {
                                title: 'Usuarios por Rango de Edad',
                                pieHole: 0.4,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }

                        function drawChart_1() {
                            var data = google.visualization.arrayToDataTable([
                                ['Rango de Edad', 'Cantidad'],
                                ['Colombia', <?php echo $total_colombia; ?>],
                                ['España', <?php echo $total_españa; ?>],
                                ['Argentina ', <?php echo $total_argentina; ?>]
                            ]);

                            var options = {
                                title: 'Usuarios por Pais de origen',
                                pieHole: 0.4,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_1'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart" style="width: 560px; height: 300px;"></div>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div id="piechart_1" style="width: 370px; height: 300px;"></div>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    <script src="./js/dashboard_f.js"></script>
</body>

</html>