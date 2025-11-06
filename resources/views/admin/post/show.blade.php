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
                        Пост:

                        <a href="{{ route('admin.post.edit', $post->id) }}"><i class="ml-2 text-success fas fa-pencil-alt"></i></a>


                        <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="ml-2 fa fa-trash text-danger" role="button"></i>
                            </button>

                        </form>
                    </div>

                    {{ $post->title }}
                    {{ $post->content }}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
