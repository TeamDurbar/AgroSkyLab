<h3>Soil Info</h3>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Zinc', 20],
          ['Iron', 30],
          ['Copper',  10],
          [' Manganese', 20]
        ]);

        var options = {
          title: 'Essential Metals',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <h6>
        Country: <samp style="color: #64AD33"> Bangladesh</samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Division: <samp style="color: #64AD33"> Dhaka </samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                District: <samp style="color: #64AD33">Dhaka </samp></h6>
<div id="donutchart" style="width: 900px; height: 500px;"></div>
<h3>Toxic Metals</h3>
<h6> Lead : <samp style="color: #64AD33"> 36453</samp> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Nickel: <samp style="color: #64AD33"> 3434</samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Arsenic : <samp style="color: #64AD33"> 323</samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Cadmium : <samp style="color: #64AD33"> 47343</samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</h6>