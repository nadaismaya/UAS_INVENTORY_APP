<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Inventory Management')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body id="app-body">

    @include('layouts.navbar')

    <div class="container-fluid">

        <div class="row">

            @include('layouts.sidebar')

            <main class="col-md-10 ms-sm-auto px-4 py-4">

                @yield('content')

            </main>

        </div>

    </div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const body = document.body;
    const btn = document.getElementById('themeToggle');

    function updateTheme() {

        if(body.classList.contains('dark-mode')){

            btn.innerHTML =
'<i class="bi bi-sun-fill"></i> Light Mode';
            localStorage.setItem('theme','dark');

        }else{

            btn.innerHTML =
'<i class="bi bi-moon-stars-fill"></i> Dark Mode';
            localStorage.setItem('theme','light');

        }

    }

    if(localStorage.getItem('theme') === 'dark'){

        body.classList.add('dark-mode');

    }

    updateTheme();

    btn.addEventListener('click', () => {

        body.classList.toggle('dark-mode');

        updateTheme();

    });

});
</script>

</body>
</html>
