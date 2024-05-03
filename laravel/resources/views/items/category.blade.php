@include('admin.layouts.header')
<!-- Main content -->
<div class="bg-dark">
@foreach($categories as $category)
    <a class="btn btn-primary mb-4 ml-5 h1" href="{{route('item.products',$category->id)}}" ><span class="text-yellow">{{$category->category->name}}</span>{{$category->name}}</a>
@endforeach
</div>
