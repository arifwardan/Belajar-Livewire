@extends('dashboard.core')

@section('title')
    Dashboard
@endsection

@section('sidebar')
    @parent

    <li>
      <a href="#">
        <i class="tim-icons icon-atom"></i>
        <p>Pemasukan</p>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="tim-icons icon-atom"></i>
        <p>Pengeluaran</p>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="tim-icons icon-atom"></i>
        <p>Investasi/Tabungan</p>
      </a>
    </li>
@endsection

@section('content')
    tes
@endsection

@section('script')
@endsection
