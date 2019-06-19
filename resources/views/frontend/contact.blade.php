@extends('./layout')

@section('title', 'Trang liên hệ')

@section('content')
<div class = "container">
   <div class = "content">
     <div>
      <?php
         if(isset($success)){
            echo $success ;
         }
      ?>
      </div>
      <form action="/contact" method="post" >
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" name="name" <?php if (isset($name)){
            echo 'value="'. $name . '"';
          }?> class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" name="title" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" <?php if (isset($email)){
            echo 'value="'. $email . '"';
          }?> class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea name="message" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
@endsection


@section('post_include')
    <script type="text/javascript">
      // $('input[name="email"]').val('cường');
    </script>
@endsection
