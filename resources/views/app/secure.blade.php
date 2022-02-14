@extends('./layouts/layouts')

@section('title')Secure
@endsection

@section('secure_content')
    @if (!$event->file_name)
    <form class="row g-3">
        <img src="" class="img-thumbnail" alt="No Image">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Номер ТС:</span>
            <span class="form-control"></span>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Причина въезда</label>
            <span class="form-control"></span>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Время въезда:</span>
            <span class="form-control"></span>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Контрагент</label>
            <span class="form-control"></span>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit" disabled>Разрешить въезд</button>
        </div>
    </form>
    @else
    <form class="row g-3" action="{{route('event.update', $event->id)}}" method="post">
        @csrf
        @method('put')
        <img src="{{ asset('storage') . '/upload/' . $event->file_name }}" class="img-thumbnail" alt="No Image">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Номер ТС:</span>
            <input type="text" name="file_name" class="form-control" value="{{ $event->file_name }}">
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Причина въезда</label>
                <select class="form-select" id="inputGroupSelect01" name="reason">
                    <option selected>Выберите вариант...</option>
                    <option value="Стоянка">Стоянка</option>
                    <option value="Ремонт">Ремонт</option>
                    <option value="Сотрудники">Сотрудники</option>
                    <option value="Доставка">Доставка</option>
                </select>
        </div>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Время въезда:</span>
            <span class="form-control">{{ $event->created_at->format('H:i:s Y-m-d')}}</span>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Контрагент</label>
                <select class="form-select" id="inputGroupSelect01" name="contragent">
                    <option selected>Выберите вариант...</option>
                    @foreach($agents as $agent)
                    <option value = "{{$agent->id}}">{{$agent->contragent}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Разрешить въезд</button>
        </div>
    </form>
    @endif
@endsection