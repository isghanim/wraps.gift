{{-- TODO: is there a convention on this? Like a docstring? --}}
{{-- Variables: $title, $description, $imageUrl, $url --}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $title }}</title>
    <meta name="description"
          content="{{ $description }}">
    {{-- OpenGraph properties --}}
    <meta name="og:site_name" content="Digital gift wrap">
    <meta name="og:title" content="{{ $title }}">
    <meta name="og:description" content="{{ $description  }}">
    <meta name="og:type" content="website">
    <meta name="og:image:secure_url" itemprop="image" content="{{ $imageUrl  }}">
    {{-- TODO: add Twitter properties and more OpenGraph properties --}}

    <meta http-equiv="refresh" content="0; URL={{ $url }}">
</head>
<body></body>
</html>
