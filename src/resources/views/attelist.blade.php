@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attedate.css') }}">
<link rel="stylesheet" href="{{ asset('css/attelist.css') }}">
@endsection

@section('content')
<form class="header" action="{{ route('per/user') }}" method="post">
    @csrf

    @if($displayUser != null)
    <p class="header__text">{{ $displayUser}} さんの勤怠表</p>
    @else
    <p class="header__text">ユーザーを選択してください</p>
    @endif

    <div class="search__item">
        <input class="search__input" type="text" name="search_name" placeholder="名前検索" value="{{ $searchParams['name'] ?? '' }}" list="user_list">
        <datalist id="user_list">
            @if($userList)
            @foreach($userList as $user)
            <option value="{{ $user->name }}">{{ $user->name }}</option>
            @endforeach
            @endif
        </datalist>
        <button class="search__button">検索</button>
    </div>
</form>

<div class="table">
    <table class="atte__table">
        <tr class="table__row">
            <th class="table__header">日付</th>
            <th class="table__header">勤務開始</th>
            <th class="table__header">勤務終了</th>
            <th class="table__header">休憩時間</th>
            <th class="table__header">勤務時間</th>
        </tr>
        @foreach ($users as $user)
        <tr class="table__row">
            <td class="table__item">{{ $user->date }}</td>
            <td class="table__item">{{ $user->start }}</td>
            <td class="table__item">{{ $user->end }}</td>
            <td class="table__item">{{ $user->total_rest }}</td>
            <td class="table__item">{{ $user->total_work }}</td>
        </tr>
        @endforeach
    </table>
</div>
{{ $users->links('pagination') }}
@endsection