@extends('layouts.app')
@section('content')
    <body>
        @include('partials.header')
        <main>
            <div class="views" style="background: {{$book->average_color}};">
                <h6>{{$book->category}}</h6>
                <div class="text_area">
                    <h4>{{$book->title}}</h4>
                    <h5>作：{{$book->author}}</h5>
                </div>
            </div>
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
                labels: colors['labels'],
                datasets: [{
                    data: colors['data'],
                    backgroundColor:colors['labels']
                }],
            }
      })
    </script>

@endsection