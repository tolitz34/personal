

@extends( 'layout.masterpage')

@section('title')


   <title>The Widget Page</title>

@endsection

@section('css')
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

@endsection


@section('widget.noresults')

   <br>

@include('widget.searchform')

    @if(isset($results))


   @include('widget.searchresults')

   @else

   <h1>Widget Stats</h1>

     // insert a div id with a value of chart


     <hr>


   @include('widget.allrecords')

   @endif

@endsection


@section('scripts')

            //cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js
            //cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js


      function confirmDelete()
   {

       var x = confirm("Are you sure you want to delete?");

      if (x)
          return true;

      else

         return false;

   }


    var data = ;

     Morris.Line({

         element: 'chart',
         data: data,
         xkey: 'year',
         labels: ['widgets created']

     });


@endsectionn

