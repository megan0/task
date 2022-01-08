<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h3>Raport</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Emri</th>
            <th scope="col">Numri i oreve brenda 8</th>
            <th scope="col">Numri i oreve jashte 8 orarit</th>
            <th scope="col">Total ore</th>
            <th scope="col">Pagesa totale</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                <td >{{$report['user_name']}}</td>
                <td>{{$report['reg_h']}}</td>
                <td>{{$report['extra_h']}}</td>
                <td>{{$report['total_h']}}</td>
                <td>{{$report['payment']}}</td>
              </tr>
            @endforeach


        </tbody>
      </table>
</body>
