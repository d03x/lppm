@extends('layouts.admin', [
    'pageTitle' => 'Buat Berita',
])

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card card-body">
                <div class="form-group">
                    <label class="form-check-label" for="judul">Judul</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="deskripsi">Deskripsi Singkat</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="isi" class="form-label">ISI</label>
                    <div  id="editor"></div>
                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="card">
                {{-- <div class="card-header">
                    <div class="card-title">Advanced</div>
                </div> --}}
                <div class="form-control">
                    <div class="form-group">
                        <label for="" class="form-label">Kategori</label>
                        <select class="form-control" name="" id="">
                            <option value="">Aseu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Cover</label>
                        <input type="file" class="form-control form-control-file" name="cover" id="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/quil/style.css') }}">
@endsection
@section('footer')
    <script src="{{ asset('admin-assets/libs/quil/main.js') }}"></script>
    <script>
        const options = {
  debug: 'info',
  modules: {
    toolbar: true,
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'
};
        const quill = new Quill('#editor', options);
    </script>
@endsection
