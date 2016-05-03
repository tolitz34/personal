

@extends( 'layout.masterpage')

@section('title')


   <title>The Widget Page</title>

@endsection

@section ('content')

<div class="container">

    <div class="row">
        <div class="page-header">
            <h2>Welcome to charts</h2>
        </div>

    </div>

    <div id="row">
        <div class="col-sm-6">

            @include('widgets.charts.clinechart')
            @include('widgets.charts.cbarchart')
        </div>
        <div class="col-sm-6">
            <div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cdonutchart')</div>

            <div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cpiechart')</div>

        </div>


    </div>



 </div>






@endsection