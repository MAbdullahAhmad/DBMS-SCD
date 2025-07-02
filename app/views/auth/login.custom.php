@layout('layouts.form')

@section('title')
  Login
@endsection


@section('form-title')
  Login
@endsection

@section('content')
  <form role="form" class="text-start" method="POST" action="@route('auth.login.submit')">
    <div class="input-group input-group-outline my-3">
      <label class="form-label">Username</label>
      <input name="username" type="text" class="form-control" required>
    </div>
    <div class="input-group input-group-outline mb-3">
      <label class="form-label">Password</label>
      <input name="password" type="password" class="form-control" required>
    </div>
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
    </div>
  </form>
@endsection
