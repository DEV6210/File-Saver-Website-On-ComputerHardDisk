<html>
    <head>
        <title>myserver</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial sceal 1.0">
        <link rel="stylesheet" type="text/css" href="insert.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
</body>
<?php

$cast = $_POST['type'];
//addhaar number............
$a1=$_POST['aa1'];
$a2=$_POST['aa2'];
$a3=$_POST['aa3'];
$add= $a1. " - " .$a2. " - " . $a3;
/*
function_alert("folder name "."$add" . " folder create & recourd insert sucessfully");

function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg' );</script>";
}*/
//folder................
$cast = $_POST['type'];
$addform = $a1.$a2.$a3;



$json = json_encode(JSON_NUMERIC_CHECK);
if(mkdir('D:/Online Work/SC ST OBC (new)/'.$addform, 0777 , true))
{
if(isset($_FILES['file1']))
    {
       # echo "<pre>";
        #print_r($_FILES);
        #echo "<pre>";

        $file_name = $_FILES['file1']['name'];
        $file_size = $_FILES['file1']['size'];
        $file_temp = $_FILES['file1']['tmp_name'];
        $file_type = $_FILES['file1']['type'];
        move_uploaded_file($file_temp,"D:/Online Work/SC ST OBC (new)/$addform/". $file_name);
        
        $f1="Form ✔️  ";
    }else{
        $f1="Form ❌  ";
    }
    if(isset($_FILES['file2']))
    {
       # echo "<pre>";
        #print_r($_FILES);
        #echo "<pre>";

        $file_name = $_FILES['file2']['name'];
        $file_size = $_FILES['file2']['size'];
        $file_temp = $_FILES['file2']['tmp_name'];
        $file_type = $_FILES['file2']['type'];
        move_uploaded_file($file_temp,"D:/Online Work/SC ST OBC (new)/$addform/". $file_name);
        
        $f2="Acknowledgement ✔️";
    }else{
        $f2="Acknowledgement ❌";
    }

    include ("save.html");
    ?>
    <div class="main">
    <form action="index.php" method="POST">
    <div class="head">
        <span><?php echo  $f1 . " and " . $f2 ?></span><br/><br/>
    </div>

            <br/><br/>
            <div class="signup">
                <input type="submit" class="save" value="Save More File" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to save">
            </div>
    </form>
    </div>
</div><?php

}else{
    include ("another.html");
}

?>

      

        <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>