
<!DOCTYPE html>
<html>
<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0000FF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0a48f5;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 200px;
}
h1 {text-align: center;}

</style>
<body>
<?php include 'wh_nav.php'; ?>

<h1>Tracking Air Cargo Management</h1>

<div>
  <form action="/action_page.php">
 
    
    <h3><label for="tracking">Shipment Reference Code</label></h3>
    <input type="text" id="tracking" name="tracking" placeholder="Enter your tracking number..">

  
    <input type="submit" value="Trace Now">
  </form>
</div>


</body>

</body>
</html>


