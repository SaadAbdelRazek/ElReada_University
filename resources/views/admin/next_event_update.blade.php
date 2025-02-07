@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column; text-align: center;">
                <ol class="breadcrumb mb-4" style="list-style: none; padding: 0; margin: 0;">
                    <li class="breadcrumb-item active">
                        <h2> تعديل حدث قادم</h2>
                    </li>
                </ol>

                <div class="form-container" style="width: 50%; background: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <form action="{{ route('next_events.update',$next_event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="margin-bottom: 15px;">
                            @if($next_event->photo)
                                <img src="{{ asset('storage/' . $next_event->photo) }}" height="200" width="200" alt="صورة الحدث">
                            @else
                                لا توجد صورة
                            @endif
                            <label for="photo" style="display: block; font-weight: bold;">تحميل الصورة</label>
                            <input type="file" id="photo" name="photo" class="upload-field"
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            @if($next_event->video)
                                <video height="200" width="200" controls>
                                    <source src="{{ asset('storage/' . $next_event->video) }}" type="video/mp4">
                                    متصفحك لا يدعم تشغيل الفيديو.
                                </video>
                            @else
                                لا يوجد فيديو
                            @endif
                            <label for="video" style="display: block; font-weight: bold;">تحميل فيديو</label>
                            <input type="file" id="video" name="video" class="upload-field"
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="end_date" style="display: block; font-weight: bold;">التاريخ</label>
                            <input type="date" id="end_date" name="end_date" class="date-field"
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" value="{{$next_event->end_date}}">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="name" style="display: block; font-weight: bold;">العنوان</label>
                            <input type="text" id="name" name="title" class="input-field" required
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" value="{{$next_event->title}}">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="message" style="display: block; font-weight: bold;">التفاصيل</label>
                            <textarea id="message" name="description" class="textarea-field" rows="4"
                                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">{{$next_event->description}}</textarea>
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="form_link" style="display: block; font-weight: bold;">رابط النموذج (في حالة عدم الحاجة لنموذج الموقع)</label>
                            @if($next_event->form_link)
                                <input type="url" id="form_link" name="form_link" class="input-field"
                                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"
                                       placeholder="https://example.com" value="{{$next_event->form_link}}">
                            @else
                                <input type="url" id="form_link" name="form_link" class="input-field"
                                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"
                                       placeholder="https://example.com">
                            @endif
                        </div>

                        <button type="submit" class="btn-submit" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">
                           تحديث
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>

@endsection
