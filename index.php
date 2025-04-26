<?php include('layouts/header.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center ">
    <div class="col-md-8 text-center">
      <h1 class="mb-4 text-primary">Descubra seu Signo</h1>
      <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="bg-primary bg-opacity-50 border shadow-sm p-4 rounded">
        <div class="mb-4">
          <label for="data_nascimento" class="form-label fs-5">Data de Nascimento:</label>
          <input type="date" class="form-control fs-5" id="data_nascimento" name="data_nascimento" >
        </div>
        <button type="submit" class="btn btn-primary bg-gradient w-100 fs-5 py-2"><i class="bi bi-search"></i> Descobrir Signo</button>
      </form>
    </div>
  </div>
</div>

<?php include('modal.php'); ?>

<?php include('layouts/footer.php'); ?>

</body>
</html>
