@php
    $data = isset($invoice) ? $invoice : '';
    $service_name = isset($data->service_name) ? $data->service_name : '';
    $service_price = isset($data->service_price) ? $data->service_price : '';

    $name = isset($data->clientf->name) && $data->clientf->name != '' ? $data->clientf->name : '';
    $email = isset($data->clientf->email) && $data->clientf->email != '' ? $data->clientf->email : '';
    $phone = isset($data->clientf->phone) && $data->clientf->phone != '' ? $data->clientf->phone : '';
    $image = isset($data->clientf->image) && $data->clientf->image != '' ? $data->clientf->image : '';
    $dob = isset($data->clientf->dob) && $data->clientf->dob != '' ? $data->clientf->dob : '';

    $created_at = isset($data->created_at) && $data->created_at != '' ? $data->created_at : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) ? $data->id : '';

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Information</title>

    <style>
        @page {
            margin: 0px 50px;
        }

        body {
            margin-top: 5cm;
            margin-left: 0cm;
            margin-right: 0cm;
            margin-bottom: 1cm;
        }

        header {
            position: fixed;
            top: 15px;
            left: 0px;
            right: 0px;
            font-size: 15px !important;
            text-align: center;
            line-height: 18px;
            padding: 10px 0;
        }

        h2 {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px !important;
            float: center;
        }

        table,
        td {
            padding: 5px;
            font-size: 15px;
        }

        .info {
            line-height: 10px;
            text-align: center;
            margin-top: 20%;
            color: #625D5D;
            font-family: Futara;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #0087C3;
            text-decoration: none;
        }

        h2.name {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
            margin-top: 8px;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 80px;
            width: 90px;
        }

        #company {
            float: right;
            text-align: right;
            width: 34%;
        }

        footer {
            position: fixed;
            bottom: 10px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 19px !important;
            background-color: #008B8B;
            color: white;
            text-align: center;
            line-height: 35px;
            border-radius: 5px;
            font-family: ;
        }

        img {
            margin-bottom: 8%;
        }
        tr.spaceUnder>td {
            padding-top: 3em;
        }
        .white_color{
            color: white;
        }
        .p-1{
            padding: 5px;
        }
        .bg-rounded{
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header class="clearfix">
        @php
            $admin_logos = '';
            $logo_image = '';
            if (
                count(
                    DB::table('logo_titles')
                        ->where('status', '1')
                        ->get(),
                ) != 0
            ) {
                $admin_logos = DB::table('logo_titles')->first();
                $logo_image = $admin_logos->logo_image;
            }
        @endphp
        <div id="logo">
            <!-- <img src="{{ public_path('no_image.png') }}"> -->
            @if ($logo_image == '' || $logo_image == null)
                <img src="{{ asset('no_image.png') }}">
            @else
                <img src="{{ URL::to('storage/logo_image', $logo_image) }}">
            @endif
        </div>
        <div id="company">
            <h2 class="name">{{ isset($admin_logos->website_name) ? $admin_logos->website_name : 'No Name' }}</h2>
            <div>{{ isset($admin_logos->address) ? $admin_logos->address : 'No Address' }}</div>
            <div>Phone: {{ isset($admin_logos->contact_number) ? $admin_logos->contact_number : 'No Contact number' }}
            </div>
            <div><a href="#">{{ isset($admin_logos->email) ? $admin_logos->email : 'No email' }}</a></div>
        </div>
        <div class="info">
            <h2>Client Information</h2>
        </div>
    </header>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    <footer>
        Power By :
        <strong
            style="color: rgb(14, 14, 101)">{{ isset($admin_logos->website_name) ? $admin_logos->website_name : 'No Name' }}</strong>&nbsp;
        Print Date :
        <strong style="color: rgb(14, 14, 101)">{{ date('d F Y') }}</strong> Print by : {{ Auth::user()->name }}
    </footer>
    <main>
        <p style="page-break-after: never;">
        <table>
            <tbody>
                <tr>
                    <td>
                        <div class="img_shadow">
                            <img src="{{ $image != '' ? URL::to('storage/user/' . $image) : asset('no_image.png') }}"
                                style="width: 150px;height:150px" alt="No Image">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>Apply Date</b></td>
                    <td>:&nbsp;{{date('d F Y', strtotime($created_at))}}</td>
                </tr>
                <tr>
                    <td><b>Client Name</b></td>
                    <td>:&nbsp; {{ $name }}</td>
                    <td><b>Phone</b></td>
                    <td>:&nbsp; {{ $phone }}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:&nbsp; {{ $email }}</td>
                    <td><b>Date of Birth</b></td>
                    <td>:&nbsp; {{ $dob }}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>:&nbsp;
                        @if ($status == 0)
                            <span class="p-1 bg-rounded" style="background-color:#ffc107;">Pending</span>
                        @elseif($status == 1)
                            <span class="white_color p-1 bg-rounded" style="background-color:#17a2b8;">Processing</span>
                        @elseif($status == 2)
                            <span class="white_color p-1 bg-rounded" style="background-color:#007bff;">Procesed</span>
                        @elseif($status == 3)
                            <span class="white_color p-1 bg-rounded" style="background-color:#28a745;">Completed</span>
                        @elseif($status == 4)
                            <span class="white_color p-1 bg-rounded" style="background-color:#dc3545;">Canceled</span>
                        @endif
                    </td>
                </tr>

                <tr class="spaceUnder">
                    <td><b>Service Name</b></td>
                    <td>:&nbsp; {{ $service_name }}</td>
                    <td><b>Service Price</b></td>
                    <td>:&nbsp; {{ $service_price }}</td>
                </tr>
            </tbody>
        </table>
        </p>
    </main>
</body>

</html>
