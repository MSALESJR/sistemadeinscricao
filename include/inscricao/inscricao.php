
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 style="margin:0px 0px 15px 0px;">Formulário de Cadastro</h3>
        <form name="frm_inscricao" action="" id="frm_inscricao" method="post" role="form">
            <fieldset>
                <legend>Dados Pessoais</legend>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                <div style="padding-left: 0px;" class="col-xs-6">
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
                    <input type="text" class="form-control" name="rg" id="rg" placeholder="RG">
                </div>
            </fieldset>
            <fieldset style="margin-top: 15px;">
                <legend>Profissão/Formação</legend>
                <div style="padding-left: 0px;" class="col-md-6">
                    <input type="text" class="form-control" name="profissao" id="profissao" placeholder="Profissão">
                    <input type="text" class="form-control" name="formacao" id="formacao" placeholder="Formação">
                </div>
            </fieldset>
            <fieldset style="margin-top: 15px;">
                <legend>Endereço Residencial</legend>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua/Número">
                <div style="padding-left: 0px;"class="col-md-6">
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                    <!--<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">-->
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                </div>
            </fieldset>
            <fieldset style="margin-top: 15px;">
                <legend>Contato</legend>
                <div style="padding-left: 0px;" class="col-md-6">
                    <input type="text" class="form-control" name="fixo" id="fixo" placeholder="Telefone Fixo">
                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Telefone Celular">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </fieldset>
            <button style="margin-top: 15px;" type="submit" class="btn btn-primary btn-lg">Confirmar Inscrição</button>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>