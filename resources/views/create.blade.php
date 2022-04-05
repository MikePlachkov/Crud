@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Добавление пользователя</div>
        <div class="card-body">

            <form action="{{ url('contact') }}" method="post">
                {!! csrf_field() !!}
                <label>ФИО</label></br>
                <input type="text" name="user_name" id="user_name" class="form-control"></br>

                <label>Дата проведения теста</label></br>
                <input type="date" name="test_date" id="test_date" class="form-control"></br>

                <label>Локация проведения теста</label></br>
                <input type="text" name="location" id="location" class="form-control"></br>

                <label>Оценка</label></br>
                <input type="number" name="mark" id="mark" class="form-control"></br>

                <label>Критерий на основе оценки</label></br>
                <input type="number" name="criterion" id="criterion" class="form-control"></br>

                <label>Ответственный менеджер</label></br>
                <input type="text" name="manager" id="manager" class="form-control"></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
