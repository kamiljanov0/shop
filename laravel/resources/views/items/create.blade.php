@include('admin.layouts.header')

<form  method="POST" action="{{route('items.store')}}" enctype="multipart/form-data"> <!-- file upload qilganda hardoim enctype formga qoshish kerak -->
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>
                </div>
                <div class="form-group">
                    @foreach($product_item as $product)
                        <h2>Product Id: {{$product->id}}</h2>
                        <h2>Product nomi: {{$product->name}}</h2>
                        <input type="hidden" name="id" id="id" value="{{$product->id}}" class="form-control">
                    @endforeach
                    @if($product->subCategory->category_id === 1)
                    <label for="inputTelevisionName">Smart</label>
                    <input type="text" name="television[smart]" id="inputSmart" class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputOperatingSystem">Operatsion Tizim</label>
                    <input type="text" name="television[operation_sys]" id="inputOperatingSystem" class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputDiagonal">Diagonal</label>
                    <input type="text" name="television[diagonal]" id="inputDiagonal" class="form-control">
                </div>
                <br>
                @elseif($product->subCategory->category_id === 2)
                    <div class="form-group">
                        <label for="inputComputerItemsDiagonal">Ekran diagonal</label>
                        <input type="text" name="computer_items[items_diagonal]" id="inputComputerItemsDiagonal" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputComputerItemsSize">Ekran o'lchami</label>
                        <input type="text" name="computer_items[items_size]" id="inputComputerItemsSize" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputComputerItemsAspectRatio">Diagonal</label>
                        <input type="text" name="computer_items[items_aspect_ratio]" id="inputComputerItemsAspectRatio" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputComputerItemsNumberColors">Ranglar soni</label>
                        <input type="text" name="computer_items[items_number_colors]" id="inputComputerItemsNumberColors" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputComputerItemsColor">Rangi</label>
                        <input type="text" name="computer_items[items_color]" id="inputComputerItemsColor" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputComputerItemsFrequency">Chastota</label>
                        <input type="text" name="computer_items[items_frequency]" id="inputComputerItemsFrequency" class="form-control">
                    </div>

                @elseif($product->subCategory->category_id === 3)
                <div class="form-group">
                    <label for="inputQuickMemory">Tezkor xotira</label>
                    <input type="text" name="notebook[quick_memory]" id="inputQuickMemory" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputHardDisk">Qattiq disk</label>
                    <input type="text" name="notebook[hard_disk]" id="inputHardDisk" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputNotebookDiagonal">Diagonal</label>
                    <input type="text" name="notebook[notebook_diagonal]" id="inputNotebookDiagonal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputNotebookSize">Ekran razmeri</label>
                    <input type="text" name="notebook[notebook_size]" id="inputNotebookSize" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputNumberCores">Yadro toshlari soni</label>
                    <input type="text" name="notebook[number_cores]" id="inputNumberCores" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputProtsessor">Protsessor</label>
                    <input type="text" name="notebook[protsessor]" id="inputProtsessor" class="form-control">
                </div>
            @elseif($product->subCategory->category_id === 4)
                <div class="form-group">
                    <label for="inputOperatingSystemVersion">Operatsion sistema versiyasi</label>
                    <input type="text" name="smartphone[Operation_system_version]" id="inputOperationSystemVersion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputSmartphoneColor">Rangi</label>
                    <input type="text" name="smartphone[smartphone_color]" id="inputSmartphoneColor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputFaceId">Face id</label>
                    <input type="text" name="smartphone[face_id]" id="inputFaceId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputFingerPrint">Otpechatka</label>
                    <input type="text" name="smartphone[fingerprint]" id="inputFingerPrint" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputSmartphoneWeight">Vazni</label>
                    <input type="text" name="smartphone[smartphone_weight]" id="inputSmartphoneWeight" class="form-control">
                </div>
            @elseif($product->subCategory->category_id === 5)
                <div class="form-group">
                    <label for="inputBeautyType">Turi</label>
                    <input type="text" name="beauty[type]" id="inputBeautyType" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputBrand">Brend</label>
                    <input type="text" name="beauty[brand]" id="inputBrand" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputCapacity">Hajmi</label>
                    <input type="text" name="beauty[capacity]" id="inputCapacity" class="form-control">
                </div>
            @elseif($product->subCategory->category_id === 6)
                <div class="form-group">
                    <label for="inputFurnitureColor">Rangi</label>
                    <input type="text" name="furniture[furniture_color]" id="inputFurnitureColor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputFurnitureType">Turi</label>
                    <input type="text" name="furniture[type]" id="inputFurnitureType" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputMaterial">Material</label>
                    <input type="text" name="furniture[material]" id="inputMaterial" class="form-control">
                </div>
            @elseif($product->subCategory->category_id === 7)
                <div class="form-group">
                    <label for="inputBooksLanguage">Til</label>
                    <input type="text" name="books[books_language]" id="inputLanguage" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputBooksCover">Muqova turi</label>
                    <input type="text" name="books[books_cover]" id="inputCover" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputBooksWriting">Yozuvi</label>
                    <input type="text" name="books[books_writing]" id="inputWriting" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputBooksAuthor">Muallif</label>
                    <input type="text" name="books[books_author]" id="inputAuthor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputBooksPage">Bet</label>
                    <input type="text" name="books[books_page]" id="inputPage" class="form-control">
                </div>
                <br>
            @endif
                <div class="col-12">
                    <button type="submit" id="saveButton" class="btn btn-success float-right">Qo'shish</button>
                    <a href="{{route('item.products',$product->sub_category_id)}}" class="btn btn-secondary">Bekor qilish</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

