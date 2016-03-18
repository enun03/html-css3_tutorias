<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
  
          <!-- Logo -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">PHPDBTUTORIAL</a>
          </div>
          
          <!-- Menu Items -->
          <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="col-sm-6 col-md-3">
        <h2>Enter form info</h2>
        <form class="form-horizontal" method="post" action="proccess.php">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="first_name" placeholder="First Name"/>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="last_name" placeholder="Last Name"/>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="department" placeholder="Department"/>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="email" name="email" placeholder="Email"/>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-sm-offset-6 col-md-offset-6">
            <button type="submit" class="btn btn-success">Add Employee</button>
            </div>
        </div>
    </form>
    </div>
<?php $result = mysqli_query($connect, "SELECT * FROM employees1"); ?>
        <div align="center"class="col-sm-6 col-md-9">
        <h1 bgcolor="red"> THIS IS THE EMPLOYEES TABLE </h1>
        <table align="center" class="table table-striped" width="500" cellpadding=5 cellspacing=5 border=1>
         
            <tr>
                <th>ID#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Dept</th>
                <th>Email</th>
            </tr>
     
    <?php 
    while($row = mysqli_fetch_array($result)):
    ?>
    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
     
    <?php endwhile; ?>
     
        </table>
     </div>
    </div>
    <hr>
     <footer class="footer">
      <center><p>Dise&ntilde;ado por Eli Nunez para tutoria CREO.</p>
      <p>
        <a href="#">Back to top</a>
      </p></center>
     </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>