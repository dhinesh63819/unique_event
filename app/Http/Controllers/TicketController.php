<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use App\Models\Ticket;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mail;
use Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TicketController extends Controller
{
    public function addTicket(Request $request)
    {
        // dd($request->all());
        $qr_code_png = $request->file;
        $ticket_details = json_decode($request->ticket_details);
        $presons_details = $ticket_details->person_details;
        $number_of_ticket = $ticket_details->number_of_ticket;
        $contact_email = $ticket_details->contact_email;
        $contact_mobile = $ticket_details->contact_mobile;
        $price_details = $ticket_details->price_details;
        $total_amount = $ticket_details->total_amount;
        $ticket_code = $ticket_details->ticket_code;

        // Promocode id
        $promocode = json_encode($ticket_details->promo_code);

        $ticket = new Ticket;
        $ticket->user_id = $request->auth->id;
        $ticket->number_of_ticket = $number_of_ticket;
        $ticket->person_details = json_encode($presons_details);
        $ticket->contact_email = $contact_email;
        $ticket->contact_mobile = $contact_mobile;
        $ticket->price_details = json_encode($price_details);
        $ticket->total_amount = $total_amount;
        $ticket->expired_at = null;
        $ticket->promo_code = $promocode;
        $ticket->ticket_code = $ticket_code;
        $ticket->save();


        // Generate a new unique filename
        $newFileName = time() . uniqid() . '.' . $qr_code_png->getClientOriginalExtension();
        $qr_path = 'qrcode/' . $newFileName;
        // Move the file to the public/uploads directory
        $path = $qr_code_png->move(public_path('qrcode'), $newFileName);

        $ticket->qr_code = $qr_path;

        $message = "";
        $status = "";
        if ($ticket->save()) {
            $message = "ticket Booked";
            $status = true;
        } else {
            $message = "Booking Cancel";
            $status = false;
        }
        $mail_data = [
            'qr_code' => $request->root() . '/' . $qr_path,
            'user_name' => $request->auth->name,

        ];
        $mail_send = Mail::send('email.booked_ticket_with_qrcode', $mail_data, function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'));
            $message->to($request->auth->email);
            $message->subject('Event Ticket Details');
        });


        return response()->json(['message' => $message, 'status' => $status, 'ticket_code' => $ticket_code]);

    }

    public function get_ticket_details(Request $request)
    {
        $ticket_details = Ticket::select(['user_id', 'number_of_ticket', 'person_details', 'contact_email', 'contact_mobile', 'qr_code', 'id', 'price_details', 'total_amount', "ticket_code"])->where('ticket_code', $request->ticket_code)->first();
        return view('admin.datatables', compact('ticket_details'));
    }

    public function get_ticket_details_user(Request $request)
    {
        $ticket_details = Ticket::select(['user_id', 'number_of_ticket', 'person_details', 'contact_email', 'contact_mobile', 'qr_code', 'id', 'price_details', 'total_amount', 'ticket_code'])->where('id', $request->ticket_code)->first();
        if (!isset($ticket_details) || $ticket_details->user_id != $request->auth->id) {
            abort(401);
        }

        return view('booked_ticket_information', compact('ticket_details'));
    }




    public function checked_in(Request $request)
    {
        $ticket_code = $request->ticket_code;
        $updated_persons = $request->updated_persons;



        $ticket_details = Ticket::select(['person_details'])->where('ticket_code', $ticket_code)->update(['person_details' => json_encode($updated_persons)]);

        $message = "";
        $status = "";
        if ($ticket_details) {
            $message = "Checked In Successfully";
            $status = true;
        } else {
            $message = "Checked In Faild";
            $status = false;
        }

        return response()->json(['message' => $message, 'status' => $status]);
    }


}
