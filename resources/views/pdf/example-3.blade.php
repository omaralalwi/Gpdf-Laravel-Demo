<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example - 1</title>
    @include('pdf.partials.pdf-styles')
</head>
<body>
<h1>Hello, World!</h1>
<h2 class="text-center"> Third Page in file </h2>
<p>This is a test PDF generated using Gpdf.</p>
<p>This PDF contains some styled HTML content.</p>
<p>You can add more content here, such as images, tables, and lists.</p>

<hr>

<p>This document showcases the capabilities of Gpdf in generating rich PDF content.</p>

<ul>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>

<table>
    <tr>
        <th>Header 1</th>
        <th>Header 2</th>
    </tr>
    <tr>
        <td>Data 1</td>
        <td>Data 2</td>
    </tr>
</table>

<hr>

<h2> Dynamic Params </h2>

<p>{{ $param1 }}</p>

<p>{{ $param2 }}</p>

<p>{{ $param3 }}</p>


<p>Enjoy experimenting with Gpdf!</p>

</body>
</html>
