@layout('layouts.panel')

@section('title')
  Projects & Tasks
@endsection

@section('content')

<div class="row mb-4">
  <div class="col-12">
    <h2 class="text-capitalize mb-0">Projects & Time Tracking Overview</h2>
    <p class="mb-0 text-sm">This page shows employee-wise and project-wise time tracking summary for current month and week.</p>
  </div>
</div>

<div style="display: flex; justify-content: flex-end;">
  <form method="get" class="d-flex align-items-end gap-3 mb-4 px-1">
    <div>
      <label for="month" class="form-label">Month</label>
      <select class="form-control" id="month" name="month">
        <?php for ($m = 1; $m <= 12; $m++): ?>
          <option value="<?= $m ?>" <?= $filter_month == $m ? 'selected' : '' ?>>
            <?= date('F', mktime(0, 0, 0, $m, 1)) ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>

    <div>
      <label for="year" class="form-label">Year</label>
      <select class="form-control" id="year" name="year">
        <?php for ($y = date('Y') - 2; $y <= date('Y') + 1; $y++): ?>
          <option value="<?= $y ?>" <?= $filter_year == $y ? 'selected' : '' ?>>
            <?= $y ?>
          </option>
        <?php endfor; ?>
      </select>
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Filter</button>
      <?php if (isset($_GET['month']) || isset($_GET['year'])): ?>
        <a href="<?= route('admin.projects') ?>" class="btn btn-outline-secondary ms-2">Clear Filters</a>
      <?php endif; ?>
    </div>
  </form>
</div>



<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Employees</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2 mx-5">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Month Hours</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Week Hours</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($employees as $emp): ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?= $emp['full_name'] ?></h6>
                    </div>
                  </div>
                </td>
                <td><p class="text-xs text-secondary mb-0"><?= $emp['email'] ?></p></td>
                <td class="align-middle text-center">
                  <span class="text-sm font-weight-bold"><?= $emp['time_month_hours'] ?> hrs</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-sm font-weight-bold"><?= $emp['time_week_hours'] ?> hrs</span>
                </td>
                <td>
                  <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#emp-tasks-<?= $emp['id'] ?>">
                    Show Tasks
                  </button>
                </td>
              </tr>
              <tr class="collapse" id="emp-tasks-<?= $emp['id'] ?>">
                <td colspan="5">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th class="text-xs">Task</th>
                        <th class="text-xs">Project</th>
                        <th class="text-xs">Month Hours</th>
                        <th class="text-xs">Week Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($emp['tasks'])): ?>
                        <?php foreach ($emp['tasks'] as $task): ?><tr>
                          <td class="text-sm"><?= $task['task_name'] ?></td>
                          <td class="text-sm"><?= $task['project_name'] ?></td>
                          <td class="text-sm"><?= $task['time_month_hours'] ?? 0 ?> hrs</td>
                          <td class="text-sm"><?= $task['time_week_hours'] ?? 0 ?> hrs</td>
                        </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="4" class="text-sm text-muted">No tasks assigned.</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Projects & Tasks</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2 mx-5">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Month Hours</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Week Hours</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tasks</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($projects as $project): ?>
              <tr>
                <td>
                  <p class="text-sm mb-0"><?= $project['name'] ?></p>
                  <p class="text-xs text-secondary mb-0"><?= $project['description'] ?></p>
                </td>
                <td><span class="text-sm font-weight-bold"><?= $project['time_month_hours'] ?> hrs</span></td>
                <td><span class="text-sm font-weight-bold"><?= $project['time_week_hours'] ?> hrs</span></td>
                <td>
                  <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tasks-<?= $project['id'] ?>">
                    Show Tasks
                  </button>
                </td>
              </tr>
              <tr class="collapse" id="tasks-<?= $project['id'] ?>">
                <td colspan="4">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th class="text-xs">Task</th>
                        <th class="text-xs">Month Hours</th>
                        <th class="text-xs">Week Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($project['tasks'] as $task): ?>
                      <tr>
                        <td class="text-sm"><?= $task['task_name'] ?></td>
                        <td class="text-sm"><?= $task['time_month_hours'] ?> hrs</td>
                        <td class="text-sm"><?= $task['time_week_hours'] ?> hrs</td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
