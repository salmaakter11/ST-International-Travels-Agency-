@php

    $data = isset($client_print) ? $client_print : '';

    $name = isset($data->name) && $data->name != '' ? $data->name : '';
    $email = isset($data->email) && $data->email != '' ? $data->email : '';
    $phone = isset($data->phone) && $data->phone != '' ? $data->phone : '';
    $dob = isset($data->dob) && $data->dob != '' ? $data->dob : '';
    $gender = isset($data->gender) && $data->gender != '' ? $data->gender : '';
    $marital_status = isset($data->marital_status) && $data->marital_status != '' ? $data->marital_status : '';
    $religion = isset($data->religion) && $data->religion != '' ? $data->religion : '';
    $address = isset($data->address) && $data->address != '' ? $data->address : '';
    $country_name = isset($data->country_data->country_name) && $data->country_data->country_name != '' ? $data->country_data->country_name : '';
    $image = isset($data->image) && $data->image != '' ? $data->image : '';
    $thum_image = isset($data->thum_image) && $data->thum_image != '' ? $data->thum_image : '';
    $educational_one = isset($data->edu_one->level_name) && $data->edu_one->level_name != '' ? $data->edu_one->level_name : '';
    $educational_two = isset($data->edu_two->level_name) && $data->edu_two->level_name != '' ? $data->edu_two->level_name : '';
    $educational_three = isset($data->edu_three->level_name) && $data->edu_three->level_name != '' ? $data->edu_three->level_name : '';
    $institute_one = isset($data->institute_one) && $data->institute_one != '' ? $data->institute_one : '';
    $institute_two = isset($data->institute_two) && $data->institute_two != '' ? $data->institute_two : '';
    $institute_three = isset($data->institute_three) && $data->institute_three != '' ? $data->institute_three : '';
    $department_one = isset($data->department_one) && $data->department_one != '' ? $data->department_one : '';
    $department_two = isset($data->department_two) && $data->department_two != '' ? $data->department_two : '';
    $department_three = isset($data->department_three) && $data->department_three != '' ? $data->department_three : '';
    $passing_year_one = isset($data->passing_year_one) && $data->passing_year_one != '' ? $data->passing_year_one : '';
    $passing_year_two = isset($data->passing_year_two) && $data->passing_year_two != '' ? $data->passing_year_two : '';
    $passing_year_three = isset($data->passing_year_three) && $data->passing_year_three != '' ? $data->passing_year_three : '';
    $grade_one = isset($data->grade_one) && $data->grade_one != '' ? $data->grade_one : '';
    $grade_two = isset($data->grade_two) && $data->grade_two != '' ? $data->grade_two : '';
    $grade_three = isset($data->grade_three) && $data->grade_three != '' ? $data->grade_three : '';
    $result_one = isset($data->res_one->result_type) && $data->res_one->result_type != '' ? $data->res_one->result_type : '';
    $result_two = isset($data->res_two->result_type) && $data->res_two->result_type != '' ? $data->res_two->result_type : '';
    $result_three = isset($data->res_three->result_type) && $data->res_three->result_type != '' ? $data->res_three->result_type : '';
    $language_test = isset($data->language_data->language_test) && $data->language_data->language_test != '' ? $data->language_data->language_test : '';
    $score = isset($data->score) && $data->score != '' ? $data->score : '';
    $test_date = isset($data->test_date) && $data->test_date != '' ? $data->test_date : '';

    $created_at = isset($data->created_at) && $data->created_at != '' ? $data->created_at : '';
    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) && $data->id != '' ? $data->id : '';
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
            padding: 4px;
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

        .white_color {
            color: white;
        }

        .p-1 {
            padding: 5px;
        }

        .bg-rounded {
            border-radius: 10px;
        }
        tr.spaceUnder>td {
            padding-top: 1em;
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
                    <td colspan="2">
                        <div class="img_shadow">
                            <img src="{{ $image != '' ? URL::to('storage/user/' . $image) : asset('no_image.png') }}"
                                style="width: 140px;height:140px" alt="No Image">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>Client Name</b></td>
                    <td>:&nbsp; {{ $name }}</td>
                    <td><b>Phone Number</b></td>
                    <td>:&nbsp; {{ $phone }}</td>

                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:&nbsp; {{ $email }}</td>
                    <td><b>Date of Birth</b></td>
                    <td>:&nbsp; {{ $dob }}</td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td>:&nbsp;
                        @if ($gender == 1)
                            Male
                        @elseif($gender == 2)
                            Female
                        @elseif($gender == 3)
                            Others
                        @endif
                    </td>
                    <td><b>Marital Status</b></td>
                    <td>:&nbsp;
                        @if ($marital_status == 1)
                            Married
                        @elseif($marital_status == 2)
                            Un-Married
                        @elseif($marital_status == 3)
                            Others
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><b>Religion</b></td>
                    <td>:&nbsp;
                        @if ($religion == 1)
                            Islam
                        @elseif($religion == 2)
                            Hindu
                        @elseif($religion == 3)
                            Cristian
                        @elseif($religion == 4)
                            Buddhist
                        @elseif($religion == 5)
                            Others
                        @endif
                    </td>
                    <td><b>Address</b></td>
                    <td>:&nbsp; {{ $address }}</td>
                </tr>
                <tr>
                    <td><b>Country</b></td>
                    <td>:&nbsp; {{ $country_name }}</td>
                    <td><b>Created at</b></td>
                    <td>:&nbsp; {{date('d F Y', strtotime($created_at))}}</td>

                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>:&nbsp;
                        @if ($status == 0)
                            <span class="p-1 bg-rounded" style="background-color:#ffc107;">Inactive</span>
                        @elseif($status == 1)
                            <span class="white_color p-1 bg-rounded" style="background-color:#28a745;">Active</span>
                        @endif
                    </td>
                </tr>

                <tr class="spaceUnder">
                    <td colspan="4">
                        <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 18px;">Educational Qualification-1</strong>
                    </td>
                </tr>
                <tr>
                    <td><b>Education level</b></td>
                    <td>:&nbsp; {{ $educational_one }}</td>
                    <td><b>Board/University</b></td>
                    <td>:&nbsp; {{$institute_one}}</td>
                </tr>
                <tr>
                    <td><b>Department</b></td>
                    <td>:&nbsp; {{ $department_one }}</td>
                    <td><b>Passing Year</b></td>
                    <td>:&nbsp; {{ $passing_year_one }}</td>
                </tr>
                <tr>
                    <td><b>Result (Grade)</b></td>
                    <td>:&nbsp; {{ $grade_one }}</td>
                    <td><b>Result Type</b></td>
                    <td>:&nbsp; {{ $result_one }}</td>
                </tr>
                <tr class="spaceUnder">
                    <td colspan="4">
                        <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 18px;">Educational Qualification-2</strong>
                    </td>
                </tr>
                <tr>
                    <td><b>Education level</b></td>
                    <td>:&nbsp; {{ $educational_two }}</td>
                    <td><b>Board/University</b></td>
                    <td>:&nbsp; {{$institute_two}}</td>
                </tr>
                <tr>
                    <td><b>Department</b></td>
                    <td>:&nbsp; {{ $department_two }}</td>
                    <td><b>Passing Year</b></td>
                    <td>:&nbsp; {{ $passing_year_two }}</td>
                </tr>
                <tr>
                    <td><b>Result (Grade)</b></td>
                    <td>:&nbsp; {{ $grade_two }}</td>
                    <td><b>Result Type</b></td>
                    <td>:&nbsp; {{ $result_two }}</td>
                </tr>
                <tr class="spaceUnder">
                    <td colspan="4">
                        <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 18px;">Educational Qualification-3</strong>
                    </td>
                </tr>
                <tr>
                    <td><b>Education level</b></td>
                    <td>:&nbsp; {{ $educational_three }}</td>
                    <td><b>Board/University</b></td>
                    <td>:&nbsp; {{$institute_three}}</td>
                </tr>
                <tr>
                    <td><b>Department</b></td>
                    <td>:&nbsp; {{ $department_three }}</td>
                    <td><b>Passing Year</b></td>
                    <td>:&nbsp; {{ $passing_year_three }}</td>
                </tr>
                <tr>
                    <td><b>Result (Grade)</b></td>
                    <td>:&nbsp; {{ $grade_three }}</td>
                    <td><b>Result Type</b></td>
                    <td>:&nbsp; {{ $result_three }}</td>
                </tr>
                <tr class="spaceUnder">
                    <td colspan="4">
                        <strong class="px-3" style="color: rgb(77, 71, 101); font-size: 18px;">English Language Test</strong>
                    </td>
                </tr>
                <tr>
                    <td><b>Language Test</b></td>
                    <td>:&nbsp; {{ $language_test }}</td>
                    <td><b>Score</b></td>
                    <td>:&nbsp; {{$score}}</td>
                </tr>
                <tr>
                    <td><b>Test Date</b></td>
                    <td>:&nbsp; {{ $test_date }}</td>
                </tr>
            </tbody>
        </table>
        </p>
    </main>
</body>

</html>
