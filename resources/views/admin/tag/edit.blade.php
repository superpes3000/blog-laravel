@extends("admin.layouts.main")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <form  action="{{route('admin.tag.update', $tag->id)}}" method="POST" class="col-2">
                        @csrf
                        @method("PATCH")
                        <h6 class="mt-2">
                            Редактирование тега



                        </h6>
                        <div class="form-group">
                            <input name="title" type="text" value="{{$tag->title}}" class="form-control" placeholder="Редактирование категории"/>
                            @error("title")
                            <div class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <input type="submit" value="Редактировать" class="btn btn-primary"/>
                        <button href="{{ route("admin.tag.index") }}" class="btn btn-danger">Выйти</button>

                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
