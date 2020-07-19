<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Response;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $e)
    {
        if ($e instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        } elseif ($e instanceof \Exception && $e->getCode() == 500) {
            return response()->view('errors.500', [], 500);
        }

        return parent::render($request, $e);
    }
}
