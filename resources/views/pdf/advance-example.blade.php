<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advance Example</title>
    @include('pdf.partials.pdf-styles-advance')
</head>
<body>
{{--    Note we include header once time , outside loop--}}
@include('pdf.partials.header')
    @foreach ($pages as $index => $page)
        @if ($index > 0)
            <div style="page-break-before: always;"></div>
        @endif
        <br>
        <main>
            <h1>{{ $page['title'] }}</h1>
            <p>{{ $page['content'] }}</p>
        </main>
    @endforeach
</body>
</html>
