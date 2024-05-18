@extends('frontend.master')
@push('frontend_css')
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
        }

        .card-body {
            padding: 20px;
            font-size: 16px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush

@php
    $data = isset($your_info) ? $your_info : '';

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

    $status = isset($data->status) && $data->status != '' ? $data->status : '';
    $id = isset($data->id) && $data->id != '' ? $data->id : '';
@endphp
<style>
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

@section('fontend_body')
    <div class="container mt-5">
        <h3 class="text-center">Your Information</h3>
        <div class="card m-5">
            <div class="card-header">
                <strong style="font-size: 20px;">Basic Info.</strong>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-4 col-sm-6 mb-3">
                        <img id=""
                            src="{{ $image != '' ? URL::to('storage/user/' . $image) : asset('no_image.png') }}"
                            class="img-fluid img-thumbnail" style="height: 150px; width: 150px;" alt="No Image">
                    </div>
                    <div class="col-md-8 col-sm-6 col-xsm-6"></div>
                    <div class="col-md-3 col-sm-6 col-xsm-6"><strong>Name</strong></div>
                    <div class="col-md-3 col-sm-6 col-xsm-6">: {{ $name }}</div>

                    <div class="col-md-3 col-sm-6 col-xsm-6"><strong>Email</strong></div>
                    <div class="col-md-3 col-sm-6 col-xsm-6">: {{ $email }}</div>

                    <div class="col-md-3 col-sm-6 col-xsm-6"><strong>Phone</strong></div>
                    <div class="col-md-3 col-sm-6 col-xsm-6">: {{ $phone }}</div>

                    <div class="col-md-3 col-sm-6 col-xsm-6"><strong>Date of Birth</strong></div>
                    <div class="col-md-3 col-sm-6 col-xsm-6">: {{ $dob }}</div>
                </div>
            </div>
            <div class="card-header mt-5">
                <strong style="font-size: 20px;">English Language Test</strong>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>1. Language Test</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: &nbsp; {{ $language_test }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Score</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">:&nbsp; {{ $score }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Test Date</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">:&nbsp; {{ $test_date }}</div>
                </div>
            </div>
            <div class="card-header mt-3">
                <strong style="font-size: 20px;">Academic Qualification</strong>
            </div>
            <div class="card-body">
                <strong style="color: rgb(77, 71, 101);">Academic Qualification .1</strong>
                <div class="row mt-2">
                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Education level</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $educational_one }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Board/Institute</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $institute_one }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Department</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $department_one }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Passing Year</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $passing_year_one }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result (Grade)</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $grade_one }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result Type</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $result_one }}</div>
                </div>
            </div>
            <div class="card-body">
                <strong style="color: rgb(77, 71, 101);">Academic Qualification .2</strong>
                <div class="row mt-2">
                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Education level</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $educational_two }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Board/Institute</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $institute_two }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Department</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $department_two }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Passing Year</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $passing_year_two }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result (Grade)</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $grade_two }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result Type</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $result_two }}</div>
                </div>
            </div>
            <div class="card-body">
                <strong style="color: rgb(77, 71, 101);">Academic Qualification .3</strong>
                <div class="row mt-2">
                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Education level</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $educational_three }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Board/Institute</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $institute_three }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Department</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $department_three }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Passing Year</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $passing_year_three }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result (Grade)</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $grade_three }}</div>

                    <div class="col-md-2 col-sm-6 col-xsm-6"><strong>Result Type</strong></div>
                    <div class="col-md-2 col-sm-6 col-xsm-6">: {{ $result_three }}</div>
                </div>
            </div>
            <div class="card-header mt-5">
                <strong style="font-size: 20px;">Invoice List</strong>
            </div>
            <div class="card-body">
                <div class="row table-responsive">
                    <table class="table table-bordered table-striped datatable" style="font-size: 15px">
                        <thead  class="table bg-secondary text-white">
                            <tr>
                                <th class="text-center">SL. No.</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Service</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        @php
                        $serial = $invoice->perPage() * ($invoice->currentPage() - 1)
                        @endphp
                        <tbody >
                            @if (count($invoice) > 0)
                                @foreach ($invoice as $key => $inv)
                                    <tr>
                                        <td class="text-center">{{ ++$serial }}</td>
                                        <td class="text-center">{{ date('d F Y', strtotime($inv->created_at)) }}</td>
                                        <td class="text-center">{{ $inv->service_name }}</td>
                                        <td class="text-center">{{ $inv->service_price }}</td>
                                        <td class="text-center">
                                            @if ($inv->status == 0)
                                                <span class="bg-warning px-1 rounded">Pending</span>
                                            @elseif($inv->status == 1)
                                            <span class="bg-info px-1 rounded">Processing</span>
                                            @elseif($inv->status == 2)
                                            <span class="bg-primary px-1 rounded">Procesed</span>
                                            @elseif($inv->status == 3)
                                            <span class="white_color bg-success px-1 rounded">Completed</span>
                                            @elseif($inv->status == 4)
                                            <span class="white_color bg-danger px-1 rounded">Canceled</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>

                    </table>
                    {!! $invoice->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
