<script>
  function del(iden,path,action){
    var dataString = "id="+iden+"&path="+path+"&action="+action;
    var status = $("#status").val();
    var identity = $('#loading')+iden;
    var confirms = confirm("Clicking this will remove this Book permanently, are you sure you want to continue?");
    if (confirms == true) {
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
            $('#del'+iden).hide();
            $('#loading'+iden).show();
        },
        success : function(response){
            $('#loading'+iden).hide();
            alert(response);
            window.location.reload(1);
        }
    });
}
}
</script>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Book</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Book</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Pic</th>
                          <th>name</th>
                          <th>Author</th>
                          <th>Description</th>
                          <th>File Preview</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM product order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $name = $key->name;
    $autor = $key->autor;
    $desc = $key->desc;
    $files = $key->files;
    $price = $key->price;
    $pic = $key->pic;    
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><a data-toggle="modal" data-target="#accept<?php echo $id; ?>"><img src="../products/<?php echo $pic ?>" width="50px"></a>
                          </td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $autor; ?></td>
                          <td><?php echo $desc; ?></td>
                          <td><a href="../files/<?php echo $files ?>" download><button class="btn btn-success">Download</button></a></td>
                          <td><?php echo $price; ?></td>
                          <td>
                            <a style="cursor:pointer" onclick= "del('<?php echo $id ?>', '<?php echo $pic ?>', 'removeBook')" title="Remove this Book" id="del<?php echo $id?>"><i class="fa fa-trash"></i></a> <span id="loading<?php echo $id ?>" style="display:none"><img src="../img/core-img/loading.gif"></span>
                          </td>

                    <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;"> <?php echo $name; ?></h4>
                     </div>
                     <div class="modal-body">
                        <img src="../products/<?php echo $pic ?>" width="100%">
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                        </tr>
                     </tbody>

      <?php
      $num++;
   }
   
}
?>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->