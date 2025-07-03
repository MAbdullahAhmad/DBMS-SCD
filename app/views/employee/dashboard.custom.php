@layout('layouts.panel')

@section('title')
  Employee Dashboard
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">My Dashboard</h2>
    <p class="text-sm text-muted">Your activity, tracked hours, and latest salary slip summary.</p>
  </div>
</div>

<!-- Cards -->
<div class="row mb-4">
  <div class="col-md-6">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Tracked Hours (This Month)</p>
        <h5 class="fw-bold"><?= $total_hours ?> hrs</h5>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Latest Salary</p>
        <?php if ($salary): ?>
          <h5 class="fw-bold">Rs <?= number_format($salary['total_amount'], 2) ?></h5>
          <p class="text-xs text-muted mb-0">
            <?= $salary['office_hours'] ?> hrs office, <?= $salary['wfh_hours'] ?> hrs WFH
            — <?= date('F Y', strtotime("{$salary['year']}-{$salary['month']}-01")) ?>
          </p>
        <?php else: ?>
          <p class="text-muted">Not Available</p>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<!-- Chart: Daily Hours -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Daily Tracked Hours (Last 30 Days)</h6>
    <canvas id="dailyHoursChart" height="100"></canvas>
  </div>
</div>

<!-- Chart Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
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
</script>

@endsection
