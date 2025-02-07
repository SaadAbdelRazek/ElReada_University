@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" dir="rtl"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><h2>صفحة التحكم في الأحداث السابقة </h2></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header" dir="rtl" style="display: flex; align-items: center; justify-content: space-between;">
                        <span>الأحداث السابقة المعروضة بالموقع :</span>
                        <div class="icon-container">
                            <a href="{{route('prev_events.create')}}" class="icon-btn icon-add" title="Add"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" dir="rtl">
                            <thead>
                            <tr>
                                <th><center>الصورة</center></th>
                                <th><center>الفيديو</center></th>
                                <th><center>العنوان</center></th>
                                <th><center>المحتوى</center></th>
                                <th><center>أزرار التحكم</center></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th><center>الصورة</center></th>
                                <th><center>الفيديو</center></th>
                                <th><center>العنوان</center></th>
                                <th><center>المحتوى</center></th>
                                <th><center>أزرار التحكم</center></th>
                            </tr>
                            </tfoot>
                            <tbody dir="rtl">
                            @foreach($events as $event)
                                <tr>
                                    <td>
                                        @if($event->photo)
                                            <img src="{{ asset('storage/' . $event->photo) }}" width="200" alt="صورة الحدث">
                                        @else
                                            لا توجد صورة
                                        @endif
                                    </td>
                                    <td>
                                        @if($event->video)
                                            <video width="200" controls>
                                                <source src="{{ asset('storage/' . $event->video) }}" type="video/mp4">
                                                متصفحك لا يدعم تشغيل الفيديو.
                                            </video>
                                        @else
                                            لا يوجد فيديو
                                        @endif
                                    </td>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->body}}</td>
                                    <td>
                                        <div class="icon-container">
                                            <a href="{{route('prev_events.edit',$event->id)}}" class="icon-btn icon-update" title="Update"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('prev_events.destroy', $event->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="this.parentElement.submit()" class="icon-btn icon-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
