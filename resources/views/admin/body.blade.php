<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="card-title">Appointment</h4>
                <h2 class="text-primary mb-0">70</h2>
              </div>
              <div class="ml-auto">
                <div class="icon-box bg-primary">
                  <i class="mdi mdi-calendar-text"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h4 class="card-title">Approved</h4>
                <h2 class="text-success mb-0">82</h2>
              </div>
              <div class="ml-auto">
                <div class="icon-box bg-success">
                  <i class="mdi mdi-check"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tempatkan div untuk grafik di sini -->
    <div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <!-- Tempatkan grafik di sini -->
            <canvas id="line-chart" class="transaction-chart"  width="700" height="365"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
  // Data untuk grafik garis
  var lineChartData = {
    labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
    datasets: [{
        label: 'Appointment',
        borderColor: '#007bff',
        backgroundColor: 'transparent',
        data: [10, 20, 70, 40, 50],
      },
      {
        label: 'Approved',
        borderColor: '#28a745',
        backgroundColor: 'transparent',
        data: [13, 23, 82, 43, 53],
      },
    ],
  };

  // Konfigurasi grafik garis
var lineChartOptions = {
  responsive: true,
  maintainAspectRatio: false,
  legend: {
    display: true,
  },
  scales: {
    x: {
      beginAtZero: true,
    },
    y: {
      beginAtZero: true,
    },
  },
  plugins: {
    legend: {
      display: true,
      position: 'top', // Ubah posisi legenda ke atas
    },
  },
};
  // Mendapatkan elemen canvas dan menginisialisasi grafik
  var ctx = document.getElementById('line-chart').getContext('2d');
  var lineChart = new Chart(ctx, {
    type: 'line',
    data: lineChartData,
    options: lineChartOptions,
  });
</script>
