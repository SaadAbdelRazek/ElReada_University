@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" dir="rtl"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><h2>صفحة التحكم في الأخبار </h2></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header" dir="rtl" style="display: flex; align-items: center; justify-content: space-between;">
                        <span>الأخبار المعروضة بالموقع :</span>
                        <div class="icon-container">
                            <a href="{{route('news.create')}}" class="icon-btn icon-add" title="Add"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" dir="rtl">
                            <thead>
                            <tr>
                                <th><center>الصورة</center></th>
                                <th><center>العنوان</center></th>
                                <th><center>المحتوى</center></th>
                                <th><center>أزرار التحكم</center></th>
                                <th><center>اضافة المزيد من الصور</center></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th><center>الصورة</center></th>
                                <th><center>العنوان</center></th>
                                <th><center>المحتوى</center></th>
                                <th><center>أزرار التحكم</center></th>
                                <th><center>اضافة المزيد من الصور</center></th>
                            </tr>
                            </tfoot>
                            <tbody dir="rtl">
                            @foreach($news as $single)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $single->photo) }}" alt="News Image" width="200"></td>
                                    <td>{{$single->title}}</td>
                                    <td>{{$single->body}}</td>
                                    <td>
                                        <div class="icon-container">
                                            <a href="{{route('news.edit',$single->id)}}" class="icon-btn icon-update" title="Update"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('news.destroy', $single->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="this.parentElement.submit()" class="icon-btn icon-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('view-upload-photos',['id' => $single->id])}}" class="icon-btn icon-update" title="Upload"><i class="fas fa-upload"></i></a>
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
