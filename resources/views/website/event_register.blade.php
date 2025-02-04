<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>التسجيل في الجامعة</title>
    <link rel="stylesheet" href="{{asset('css/event.css')}}" />
</head>

<body>
<br><br>

    <div class="container">
        <form method="POST" action="{{ route('event.register') }}">
            @csrf
            <h1>التسجيل في الحدث</h1>

            <!-- Encrypted Event ID (hidden field) -->
            <input type="hidden" name="event_id" value="{{ $encryptedEventId }}">

            <div class="form-group">
                <label for="name">الاسم :</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="age">السن  :</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="country">الدولة  :</label>
                <input type="text" id="country" name="country" required>
            </div>
            <br>

            <div class="gender-group">
                <label for="gender">الجنس :</label>
                <div>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">ذكر</label>
                </div>
                <div>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">أنثى</label>
                </div>
            </div>
            <br>

            <div class="email-group">
                <label for="email">البريد الإلكتروني :</label>
                <input type="email" id="email" name="email">
            </div><br>

            <div class="phone-group">
                <label for="phone">رقم الجوال (واتساب) :</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10,15}" required
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <div class="referral-group">
                <label for="referral">كيف تعرفت على الجامعة؟</label>
                <select id="referral" name="referral">
                    <option value="">اختر</option>
                    <option value="Friends">صديق</option>
                    <option value="Social Media">وسائل التواصل الاجتماعي</option>
                    <option value="University Website">موقع الجامعة</option>
                </select>
            </div>

            <div class="referral-group">
                <label for="participation_type">نوعية المشاركة :</label>
                <select id="participation_type" name="participation_type">
                    <option value="">اختر</option>
                    <option value="Speaker">مستمع</option>
                    <option value="Attendee">متحدث</option>
                </select>
            </div>

            <div class="payment order">
                <button type="submit" id="submitButton">تسجيل</button>
            </div>
        </form>

    </div>

    <script>
        // Populate years
        const yearSelect = document.getElementById('birthYear');
        const currentYear = new Date().getFullYear();
        for (let year = currentYear; year >= 1900; year--) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }

        // Populate months
        const monthSelect = document.getElementById('birthMonth');
        const months = [
            'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو',
            'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'
        ];
        months.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index + 1;
            option.textContent = month;
            monthSelect.appendChild(option);
        });

        // Populate days
        const daySelect = document.getElementById('birthDay');
        function populateDays(month, year) {
            daySelect.innerHTML = '<option value="">اختر اليوم</option>';
            const daysInMonth = new Date(year, month, 0).getDate();
            for (let day = 1; day <= daysInMonth; day++) {
                const option = document.createElement('option');
                option.value = day;
                option.textContent = day;
                daySelect.appendChild(option);
            }
        }

        // Update days when month or year changes
        monthSelect.addEventListener('change', () => {
            populateDays(monthSelect.value, yearSelect.value);
        });
        yearSelect.addEventListener('change', () => {
            populateDays(monthSelect.value, yearSelect.value);
        });
    </script>

    <script src="js/event.js"></script>
</body>

</html>
