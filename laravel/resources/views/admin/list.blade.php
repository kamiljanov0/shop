   @include('admin.layouts.header')
 <!-- Main content -->
        <section class="content">


            <!-- Default box -->
            <div class="card">
                    <table class="table table-striped projects">
                        <a class="btn  btn-primary mt-4 col-lg-1 btn-sm" href="{{route('products.create')}}">
                            <i class="fas fa-plus">
                            </i>
                            Qo'shish
                        </a>

                        <thead>
                        <tr>
                            <th style="width: 1%">
                                id
                            </th>
                            <th style="width: 20%">
                                Kategoriya
                            </th>
                            <th style="width: 30%">
                               Produkt nomi
                            </th>
                            <th>
                                Description
                            </th>
                            <th style="width: 8%" class="text-center">
                                Narxi
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        @foreach($products as $product)
                        <tbody>
                        <tr>
                            <td>
                                {{$product->id}}
                            </td>
                            <td>
                                {{$product->subCategory->name}}
                            </td>
                            <td>
                               {{$product->name}}
                            </td>
                            <td>
                               {{$product->description}}
                            </td>
                            <td>
                              {{$product->price}}
                            </td>
                            <div >
                            <td class="project-actions  text-right">
                                <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"   class="float-right ml-1 btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                                <a class="btn btn-info btn-sm" href="{{route('products.edit',$product->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>



                            </td>
                            </div>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

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



