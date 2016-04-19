

@extends( 'layout.masterpage')

@section('title')


   <title>The Widget Page</title>

@endsection

@section ('content')

<div class="row">
    <div class="page-header">
        <h2>Welcome to analytics</h2>
    </div>

</div>
<div id="stock-div"></div>
echo $lava->render('LineChart', 'Stocks', 'stock-div');
@linechart('Stocks', 'stocks-div');


@endsection