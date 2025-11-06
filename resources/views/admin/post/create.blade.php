@extends("admin.layouts.main")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <form  action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <h6 class="mt-2">
                            Добавление поста
                        </h6>
                        <div class="form-group w-25">
                            <input name="title"  value="{{old('title')}}" type="text" class="form-control" placeholder="Добавление поста"/>
                            @error("title")
                            <div>Это поле обязательно для заполнения</div>
                            @enderror
                        </div>

                        <div class="form-group">
                                <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                @error("content")
                                <div>Это поле обязательно для заполнения</div>
                                @enderror
                            </div>
                        <h6>Доабвить превью</h6>

                        <div class="input-group w-50">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выерите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                        <h6>Доабвить главное изображение</h6>

                        <div class="input-group w-50">
                            <div class="custom-file">
                                <input name="main_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Выберите категорию</label>
                            <select id="inputStatus" class="form-control custom-select">
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ (old('category_id', $post->category_id ?? null) == $category->id) ? 'selected' : '' }}
                                    >
                                        {{ $category->title }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <input type="submit" value="Добавить" class="btn btn-primary"/>

                    </form>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
