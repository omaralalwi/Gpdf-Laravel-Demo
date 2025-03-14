<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gpdf Laravel Demo App</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-900 text-white">
<div class="bg-gray-800 text-white p-10 flex justify-center">
    <div class="container mx-auto w-full max-w-xl">
        <h1 class="text-4xl font-bold mb-4 text-center">PDF Generation Dashboard</h1>
        <ul class="flex justify-center space-x-4">
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generatePdf') }}" target="_blank">Generate PDF</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateSecondWayPdf') }}" target="_blank">Second Way</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateWithCustomInlineConfig') }}" target="_blank">Custom Inline Config</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateAndStream') }}" target="_blank">Generate & Stream</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateAdvanceWithFixedHeader') }}" target="_blank">Advanced with Fixed Header And Images</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateAndStore') }}" target="_blank">Generate & Store</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateAndStoreToS3') }}" target="_blank">Generate & Store to S3</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generateAndStoreMultiplePages') }}" target="_blank">Generate Multiple Pages</a></li>
            <li><a class="px-6 py-3 rounded-md text-lg font-semibold text-white bg-transparent border border-white hover:bg-blue-700 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('generatePdfWithArabicContent') }}" target="_blank">Generate with Arabic Content</a></li>
        </ul>
    </div>
</div>
</body>
</html>
