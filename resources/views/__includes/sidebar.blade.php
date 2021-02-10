<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
    <div class="sidebar-brand-icon">
      <i class="fa fa-university"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ site('name') }}</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('/', 'active') }}">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Master
  </div>

  <!-- Nav Item - Books -->
  <li class="nav-item {{ active('book', 'active', 'group') }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#book" aria-expanded="true" aria-controls="book">
      <i class="fas fa-fw fa-book"></i>
      <span>Books</span>
    </a>
    <div id="book" class="collapse {{ active('book', 'show', 'group') }}">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Book</h6>
        <a class="collapse-item {{ active('book', 'active') }}" href="{{ route('book.index') }}">Data Book</a>
        <a class="collapse-item {{ active('book/create', 'active') }}" href="{{ route('book.create') }}">Add Book</a>
      </div>
    </div>
  </li>



  <!-- Nav Item - Author -->
  <li class="nav-item {{ active('stock', 'active', 'group') }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stock" aria-expanded="true" aria-controls="stock">
      <i class="fas fa-fw fa-archive"></i>
      <span>Author</span>
    </a>
    <div id="stock" class="collapse {{ active('stock', 'show', 'group') }}">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Author</h6>
        <a class="collapse-item {{ active('author/add', 'active') }}" href="{{ route('author.add') }}">Add Author</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Member -->
  <li class="nav-item {{ active('member', 'active', 'group') }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#member" aria-expanded="true" aria-controls="member">
      <i class="fas fa-fw fa-user"></i>
      <span>Member</span>
    </a>
    <div id="member" class="collapse {{ active('member', 'show', 'group') }}">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Member</h6>
        <a class="collapse-item {{ active('member', 'active') }}" href="{{ route('member.index') }}">Data Member</a>
        <a class="collapse-item {{ active('member/create', 'active') }}" href="{{ route('member.create') }}">New Member</a>
      </div>
    </div>
  </li>

  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>