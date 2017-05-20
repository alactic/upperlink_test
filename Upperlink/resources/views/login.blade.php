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
                    <p>USERNAME : admin<br>
                        PASSWORD: 0000
                    </p>
                    <form action="{{route('check_login')}}" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">USERNAME</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="ENTE YOUR USERNAME" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">PASSWORD</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="ENTER YOUR PASSWORD" required>
                          </div>
                        <button type="submit"  class="btn btn-default">LOGIN</button>
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
