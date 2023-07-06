@extends('layouts.app')
@section('content')

  <form action="">
    @csrf
    <label for="title">Judul</label>
    <input type="text" name="title">
    <label for="name">Penulis</label>
    <input type="text" name="name">
    <label for="description">Deskripsi</label>
    <input type="text" name="description">
  </form>

@endsection