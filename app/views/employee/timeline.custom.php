@layout('layouts.panel')

@section('title')
  My Timeline
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">My Work Timeline</h2>
    <p class="text-sm text-muted">Monthly breakdown of work hours, tasks, projects, and salary summary.</p>
  </div>
</div>

<!-- Filters -->
<div class="card mb-4">
  <div class="card-body d-flex justify-content-end">
    <form method="get" class="row g-3 align-items-end">
      <div class="col-auto">
        <label class="form-label mb-0">Month</label>
        <select name="month" class="form-control">
          <?php for ($m = 1; $m <= 12; $m++): ?>
            <option value="<?= $m ?>" <?= $month == $m ? 'selected' : '' ?>>
              <?= date('F', mktime(0, 0, 0, $m, 1)) ?>
            </option>
          <?php endfor ?>
        </select>
      </div>
      <div class="col-auto">
        <label class="form-label mb-0">Year</label>
        <select name="year" class="form-control">
          <?php for ($y = date('Y') - 2; $y <= date('Y') + 1; $y++): ?>
            <option value="<?= $y ?>" <?= $year == $y ? 'selected' : '' ?>><?= $y ?></option>
          <?php endfor ?>
        </select>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </form>
  </div>
</div>

<!-- Daily Hours Chart -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Daily Tracked Hours</h6>
    <canvas id="dailyChart" height="100"></canvas>
  </div>
</div>

<!-- Row 2: Project Stats and Tasks -->
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Project-wise Work Hours</h6>
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th>Project</th>
              <th>Hours</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($project_stats as $p): ?>
              <tr>
                <td><?= $p['name'] ?></td>
                <td><?= $p['total_hours'] ?> hrs</td>
              </tr>
            <?php endforeach ?>
            <?php if (empty($project_stats)): ?>
              <tr><td colspan="2" class="text-muted text-center">No data</td></tr>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Task Count by Project</h6>
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th>Project</th>
              <th>Tasks</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($task_data as $t): ?>
              <tr>
                <td><?= $t['project'] ?></td>
                <td><?= $t['task_count'] ?></td>
              </tr>
            <?php endforeach ?>
            <?php if (empty($task_data)): ?>
              <tr><td colspan="2" class="text-muted text-center">No data</td></tr>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Salary Summary -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Salary Summary</h6>
    <table class="table mb-0">
      <thead class="bg-light">
        <tr>
          <th>Month</th>
          <th>Office Hours</th>
          <th>WFH Hours</th>
          <th>Total Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($salary_data as $s): ?>
          <tr>
            <td><?= $s['month'] ?>/<?= $s['year'] ?></td>
            <td><?= $s['office_hours'] ?> hrs</td>
            <td><?= $s['wfh_hours'] ?> hrs</td>
            <td><strong>PKR <?= number_format($s['total_amount'], 2) ?></strong></td>
          </tr>
        <?php endforeach ?>
        <?php if (empty($salary_data)): ?>
          <tr><td colspan="4" class="text-muted text-center">No salary record</td></tr>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Chart Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('dailyChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_column($timeline_data, 'day')) ?>,
      datasets: [{
        label: 'Hours',
        data: <?= json_encode(array_column($timeline_data, 'hours')) ?>,
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
