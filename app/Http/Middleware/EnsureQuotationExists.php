<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\Quotation;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class EnsureQuotationExists
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ellenőrizzük, hogy van-e quotation a session-ben
        if (! session()->has('quotation')) {
            // Ha nincs, akkor létrehozunk egyet vagy megkeresünk egy meglévőt a session_id alapján
            $quotation = Quotation::firstOrCreate([
                'session_id' => session()->getId(),
            ]);

            // Eltároljuk a session-ben
            session(['quotation' => $quotation]);
        } else {
            // Ha van quotation a session-ben, de esetleg törölték az adatbázisból,
            // akkor újra létrehozzuk
            $quotation = session('quotation');
            if (! $quotation || ! Quotation::find($quotation->id)) {
                $quotation = Quotation::firstOrCreate([
                    'session_id' => session()->getId(),
                ]);
                session(['quotation' => $quotation]);
            }
        }

        return $next($request);
    }
}
