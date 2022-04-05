@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Редактирование</div>
        <div class="card-body">

            <form action="{{ url('contact/' .$contacts->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />


                <label>ФИО</label></br>
                <input type="text" name="user_name" id="user_name" value="{{$contacts->user_name}}" class="form-control"></br>

                <label>Дата проведения теста</label></br>
                <input type="date" name="test_date" id="test_date" value="{{$contacts->test_date}}" class="form-control"></br>

                <label>Локация проведения теста</label></br>
                <input type="text" name="location" id="location" value="{{$contacts->location}}" class="form-control"></br>

                <label>Оценка</label></br>
                <input type="number" name="mark" id="mark" value="{{$contacts->mark}}" class="form-control"></br>

                <!-- <label>Критерий на основе оценки</label></br>
                <input type="number" name="criterion" id="criterion" value="{{$contacts->criterion}}" class="form-control"></br> -->

                <label>Ответственный менеджер</label></br>
                <input type="text" name="manager" id="manager" value="{{$contacts->manager}}" class="form-control"></br>



                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
