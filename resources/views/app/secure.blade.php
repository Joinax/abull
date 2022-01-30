@extends('./layouts/layouts')

@section('title')Secure
@endsection

@section('secure_content')
    <img src="{{ asset('storage') . '/upload/' . $events->file_name }}" class="img-thumbnail" alt="...">
    <form class="row g-3">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Номер ТС:</span>
            <input type="text" class="form-control" value="{{ $events->file_name }}" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Причина въезда</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Выберите вариант...</option>
                    <option value="1">Стоянка</option>
                    <option value="2">Ремонт</option>
                    <option value="3">Сотрудники</option>
                    <option value="4">Доставка</option>
                </select>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Время въезда:</span>
            <span class="form-control">{{ $events->created_at->format('H:i:s Y-m-d')}}</span>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Контрагент</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Выберите вариант...</option>
                    <option value="1">Стоянка</option>
                    <option value="2">Ремонт</option>
                    <option value="3">Сотрудники</option>
                    <option value="4">Доставка</option>
                </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Разрешить въезд</button>
        </div>
    </form>
@endsection