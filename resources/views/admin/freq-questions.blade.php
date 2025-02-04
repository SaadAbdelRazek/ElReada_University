@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" dir="rtl"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><h2>صفحة التحكم في الأسئلة الشائعة </h2></li>
                </ol>

                                <div class="card mb-4">
                                    <div class="card-header" dir="rtl" style="display: flex; align-items: center; justify-content: space-between;">
                                        <span>الأسئلة الشائعة المعروضة بالموقع :</span>
                                        <div class="icon-container">
                                            <a href="{{route('freq_questions.create')}}" class="icon-btn icon-add" title="Add"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple" dir="rtl">
                                            <thead>
                                            <tr>
                                                <th><center>السؤال</center></th>
                                                <th><center>الإجابة</center></th>
                                                <th><center>أزرار التحكم</center></th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th><center>السؤال</center></th>
                                                <th><center>الإجابة</center></th>
                                                <th><center>أزرار التحكم</center></th>
                                            </tr>
                                            </tfoot>
                                            <tbody dir="rtl">
                                            @foreach($freqs as $freq)
                                            <tr>
                                                <td>{{$freq->question}}</td>
                                                <td>{{$freq->answer}}</td>
                                                <td>
                                                        <div class="icon-container">
                                                            <a href="{{route('freq_questions.edit',$freq->id)}}" class="icon-btn icon-update" title="Update"><i class="fas fa-edit"></i></a>
                                                            <form action="{{ route('freq_questions.destroy', $freq->id) }}" method="POST" style="display: inline;">
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
