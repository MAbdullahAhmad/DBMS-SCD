@layout('layouts.panel')

@section('title')
  Company Meta Settings
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">Company Meta Management</h2>
    <p class="text-sm text-muted">Manage key-value settings like office hours etc.</p>
  </div>
</div>

<!-- Add Meta -->
<div class="card mb-4">
  <div class="card-body">
    <h6>Add New Meta</h6>
    <form id="metaAddForm" class="row g-3">
      <div class="col-md-5">
        <input name="key" class="form-control" placeholder="Meta Key (e.g., office_hours_default)" required>
      </div>
      <div class="col-md-5">
        <input name="value" class="form-control" placeholder="Meta Value (e.g., 18:00-23:59)" required>
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary w-100">Add</button>
      </div>
    </form>
  </div>
</div>

<!-- Meta Table -->
<div class="card">
  <div class="card-body">
    <h6 class="mb-3">All Meta Settings</h6>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Key</th>
            <th>Value</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($meta as $m): ?>
            <tr>
              <td><?= $m['id'] ?></td>
              <td><?= $m['key'] ?></td>
              <td><?= $m['value'] ?></td>
              <td>
                <button class="btn btn-sm btn-warning" onclick="openEditModal(<?= $m['id'] ?>, '<?= $m['key'] ?>', '<?= htmlspecialchars($m['value'], ENT_QUOTES) ?>')">Update</button>
                <button onclick="deleteMeta(<?= $m['id'] ?>)" class="btn btn-sm btn-danger ms-2">Delete</button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form id="metaEditForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Meta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="edit_id">
        <div class="mb-3">
          <label>Meta Key</label>
          <input type="text" class="form-control" id="edit_key">
        </div>
        <div class="mb-3">
          <label>Meta Value</label>
          <input type="text" name="value" class="form-control" id="edit_value" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script>
const add_url = '<?= $add_url ?>';
const edit_url = '<?= $edit_url ?>';
const delete_url = '<?= $delete_url ?>';

document.getElementById('metaAddForm').onsubmit = e => {
  e.preventDefault();
  fetch(add_url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(new FormData(e.target))
  })
  .then(res => res.json())
  .then(d => {
    alert(d.message);
    if (d.success) location.reload();
  });
};

function openEditModal(id, key, value) {
  document.getElementById('edit_id').value = id;
  document.getElementById('edit_key').value = key;
  document.getElementById('edit_value').value = value;
  new bootstrap.Modal(document.getElementById('editModal')).show();
}

document.getElementById('metaEditForm').onsubmit = e => {
  e.preventDefault();
  fetch(edit_url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(new FormData(e.target))
  })
  .then(res => res.json())
  .then(d => {
    alert(d.message);
    if (d.success) location.reload();
  });
};

function deleteMeta(id) {
  if (!confirm('Delete this meta?')) return;
  fetch(delete_url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams({ id })
  })
  .then(res => res.json())
  .then(d => {
    alert(d.message);
    if (d.success) location.reload();
  });
}
</script>

@endsection
