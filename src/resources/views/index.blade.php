@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="todo__content">
  <div class="section__title">
    <h2>新規作成</h2>
  </div>
  <form class="create-form" action="/todos" method="post">
    @csrf
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="content" value="{{old('content')}}" />
      <select class="create-form__item-select">
        <option value="">カテゴリ</option>
      </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <div class="section__title">
    <h2>Todo検索</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" />
      <select class="search-form__item-select">
        <option value="">カテゴリ</option>
      </select>
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">検索</button>
    </div>
  </form>
  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__inner">
        <th class="todo-table__header">Tasks</th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <p>test</p>
        </td>
        <td class="todo-table__item-progress">
          <progress value="60" max="100"></progress>
        </td>
        <td class="todo-table__item-time-limit">
          <span>
            残り 〇〇 日
          </span>
        </td>
        <td class="todo-table__item-detail">
          詳細
        </td>
      </tr>
    </table>
  </div>
</div>

@endsection
