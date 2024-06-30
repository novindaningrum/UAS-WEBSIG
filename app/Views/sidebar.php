
    <style>
      #sidebarMenu {
        height: 100vh;
        background-color: #f5f5f5; /* Light gray background */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        transition: all 0.3s ease-in-out; /* Smooth transition on hover */
      }

      #sidebarMenu.collapsed {
        width: 600px; /* Narrow sidebar when collapsed */
        transition: all 0.3s ease-in-out; /* Smooth transition on collapse */
      }

      .nav-link {
        display: flex;
        text-decoration: none;
        color: #333; /* Darker text color */
        padding: 10px 15px; /* Adjust padding for better spacing */
        transition: all 0.3s ease-in-out; /* Smooth transition on hover */
      }

      .nav-link:hover {
        background-color: #e9ecef; /* Light hover background */
      }

      .nav-link > i {
        margin-right: 10px; /* Adjust icon margin for better alignment */
        font-size: 18px; /* Increase icon size for better visibility */
      }

      .sb-nav-link-icon {
        display: none; /* Hide icons in collapsed sidebar */
      }

      #sidebarMenu.collapsed .nav-link > i {
        display: inline-block; /* Show icons only when sidebar is expanded */
      }

      .nav-link.active {
        background-color: #ddd; /* Highlight active link */
        font-weight: bold; /* Make active link bolder */
      }

      .small {
        color: #888; /* Dimmer text color for copyright */
        text-align: center; /* Center align copyright text */
        margin-top: 15px; /* Add some margin for better spacing */
      }
      
    </style>
  <nav id="sidebarMenu" class="col-10 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/Dashboard') ?>">
              <i class="fas fa-tachometer-alt"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/kecamatan') ?>">
              <i class="fas fa-columns"></i>
              Kecamatan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pondok') ?>">
              <i class="fas fa-book-open"></i>
              Pondok Pesantren
            </a>
          </li>
        </ul>

        <a class="nav-link" href="<?= base_url('/Dashboard') ?>">
          <i class="fas fa-sign-out-alt"></i>  Logout
        </a>
        <hr>
        <div class="small">&copy; 2024 - UNU Al Ghazali Cilacap</div> 
    </nav>
