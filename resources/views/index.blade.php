@extends('layout')

@section('title', 'Komikmu')
@section('header', 'Komikmu')

@section('content')

<main>
    @yield('content')
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>nama barang</th>
              <th>harga</th>
              <th>stok</th>
              <th>id suplier</th>
              <th>dibuat</th>
              <th>diupdate</th>
          </thead>
        <tbody class="table">
        @foreach($data as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->nama_barang}}</td>
            <td>{{$list->harga}}</td>
            <td>{{$list->stok}}</td>
            <td>{{$list->id_suplier}}</td>
            <td>{{$list->created_at}}</td>
            <td>{{$list->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
  </main>
@endsection