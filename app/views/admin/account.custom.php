@layout('layouts.panel')

@section('title')
  My Account
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="mb-0">Admin Account Management</h2>
    <p class="text-sm text-muted">Update your profile or change your password.</p>
  </div>
</div>

<div class="row">
  <!-- Profile Update -->
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6>Update Profile</h6>
        <form id="profileForm">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input name="username" class="form-control" value="<?= $admin['username'] ?>" required>
          </div>
          <button class="btn btn-primary">Update Profile</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Password Update -->
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h6>Change Password</h6>
        <form id="passwordForm">
          <div class="mb-3">
            <label class="form-label">Current Password</label>
            <input name="current_password" type="password" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">New Password</label>
            <input name="new_password" type="password" class="form-control" required>
          </div>
          <button class="btn btn-warning">Change Password</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('profileForm').onsubmit = e => {
  e.preventDefault();
  fetch('<?= $update_url ?>', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(new FormData(e.target))
  })
  .then(res => res.json())
  .then(d => alert(d.message));
};

document.getElementById('passwordForm').onsubmit = e => {
  e.preventDefault();
  fetch('<?= $password_url ?>', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(new FormData(e.target))
  })
  .then(res => res.json())
  .then(d => alert(d.message));
};
</script>

@endsection
