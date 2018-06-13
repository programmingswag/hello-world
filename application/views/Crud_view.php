
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <tbody>
        <tr class="active">
        <h3> CodeIgniter Crud </h3>
    </tr>
    </ul>

  </div>
</nav>

    <div class= "alert  alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">close</a>
    <div class="container jumbotron page-header well well-lg">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $error = $this->session->flashdata('response');
                if(isset($error) && !empty($error))
                {
                ?>
                <div class="alert alert-dismissible alert-success">
                    <?php echo $error; ?>
                </div>
                <?php
                }
                ?>
                <?php echo anchor("Crud/create", 'Create',['class'=>'btn btn-primary']);?>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="success">
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($records as $record)
            {?>
        <tr class="active">

        <td><?php echo $record->customerName; ?></td>
        <td><?php echo $record->phone; ?></td>
        <td><?php echo $record->address; ?></td>
        <td><?php echo $record->city; ?></td>
        <td><?php echo $record->country; ?></td>
        <td><?php echo anchor("Crud/edit/{$record->id}", 'Update',['class'=>'btn btn-success']);?>
        <?php echo anchor("Crud/delete/{$record->id}", 'Delete',['class'=>'btn btn-danger']);?></td>
        </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
  </body>
</html>