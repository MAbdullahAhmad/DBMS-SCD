@layout('layouts.panel')

@section('title')
  Admin Dashboard
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">Admin Dashboard</h2>
    <p class="text-sm text-muted">Company performance, salaries, and employee activity overview.</p>
  </div>
</div>

<!-- Cards -->
<div class="row mb-4">
  <div class="col-md-6">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Total Employees</p>
        <h5 class="fw-bold"><?= $employee_count ?></h5>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Tracked Hours (This Month)</p>
        <h5 class="fw-bold"><?= $month_hours ?> hrs</h5>
      </div>
    </div>
  </div>
</div>

<!-- Chart 1: Daily Hours -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Daily Tracked Hours</h6>
    <canvas id="dailyHoursChart" height="100"></canvas>
  </div>
</div>

<!-- Chart 2 & 3 -->
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Top Employees (Hours)</h6>
        <canvas id="topEmployeesChart" height="100"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- Charts Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Chart 1: Daily Hours
  new Chart(document.getElementById('dailyHoursChart').getContext('2d'), {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_column($daily_hours, 'day')) ?>,
      datasets: [{
        label: 'Hours',
        data: <?= json_encode(array_column($daily_hours, 'hours')) ?>,
        backgroundColor: 'rgba(75, 192, 192, 0.7)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true, title: { display: true, text: 'Hours' } },
        x: { title: { display: true, text: 'Day' } }
      }
    }
  });

  // Chart 2: Top Employees
  new Chart(document.getElementById('topEmployeesChart').getContext('2d'), {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_column($top_employees, 'full_name')) ?>,
      datasets: [{
        label: 'Hours',
        data: <?= json_encode(array_column($top_employees, 'hours')) ?>,
        backgroundColor: 'rgba(54, 162, 235, 0.7)'
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        x: { beginAtZero: true, title: { display: true, text: 'Hours' } },
        y: { title: { display: true, text: 'Employee' } }
      }
    }
  });

</script>

@endsection
