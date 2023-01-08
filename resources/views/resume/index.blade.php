<!DOCTYPE html>
<html lang="en">
<head>
    @include('scripts.gtag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>lmmns.dev</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    @include('scripts.theme')
    @vite([ 'resources/css/resume.css', 'resources/js/resume.js' ])
</head>
<body class="relative min-h-screen bg-slate-300 text-slate-700 dark:bg-slate-700 dark:text-slate-300 text-xl tracking-wide">
    <div id="app" class="relative min-h-screen">

        @include('components.toggle-theme', [ 'class' => "absolute top-0 right-0 p-6 dark:text-slate-300" ])

        <main class="relative mx-auto max-w-5xl min-h-screen border-x border-white">
            @include('resume.sections.profile')
        </main>

    </div>
</body>
</html>