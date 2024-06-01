@php
    $path = public_path('images/company-logo.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
@endphp

<header>
    <table class="table">
        <tbody>
        <tr>
            <td width="30%">
                <img class="top--company-logo" src="{{ $base64 }}"  alt="company logo">
            </td>
            <td width="40%"> </td>
            <td width="30%" class="text-center">
                <p class="top-info">Company Name</p>
                <p class="top-info"> Invoice Title </p>
            </td>
        </tr>
        </tbody>
    </table>

</header>
