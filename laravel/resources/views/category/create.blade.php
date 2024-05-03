@include('admin.layouts.header')

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data"> <!-- file upload qilganda hardoim enctype formga qoshish kerak -->
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">Kategoriya nomi</label>
                    <input type="text" name="name" id="inputName" class="form-control">
                    @error('name')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>

                    <div class="col-12">
                        <button type="submit" id="saveButton" class="btn btn-success float-right">Qo'shish</button>
                        <a href="{{route('category.index')}}"  class="btn btn-secondary ">Cancel</a>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>

    </div>
    <div class="row">
    </div>
</form>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
