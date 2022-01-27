@extends('./layouts/layouts')

@section('title')Secure
@endsection

@section('secure_content')
    <form class="guruweba_example_form" name="feedback" method="POST" action="/feedback.php">
        <div>Номер транспортного средства</div>
            <input type="text" name="number" required="required" value="{{ $events->file_name }}">
        <div>Время въезда</div>
            <input type="text" name="time" required="required"value="{{ $events->created_at }}">
        <div class="contragent">Причина въезда</div>
            <select name="theme" required="required">
                <option value="">Выберите вариант</option>
                <option>Стоянка</option>
                <option>Ремонт</option>
                <option>Сотрудники</option>
                <option>Доставка</option>
            </select>
    </form>
@endsection