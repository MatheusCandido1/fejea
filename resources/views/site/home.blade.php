@extends('layout.app')
@section('content')
<br/>
<div class="container-fluid">
    <div class="row">
          
        <div class="col-lg-6">
            <div class="card">
                 <div class="card-header">
                    <strong>Ranking</strong>
                    <small> Quem tá mandando bem?!</small>
                </div>
                <div  class="card-body">
                       <div   style="align-items: center; justify-content: center; background-color: #00133d" class="overview-item ">
                <div  class="overview__inner">
                    <div  class="overview-box clearfix">
                       <div class="icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="text">
                        <h2>{{isset($top->name) ? $top->name:''}}</h2>
                            <span>EJ que mais indicou!</span>
                        </div>
                    </div>
                </div>
            </div>

               

                <h3 class="title-3">Metas da rede</h3>
                <div class="au-skill-container">
                    <div class="au-progress">
                        <span class="au-progress__title">Número de EJs Indicando: {{$indica->indica == null ? '':$indica->indica}} [Meta: 10]

</span>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$indica->indica == null ? 0:$indica->indica*10}}%" aria-valuenow="{{$indica->indica == null ? 0:$indica->indica*10}}" aria-valuemin="0" aria-valuemax="100">{{$indica->indica == null ? 0:$indica->indica*10}}%</div>
                    </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Número de EJs Indicadas: [Meta: 10]

</span>
                        <div class="progress mb-3">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$indicadas == null ? 0:$indicadas}}%" aria-valuenow="{{$indicadas == null ? 0:$indicadas}}" aria-valuemin="0" aria-valuemax="100">{{$indicadas == null ? 0:$indicadas}}%</div>
                    </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Número de Clientes Indicados: {{$clients->clients == null ? '':$clients->clients}} [Meta: 100]

</span><div class="progress mb-3">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$clients->clients == null ? 0:$clients->clients}}%" aria-valuenow="{{$clients->clients == null ? 0:$clients->clients}}" aria-valuemin="0" aria-valuemax="100">{{$clients->clients == null ? 0:$clients->clients}}%</div>
                    </div>
                    </div>
                  
                </div>
                    
                </div>
            </div>
        </div>

       
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <small>Vou te passar um</small>
                    <strong> Contatinho!</strong>
                <a href="{{route('connected.export')}}" style="color: white" class="btn btn-success float-right btn-sm">
                        Exportar Leads <i class="fas fa-file-excel"></i></a>
                </div>
                <div class="card-body card-block">
                <form method="POST" action="{{ route('connected.store')}}">
                    @csrf
                     <div class="form-group">
                     <label for="street" class=" form-control-label ">Qual sua EJ?</label>
                                <select name="id_ej" id="ej" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="">Selecione..</option>
                                    @foreach($ejs as $ej)
                                        <option value="{{$ej->id}}">{{$ej->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label">Nome do Cliente/Empresa que você quer indicar?</label>
                        <input type="text" id="cliente" name="customer_name" placeholder="Digite aqui." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label ">Para qual EJ você quer indicar?</label>
                                   <select name="id_ej1" id="ej1" class="form-control" tabindex="-1" aria-hidden="true">
                                       <option value="">Selecione..</option>
                                       @foreach($ejs as $ej)
                                           <option value="{{$ej->name}}">{{$ej->name}}</option>
                                       @endforeach
                                   </select>
                           </div>
                         <label for="street" class=" form-control-label">Indicar para outras EJs?</label>
                        <label class="switch switch-3d switch-danger mr-3">
  <input type="checkbox" class="switch-input" id="togBtn" checked="false">
  <span class="switch-label"></span>
  <span class="switch-handle"></span>
</label>
<div id="dvPassport">
<div class="form-group">
    <select name="id_ej2" id="ej2" class="form-control" tabindex="-1" aria-hidden="true">
        <option value="">Selecione..</option>
        @foreach($ejs as $ej)
            <option value="{{$ej->name}}">{{$ej->name}}</option>
        @endforeach
    </select>
                        </div>
                        <div class="form-group">
                            <select name="id_ej3" id="ej3" class="form-control" tabindex="-1" aria-hidden="true">
                                <option value="">Selecione..</option>
                                @foreach($ejs as $ej)
                                    <option value="{{$ej->name}}">{{$ej->name}}</option>
                                @endforeach
                            </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="id_ej4" id="ej4" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Selecione..</option>
                                                        @foreach($ejs as $ej)
                                                            <option value="{{$ej->name}}">{{$ej->name}}</option>
                                                        @endforeach
                                                    </select>
                                                                        </div>
</div>
                        <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">O que esse cliente precisa?</label>
                                <textarea name="customer_gap" rows="2" placeholder="Conta pra gente!" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">Conte mais sobre o cliente...</label>
                                <textarea name="customer_information" rows="2" placeholder="Queremos saber mais!" class="form-control"></textarea>
                        </div>
                       <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Telefone</label>
                                    <input id="cc-exp" name="customer_phone" type="text" class="form-control cc-exp" value="" data-val="true" placeholder="(99) 9 9999-9999">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="customer_email" type="email" class="form-control cc-cvc" placeholder="cliente@cliente.com" value="">

                                </div>
                            </div>
                        </div>
                    
                    
                      <div>
                            <button id="payment-button" type="submit" class="btn btn-lg  btn-secondary btn-block" style="background-color: #00133d">
                                <i class="fa fa-rocket fa-lg"></i>&nbsp;
                                <span id="payment-button-amount" style="color: white">Conectar</span>
                                <span id="payment-button-sending" style="display:none;">Enviando...</span>
                            </button>
                        </div>
                    </form>
                </div>
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
</div>
@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $('#ej').select2({
      placeholder: "Selecione sua EJ"
    });
    
});
$(document).ready(function() {
    $('#ej1').select2({
      placeholder: "Selecione uma EJ"
    });
    
});

var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
var switchStatus = false;
$("#togBtn").on('change', function() {
    
  var x = document.getElementById("dvPassport");
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
        x.style.display = "block";
    }
    else {
       switchStatus = $(this).is(':checked');
       x.style.display = "none";
    }
});
</script>
@endsection
@endsection