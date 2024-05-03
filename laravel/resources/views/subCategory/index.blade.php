@include('admin.layouts.header')
<!-- Main content -->
<section class="content">


    <!-- Default box -->
    <div class="card">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 1%">
                    id
                </th>
                <th style="width: 20%">
                    Sub kategoriya nomi
                </th>
                <th style="width: 20%">
                    Slug
                </th>
                <th style="width: 20%">
                    Kategoriya
                </th>
            </tr>
            </thead>
            @foreach($sub_categories as $subCategory)
                <tbody>
                <tr>
                    <td>
                        {{$subCategory->id}}
                    </td>
                    <td>
                        {{$subCategory->name}}
                    </td>
                    <td>
                        {{$subCategory->slug}}
                    </td>
                    <td>
                        {{$subCategory->category->name}}
                    </td>
                    <div >
                        <td class="project-actions  text-right">
                            <form action="{{ route('subCategory.delete', $subCategory->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"   class="float-right ml-1 btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                            <a class="btn btn-primary btn-sm" href="{{route('subCategory.create')}}">
                                <i class="fas fa-folder">
                                </i>
                                Add
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('subCategory.edit',$subCategory->id)}}">
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

