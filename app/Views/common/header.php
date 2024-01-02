<link href="<?= base_url("public/css/bootstrap.min.css");?>" rel="stylesheet">
<script src="<?= base_url("public/js/bootstrap.bundle.min.js");?>"></script>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("login");?>">Login</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("register");?>">Register</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>