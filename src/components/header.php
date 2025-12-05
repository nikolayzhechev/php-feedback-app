<?php require_once 'config/db.php'; ?>

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="index.php">Feedback App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         <li class="nav-item">
              <a class="nav-link" href="/index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/feedback.php"
                >Feedback</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.php"
                >About</a
              >
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/login.php"
                ><button class="btn btn-sm btn-outline-secondary" type="button">Login</button></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register.php"
                ><button class="btn btn-sm btn-outline-secondary" type="button">Register</button></a
              >
            </li>
        </ul>
      </div>
  </div>
</nav>