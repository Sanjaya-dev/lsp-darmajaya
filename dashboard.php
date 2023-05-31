<?php
    if($user_id){
        $module = isset($_GET['module']) ? $_GET['module']:false;
        $action = isset($_GET['action']) ? $_GET['action']:false;
        
    }
?>
<div class="container text-center">
  <div class="row">
    <div class="col-lg-3 menu_dashboard">
      <ul id="list_dashboard">
        <li <?php if($module == 'kategori'){echo "class='active'";}?> >
          <a href="<?php echo BASE_URL."index.php?page=dashboard&module=kategori&action=list";?>">Kategori</a>
        </li>
        <li <?php if($module == 'pelatihan'){echo "class='active'";}?> >
          <a href="<?php echo BASE_URL."index.php?page=dashboard&module=pelatihan&action=list";?>">Pelatihan</a>
        </li>
        <li <?php if($module == 'user'){echo "class='active'";}?> >
          <a href="<?php echo BASE_URL."index.php?page=dashboard&module=user&action=list";?>">User</a>
        </li>
        <li <?php if($module == 'acc_pelatihan'){echo "class='active'";}?> >
          <a href="<?php echo BASE_URL."index.php?page=dashboard&module=acc_pelatihan&action=list";?>">Acc Pelatihan</a>
        </li>
        <li <?php if($module == 'acc_sertifikasi'){echo "class='active'";}?> >
          <a href="<?php echo BASE_URL."index.php?page=dashboard&module=acc_sertifikasi&action=list";?>">Acc Sertifikasi</a>
        </li>
      </ul>
    </div>
    <div class="col content_dashboard">
      <?php
        $file = "module/$module/$action.php";

        if(file_exists($file)){
          include_once($file);
        }else{
          echo "<h2>maaf halam yang di cari tidak di temukan</h2>";
        }
      ?>
    </div>
</div>