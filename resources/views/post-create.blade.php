@extends('app')

@section('content')

@section('css')
<style>
  body {
    background-color: #FFEBEE
  }

  .card {
    width: 400px;
    background-color: #fff;
    border: none;
    border-radius: 12px
  }

  label.radio {
    cursor: pointer;
    width: 100%
  }

  label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
  }

  label.radio span {
    padding: 7px 14px;
    border: 2px solid #eee;
    display: inline-block;
    color: #039be5;
    border-radius: 10px;
    width: 100%;
    height: 48px;
    line-height: 27px
  }

  label.radio input:checked+span {
    border-color: #039BE5;
    background-color: #81D4FA;
    color: #fff;
    border-radius: 9px;
    height: 48px;
    line-height: 27px
  }

  .form-control {
    margin-top: 10px;
    height: 48px;
    border: 2px solid #eee;
    border-radius: 10px
  }

  .form-control:focus {
    box-shadow: none;
    border: 2px solid #039BE5
  }

  .agree-text {
    font-size: 12px
  }

  .terms {
    font-size: 12px;
    text-decoration: none;
    color: #039BE5
  }

  .confirm-button {
    height: 50px;
    border-radius: 10px
  }

  .content {
    height: 200px;
  }

</style>
@endsection()

{{-- <livewire:post-create /> --}}
@livewire('post-create')


@endsection
