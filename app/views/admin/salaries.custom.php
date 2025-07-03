@layout('layouts.panel')

@section('title')
  Salary Management
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="text-capitalize mb-0">Salary Management</h2>
    <p class="mb-0 text-sm">Generate and manage monthly salaries for all employees based on tracked work time and rates.</p>
  </div>
</div>

<div style="display: flex; justify-content: flex-end;">
  <form method="get" class="d-flex align-items-end gap-3 mb-4 px-1">
    <div>
      <label for="month" class="form-label">Month</label>
      <select class="form-control" id="month" name="month">
        <?php for ($m = 1; $m <= 12; $m++): ?>
          <option value="<?= $m ?>" <?= $selected_month == $m ? 'selected' : '' ?>>
            <?= date('F', mktime(0, 0, 0, $m, 1)) ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>

    <div>
      <label for="year" class="form-label">Year</label>
      <select class="form-control" id="year" name="year">
        <?php for ($y = date('Y') - 2; $y <= date('Y') + 1; $y++): ?>
          <option value="<?= $y ?>" <?= $selected_year == $y ? 'selected' : '' ?>>
            <?= $y ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Filter</button>
      <?php if (isset($_GET['month']) || isset($_GET['year'])): ?>
        <a href="<?= route('admin.salaries.index') ?>" class="btn btn-outline-secondary ms-2">Clear Filters</a>
      <?php endif; ?>
    </div>
  </form>
</div>


<!-- Salaries Table -->
<div class="card mb-4">
  <div class="card-body">
    <h6 class="mb-3">Generated Salaries</h6>
    <div class="table-responsive">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>Employee</th>
            <th>Email</th>
            <th>Month / Year</th>
            <th>Office Hours</th>
            <th>WFH Hours</th>
            <th>Total Amount</th>
            <th>Finalized</th>
            <th>Slip</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($salaries as $s): ?>
            <tr>
              <td><?= $s['full_name'] ?></td>
              <td><?= $s['email'] ?></td>
              <td><?= $s['month'] ?>/<?= $s['year'] ?></td>
              <td><?= $s['office_hours'] ?> hrs</td>
              <td><?= $s['wfh_hours'] ?> hrs</td>
              <td>PKR <?= number_format($s['total_amount'], 2) ?></td>
              <td><?= $s['is_finalized'] ? 'Yes' : 'No' ?></td>
              <td>
                <a href="<?= $slip_url ?>?id=<?= $s['id'] ?>" class="btn btn-sm btn-outline-primary">View Slip</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Generate Salaries Form -->
<div class="card">
  <div class="card-body">
    <h6 class="mb-3">Generate Salaries</h6>
    <form id="generateSalariesForm">
      <div class="row g-3 align-items-end">
        <div class="col-md-4">
          <label>Select Employees</label>
          <select name="employee_ids[]" class="form-select" multiple required>
            <?php foreach ($employees as $e): ?>
              <option value="<?= $e['id'] ?>"><?= $e['full_name'] ?> (<?= $e['email'] ?>)</option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-3">
          <label>Start Date</label>
          <input type="date" name="start_date" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label>End Date</label>
          <input type="date" name="end_date" class="form-control" required>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary w-100">Generate</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
document.getElementById('generateSalariesForm').onsubmit = function(e) {
  e.preventDefault();
  fetch('<?= $generate_url ?>', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(new FormData(this))
  })
  .then(res => res.json())
  .then(data => {
    alert(data.message);
    if (data.success) location.reload();
  });
};
</script>

@endsection
