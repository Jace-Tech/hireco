<!doctype html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/colors/blue.css">

    </head>

    <body class="gray">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Header Container
            ================================================== -->
            <x-dashboard-nav :navActive="$navActive" />
            <!-- Header Container / End -->

            <!-- Dashboard Container -->
            <div class="dashboard-container">

                <!-- Dashboard Sidebar
                ================================================== -->
                <x-dashboard-sidebar :active="$active" />
                <!-- Dashboard Sidebar / End -->

                @yield('content')


            </div>
            <!-- Dashboard Container / End -->

        </div>
            <!-- Wrapper / End -->

        <!-- Scripts
        ================================================== -->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="/js/mmenu.min.js"></script>
        <script src="/js/tippy.all.min.js"></script>
        <script src="/js/simplebar.min.js"></script>
        <script src="/js/bootstrap-slider.min.js"></script>
        <script src="/js/bootstrap-select.min.js"></script>
        <script src="/js/snackbar.js"></script>
        <script src="/js/clipboard.min.js"></script>
        <script src="/js/counterup.min.js"></script>
        <script src="/js/magnific-popup.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/custom.js"></script>

        <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
        <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
        </script>

        <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
        <script src="js/chart.min.js"></script>
        <script>
            Chart.defaults.global.defaultFontFamily = "Nunito";
            Chart.defaults.global.defaultFontColor = '#888';
            Chart.defaults.global.defaultFontSize = '14';

            var ctx = document.getElementById('chart').getContext('2d');

            var chart = new Chart(ctx, {
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ["January", "February", "March", "April", "May", "June"],
                    // Information about the dataset
                    datasets: [{
                        label: "Views",
                        backgroundColor: 'rgba(42,65,232,0.08)',
                        borderColor: '#113E3D',
                        borderWidth: "3",
                        data: [196,132,215,362,210,252],
                        pointRadius: 5,
                        pointHoverRadius:5,
                        pointHitRadius: 10,
                        pointBackgroundColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointBorderWidth: "2",
                    }]
                },

                // Configuration options
                options: {

                    layout: {
                    padding: 10,
                    },

                    legend: { display: false },
                    title:  { display: false },

                    scales: {
                        yAxes: [{
                            scaleLabel: {
                                display: false
                            },
                            gridLines: {
                                borderDash: [6, 10],
                                color: "#d8d8d8",
                                lineWidth: 1,
                            },
                        }],
                        xAxes: [{
                            scaleLabel: { display: false },
                            gridLines:  { display: false },
                        }],
                    },

                    tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                    }
                },


        });

        </script>
    </body>
</html>
