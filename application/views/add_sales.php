
<?php

$mess='';

if(isset($_POST['submit'])){	

$data = array(
'SalesID' => $sales,
'S_Name' => $this->input->post('name'),
'S_Surname' => $this->input->post('surname'),
'S_Role' => $this->input->post('role'),
'S_Emails' => $this->input->post('email'),
'S_Password' => $this->input->post('password'),
'Address' => '',
'City' => '',
'Postal_code' =>'',
'Profile_Picture' => '',	
'Country' =>'',
'Employee_Status' =>'1'
);
//Transfering data to Model
$DBName = "Sales_Rep";	
$this->customer_model->form_insert($DBName,$data);	
	
$mess='<div id="success" style="width:300px" class="alert alert-success">Sales Consultant has been Added </div>';
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Add sales</title>
</head>
<fieldset>
<body bgcolor="silver">


<fieldset>

<div class="container"> 

<form id="contact" action="" method="post">
Name:<br>
<input placeholder="Name" style="width:25%" type="text" class="form-control"  required autofocus name="name" >
  <br>
Surname:<br>
<input placeholder="Surname" style="width:25%" class="form-control" name="surname" type="text"  required autofocus >
   <br>
Position:<br>
<input type="text" name="role" style="width:25%" class="form-control" required autofocus>
   <br>
Email:<br>
<input type="email" name="email" style="width:25%" class="form-control" required placeholder="Enter Email Address" required autofocus>
   <br>
Password:<br>
<input placeholder="password"  style="width:25%"type="password" class="form-control" name ="password"  size ="20"required autofocus>
  <br><br>
  <border>
<button type="submit" class="btn btn-success" name="submit"> Add Sales Member</button>
<br>



</form>
</div>
<?php echo $mess ?>

<script>

	
	setTimeout(function(){
  if ($('#success').length > 0) {
    $('#success').remove();
  }
}, 5000)
</script>	
