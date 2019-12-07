<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Quang Trung</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li <?php if (strpos($_SERVER['REQUEST_URI'],'duan/catalog' )): ?>
            class = 'active'
        <?php endif ?>><a href="http://localhost/duan/catalog/"><i class="fa fa-link"></i> <span>Quản lý danh mục</span></a></li>

        <li
        <?php if (strpos($_SERVER['REQUEST_URI'],'duan/product' )): ?>
            class = 'active'
        <?php endif ?>
        ><a href="http://localhost/duan/product/"><i class="fa fa-link"></i> <span>Quản lý sản phẩm<n/span></a></li>
        <li
        <?php if (strpos($_SERVER['REQUEST_URI'],'duan/comment' )): ?>
            class = 'active'
        <?php endif ?>><a href="http://localhost/duan/comment/"><i class="fa fa-link"></i> <span>Quản lý bình luận<n/span></a></li>
          <li <?php if (strpos($_SERVER['REQUEST_URI'],'duan/account' )): ?>
            class = 'active'
        <?php endif ?>><a href="http://localhost/duan/account/"><i class="fa fa-link"></i> <span>Quản lý tài khoản</span></a></li>
           <li
        <?php if (strpos($_SERVER['REQUEST_URI'],'duan/slide' )): ?>
            class = 'active'
        <?php endif ?>
        ><a href="http://localhost/duan/slide/"><i class="fa fa-link"></i> <span>Quản lý Slide<n/span></a></li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
