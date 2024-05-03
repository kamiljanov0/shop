@include('admin.layouts.header')

<form action="{{route('products.update',['product' => $product->id])}}" method="POST" enctype="multipart/form-data"> <!-- file upload qilganda hardoim enctype formga qoshish kerak -->
    @method('PUT')
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
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Product rasmi</label>
                        <input type="file" class="form-control " name="photoOne" value="{{old('photo')}}" placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photo_two" value="{{old('photo')}}" placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photo_three" value="{{old('photo')}}" placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photo_four" value="{{old('photo')}}" placeholder="Photo"  />
                        @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="form-group">
                    <label for="inputName">Product nomi</label>
                    <input type="text" name="name" id="inputName" value="{{$product->name}}" class="form-control">
                    @error('name')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputDescription">Product tavsifi</label>
                    <textarea id="inputDescription" value="{{$product->description}}" name="description" class="form-control" rows="4"></textarea>
                    @error('description')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputCategory">Sub Kategoriya</label>
                    <select id="inputCategory" name="sub_category_id" class="form-control custom-select" onchange="getSubCategories(this)">
                        <option selected disabled>{{$product->subCategory->name}}</option>
                        @foreach($subCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('sub_category_id')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputClientCompany">Narxi</label>
                    <input type="text" value="{{$product->price}}" name="price" id="inputClientCompany" class="form-control">
                    @error('price')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Miqdori</label>
                    <input type="text" value="{{$product->stock_quantity}}" name="stock_quantity" id="inputProjectLeader" class="form-control">
                    @error('stock_quantity')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <div class="col-12">
                        <button type="submit" id="saveButton" class="btn btn-success float-right">Qo'shish</button>
                        <a href="{{route('admin.list')}}"  class="btn btn-secondary ">Cancel</a>

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
