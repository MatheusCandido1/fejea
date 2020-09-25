@extends('layout.app')
@section('content')
<br/>
<div class="container-fluid">

    <h1 class="mt-4">Depoimentos</h1>
<div class="card mb-4">
    <div class="card-header">
      <a style="color: white" class="btn btn-success float-right btn-sm">
        Exportar <i class="fas fa-file-excel"></i>
    </a>
  </div>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="text-align: center" scope="col" >EJ que Indicou</th>
                        <th style="text-align: center" scope="col" >EJ indicada (1)</th>
                        <th style="text-align: center" scope="col" >EJ indicada (2)</th>
                        <th style="text-align: center" scope="col" >EJ indicada (3)</th>
                        <th style="text-align: center" scope="col" >EJ indicada (4)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leads as $lead)
                    <tr>
                    <td style="text-align: center">{{$lead->indicou}}</td>
                    <td style="text-align: center">{{$lead->id_ej1}}</td>
                    <td style="text-align: center">{{$lead->id_ej2}}</td>
                    <td style="text-align: center">{{$lead->id_ej3}}</td>
                    <td style="text-align: center">{{$lead->id_ej4}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 Colorlib. Direitos Reservado. Adaptado com ❤️ por <a href="https://www.instagram.com/candin/">Candin</a>.</p>
            </div>
        </div>
    </div>
@section("script")
<script>
    $(function () {
        $("#myTable").DataTable({
            "language": { "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json" }
        });
    });
</script>
@endsection
@endsection