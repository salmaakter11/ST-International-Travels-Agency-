
@php
    $data = isset($profile_info_print) ? $profile_info_print : '';

    $name = isset($data->name) ? $data->name : '';
    $phone = isset($data->phone) ? $data->phone : '';
    $email = isset($data->email) ? $data->email : '';
    $status = isset($data->status) ? $data->status : '';
    $admin_type = isset($data->admin_type) ? $data->admin_type : '';
    $role_type = isset($data->role_type) ? $data->role_type : '';
    $image = isset($data->image) && $data->image != '' ? $data->image : '';
    $id = isset($data->id) ? $data->id : '';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information</title>

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

        h2{
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px !important;
            float: center;
        }

        table,td {
            padding: 5px;
            font-size: 15px;
        }

        .info{
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
            border-radius:5px;
            font-family: ;
        }
        
        img {
            margin-bottom:8%;
        }
        
    </style>
</head>
<body>
    <header class="clearfix">
        @php
            $admin_logos = '';
            $logo_image='';
            if ( count(DB::table('logo_titles')->where('status', '1')->get(),) != 0) {
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
           <h2 class="name">{{isset($admin_logos->website_name) ? $admin_logos->website_name : "No Name"}}</h2>
           <div>{{isset($admin_logos->address) ? $admin_logos->address : "No Address"}}</div>
           <div>Phone: {{isset($admin_logos->contact_number) ? $admin_logos->contact_number : "No Contact number"}}</div>
           <div><a href="#">{{isset($admin_logos->email) ? $admin_logos->email : "No email"}}</a></div>
        </div>
        <div class="info">
            <h2>Your Information</h2>
        </div>
    </header>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    <footer>
            Power By :
            <strong style="color: rgb(14, 14, 101)">{{isset($admin_logos->website_name) ? $admin_logos->website_name : "No Name"}}</strong>&nbsp; Print Date :
            <strong style="color: rgb(14, 14, 101)">{{date('d F Y')}}</strong>  Print by : {{Auth::user()->name}}
    </footer>
    <main>
        <p style="page-break-after: never;">
            <table>
                <tbody>
                    <tr>
                        <td>   
                            <div class="img_shadow">
                                <img src="{{ $image != '' ? URL::to('storage/admin_image/' . $image) : asset('no_image.png') }}"
                                style="width: 150px;height:150px" alt="No Image">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td ><b>Name</b></td>
                        <td >:&nbsp; {{$name}}</td>
                        <td ><b>Email</b></td>
                        <td >:&nbsp; {{$email}}</td>
                    </tr>
                    <tr>
                        <td ><b>Phone</b></td>
                        <td >:&nbsp; {{$phone}}</td>
                    </tr>
                
                </tbody>
            </table>
        </p>
    </main>
</body>
</html>