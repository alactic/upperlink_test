<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <p>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{route('send_form')}}" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">FIRST NAME</label>
                            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="ENTE YOUR FIRST NAME" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">SURNAME</label>
                            <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="ENTER YOUR SURNAME" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">PHONE NUMBER</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="ENTER YOUR PHONE NUMBER" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">EMAIL</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="ENTER YOUR PHONE NUMBER" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">PASSPORT UPLOAD</label>
                            <input type="file" name="passport" id="exampleInputFile" required>
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          
                          <button type="submit"  class="btn btn-default">Submit</button>
                          
                        </form>
                </div>
                <div class="col-md-3"></div>
  
</p>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
