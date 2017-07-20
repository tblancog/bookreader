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
      <h1>Results</h1>
      <table class="table" style="max-width: 960px">
      <thead>
        <tr>
          <th>Word</th>
          <th>Times it appear</th>
        </tr>
      </thead>
      <tbody>
        @if($result)
          @foreach ($result as $key => $value)
            <tr>
              <td>{{ $key }}</td>
              <td>{{ $value }}</td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
    </div> <!-- /container -->
  </body>
</html>
