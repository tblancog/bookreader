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
      <div class="row">
        <h1>Results</h1>
        <div class="float-right">
          <a href="{{ route('index') }}" class="btn btn-primary btn-md"> << Go Back</a>
        </div>
      </div>

      <div class="row">
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
                  <td>{{ $value }}
                    {{-- Check wether is a prime number or not --}}
                    @if(\App\Repositories\NumberRepository::isPrime($value))
                      <span class="label label-primary">prime</span>
                    @endif
                  </td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div> <!-- /container -->
  </body>
</html>
