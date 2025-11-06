@extends("admin.layouts.main")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="row">
                        Тег:

                        <a href="{{ route('admin.tag.edit', $tag->id) }}"><i class="ml-2 text-success fas fa-pencil-alt"></i></a>


                        <form action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="ml-2 fa fa-trash text-danger" role="button"></i>
                            </button>

                        </form>
                    </div>

                    {{ $tag->title }}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
