<html>  
  <head>  
    <title>Staff Panel</title>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
           
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>  
<body>  
  <div class="container">  
    <h2 align="left">QUESTIONS</h2>  
    <div class="form-group">  
      <form name="add_name" id="add_name">  
        <div class="table-responsive">  
          <table class="table table-bordered" id="dynamic_field">  
            <tr>  
              <td><input type="text" name="name[]" placeholder="Enter your Question" class="form-control name_list" /></td>  
              <td><button type="button" name="add" id="add" class="btn btn-success">ADD</button></td> 
            </tr>  
          </table>  
          <!--<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  -->
        </div>  
      </form>  
    </div>    
    <h2 align="left">Whatapp Answer</h2>  
      <div class="form-group">  
        <form name="add_name1" id="add_name1">  
          <div class="table-responsive">  
            <table class="table table-bordered" id="dynamic_field1">  
              <tr>  
                <td><input type="text" name="name[]" placeholder="Enter your Answer" class="form-control name_list" /></td>  
                <td><button type="button" name="add1" id="add1" class="btn btn-success">ADD</button></td> 
              </tr>  
            </table>  
            <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                <!-- <input type="button" name="submit" id="submit1" class="btn btn-info1" value="Submit" />  -->
          </div>  
        </form>  
      </div>  
  </div>
</body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Questions" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 
 
  $(document).ready(function(){  
      var i=1;  
      $('#add1').click(function(){  
           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Answer" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id1");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit1').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name1').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name1')[0].reset();  
                }  
           });  
      });  
 }); 
 </script>