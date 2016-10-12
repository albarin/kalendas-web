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

        $path = $writer->filename();
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

        $config->setFilename(storage_path('app/public/calendars') . "/$filename.docx");
    }

    private function setCustomStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $this->setTitleStyles($config, $request);
        $this->setHeaderStyles($config, $request);
        $this->setWeekDayStyles($config, $request);
        $this->setWeekCellStyles($config, $request);
        $this->setWeekendCellStyles($config, $request);
        $this->setDayFormat($config, $request);
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setTitleStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $styles = [
            'size' => (int) $request->input('title.size'),
            'bold' => (bool) $request->input('title.bold', false),
            'color' => $request->input('title.color'),
        ];

        if ($config->titleStyles() !== $styles) {
            $config->setTitleStyle($styles);
        }
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setHeaderStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $styles = [
            'size' => (int) $request->input('header.size'),
            'bold' => (bool) $request->input('header.bold', false),
            'color' => $request->input('header.color'),
            'align' => $request->input('header.align'),
            'bgColor' => $request->input('header.bgColor'),
        ];

        if ($config->headerStyles() !== $styles) {
            $config->setHeaderStyle($styles);
        }
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setWeekDayStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $styles = [
            'align' => $request->input('weekday.align'),
            'size' => (int) $request->input('weekday.size'),
        ];

        if ($config->weekDayStyle() !== $styles) {
            $config->setWeekDayStyle($styles);
        }
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setWeekCellStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $styles = [
            'bgColor' => $request->input('weekcell.bgColor'),
        ];

        if ($config->weekCellStyle() !== $styles) {
            $config->setWeekCellStyle($styles);
        }
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setWeekendCellStyles(OoxmlWriterConfiguration $config, Request $request)
    {
        $styles = [
            'bgColor' => $request->input('weekendday.bgColor'),
        ];

        if ($config->weekendCellStyle() !== $styles) {
            $config->setWeekendCellStyle($styles);
        }
    }

    /**
     * @param OoxmlWriterConfiguration $config
     * @param Request $request
     */
    private function setDayFormat(OoxmlWriterConfiguration $config, Request $request)
    {
        $dayFormat = $request->input('header.dayFormat');

        if ($config->dayFormat() !== $dayFormat) {
            $config->setDayFormat($dayFormat);
        }
    }
}
