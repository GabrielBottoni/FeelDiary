@extends('layouts.formulario')

@section('title', 'FeelDiary')

@section('content')

    <form class="mx-auto">
        <div class="d-grid gap-2 col-12 mx-auto">
            <h1 class="fs-5 text-center lh-base"> <img src="/img/login-icon.svg"/ alt="Ícone Login"> Cadastrar Usuário </h1>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Escolha um nome de usuário</label>
                <input type="text" class="form-control form-control-sm label-login">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Crie uma senha</label>
                <input type="password" class="form-control form-control-sm label-login">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Digite o seu E-mail</label>
                <input type="password" class="form-control form-control-sm label-login">
            </div>
        </div>
        <div class="d-flex gap-5 mt-1">
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Gênero</label>
                <select class="form-select form-select-sm text-center" aria-label="Small select example">
                    <option selected>Prefiro não dizer</option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Não-Binário</option>
                    <option value="3">Outro</option>
                </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail" class="form-label inline-flex fw-semibold fs-6">Data de nascimento</label>
            <input type="date" class="form-control form-select-sm" id="data_nascimento" name="data_nascimento">
            </div>
        </div>
        <h2 class="fs-5 mt-4 text-center lh-base">Informações relacionadas ao humor</h2>
        <div class="d-grid">
            <div class="mb-1">
                <p class="mb-2">Frequência de registro de humor</p>
                <div class="form-check form-check-inline mt-0 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Diária
                    </label>
                </div>
                <div class="form-check form-check-inline mt-0 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Semanal
                    </label>
                </div>
                <div class="form-check form-check-inline  mt-0 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Mensal
                    </label>
                </div>
                <div class="mb-2 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Histórico de condições de saúde mental</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
        <h2 class="fs-5 mt-2 text-center lh-base">Consentimentos e Termos de Uso</h2>
        <div class="d-flex justify-content-center">
            <div class="form-check form-check-inline mt-0 mb-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label label-check-login" for="flexCheckChecked">
                    Aceitar Termos de Uso
                </label>
            </div>
            <div class="form-check form-check-inline mt-0 mb-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label label-check-login " for="flexCheckChecked">
                    Aceitar Política de Privacidade
                </label>
            </div>
        </div>
        <div class="d-flex mt-4">
            <button type="submit" class="login-button-form mb-2 mx-auto"> Criar Usuário </button>
            <a href="/formularios/login" class="login-button-form w-25 mb-2 mx-auto">Voltar</a>
        </div>
    </form>
    
@endsection