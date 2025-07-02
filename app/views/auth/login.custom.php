<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>

    <form method="POST" action="@route('auth.login.submit')">
      <label>Username:</label><br>
      <input type="username" name="username" required><br><br>

      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>

      <button type="submit">Login</button>
    </form>
  </body>
</html>
