@extends('back.layouts.master')
@section('title',$page->title.' sayfasını güncelle')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-primary font-weight-bold">
            Makale Oluştur
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                       <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('admin.page.edit.post',$page->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Makale Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$page->title}}" required>
                </div>


                <div class="form-group">
                    <label for="">Makale Fotoğrafı</label><br>
                    <img src="{{asset($page->image)}}" class="img-thumbnail rounded" width="300" alt="">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Makale İçeriği</label>
                    <textarea id="editor" name="contentt" class="form-control" rows="6">{!! $page->content !!}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Makaleyi Güncelle</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':300
                }
            );
        });
    </script>
@endsection
