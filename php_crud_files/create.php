<?php
require 'connection.php';
$message ='';
if(isset ($_POST['name']) && isset($_POST['email'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $sql ='INSERT INTO person(name, email) VALUES(:name, :email)';
    $statement =$connection->prepare($sql);
    if($statement->execute([':name'=>$name,':email'=>$email]))
        {
            $message="Data Inserted Successfully";
        }
}
?>
<?php require 'header.php'; ?>
<div class="container">
    <div class="card nt-5">
        <div class="card-header">
            <h2> Add a person</h2>
</div>
<div class="card-body">
    <?php if(!empty($message)); ?>
    <div class="alert alert-success">
        <?= $message; ?>
</div>
<?php //endif; ?>
<form method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="id" class="form-control">
</div>
<div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="id" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info"> Create a person</button>
</div>
</form>
</div>
</div>
</div>

