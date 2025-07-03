@layout('layouts.panel')

@section('title')
  My Salary Slips
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">Salary Slips</h2>
    <p class="text-sm text-muted">Monthly salary details including hours and rates.</p>
  </div>
</div>

<!-- Year Filter -->
<div style="display: flex; justify-content: flex-end;">
  <form method="get" class="d-flex align-items-end gap-3 mb-4 px-1">
    <div>
      <label for="year" class="form-label">Year</label>
      <select class="form-control" id="year" name="year">
        <?php for ($y = date('Y') - 2; $y <= date('Y') + 1; $y++): ?>
          <option value="<?= $y ?>" <?= $year == $y ? 'selected' : '' ?>>
            <?= $y ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Filter</button>
    </div>
  </form>
</div>

<!-- Salary Table -->
<div class="card">
  <div class="card-body">
    <h6 class="mb-3">My Salaries</h6>
    <div class="table-responsive">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>Month</th>
            <th>Office Hours / Rate</th>
            <th>WFH Hours / Rate</th>
            <th>Total Amount</th>
            <th>Slip</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($salaries)): ?>
            <tr>
              <td colspan="5" class="text-center text-muted">No salary records found.</td>
            </tr>
          <?php endif; ?>
          <?php foreach ($salaries as $s): ?>
            <tr>
              <td><?= date('F Y', strtotime("{$s['year']}-{$s['month']}-01")) ?></td>
              <td><?= $s['office_hours'] ?> hrs @ PKR <?= number_format($s['office_hour_rate'], 2) ?></td>
              <td><?= $s['wfh_hours'] ?> hrs @ PKR <?= number_format($s['wfh_hour_rate'], 2) ?></td>
              <td><strong>PKR <?= number_format($s['total_amount'], 2) ?></strong></td>
              <td>
                <a href="<?= route('employee.salary.slip') ?>?id=<?= $s['id'] ?>" class="btn btn-sm btn-outline-primary">
                  View Slip
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
