<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT . 'public'; ?>">The Base</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/Index'; ?>" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/about'; ?>" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/contact'; ?>" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/login'; ?>" style="padding: 10px 20px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/w'; ?>" style="padding: 10px 20px;">Workout</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/chat?id=&selected='; ?>" style="padding: 10px 20px;">Chat</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/plan'; ?>" style="padding: 10px 20px;">plan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-5-dark-1 u-text-hover-palette-5-dark-2 u-text-palette-5-light-2" href="<?php echo URLROOT . 'pages/ViewUsers'; ?>" style="padding: 10px 20px;">ViewUsers</a>
</li>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (isset($_SESSION['user_id'])) {
              echo $_SESSION['user_name'];
            } else {
              echo 'User';
            }
            ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if (isset($_SESSION['user_id'])) : ?>
              <li><a class="dropdown-item" href="users/logout">Logout</a></li>
            <?php else : ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/login'; ?>">Login</a></li>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/register'; ?>">Sign Up</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            <?php endif; ?>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>