@layout('layouts.panel')

@section('title')
  Company Timeline
@endsection

@section('content')

<!-- Filters -->
<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">Company Timeline Overview</h2>
    <p class="text-sm text-muted">Monthly tracking overview of employees, projects, tasks, and salaries.</p>
  </div>
</div>

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

<!-- Stats Cards -->
<div class="row">
  <div class="col-md-3 mb-4">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Total Tracked Hours</p>
        <h5 class="fw-bold"><?= array_sum(array_column($employee_stats, 'total_hours')) ?> hrs</h5>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Total Projects</p>
        <h5 class="fw-bold"><?= count($project_stats) ?></h5>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Total Employees</p>
        <h5 class="fw-bold"><?= count($employee_stats) ?></h5>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-stats">
      <div class="card-body">
        <p class="text-sm mb-1">Tasks Created</p>
        <h5 class="fw-bold"><?= array_sum(array_column($task_data, 'task_count')) ?></h5>
      </div>
    </div>
  </div>
</div>

<!-- Daily Chart -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Daily Tracked Hours</h6>
    <canvas id="timelineChart" height="100"></canvas>
  </div>
</div>

<!-- Row 3: Employee & Project Stats -->
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Employee Work Hours</h6>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="bg-light">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Hours</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($employee_stats as $e): ?>
                <tr>
                  <td><?= $e['full_name'] ?></td>
                  <td><?= $e['email'] ?></td>
                  <td>
                    <?= $e['total_hours'] ?> hrs
                    <?php if ($e['total_hours'] > 160): ?>
                      <span class="badge bg-success ms-2">Top Contributor</span>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Project Work Hours</h6>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Row 4: Tasks & Salaries -->
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Task Distribution by Project</h6>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="bg-light">
              <tr>
                <th>Project</th>
                <th>Task Count</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($task_data as $t): ?>
                <tr>
                  <td><?= $t['project'] ?></td>
                  <td><?= $t['task_count'] ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6 class="mb-3">Salary Report</h6>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="bg-light">
              <tr>
                <th>Employee</th>
                <th>Office Hours</th>
                <th>WFH Hours</th>
                <th>Total Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($salary_data as $s): ?>
                <tr>
                  <td><?= $s['full_name'] ?></td>
                  <td><?= $s['office_hours'] ?> hrs</td>
                  <td><?= $s['wfh_hours'] ?> hrs</td>
                  <td><?= number_format($s['total_amount'], 2) ?> PKR</td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chart Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('timelineChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_column($timeline_data, 'day')) ?>,
      datasets: [{
        label: 'Tracked Hours',
        data: <?= json_encode(array_column($timeline_data, 'hours')) ?>,
        backgroundColor: 'rgba(54, 162, 235, 0.7)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: 'Hours' }
        },
        x: {
          title: { display: true, text: 'Date' }
        }
      }
    }
  });
</script>

@endsection
