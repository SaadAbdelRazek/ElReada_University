@extends('admin.master.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; flex-direction: column; text-align: center;">
                <ol class="breadcrumb mb-4" style="list-style: none; padding: 0; margin: 0;">
                    <li class="breadcrumb-item active">
                        <h2>تحديث السؤال أو الإجابة</h2>
                    </li>
                </ol>

                <div class="form-container" style="width: 50%; background: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <form action="{{ route('freq_questions.update',$question->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="name" style="display: block; font-weight: bold;">السؤال</label>
                            <input type="text" id="name" name="question" class="input-field" required
                                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" value="{{$question->question}}">
                        </div>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="message" style="display: block; font-weight: bold;">الإجابة</label>
                            <textarea id="message" name="answer" class="textarea-field" rows="4"
                                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">{{$question->answer}}</textarea>
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
