<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Entar como gestor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="assets/partials/_handleLogin.php" method="POST">
          <div class="mb-3">
              <label for="username" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Palavra Pass</label>
              <input type="password" class="form-control" id="password" name="password">
              <div class="form-text">Nunca compartilharemos sua senha com mais ninguém.</div>
          </div>
          <button type="submit" class="btn btn-success" name="submit">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>