<?php 
  include('header.php');
 
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">AI Feeds</h6>
            </div>
            <div class="card-body">
              <div class="col-sm-7">  
		          	<div class="control-group col-sm-12">
			            <h5>Add Category</h5>
                  <form name="add_category" id="add_category" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <input type="text" name="category" id="category" class="form-control name_list" placeholder="Add Your Category"><br>
                  <input type="submit" name="submit_category" id="submit_category" class="btn btn-primary " value="Add">
                  </form>
                  
                </div>
                <form name="form_feeds" id="form_feeds" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <div class="form-group col-sm-12">  
                    <h5 align="left">AI Category</h5>
                    <?php
                    $sql = "SELECT ai_cat_name FROM ai_feeds_cat";
                    $result = mysqli_query($db,$sql);

                    echo "<select name='category_list' id='category_list' class='form-control'><option value='select'>Select Category</option>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['ai_cat_name'] ."'>" . $row['ai_cat_name'] ."</option>";
                    }
                    echo "</select>";

                    ?>
                  </div>
  		         	  <div class="form-group col-sm-12">  
  		              <h5 align="left">Queries</h5>  
  		              <div class="table-responsive">  
  		                <table class="table table-bordered" id="dynamic_field">  
  		                  <tr>  
  		                    <td><input type="text" name="name[]" placeholder="Enter your Question" class="form-control name_list" id="question1"  /></td>  
  		                    <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td> 
  		                  </tr>  
  		                </table>  
  		                <!--<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  -->
  		              </div>  
  		            </div>    
                  <!-- WA block -->
                  <div class="form-group col-sm-12">  
                    <h5 align="left">AI Responses</h5> 
                        <div class="table-responsive">  
                          <table class="table table-bordered" id="dynamic_field1">  
                            <tr>  
                              <td><input type="text" name="response[]" placeholder="Enter your Answer" class="form-control name_list" id="answer1"/></td>  
                              <td><button type="button" name="add1" id="add1" class="btn btn-success">+</button></td> 
                            </tr>  
                          </table>  
                         <!-- <input type="button" name="submit" id="submit1" class="btn btn-info1" value="Submit" />  -->
                        </div>  
                  </div>
                  <div class="form-group col-sm-12">  
                    <input type="submit" name="submit_feeds" id="submit" class="btn btn-primary " value="Submit" />
                  </div>
                </form> 
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include "footer.php";?>
<script>
$(document).ready(function(){

        var deptid = $(this).val();

        $.ajax({
            url: 'http://192.168.1.32/sample/sample.json',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#select-state").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['tag_name'];
                    
                    $("#select-state").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
   

});

				</script>
<script>  
 $(document).ready(function(){  

      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="question'+i+'" placeholder="Enter your Questions" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           i--;
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
           $('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="text" id="answer'+i+'" name="response[]" placeholder="Enter your Answer" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           i--;
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
