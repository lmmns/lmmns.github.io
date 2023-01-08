<!DOCTYPE html>
<html lang="en">
<head>
    @include('scripts.gtag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>lmmns.dev</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.js' ])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Share Tech Mono', ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        .icon-terminal { fill: currentColor; color: #b0bdcf; }
        .icon-terminal .fa-primary { color: inherit; }
        .icon-terminal .fa-secondary { color: inherit; }
    </style>
</head>
<body class="h-screen flex justify-center items-center bg-slate-700 text-slate-300 text-xl">

    <div class="w-6 h-6 mr-2 flex justify-center items-center">
        @svg('duotone/terminal', 'icon-terminal')
    </div>

    <p>lmmns.dev</p>

</body>
</html>