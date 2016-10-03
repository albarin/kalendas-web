<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Kalendas\Generator;
use Kalendas\Writers\OoxmlCalendarWriter;
use Kalendas\Writers\OoxmlWriterConfiguration;
use PhpOffice\PhpWord\PhpWord;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CalendarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    /**
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function createCalendar(Request $request)
    {
        $config = new OoxmlWriterConfiguration();
        $writer = new OoxmlCalendarWriter(new PhpWord(), $config);
        $generator = new Generator($writer);

        $date = Carbon::parse($request->get('date'));
        $this->setCustomStyles($config, $request);

        $this->setFilename($config, $date);

        $path = base_path() . '/public/' . $writer->filename();
        if (file_exists($path)) {
            return response()->download($path);
        }

        $generator->generate($date);

        return response()->download($path);
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param \DateTime $date
     */
    private function setFilename(OoxmlWriterConfiguration $config, \DateTime $date)
    {
        $filename = strtolower($date->format('M-Y'));

        if ($config->isCustom()) {
            $filename .= '-' . uniqid();
        }

        $config->setFilename("$filename.docx");
    }

    private function setCustomStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $config->setTitleStyle($request->get('title'));
    }
}
