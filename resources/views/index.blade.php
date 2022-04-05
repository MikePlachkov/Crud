@extends('layout')
@section('content')
    @if(is_countable($contacts))

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header">Список студентов</div>
                    <div class="card-body">
                        <a href="{{ url('contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить студента
                        </a>
                        <br/>
                        <br/>
                        <form method="get" action="{{ route ('search')}}">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="text" id="s" name="s" class="form-control" placeholder="Поиск студента..." />
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Поиск
                                </button>
                            </div>
                        </form>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>ФИО</th>
                                        <th>Дата проведения теста</th>
                                        <th>Локация проведения теста</th>
                                        <th>Оценка</th>
                                        <th>Критерий на основе оценки</th>
                                        <th>Преподователь</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user_name }}</td>
                                            <td>{{ $item->test_date }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{{ $item->mark }}</td>
                                            <td>{{ $item->criterion }}</td>
                                            <td>{{ $item->manager }}</td>
                                            <td>
                                                <a href="{{ url('/contact/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        
                        <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @else
        <p>Студентов не найдено!</p>
    @endif
@endsection
