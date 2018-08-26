@extends("layouts.admin")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <h3>
                        {{ __("admins.albums.index.heading_title") }}
                    </h3>
                </header>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                            <tr>
                                <th>{{ __("admins.albums.index.id") }}</th>
                                <th>{{ __("admins.albums.index.name") }}</th>
                                <th>{{ __("admins.albums.index.description") }}</th>
                                <th>{{ __("admins.albums.index.cover") }}</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($albums as $album)
                            <tr>
                                <td>{{ $album->id }}</td>
                                <td>{{ $album->name }}</td>
                                <td>{{ $album->description }}</td>
                                <td>{{ $album->cover }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default">
                                            <i class="icon_pencil-edit_alt"></i>
                                            {{ __("admins.albums.index.edit") }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    {{ $albums->links() }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection
