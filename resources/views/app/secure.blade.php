@extends('./layouts/layouts')

@section('title')Secure
@endsection

@section('secure_content')
    <form class="guruweba_example_form" name="feedback" method="POST" action="/feedback.php">
        <div>Номер транспортного средства</div>
            <input type="vin_name" name="vin_name" required="required">
        <div>Время въезда</div>
            <input type="vin_date" name="vin_date" required="required">
        <div class="contragent">Контрагент</div>
            <select name="theme" required="required">
                <option value="">Выберите вариант</option>
                <option>Вопрос по работе сервиса</option>
                <option>Помощь в оформлении заказа</option>
                <option>Сотрудничество</option>
                <option>Пожелания / предложения</option>
            </select>
    </form>
@endsection