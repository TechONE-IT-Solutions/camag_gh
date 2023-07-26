<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <!--Pages start-->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Website Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li class="nav-item">
        <a href="{{ route('homepage') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('about') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>About</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="{{ route('charts') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Charts</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a href="{{ route('executive') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Executive members</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="{{ route('contact') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Contact</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a href="{{ route('events') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Events</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('gallery') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Gallery</span>
        </a>
      </li>
      <!-- <li>
        <a href="{{ route('paydues') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Pay-Dues</span>
        </a>
      </li>
      <li>
        <a href="{{ route('donate') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Donate</span>
        </a>
      </li>
      <li>
        <a href="{{ route('register') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Register</span>
        </a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav -->
    </ul>
  </li>
  <!-- End Website -->

  <!-- End Website -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#members-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Members</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="members-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('assemblymember') }}">
          <i class="bi bi-circle"></i><span>Assembly Members</span>
        </a>
      </li>
      <li>
        <a href="{{ route('unitcommittee') }}">
          <i class="bi bi-circle"></i><span>Unit Committe Members</span>
        </a>
      </li>
      <li>
        <a href="{{ route('associatemember') }}">
          <i class="bi bi-circle"></i><span>Associate Members</span>
        </a>
      </li>
    </ul>
  </li>

  
    <li class="nav-item">
      <a href="{{ route('payment') }}" class="nav-link collapsed">
        <i class="bi bi-credit-card"></i>
        <span>Payment</span>
      </a>
    </li>

</ul>
</aside><!-- End Sidebar-->