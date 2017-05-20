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
                <h2> LISTS OF APPLICIANTS</h2>
                    @foreach($user as $users)
                      FIRSTNAME: {{$users->firstname}}<br>
                      SURNAME: {{$users->surname}}<br>
                      PHONE: {{$users->phone}}<br>
                      email: {{$users->email}}<br>

                      <br><br><br>
                    @endforeach

                </div>
                <div class="col-md-3"></div>
  
</p>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
