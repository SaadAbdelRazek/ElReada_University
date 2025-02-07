@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column; text-align: center;">
                <ol class="breadcrumb mb-4" style="list-style: none; padding: 0; margin: 0;">
                    <li class="breadcrumb-item active">
                        <h2>إضافة خبر جديد</h2>
                    </li>
                </ol>

                <div class="form-container" style="width: 50%; background: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        "@method('PUT')
                        <div class="form-group" style="margin-bottom: 15px;">
                            <img src="{{ asset('storage/' . $news->photo) }}" alt="News Image" width="200">
                            <label for="photo" style="display: block; font-weight: bold;">تحميل الصورة</label>
                            <input type="file" id="photo" name="photo" class="upload-field"
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="name" style="display: block; font-weight: bold;">العنوان</label>
                            <input type="text" id="name" name="title" class="input-field" required
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" value="{{$news->title}}">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="message" style="display: block; font-weight: bold;">المحتوى</label>
                            <textarea id="message" name="body" class="textarea-field" rows="4"
                                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">{{$news->body}}</textarea>
                        </div>

                        <button type="submit" class="btn-submit" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">
                            تحديث الخبر
                        </button>

                    </form>
                </div>
            </div>
        </main>
    </div>

@endsection
