<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example - 1</title>
    @include('pdf.partials.pdf-styles')
</head>
<body>
<h1> مرحباً بكـ </h1>
<h2 class="text-center">This Example to Show images in many Extensions</h2>
<hr>

<h5> example to show png Images </h5>
<img class="top--company-logo" width="400" height="300" src="{{ public_path('images/logo.png') }}"  alt="company logo">
<hr>

<h5> example to show jpg Images </h5>
<img class="top--company-logo" width="400" height="300" src="{{ public_path('images/logo.jpg') }}"  alt="company logo">
<hr>

<h5> example to show svg Images </h5>
<img class="top--company-logo" width="400" height="300" src="{{ public_path('images/logo.svg') }}"  alt="company logo">
<hr>

<p>Enjoy experimenting with Gpdf !</p>

</body>
</html>
