
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
        <H3> CodeIgniter Crud </H3>
    </tr>
    </ul>

  </div>
</nav>

    <div class= "alert  alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">close</a>
    <div class="container jumbotron page-header well well-lg">

    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <div class="container">

            <td><?php echo form_open("crud/update/{$record->id}",['class'=>'form-horizontal']);?>
                Customer Name <?php echo form_input(['name'=>'customerName',
                'class'=>'form-control','value'=> set_value('customerName', $record->customerName)]);?>
                <?php echo form_error('customerName'); ?>
            </td>

            <td> Phone Number<?php echo form_input(['name'=>'phone',
                'class'=>'form-control','value'=> set_value('phone', $record->phone)]);?>
                 <?php echo form_error('phone'); ?>
            </td>

            <td> Address <?php echo form_input(['name'=>'address',
                'class'=>'form-control','value'=> set_value('address', $record->address)]);?>
                 <?php echo form_error('address'); ?>
            </td>

            <td>City <?php echo form_input(['name'=>'city',
                'class'=>'form-control','value'=> set_value('city',$record->city)]);?>
                 <?php echo form_error('city'); ?>
            </td>

            <td>Country <?php echo form_input(['name'=>'country',
                'class'=>'form-control','value'=> set_value('country',$record->country)]);?>
                 <?php echo form_error('country'); ?>
            </td>

            <td><?php echo form_submit(['value'=>'submit','class'=>'btn btn-primary'])?>
            </td>
        </div>
            <?php echo form_close();?>
        </div>
    </tbody>
    </table>
    </div>
    </div>
  </body>
</html>