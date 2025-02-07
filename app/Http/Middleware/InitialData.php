<?php

namespace App\Http\Middleware;

use App\Models\PriceDetails;
use App\Models\Ticket;
use Closure;
use Illuminate\Http\Request;

class InitialData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ticket_details = Ticket::select(['user_id', 'number_of_ticket', 'person_details', 'contact_email', 'contact_mobile', 'qr_code', 'id', 'price_details', 'total_amount','created_at'])->where('user_id',$request->auth->id)->latest()->get();
        $request->ticket_details = $ticket_details;
        return $next($request);
    }
}
