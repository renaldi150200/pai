     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

             <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                 <!-- Sidebar Toggle (Topbar) -->
                 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                 </button>


                 <!-- Topbar Navbar -->
                 <ul class="navbar-nav ml-auto">




                 <li class="nav-item dropdown no-arrow">
                         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="fa fa-plus" style="font-size:24px;" ></span>
                         </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                             <div class="dropdown-divider"></div>
<!-- lempar data role kesini -->
                             <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal1" >Buat Kelas</button>


                         </div>
                     </li>
                     <div class="topbar-divider d-none d-sm-block"></div>

                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['name'];?></span>
                             <img class="img-profile rounded-circle" src="<?=base_url('assets/img/profile/') . $user['image'];?>">
                         </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                             <a class="dropdown-item" href="<?=base_url('user')?>">
                                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Profile
                             </a>
                             <a class="dropdown-item" href="#">
                                 <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Settings
                             </a>
                             <a class="dropdown-item" href="#">
                                 <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Activity Log
                             </a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="<?=base_url('auth/logout')?>" data-toggle="modal" data-target="#logoutModal">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Logout
                             </a>
                         </div>
                     </li>

                 </ul>

             </nav>
             <!-- End of Topbar -->
             <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=base_url('kelas/tambah');?>">
          <div class="form-group">
            <label  class="col-form-label" >Nama Kelas</label>
            <input type="text" class="form-control" id="recipient-name" name="nama_kelas">
          </div>
          <div class="form-group">
            <label class="col-form-label"  >Deskripsi Kelas</label>
            <input type="text" class="form-control" id="recipient-name" name="desc">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Buat Kelas</button>
        </form>
      </div>
    </div>
  </div>
</div>

