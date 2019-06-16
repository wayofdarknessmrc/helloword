<html>
   <head>
      <title>Contact us - Allaravel.com Example</title>
      <link href = "https://fonts.googleapis.com/css?family=Arial:100" rel = "stylesheet" type = "text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   </head>
   <body>
      <div class = "container">
         <div class = "content">
           <div>
            <?php
               if(isset($success)){
                  echo $success .
                  '<br>' . 'Nội dung tin nhắn như sau:' .
                  '<br>' . 'Họ tên:' . $name .
                  '<br>' . 'Tiêu đề' . $title .
                  '<br>' . 'Nội dung' . $message;
               }
            ?>
            </div>
            <!-- <form action = "/contact" method = "post">
               <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
               <table>
                  <tr>
                     <td>Họ và tên</td>
                     <td><input type = "text" name = "name" /></td>
                  </tr>

                  <tr>
                     <td>Tiêu đề</td>
                     <td><input type = "text" name = "title" /></td>
                  </tr>

                  <tr>
                     <td>Nội dung</td>
                     <td>
                        <textarea name="message" rows="5"></textarea>
                     </td>
                  </tr>

                  <tr>
                     <td colspan = "2" align = "center">
                        <input type = "submit" value = "Gửi" />
                     </td>
                  </tr>
               </table>
            </form> -->
            <form action="/contact" method="post" >
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input type="text" name="title" class="form-control" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea name="message" class="form-control" ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
