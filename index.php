<html>
<head>
	<title>Functions and Class Practice</title>
</head>
<body>
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Functions and Class Practice</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="get" action="test_db.php" >
      <div class="form-group">
        <label>Task:</label>
        <!-- <input type="text" name="case_label" id="task"/> -->
        <select name="case_label">

          <option value="display">display</option>
          <option value="insert">insert</option>
          <option value="delete">delete</option>
          <option value="update">update</option>
       
       
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Send" />
      </div>
    </form>
  </div>
</body>
</html>
<?php require 'show.php'; ?>