<!DOCTYPE html>
<html>
    <head>
        <title>File Saver</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial sceal 1.0">
        <link rel="stylesheet" type="text/css" href="myserver.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="head">
                <span>PUBLIC COMPUTER SERVER</span><br/><br/>
            </div>
            Type:  <input type="radio" name="type" required>SC <input type="radio" name="type" required>ST <input type="radio" name="type" required>OBC<br/><br/>
                    
                    <label><b>Enter Aadhaar Card Number</b></label><br/>
                    <div class="inp">
                    <input class="ins" type="text" name="aa1"  placeholder="First-4" maxlength="4" minlength="4" required>
                    <input class="ins" type="text" name="aa2"  placeholder="Middle-4" maxlength="4" minlength="4" required>
                    <input class="ins" type="text" name="aa3"  placeholder="Last-4" maxlength="4" minlength="4" required>
                    </div>
                    <br/><br/>
                   <b> Main Form</b>
                    <input class="file" type="file" name="file1" required>
                    <b>Acknowledgement</b>
                    <input class="file" type="file" name="file2" required>
                    <br/><br/>
                    <div class="signup">
                        <input type="submit" class="save" value="save now" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to save">
                    </div>
                 </form>
            </div>
        </div>

<script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
      
    </body>
</html>
