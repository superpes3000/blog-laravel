@extends("admin.layouts.main")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <a class="btn btn-primary" href="{{route('admin.category.create')}}">Добавить категорию</a>
            </div>
            тут кароче всякие категорисы ...
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
