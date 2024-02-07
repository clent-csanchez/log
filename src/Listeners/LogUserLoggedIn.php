<?php

namespace Clent\Log\Listeners;

use Clent\Log\Models\Log;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUserLoggedIn implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $exception_fields = config('log.EXCEPTION_REQUEST_FIELDS');
        
        Log::create([
            'fecha'     => now(),
            'usuario'   => $event->user->id,
            'modulo'    => request()->path(),
            'accion'    => request()->getMethod() . ' ' . request()->route()->getActionName(),
            'ip'        => request()->ip(),
            'detalles'  => request()->all() ?json_encode(request()->except($exception_fields)) : '',
        ]);
    }
}
