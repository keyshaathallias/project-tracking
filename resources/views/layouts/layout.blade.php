<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project Tracking CDIAsia</title>
  @vite('resources/css/app.css')

  {{-- Font Montserrat --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body class="font-montserrat bg-lighter-blue">
  <div class="flex">
    @include('partials.sidebar')

    <div class="flex-1 flex flex-col">
      @include('partials.navbar')

      <main class="p-6 md:p-8 overflow-auto mb-20 md:mb-0">
        @yield('content')
      </main>

      @include('partials.bottomNav')
    </div>
  </div>
</body>

</html>
