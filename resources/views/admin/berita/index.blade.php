@extends('layouts.admin',[
    'pageTitle'=>"List Berita"
])

@section('content')
   <div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.berita.create') }}" class="ml-auto btn btn-primary" class="col-4">Tambah Berita</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Views</th>
                        <th>Tanggal Publish</th>
                        <th>Kategori</th>
                        <th>Media</th>
                        <th>Thumbnail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($berita->count()>0)

                        @else
                        <tr>
                            <td colspan="8" class="text-center">Tidak Ada Berita</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
   </div>
@endsection