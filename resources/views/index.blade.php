<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Challenge One</h1>
        <p>Please upload a pdf file to find out how many words it has</p>
        <p><small><i>max filesize: 1MB</i></small></p>
        <form class="form-horizontal" action="/upload" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <p>
            <input type="file" name="file"/>
          </p>
          <p>
            <button type="submit" class="btn btn-default btn-primary">Submit »</button>
          </p>
        </form>
      </div>
    </div> <!-- /container -->
  </body>
</html>
