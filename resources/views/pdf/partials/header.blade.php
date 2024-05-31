@php
    $path = public_path('images/company-logo.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
@endphp

<header>
{{--    <div style="display: flex; align-items: center; justify-content: space-between;">--}}
{{--        <div style="flex: 1;">--}}
{{--            <img src="{{ $base64 }}" alt="Company Logo" style="height: 50px;">--}}
{{--        </div>--}}
{{--        <div style="flex: 2; text-align: center;">--}}
{{--            <p>Company Name</p>--}}
{{--            <p>Invoice Title</p>--}}
{{--        </div>--}}
{{--        <div style="flex: 1; text-align: right;">--}}
{{--            <p>Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}


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
