<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class ResumeController
{
    public function pdf()
    {
        $timestamp = time();

        Browsershot::html(view('resume.index'))->showBackground()->save("resume_{$timestamp}.pdf");

        return redirect(route('resume'));
    }
}
