<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceFinalizedController extends Controller
{

    public function finalized_list()
    {
        return view('dashboard.invoice.finalized_list');
    }



    public function finalized_list_show()
    {
        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->where(DB::raw('date(created_at)'),date('Y-m-d'))
        ->where('status', '3')->orderBy('id', 'desc')->get();

        return response()->json(['message' => 'Show All Data', 'invoice' => $invoice]);

    }


    public function finalized_details_print($id)
    {
        $invoice = Invoice::with(['clientf', 'created_name' => function ($q) {$q->select('id', 'name');}, 'updated_name' => function ($q) {$q->select('id', 'name');}, ])
        ->where('status', '3')->orderBy('id', 'desc')->find($id);

        // return $invoice;

        $pdf = Pdf::loadView('dashboard.invoice.pending_print', compact('invoice'));
        return $pdf->stream('invoice.pdf');

    }


    public function finalized_details($id)
    {
        $invoice = Invoice::with(['clientf', 'created_name' => function ($q) {$q->select('id', 'name');}, 'updated_name' => function ($q) {$q->select('id', 'name');}, ])
        ->where('status', '3')->orderBy('id', 'desc')->find($id);

        // return $invoice;

        return view('dashboard.invoice.client_view', compact('invoice'));



    }
    public function finalized_search(Request $request)
    {
        $from_date = isset($request->from_date) ? date("Y-m-d", strtotime($request->from_date)) : '';
        $to_date = isset($request->to_date) ? date("Y-m-d", strtotime($request->to_date)) : '';

        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->whereBetween(DB::raw('date(created_at)'), [$from_date, $to_date])
        ->where('status', '3')->orderBy('id', 'desc')->get();

        return response()->json(['message' => 'Show All Data', 'invoice' => $invoice]);
    }


    public function finalized_search_print(Request $request){
        $from_date = isset($request->from_date) ? date("Y-m-d", strtotime($request->from_date)) : '';
        $to_date = isset($request->to_date) ? date("Y-m-d", strtotime($request->to_date)) : '';
        $status= 3;
        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->whereBetween(DB::raw('date(created_at)'), [$from_date, $to_date])
        ->where('status', '3')->orderBy('id', 'desc')->get();

        // return $invoice;
        $pdf = Pdf::loadView('dashboard.invoice.client_list_print', compact('invoice','status','from_date','to_date'));
        return $pdf->stream('client_list.pdf');

    }


}
