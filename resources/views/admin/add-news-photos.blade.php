@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" dir="rtl"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><h2>صفحة اضافة المزيد من الصور للخبر </h2></li>
                </ol>

    <form action="{{ route('photos.upload',$id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="photo" style="display: block; font-weight: bold;">تحميل الصور</label>
            <input type="file" id="photo" name="photos[]" class="upload-field"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" multiple>
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px;">
            رفع الصور
        </button>
    </form>
            </div>
        </main>
    </div>
@endsection
