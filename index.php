<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>mba4!</title>
  </head>
  <body>
    <h1 style align="center">Hello </h1>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



<!------------form Started -->

<form action="cal.php" method="post" class="row g-3" style="padding-left:5px ;padding-right:5px ;">

    
     <div class="col-md-2">
    <label for="validationServer04" class="form-label"><br></label><label for="validationServer04" class="form-label"><br></label>
    <label for="validationServer04" class="form-label">Position Side </label>
 <span class="input-group-text" id="inputGroupPrepend">
    <select name="method_position" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected value="long">LONG</option>
      <option  value="short">SHORT</option>
    </select>
   </span>
  </div>
    
    
     <div class="col-md-4">
             <label for="validationServer03" class="form-label"> Initial Marginal </label>
   
     <span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="Initial_value_per_amt" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected  value="per_iv">%</option>
      <option  value="amt_iv">Amt </option>
    </select>
  </div>
       

    <input type="float" class="form-control is-valid" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Initial value" name="Initial_value" required>
    
    </span>
   <div>
        <label class="form-check-label" for="flexSwitchCheckDefault">
     [ % = % of contract value ]
    </label></div> 
  
    </div>
    
   
    
<!--
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Initial Marginal</label>    
    <input type="float" class="form-control is-valid" id="validationServer01" name="Initial_value" required>
    <div class="valid-feedback">
      Initial Margin amount Required!
      </div>
  </div>
-->
    
    
    
    
    
    
    <div class="col-md-4">
    <label for="validationServer01" class="form-label"> Maintenance Margin</label>
        
<!--
        <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="mm_check" value="mm_not_given" >

  <label class="form-check-label" for="flexSwitchCheckDefault">marginal Value Not Given</label>

</div>
-->
        
<span class="input-group-text" id="inputGroupPrepend">
     <div class="col-md-2">

    <select name="marginal_value_per_amt" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected  value="per_mm">%</option>
      <option  value="amt_mm">Amt </option>
    </select>
  </div>
    <input type="float" class="form-control is-valid" id="validationServer01" name="mm_value" placeholder="marginal value"  required >
<!--
    <div class="valid-feedback">
       Maintenance Margin call amount Required!
    </div>
-->
    
        </span>
        <div>
        <label class="form-check-label" for="flexSwitchCheckDefault">
     
    </label></div>
  </div>
    
    
    
    
    
     <!---------------->
    <div class="col-md-2">
    <label for="validationServer04" class="form-label"><br></label><label for="validationServer04" class="form-label"><br></label>
    <label for="validationServer04" class="form-label">Maintenance Margin On [%]</label>
 <span class="input-group-text" id="inputGroupPrepend">
    <select name="method_mm_on" class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" >
      <option selected value="im_marg_on">Initial Margin </option>
      <option  value="con_marg_on">Contract Value </option>
    </select>
   </span>
  </div>
    <!------------------>
    
    
    
<div class="col-md-4">
    <label for="validationServer01" class="form-label">Total Lot[contract] Size</label>

    <input type="float" class="form-control is-valid" id="validationServer01" name="lotsize_value" required>
<!--
   <div class="valid-feedback">
       Maintenance Margin call amount Required!
    </div>
-->
     <div>
        <label class="form-check-label" for="flexSwitchCheckDefault">
     [if additional times given multiple it  example: 50 X 5]
    </label></div>
  </div>
  









<!-- cash flows  -->
<style>
#wrap{width:100%;}
.my_box{width:100%; padding-bottom:40px;}
.field_box{float:right;width:100%;}
.button_box{float:right;width:100%;}
</style>
<script src="jquery-1.4.1.min.js"></script>
<script>
function add_more(){
  var box_count=jQuery("#box_count").val();
  box_count++;
  jQuery("#box_count").val(box_count);
  jQuery("#wrap").append('<div class="my_box" id="box_loop_'+box_count+'"><div class="field_box"><input class="form-control" type="float" name="name[]" id="name" required></div>  <label for="validationServer04" class="form-label"><br></br></label><label for="validationServer04" class="form-label"><br></br></label>    <div class="button_box"><input type="button" style="color:wheat;background-color:red" name="submit" id="submit" value="Remove" onclick=remove_more("'+box_count+'")></div></div>');
}
function remove_more(box_count){
  jQuery("#box_loop_"+box_count).remove();
  var box_count=jQuery("#box_count").val();
  box_count--;
  jQuery("#box_count").val(box_count);
}
</script>

<div class="col-md-4">
    <label for="validationServer01" class="form-label">Enter Amount</label>

    <input type="float" class="form-control" id="validationServer01" name="name[]" id="name" required>
    <div class="valid-feedback">
      Enter Amount Required!
    </div>
  



<tr>

<td class="auto-style5">
<div id="wrap">
<label for="validationServer04" class="form-label"></label> 
    <div class="my_box">
     
      <div class="button_box"><input type="button" name="add_btn" value="Add More" style="color:wheat;background-color:black" onclick="add_more()"></div>
    </div>
  </div>
  <!--<input type="submit" value="Add Record" name="submit">-->
  <input type="hidden" id="box_count" value="1">
</tr>
<tr>
<td></td>


</tr>
</td>
</tr>
</div>



 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Calculate</button>
  </div>
</form>




  </body>
</html>