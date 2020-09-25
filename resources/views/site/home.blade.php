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
                            <h2></h2>
                            <span>EJ que mais indicou!</span>
                        </div>
                    </div>
                </div>
            </div>

               

                <h3 class="title-3">Metas da rede</h3>
                <div class="au-skill-container">
                    <div class="au-progress">
                        <span class="au-progress__title">Número de EJs Indicando: [Meta: 10]

</span>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0</div>
                    </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Número de EJs Indicadas: [Meta: 10]

</span>
                        <div class="progress mb-3">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0</div>
                    </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Número de Clientes Indicados: [Meta: 100]

</span><div class="progress mb-3">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0</div>
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
                </div>
                <div class="card-body card-block">
                    <form method="POST" action="lead.php">
                     <div class="form-group">
                            <label for="street" class=" form-control-label ">Qual sua EJ?</label>
                                <select name="ej" id="ej" class="form-control js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0">Selecione...</option>
                                                                <option value="4">AEC</option>                             <option value="10">Batuque</option>                             <option value="20">Consulti</option>                             <option value="18">EJEC</option>                             <option value="3">Executive</option>                             <option value="13">I9 Engenharia</option>                             <option value="9">Jangadeiros</option>                             <option value="19">JRS Consultoria</option>                             <option value="21">Júnior Legis</option>                             <option value="16">Nortear</option>                             <option value="12">PontesJud</option>                             <option value="7">Potencialize</option>                             <option value="6">ProSigma</option>                             <option value="17">PROTEQ</option>                             <option value="14">Renotec</option>                             <option value="8">Sapiência</option>                             <option value="15">Sigma</option>                             <option value="5">TIJUC</option>                             <option value="11">Vetor</option>                             <option value="2">Vittals</option>                                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 422.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ej-container"><span class="select2-selection__rendered" id="select2-ej-container" title="Selecione...">Selecione...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label">Nome do Cliente/Empresa que você quer indicar?</label>
                        <input type="text" id="cliente" name="cliente" placeholder="Digite aqui." class="form-control">
                    </div>
                     <div class="form-group">
                            <label for="street" class=" form-control-label">Para qual EJ você quer indicar?</label>
                                <select name="ej1" id="ej1" class="form-control js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                 <option value="4">AEC</option>                             <option value="10">Batuque</option>                             <option value="20">Consulti</option>                             <option value="18">EJEC</option>                             <option value="3">Executive</option>                             <option value="13">I9 Engenharia</option>                             <option value="9">Jangadeiros</option>                             <option value="19">JRS Consultoria</option>                             <option value="21">Júnior Legis</option>                             <option value="16">Nortear</option>                             <option value="12">PontesJud</option>                             <option value="7">Potencialize</option>                             <option value="6">ProSigma</option>                             <option value="17">PROTEQ</option>                             <option value="14">Renotec</option>                             <option value="8">Sapiência</option>                             <option value="15">Sigma</option>                             <option value="5">TIJUC</option>                             <option value="11">Vetor</option>                             <option value="2">Vittals</option>                                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 422.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ej1-container"><span class="select2-selection__rendered" id="select2-ej1-container" title="AEC">AEC</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                         <label for="street" class=" form-control-label">Indicar para outras EJs?</label>
                        <label class="switch switch-3d switch-danger mr-3">
  <input type="checkbox" class="switch-input" id="chkPassport" checked="true">
  <span class="switch-label"></span>
  <span class="switch-handle"></span>
</label>
<div id="dvPassport">
<div class="form-group">
                            
                                <select name="ej2" id="ej2" class="form-control js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0">Selecione...</option>
                                                                <option value="4">AEC</option>                             <option value="10">Batuque</option>                             <option value="20">Consulti</option>                             <option value="18">EJEC</option>                             <option value="3">Executive</option>                             <option value="13">I9 Engenharia</option>                             <option value="9">Jangadeiros</option>                             <option value="19">JRS Consultoria</option>                             <option value="21">Júnior Legis</option>                             <option value="16">Nortear</option>                             <option value="12">PontesJud</option>                             <option value="7">Potencialize</option>                             <option value="6">ProSigma</option>                             <option value="17">PROTEQ</option>                             <option value="14">Renotec</option>                             <option value="8">Sapiência</option>                             <option value="15">Sigma</option>                             <option value="5">TIJUC</option>                             <option value="11">Vetor</option>                             <option value="2">Vittals</option>                                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 422.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ej2-container"><span class="select2-selection__rendered" id="select2-ej2-container" title="Selecione...">Selecione...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                          <div class="form-group">
                            
                                <select name="ej3" id="ej3" class="form-control js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0">Selecione...</option>
                                                                <option value="4">AEC</option>                             <option value="10">Batuque</option>                             <option value="20">Consulti</option>                             <option value="18">EJEC</option>                             <option value="3">Executive</option>                             <option value="13">I9 Engenharia</option>                             <option value="9">Jangadeiros</option>                             <option value="19">JRS Consultoria</option>                             <option value="21">Júnior Legis</option>                             <option value="16">Nortear</option>                             <option value="12">PontesJud</option>                             <option value="7">Potencialize</option>                             <option value="6">ProSigma</option>                             <option value="17">PROTEQ</option>                             <option value="14">Renotec</option>                             <option value="8">Sapiência</option>                             <option value="15">Sigma</option>                             <option value="5">TIJUC</option>                             <option value="11">Vetor</option>                             <option value="2">Vittals</option>                                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 422.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ej3-container"><span class="select2-selection__rendered" id="select2-ej3-container" title="Selecione...">Selecione...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                          <div class="form-group">
                            
                                <select name="ej4" id="ej4" class="form-control js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0">Selecione...</option>
                                                                <option value="4">AEC</option>                             <option value="10">Batuque</option>                             <option value="20">Consulti</option>                             <option value="18">EJEC</option>                             <option value="3">Executive</option>                             <option value="13">I9 Engenharia</option>                             <option value="9">Jangadeiros</option>                             <option value="19">JRS Consultoria</option>                             <option value="21">Júnior Legis</option>                             <option value="16">Nortear</option>                             <option value="12">PontesJud</option>                             <option value="7">Potencialize</option>                             <option value="6">ProSigma</option>                             <option value="17">PROTEQ</option>                             <option value="14">Renotec</option>                             <option value="8">Sapiência</option>                             <option value="15">Sigma</option>                             <option value="5">TIJUC</option>                             <option value="11">Vetor</option>                             <option value="2">Vittals</option>                                                     </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 422.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ej4-container"><span class="select2-selection__rendered" id="select2-ej4-container" title="Selecione...">Selecione...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
</div>
                        <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">O que esse cliente precisa?</label>
                                <textarea name="necessidade" rows="2" placeholder="Conta pra gente!" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">Conte mais sobre o cliente...</label>
                                <textarea name="info_cliente" rows="2" placeholder="Queremos saber mais!" class="form-control"></textarea>
                        </div>
                       <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Telefone</label>
                                    <input id="cc-exp" name="telefone" type="text" class="form-control cc-exp" value="" data-val="true" placeholder="(99) 9 9999-9999">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="email" type="email" class="form-control cc-cvc" placeholder="cliente@cliente.com" value="">

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

@endsection