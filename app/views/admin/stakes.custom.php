@layout('layouts.panel')

@section('title')
  Project Stakes
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="text-capitalize mb-0">Manage Project Stakeholders</h2>
    <p class="mb-0 text-sm">Select a project to configure payment model, shares, and earnings.</p>
  </div>
</div>

<!-- Project Dropdown -->
<form method="GET" action="<?= route('admin.stakes.index') ?>" class="mb-4">
  <label>Select Project:</label>
  <select name="project_id" onchange="this.form.submit()" class="form-select w-auto d-inline-block">
    <option value="">-- Select Project --</option>
    <?php foreach ($projects as $p): ?>
      <option value="<?= $p['id'] ?>" <?= $p['id'] == $project_id ? 'selected' : '' ?>>
        <?= htmlspecialchars($p['name']) ?>
      </option>
    <?php endforeach ?>
  </select>
</form>

<?php if (!empty($project_data)): ?>
  <?php $data = $project_data; ?>
  <div class="card mb-4">
    <div class="card-header">
      <h5 class="mb-0"><?= htmlspecialchars($data['project']['name']) ?> – Stake Settings</h5>
      <small class="text-muted"><?= htmlspecialchars($data['project']['description']) ?></small>
    </div>

    <div class="card-body">

      <?php if (!empty($data['warnings'])): ?>
        <?php foreach ($data['warnings'] as $warn): ?>
          <div class="badge bg-warning text-dark mb-2"><?= $warn ?></div>
        <?php endforeach; ?>
      <?php endif; ?>

      <div class="mb-3">
        <strong>Model:</strong> <?= $data['payment_model']['model'] ?? '<em class="text-muted">Not set</em>' ?><br>
        <strong>Allow Self Pay:</strong> <?= !empty($data['payment_model']) && $data['payment_model']['allow_self_pay'] ? 'Yes' : 'No' ?><br>
        <strong>Allow Time Investment:</strong> <?= !empty($data['payment_model']) && $data['payment_model']['allow_time_investment'] ? 'Yes' : 'No' ?><br>
        <strong>Total Shares Used:</strong> <?= $data['total_percentage'] ?? 0 ?>%
        <?php if (!empty($data['financials'])): ?>
          <br><strong>Gross Income:</strong> <?= $data['financials']['gross_income'] ?><br>
          <strong>Total Expense:</strong> <?= $data['financials']['total_expense'] ?>
        <?php endif; ?>
      </div>

      <!-- Form -->
      <form id="stakeForm" class="mt-4">
        <input type="hidden" name="project_id" value="<?= $project_id ?>">

        <!-- Payment Model -->
        <div class="mb-3">
          <label>Payment Model</label>
          <select name="model" class="form-select w-auto">
            <?php
              $model = $data['payment_model']['model'] ?? '';
              $models = ['hourly', 'share', 'stakeholder'];
              foreach ($models as $m):
            ?>
              <option value="<?= $m ?>" <?= $model == $m ? 'selected' : '' ?>><?= ucfirst($m) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Flags -->
        <div class="form-check mb-3">
          <input type="checkbox" name="allow_self_pay" value="1" class="form-check-input" id="asp"
            <?= !empty($data['payment_model']) && $data['payment_model']['allow_self_pay'] ? 'checked' : '' ?>>
          <label for="asp" class="form-check-label">Allow Self Pay</label>
        </div>

        <div class="form-check mb-3">
          <input type="checkbox" name="allow_time_investment" value="1" class="form-check-input" id="ati"
            <?= !empty($data['payment_model']) && $data['payment_model']['allow_time_investment'] ? 'checked' : '' ?>>
          <label for="ati" class="form-check-label">Allow Time Investment</label>
        </div>

        <!-- Financials -->
        <div class="mb-3">
          <label>Gross Income</label>
          <input type="number" step="0.01" name="gross_income" class="form-control"
            value="<?= $data['financials']['gross_income'] ?? '' ?>">
        </div>

        <div class="mb-3">
          <label>Total Expense</label>
          <input type="number" step="0.01" name="total_expense" class="form-control"
            value="<?= $data['financials']['total_expense'] ?? '' ?>">
        </div>

        <!-- Shares -->
        <?php foreach ($data['shares'] as $i => $s): ?>
          <div class="border p-3 rounded mb-3">
            <input type="hidden" name="shares[<?= $i ?>][employee_id]" value="<?= $s['employee_id'] ?>">

            <div class="mb-2">
              <strong><?= $s['full_name'] ?></strong> (<?= $s['email'] ?>)
            </div>

            <label>Role</label>
            <select name="shares[<?= $i ?>][role]" class="form-select w-auto mb-2">
              <option value="developer" <?= $s['role'] == 'developer' ? 'selected' : '' ?>>Developer</option>
              <option value="stakeholder" <?= $s['role'] == 'stakeholder' ? 'selected' : '' ?>>Stakeholder</option>
            </select>

            <label>Share %</label>
            <input type="number" step="0.01" name="shares[<?= $i ?>][percentage]" class="form-control"
              value="<?= $s['share_percentage'] ?>">
          </div>
        <?php endforeach; ?>

        <button type="submit" class="btn btn-primary mt-2">Save Settings</button>
      </form>

      <script>
        document.getElementById('stakeForm').onsubmit = function(e) {
          e.preventDefault();
          fetch('<?= $form_action ?>', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams(new FormData(this))
          })
          .then(res => res.json())
          .then(data => alert(data.message));
        };
      </script>

    </div>
  </div>

<?php elseif (!empty($project_id)): ?>
  <div class="alert alert-warning">Project not found or has no configured data.</div>
<?php endif; ?>

@endsection
