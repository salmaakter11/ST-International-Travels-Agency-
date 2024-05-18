<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceProcessingController extends Controller
{
    public function processing_list()
    {
        return view('dashboard.invoice.processing_list');
    }

    public function processing_list_show()
    {
        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->where(DB::raw('date(created_at)'),date('Y-m-d'))
        ->where('status', '1')->orderBy('id', 'desc')->get();

        return response()->json(['message' => 'Show All Data', 'invoice' => $invoice]);

    }
    public function processing_details_print($id)
    {
        $invoice = Invoice::with(['clientf', 'created_name' => function ($q) {$q->select('id', 'name');}, 'updated_name' => function ($q) {$q->select('id', 'name');}, ])
        ->where('status', '1')->orderBy('id', 'desc')->find($id);

        // return $invoice;

        $pdf = Pdf::loadView('dashboard.invoice.pending_print', compact('invoice'));
        return $pdf->stream('invoice.pdf');

    }
    public function processing_details($id)
    {
        $invoice = Invoice::with(['clientf', 'created_name' => function ($q) {$q->select('id', 'name');}, 'updated_name' => function ($q) {$q->select('id', 'name');}, ])
        ->where('status', '1')->orderBy('id', 'desc')->find($id);

        // return $invoice;
        return view('dashboard.invoice.client_view', compact('invoice'));

    }


    public function processing_process($id)
    {
        $invoice = Invoice::find($id)->update([
            'status'=>2,
            'updated_by'=>Auth::user()->id,

        ]);

        if ($invoice) {
            return redirect()->back()->with('success', 'Successfully Complete');
        } else {
            return redirect()->back()->with('error', 'Faield');
        }

    }

    public function processing_search(Request $request)
    {

        $from_date = isset($request->from_date) ? date("Y-m-d", strtotime($request->from_date)) : '';
        $to_date = isset($request->to_date) ? date("Y-m-d", strtotime($request->to_date)) : '';

        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->whereBetween(DB::raw('date(created_at)'), [$from_date, $to_date])
        ->where('status', '1')->orderBy('id', 'desc')->get();

        return response()->json(['message' => 'Show All Data', 'invoice' => $invoice]);
    }


    public function processing_search_print(Request $request){
        $from_date = isset($request->from_date) ? date("Y-m-d", strtotime($request->from_date)) : '';
        $to_date = isset($request->to_date) ? date("Y-m-d", strtotime($request->to_date)) : '';
        $status= 1;

        $invoice = Invoice::with([
            'clientf' => function ($q) {$q->select('id', 'name', 'phone', 'email');},
            'created_name' => function ($q) {$q->select('id', 'name');},
            'updated_name' => function ($q) {$q->select('id', 'name');},
        ])
        ->whereBetween(DB::raw('date(created_at)'), [$from_date, $to_date])
        ->where('status', '1')->orderBy('id', 'desc')->get();


        // return $invoice;
        $pdf = Pdf::loadView('dashboard.invoice.client_list_print', compact('invoice','status','from_date','to_date'));
        return $pdf->stream('client_list.pdf');

    }


}
