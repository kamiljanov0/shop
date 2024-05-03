@include('admin.layouts.header')
<!-- Main content -->
<section class="content">

    <table>
        <thead>
        <tr>
            <th class="col-lg-3" >ID</th>
            <th>Name</th>
            <th >Items</th>
            <th class="col-lg-5">Tahrirlash</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td class="h5 ">{{$product['id']}}</td>
                <td class="h5">{{$product['name']}}</td>
                <td>
                    <ul class="h5">
                        @foreach($product['items'] as $item)
                            @if($item->television!= null)
                            <li>{{$item->television['smart']}}</li>
                            <li>{{$item->television['diagonal']}}</li>
                            <li>{{$item->television['operation_sys']}}</li>
                            @elseif($item->computer_items != null)
                                <li>{{$item->computer_items['items_size']}}</li>
                                <li>{{$item->computer_items['items_color']}}</li>
                                <li>{{$item->computer_items['items_diagonal']}}</li>
                                <li>{{$item->computer_items['items_frequency']}}</li>
                                <li>{{$item->computer_items['items_aspect_ratio']}}</li>
                                <li>{{$item->computer_items['items_number_colors']}}</li>
                            @elseif($item->notebook != null)
                                <li>{{$item->notebook['hard_disk']}}</li>
                                <li>{{$item->notebook['protsessor']}}</li>
                                <li>{{$item->notebook['number_cores']}}</li>
                                <li>{{$item->notebook['quick_memory']}}</li>
                                <li>{{$item->notebook['notebook_size']}}</li>
                                <li>{{$item->notebook['notebook_diagonal']}}</li>
                            @elseif($item->smartphone != null)
                                <li>{{$item->smartphone['color']}}</li>
                                <li>{{$item->smartphone['weight']}}</li>
                                <li>{{$item->smartphone['face_id']}}</li>
                                <li>{{$item->smartphone['Operation_system_version']}}</li>
                            @elseif($item->beauty != null)
                                <li>{{$item->beauty['type']}}</li>
                                <li>{{$item->beauty['brand']}}</li>
                                <li>{{$item->beauty['capacity']}}</li>
                            @elseif($item->furniture != null)
                                <li>{{$item->furniture['type']}}</li>
                                <li>{{$item->furniture['material']}}</li>
                                <li>{{$item->furniture['furniture_color']}}</li>
                            @elseif($item->books != null)
                                <li>{{$item->books['books_page']}}</li>
                                <li>{{$item->books['books_cover']}}</li>
                                <li>{{$item->books['books_author']}}</li>
                                <li>{{$item->books['books_writing']}}</li>
                                <li>{{$item->books['books_language']}}</li>
                            @endif
                        @endforeach
                    </ul>
                </td>
                <td class="ml-lg-5">
                    <a class="btn btn-primary ml-3   float-right btn-sm" href="{{route('item.create',$product['id'])}}">
                        <i class="fas fa-folder">
                        </i>
                        Qo'shish
                    </a>
                    <a class="btn btn-info ml-3 mb-2 btn-sm float-right" href="edit">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                        <form action="delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="ml-3 float-right btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
