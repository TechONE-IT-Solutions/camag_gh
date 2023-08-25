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
    <i class="bi bi-globe"></i><span>Website Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li class="nav-item">
        <a href="{{ route('homepage') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('executive') }}" class="nav-link collapsed">
          <i class="bi bi-circle"></i><span>Executive members</span>
        </a>
      </li>

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
          <i class="bi bi-circle"></i><span>Unit Committee Members</span>
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
    <li class="nav-item">
        <a href="{{ route('contact') }}" class="nav-link collapsed">
        <i class="bi bi-bell"></i><span>Notifications</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('composeForAll') }}" class="nav-link collapsed">
            <i class="bi bi-envelope-at-fill"></i><span>Compose Email</span>
        </a>
    </li>

</ul>
</aside><!-- End Sidebar-->
