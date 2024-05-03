@include('admin.layouts.header')

    <form  method="POST" action="{{route('products.store')}}" enctype="multipart/form-data"> <!-- file upload qilganda hardoim enctype formga qoshish kerak -->
        @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Product rasmi</label>
                        <input type="file" class="form-control " name="photoOne"  placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photoTwo"  placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photoThree"  placeholder="Photo"  /><br>
                        <input type="file" class="form-control " name="photoFour" placeholder="Photo"  />
                        @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    </div>
                <div class="form-group">
                    <label for="inputName">Product nomi</label>
                    <input type="text" name="name" id="inputName" class="form-control">
                    @error('name')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="inputDescription">Product tavsifi</label>
                        <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                        @error('description')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="inputCategory">Sub Kategoriya</label>
                    <select id="inputCategory" name="category_id" class="form-control custom-select" onchange="getSubCategories(this)">
                        <option selected disabled>Tanlang</option>
                        @foreach($subCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Narxi</label>
                        <input type="text" name="price" id="inputClientCompany" class="form-control">
                        @error('price')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Miqdori</label>
                        <input type="text" name="stock_quantity" id="inputProjectLeader" class="form-control">
                        @error('stock_quantity')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="inputDiscount">Chegirma</label>
                            <input type="text" name="discount" id="inputDiscount" class="form-control">
                            @error('discount')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
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
    </form>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
