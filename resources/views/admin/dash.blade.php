
@extends( 'layout.dashboard')


@section('content')
   <div id="page-wrapper">
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">Dashboard</h1>

               @include('admin/partials/icons', ['color' => 'blue', 'icone' => 'user', 'new' => $newUsers,  'name' => trans('back/page.registers'),  'url' => 'user', 'total' => trans('back/page.register'), 'totals' => $totalUsers,])
               @include('admin/partials/icons', ['color' => 'green', 'icone' => 'envelope', 'new' => $newContacts, 'name' => trans('back/page.messages'), 'url' => 'contact', 'total' => trans('back/page.message'), 'totals' => $totalUsers,])
               @include('admin/partials/icons', ['color' => 'red', 'icone' => 'pencil', 'new' => $newPosts, 'name' => trans('back/page.posts'),  'url' => 'post', 'total' => trans('back/page.post'), 'totals' => $totalUsers,])
               @include('admin/partials/icons', ['color' => 'orange', 'icone' => 'comment', 'new' => $newComments, 'name' => trans('back/page.comments'),  'url' => 'comment', 'total' => trans('back/page.comment'), 'totals' => $totalUsers,])


           </div>
       </div>



   </div>





@endsection