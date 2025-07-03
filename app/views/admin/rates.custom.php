@layout('layouts.panel')

@section('title')
  Employee Rates
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="text-capitalize mb-0">Manage Employee Hourly Rates</h2>
    <p class="mb-0 text-sm">View and add historical hourly rates for office and WFH.</p>
  </div>
</div>

<?php foreach ($employees as $emp): ?>
  <div class="card mb-4">
    <div class="card-header">
      <h6 class="mb-0"><?= htmlspecialchars($emp['full_name']) ?></h6>
      <small class="text-muted"><?= htmlspecialchars($emp['email']) ?></small>
    </div>
    <div class="card-body">

      <!-- Rates Table -->
      <div class="table-responsive mb-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Office Hour Rate</th>
              <th>WFH Hour Rate</th>
              <th>Effective From</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($emp['rates'] as $rate): ?>
              <tr>
                <td><?= $rate['office_hour_rate'] ?></td>
                <td><?= $rate['wfh_hour_rate'] ?></td>
                <td><?= $rate['effective_from'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Add New Rate Form -->
      <form class="addRateForm">
        <input type="hidden" name="employee_id" value="<?= $emp['employee_id'] ?>">

        <div class="row g-2 align-items-end">
          <div class="col-md-3">
            <label>Office Hour Rate</label>
            <input type="number" name="office_hour_rate" step="0.01" class="form-control" required>
          </div>
          <div class="col-md-3">
            <label>WFH Hour Rate</label>
            <input type="number" name="wfh_hour_rate" step="0.01" class="form-control" required>
          </div>
          <div class="col-md-3">
            <label>Effective From</label>
            <input type="date" name="effective_from" class="form-control" required>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100">Add Rate</button>
          </div>
        </div>
      </form>

    </div>
  </div>
<?php endforeach; ?>

<script>
document.querySelectorAll('.addRateForm').forEach(form => {
  form.onsubmit = function(e) {
    e.preventDefault();
    fetch('<?= $form_action ?>', {
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
});
</script>

@endsection
