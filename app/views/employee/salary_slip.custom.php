@layout('layouts.panel')

@section('title')
  Salary Slip
@endsection

@section('content')

<?php if (isset($not_found) && $not_found): ?>
  <div class="alert alert-danger">Salary record not found.</div>
  <?php return; ?>
<?php endif; ?>

<?php
  $final_total = $salary['total_amount'];
  foreach ($adjustments as $adj) {
    $final_total += $adj['amount'];
  }
?>

<style>
@media print {
  body {
    background: white;
    margin: 0;
    font-size: 12pt;
  }

  .no-print {
    display: none !important;
  }

  .print-area {
    padding: 20px;
    border: none !important;
    box-shadow: none !important;
  }

  .print-area h2 {
    font-size: 20pt;
    margin-bottom: 10px;
  }

  .table th, .table td {
    padding: 6px !important;
  }
}
</style>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card print-area">
      <div class="card-body">
        <h2 class="text-center mb-1">Eigensol</h2>
        <h5 class="text-center text-muted mb-4">Salary Slip</h5>

        <div class="mb-4">
          <strong>Month:</strong> <?= $salary['month'] ?>/<?= $salary['year'] ?><br>
          <strong>Generated On:</strong> <?= date('d M Y', strtotime($salary['created_at'])) ?>
        </div>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Office Hours</th>
              <td><?= $salary['office_hours'] ?> hrs</td>
            </tr>
            <tr>
              <th>WFH Hours</th>
              <td><?= $salary['wfh_hours'] ?> hrs</td>
            </tr>
            <tr>
              <th>Office Hour Rate</th>
              <td>PKR <?= number_format($salary['office_hour_rate'], 2) ?></td>
            </tr>
            <tr>
              <th>WFH Hour Rate</th>
              <td>PKR <?= number_format($salary['wfh_hour_rate'], 2) ?></td>
            </tr>
            <tr>
              <th>Base Total</th>
              <td><strong>PKR <?= number_format($salary['total_amount'], 2) ?></strong></td>
            </tr>
          </tbody>
        </table>

        <?php if (!empty($adjustments)): ?>
        <h6 class="mt-4">Adjustments</h6>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Category</th>
              <th>Amount</th>
              <th>Note</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($adjustments as $a): ?>
            <tr>
              <td><?= htmlspecialchars($a['category']) ?></td>
              <td><?= $a['amount'] >= 0 ? '+' : '-' ?> PKR <?= number_format(abs($a['amount']), 2) ?></td>
              <td><?= htmlspecialchars($a['note']) ?></td>
              <td><?= $a['adjusted_on'] ?></td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <?php endif; ?>

        <p class="mt-3 fw-bold">
          Final Total after Adjustments: <?= number_format($final_total, 2) ?> PKR
        </p>

        <div class="text-center no-print mt-4">
          <button class="btn btn-secondary" onclick="window.print()">Print Slip</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
