@extends('layouts.app')
@section('content')
    <body>
      @include('partials.header')
      <main>
          <canvas id="myChart"></canvas>
      </main>
    </body>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var colors = @json($color_lists);
        console.log(colors['labels']);
        console.log(colors['data']);
        var ctx = document.getElementById('myChart');
        var chart = new Chart(ctx, {
            type: 'doughnut',

            data : {
                datasets: [{
                    data: colors['data']
                }],
                labels: colors['labels'],
            }
      })
    </script>

@endsection