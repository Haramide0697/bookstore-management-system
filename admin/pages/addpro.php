<script>
   $(document).ready(function(){
   window.history.replaceState('','',window.location.href)
   });
</script>
<script type="text/javascript">
$(document).ready(function(e) {
// Function to preview image after validation
$(function() {
$("#pass").change(function()
{
$("#message").empty(); // Toremove the previous error message
var file = this .files [ 0 ];
var imagefile = file .type ;
var match = [ "image/jpeg" , "image/png" , "image/jpg" ];
if(!((imagefile == match [ 0]) ||(imagefile == match[ 1 ]) || (imagefile == match[ 2 ])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false ;
}
else
{
var reader = new FileReader();
reader .onload = imageIsLoaded ;
reader .readAsDataURL(this.files [0]);
}
});
});
function imageIsLoaded(e) {
$("#pass").css("color" , "green");
$('#image_preview').css("display" , "block");
$('#previewing').attr('src' , e .target .result);
$('#previewing').attr('width' , '10%');
$('#previewing').attr('height' , '10%');
};
});
</script>

<?php
if (isset($_POST['submit'])) {
    $pname = sanitize($_POST['pname']);
    $autor = sanitize($_POST['autor']);
    $desc = sanitize($_POST['desc']);
    $price = sanitize($_POST['price']);
    $pass = $_FILES['pass']['tmp_name'];
    $filess = $_FILES['filess']['tmp_name'];
    /*echo "<script> alert('$pass, $pname, $origin, $ingredents, $nutri_values, $comment, $category, $proce'); </script>";*/

    if (empty($pname) || empty($autor) || empty($desc) || empty($price) || empty($pass) || empty($filess)) {
        $errmsg = "Please Fill All Fields";
    }else{
       
        $temporary = explode("." , $_FILES [ "pass" ][ "name" ]);
        $temporary2 = explode("." , $_FILES [ "filess" ][ "name" ]);
        $file_extension = end ($temporary );
        $file_extension2 = end ($temporary2 );
        $pic = $_FILES['pass']['name'];
        $picp = $_FILES['pass']['tmp_name'];
        $pics = $_FILES['pass']['size'];

        $pic2 = $_FILES['filess']['name'];
        $picp2 = $_FILES['filess']['tmp_name'];
        $pics2 = $_FILES['filess']['size'];


        $hash = sha1($pic);
        $hash2 = sha1($pic2);

        $ext1 = pathinfo($pic, PATHINFO_EXTENSION);
        $ext1 = strtolower($ext1);

        $ext2 = pathinfo($pic2, PATHINFO_EXTENSION);
        $ext2 = strtolower($ext2);

        $upload_folder1 = "../products/".$hash.".".$ext1;
        $uploadpic = $hash.".".$ext1;

        $upload_folder2 = "../files/".$hash2.".".$ext2;
        $uploadpic2 = $hash2.".".$ext2;

        $in = array('name' => $pname,
                    'autor' => $autor, 
                    'desc' => $desc, 
                    'files' => $uploadpic2, 
                    'price' => $price, 
                    'pic' => $uploadpic, 
                );
        move_uploaded_file($picp, $upload_folder1);
        move_uploaded_file($picp2, $upload_folder2);
        create('product',$in);
        $msg = "You Have Successfully Added $pname";

    }
    }

?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add A Book</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add A Book</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="uploadimage" action ="" method ="post" enctype ="multipart/form-data">
                            <?php
                            if (isset($errmsg)) {
                            ?>
                            <div class="alert alert-warning">
                                <?php echo "$errmsg"; ?>
                            </div>
                            <?php
                            }elseif (isset($msg)) {
                            ?>
                            <div class="alert alert-success">
                                <?php echo "$msg"; ?>
                            </div>
                            <?php
                            }

                            ?>
                        <div id ="image_preview"><img id ="previewing" src ="assets/img/Graphic1.jpg"/></div>
                        <hr id ="line">
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="pass" >Upload Picture</label>
                                <input type="file" name="pass" id="pass" class="form-control" required accept="image/*">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="pname" >Name</label>
                                <input type="text" name="pname" id="pname" class="form-control" required>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="autor" >Autor</label>
                                <input type="text" name="autor" id="autor" class="form-control" required>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="filess" >Add a file</label>
                                <input type="file" name="filess" id="filess" class="form-control" required>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="desc" >Description</label>
                                <textarea class="form-control" id="desc" name="desc" required> </textarea>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="price" >Price (NGN)</label>
                                <input type="text" name="price" id="price" class="form-control" required>
                            </div>
                            </div>
                            </div>
                            <button  class="btn btn-success submit" value="Upload" type="submit" name="submit">Submit</button></a>
                            <span id="loading" style="display:none"><img src="../img/core-img/loading.gif"></span>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->