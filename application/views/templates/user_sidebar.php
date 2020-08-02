<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('user')?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PAI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!-- QUERY MENU -->

    <?php
$role_id = $this->session->userdata('role_id');
$nim = $this->session->userdata('nim');

$queryDataAnggota = "SELECT COUNT(nim) FROM `anggota` WHERE nim = $nim";
if ($queryDataAnggota > 0) {
    $queryUser = "SELECT *
    FROM `anggota`
    WHERE `role_id` = $role_id";
    $User = $this->db->query($queryUser)->row_array();
    $queryMenu = "SELECT `user_menu`.`id_menu`, `menu`
    FROM `user_menu` INNER JOIN `user_access_menu`
    ON `user_menu`.`id_menu` = `user_access_menu`.`menu_id`
    WHERE `user_access_menu`.`role_id` = $role_id
    ORDER BY `user_access_menu`.`menu_id` ASC ";
} else {

    $queryUser = "SELECT * FROM `user`WHERE `role_id` = $role_id";
    $User = $this->db->query($queryUser)->row_array();
    $queryMenu = "SELECT `user_menu`.`id_menu`, `menu`
                    FROM `user_menu` INNER JOIN `user_access_menu`
                    ON `user_menu`.`id_menu` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC ";

}
$menu = $this->db->query($queryMenu)->result_array();
?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m): ?>
        <div class="sidebar-heading">
            <?=$m['menu'];?>
        </div>

        <!-- SIAPKAN SUB MENU SESUAI MENU -->

        <?php
$menuId = $m['id_menu'];

$querySubMenu = "SELECT *
                                FROM `user_sub_menu`
                                WHERE `menu_id` = $menuId
                                AND `is_active` = 1


                            ";
$subMenu = $this->db->query($querySubMenu)->result_array();
?>
        <?php foreach ($subMenu as $sm): ?>
            <?php if ($title == $sm['title']): ?>
                <li class="nav-item active">
                <?php else: ?>
                <li class="nav-item ">
                <?php endif;?>
                <a href="<?=base_url($sm['url']);?>/<?=$User['role_nama']?>" class="nav-link pb-0">
                    <i class="<?=$sm['icon'];?>"></i>
                    <span><?=$sm['title'];?></span>
                </a>
                </li>
            <?php endforeach;?>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

        <?php endforeach;?>



        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('auth/logout')?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Log-out</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Divider -->


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->