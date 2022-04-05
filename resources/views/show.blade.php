@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Информация о пользователе</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">ФИО : {{ $contacts->user_name }}</h5>
                <p class="card-text">Оценка : {{ $contacts->mark }}</p>
                <p class="card-text">Ответственный менеджер : {{ $contacts->manager }}</p>
            </div>

            </hr>

        </div>
    </div>
