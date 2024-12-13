<pre><?php
//nếu n = x thì tồn tại ko thì bằng rỗng
$n=isset($_GET['x'])?$_GET['x']:'';
$m = $_GET['y']??0;  echo "n=$n <br> m=$m, <hr>";
//nếu get có thì request có
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
print_r($_FILES);
$n=$_POST['x']??'';

?></pre>
<h1>Chao <?php echo $n ?> </h1>
<?php 
if($_FILES['f']['error']==0)
{
    $file =$_FILES['f'];
    $tenfile =$file['name'];
    $filetam =$file['tmp_name'];
    move_uploaded_file($filetam,"img/$tenfile");
    echo "<img src='img/$tenfile' width=400> ";
    echo "Hello ";
}