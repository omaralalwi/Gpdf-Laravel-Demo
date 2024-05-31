<!DOCTYPE html>
<html lang="en">
<head>
    <title>Complex Example</title>
    @include('pdf.partials.pdf-styles-advance')
</head>
<body>
@include('pdf.partials.header')
<main>
    @foreach ($pages as $index => $page)
        @if ($index > 0)
            <div style="page-break-before: always;"></div>
        @endif
        <h1>{{ $page['title'] }}</h1>
        <p>{{ $page['content'] }}</p>
    @endforeach
</main>
</body>
</html>
