@extends('layouts.view')

@section('content')
<form action="/form1" method="POST">
@csrf
    <div class="contain">
        <div class="header">
            <h1>استحداث قسم أكاديمي</h1>
        </div>

        <div class="form-group">
            <label for="department-name">اسم القسم</label>
            <input type="text" id="department-name" required name="department-name">
        </div>
        <div class="form-group">
            <label for="faculty">الكلية</label>
            <input type="text" id="faculty" required name="faculty">
        </div>
        <div class="form-group">
            <label for="date">تاريخ تقديم الطلب:</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="course-outline">نبذة عن القسم:</label>
            <textarea id="course-outline" name="course-outline"></textarea>
        </div>
        <div class="form-group">
            <label for="department-mission">بيان علاقة القسم برسالة الجامعة وخطتها الاستراتيجية:</label>
            <textarea id="department-mission" name="department-mission"></textarea>
        </div>
        <div class="form-group">
            <label for="justification">مبررات استحداث القسم:</label>
            <textarea id="justification" name="justification"></textarea>
        </div>
        <div class="form-group">
            <label for="learning-outcomes">نتاجات التعلم المستهدفة:</label>
            <textarea id="learning-outcomes" name="learning-outcomes"></textarea>
        </div>
        <div class="form-group">
            <label for="academic-programs">البرامج الأكاديمية المنوي إنشاؤها في القسم:</label>
            <textarea id="academic-programs" name="academic-programs"></textarea>
        </div>
        <div class="form-group">
            <label for="economic-viability">الجدوى الاقتصادية والبحثية للقسم:</label>
            <textarea id="economic-viability" name="economic-viability"></textarea>
        </div>
        <div class="form-group">
            <label for="required-staff">الكوادر الأكاديمية والإدارية المطلوبة لاستحداث القسم:</label>
            <textarea id="required-staff" name="required-staff"></textarea>
        </div>
        <div class="form-group">
            <label for="required-facilities">المرافق والمعدات والأجهزة المطلوبة لاستحداث القسم:</label>
            <textarea id="required-facilities" name="required-facilities"></textarea>
        </div>
        <div class="form-group">
            <label for="similar-departments">جامعات عالمية يوجد فيها أقسام أكاديمية بنفس المسمى:</label>
            <textarea id="similar-departments" name="similar-departments"></textarea>
        </div>
        <div class="form-group">
            <label for="agreements">اتفاقيات ومحادثات مشتركة مع جهات أخرى حول القسم:</label>
            <textarea id="agreements" name="agreements"></textarea>
        </div>
        <div class="form-group">
            <label for="impact-on-other-departments">مدى تأثير القسم على غيره من الأقسام الأكاديمية في الجامعة:</label>
            <textarea id="impact-on-other-departments" name="impact-on-other-departments"></textarea>
        </div>
        <div class="form-group">
            <label for="internal-consultations">الاستشارات داخل الجامعة:</label>
           <p>يرجى التزويد بما يثبت استشارة القائمين على استحداث قسم للجهات المعنية في الجامعة مثل مركز الاعتماد وضمان الجودة ، ووحدة الشؤون المالية ، ووحدة القبول والتسجيل ، وعمادة البحث العلمي ، وكلية الدراسات العليا ، وغيرها... </p>
           <textarea id="consultation-file" name="consultation-file"></textarea>
        </div>
        
        <div class="centered-button">
            <button class="submit-button">Submit</button>
          </div>
    </div>
</form>
@endsection()