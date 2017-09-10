<html>
   <head>
       <title>signup</title>
   </head>
   <body>
       
   

	<div class="alert alert-danger" role="alert" id="error" >

		<h1 id="register" align="center">Registration</h1>

		 <div class="container-fluid row" id="regform">

			<h3 align="center">Personal details</h3> 
			
			
			 <form action="register.php" method="post">	

				<table>
                    
                 
				<div class="col-sm-4">
					<div class="form-group">
                       <tr>
                        <td><label class="sr-only" for="fname">Name</label></td>
                        <td><input type="text" class="form-control" id="fname" name="name" placeholder="First name"></td>
                        </tr>
					</div>

					
				
					<div class="form-group">
					<tr>
                        <td><label class="sr-only" for="aadhar">Aadhar Number</label></td>
                        <td><input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="Enter aadhar number"></td>
                        </tr>
					</div>
				</div>
                  
                    
					
					<div class="form-group">
					<tr>
                        <td><label class="sr-only" for="phno">Phone no</label></td>
                        <td><input type="text" class="form-control" id="phno" name="phone" placeholder="Phone no"></td>
                        </tr>
					</div>				
				 

								<!--	<label class="custom-control custom-radio">
					  <input type="radio" name="event" class="custom-control-input" value="Lan Gaming">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Lan Gaming</span>
					</label> -->
				

				<div class="form-group form-inline" id="comment">
				<tr>
                    <td><label for="comments">Comments</label></td>
                    <td><textarea class="form-control" id="comments" rows="3" cols="100" name="comment" placeholder="Leave your suggestions here (optional)"></textarea></td>
                    </tr>
				</div>
                <tr><td>
			   <button type="submit" class="btn btn-primary" name="register">Submit</button>
                    </td>  </tr>
                 </table>
		 </form>
       </div>
       </div>
       
       </body>
    
</html>
        
        
        
	 	

