<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-f3py/G3t09pa4D49kwiW3mP0l1oAXGsN4H5qspBRfQjHlL1uyjm/XKzhKjeX7wfgsRgW8rSw6tL5pUD9yI4JnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <div class="background-login">
    
        <div class="form-container ">
            <form>

                <div class="d-grid gap-2 col-6 mx-auto">

                    
                    <h1 class="fs-4 text-center lh-base"> <img src="/img/login-icon.svg"/ alt="Ícone Login"> Login </h1>
                    <div class="mb-2">
                        <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Usuário</label>
                        <input type="text" class="form-control form-control-sm label-login">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label fw-semibold fs-6">Senha</label>
                        <input type="password" class="form-control form-control-sm label-login">
                    </div>
                    
                    <button type="submit" class="login-button-form w-3 mb-2"> Login </button>
                        
                    <div class="links text-center fw-medium">
                        <a href="#" class="mb-3">Esqueceu Usuário/Senha?</a>
                        <a href="#" class="mb-3">Criar sua conta</a>
                    </div>

                </div>

            </form>
        </div>

    </div>
</body>

</html>
