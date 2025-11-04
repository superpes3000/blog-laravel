@extends("admin.layouts.main")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <form  action="{{route('admin.category.store')}}" method="POST" class="col-2">
                        @csrf
                        <h6 class="mt-2">
                            Добавление категории
                        </h6>
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" placeholder="Добавление категории"/>
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
