<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>All Media Files</title>
  </head>
<body>
	<div class="container">
		<h3 class="mt-5">All Media Files</h1>



<!-- row grid -->

<div class="row row-cols-2 row-cols-md-4">
 

<?php
$id=1;
if ($handle = opendir('../uploads/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {

        	?>


   <div class="col mb-4">
    <div class="card">
      <img src="http://localhost/phpapp/uploads/<?php echo $entry; ?>" class="card-img-top" style='height: 200px' alt="...">
      <div class="card-body">
      	 <!-- modal start -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo($id);?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo($id);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Media?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete this Media?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="media_del.php" method="post">
          <input type="hidden" name="medianame" value="<?php echo($entry); ?>">
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
        <!-- modal end -->
      </div>
    </div>
  </div>

        

           <?php
           $id++;
        }
    }
    closedir($handle);
}
?>

</div>
<!-- card group end -->

	</div>



  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>