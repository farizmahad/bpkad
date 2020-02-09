
   <div class="row wrapper border-bottom white-bg page-heading">
     <div class="col-lg-10">
        <h2>&nbsp;Manage User</h2>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
       <br>
<div class="ibox-content">

 <br><br><a href="<?php echo base_url(); ?>admin/user"><button type="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>&nbsp;&nbsp
                   <a href="<?php echo base_url(); ?>admin/user/create_user"><button type="button" class="btn btn-info" data-toggle="modal"><i class="fa fa-plus"></i> Tambah User</button></a>&nbsp;&nbsp
                   <a href="<?php echo base_url(); ?>admin/user/create_group"><button type="button" class="btn btn-white" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Group</button></a>&nbsp;&nbsp
    <br><br><br><table id="example2" class="table table-bordered table-hover" width="80%">
        <thead>
          <tr>
            <th width="5%" style="text-align:center;">No</th>
            <th> First Name</th>
            <th> Last Name</th>
            <th> Email </th>
            <th> Groups </th>
            <th width="30%" style="text-align:center;"> Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $no=1;
          foreach($users as $user): 
          ?>
          <tr>
             <td align="center" width="5%"><?php echo $no++; ?></td>
             <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
             <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>   
             <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
             <td ><?php foreach ($user->groups as $group):?>
                  <?php echo anchor("admin/Auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br>
                <?php endforeach?>
                </td>
             
            <td width="30%" align="center">  

            <?php echo anchor("admin/auth/edit_user/".$user->id, '<button class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i> </button>') ;?>
            <a href="#" data-url="<?php echo site_url('admin/Auth/delete_user/'.$user->id);?>" class="btn btn-sm btn-info btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i></a>

            </td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>
</div>


<script type="text/javascript">
 $(function () {
    $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
       
        "scrollX": true
        
    });
});   


 $(document).ready(function(){
  $('.confirm_delete').on('click', function(){
    
    var delete_url = $(this).attr('data-url');

    swal({
      title: "Hapus ?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Hapus !",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
     
      window.location.href = delete_url;
    });

    return false;
  });
});
</script>


