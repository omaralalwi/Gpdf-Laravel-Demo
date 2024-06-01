<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\{HasViewDynamicParams, HasDataGenerator};
use Illuminate\Support\Facades\Config;
use Omaralalwi\Gpdf\Gpdf;
use Omaralalwi\Gpdf\Facade\Gpdf as GpdfFacAde;
use Omaralalwi\Gpdf\Enums\{GpdfDefaultSettings as GpdfDefault,
    GpdfSettingKeys as GpdfSet,
    GpdfDefaultSupportedFonts,
    GpdfStorageDrivers};
use Illuminate\Support\Facades\Log;

class GpdfController extends Controller
{
    use HasViewDynamicParams, HasDataGenerator;

    /*
     * this is first way using Gpdf facade .
     * also you can use facade like this
     * use Gpdf;
     * alternate of full path like this use Omaralalwi\Gpdf\Facade\Gpdf;
     * no need to add facade alias , it is pre config.
    */
    public function generatePdf()
    {
        // optional if you have dynamic params need to passed to view file
        $data = $this->getDynamicParams();

        $html = view('pdf.example-1', $data)->render();
//      $html = view('pdf.example-1')->render(); // or like this without params
        $pdfContent = GpdfFacAde::generate($html);
        return response($pdfContent, 200, ['Content-Type' => 'application/pdf']);
    }

     /*
     * this is second way depend on injection in service provider. (no need to inject it, it ready injected in GpdfServiceProvider)
     */
    public function generateSecondWayPdf()
    {
        $data = $this->getDynamicParams();

        $html = view('pdf.example-2',$data)->render();

        $gpdf = app(Gpdf::class);
        $pdfFile = $gpdf->generate($html);

        return response($pdfFile, 200, ['Content-Type' => 'application/pdf']);
    }

    /*
     * override some configs
     * change paper size and font  and some configs, for this pdf file only
     */
    public function generateWithCustomInlineConfig()
    {
        $data = $this->getDynamicParams();

        Config::set('gpdf.'.GpdfSet::DEFAULT_PAPER_SIZE, 'a3');
        Config::set('gpdf.'.GpdfSet::DPI, 300);
        Config::set('gpdf.'.GpdfSet::DEFAULT_FONT, GpdfDefaultSupportedFonts::COURIER);

        $html = view('pdf.example-2',$data)->render();

        $gpdf = app(Gpdf::class);
        $pdfFile = $gpdf->generate($html);

        return response($pdfFile, 200, ['Content-Type' => 'application/pdf']);
    }

    public function generateAndStream()
    {
        $data = $this->getDynamicParams();

        $html = view('pdf.example-2',$data)->render();

        $gpdf = app(Gpdf::class);
        $gpdf->generateWithStream($html,'test-pdf-files', true);

        $pdfFile = $gpdf->generate($html); // optional
        return response($pdfFile, 200, ['Content-Type' => 'application/pdf']);
    }

    public function generateAndStore()
    {
        $data = $this->getDynamicParams();
        $html = view('pdf.example-2',$data)->render();
        $gpdf = app(Gpdf::class);
        $file = $gpdf->generateWithStore($html, null, 'test-store-pdf-fle', true, false); // we used default storage path /public/downloads/pdfs
        $fileUrl = $file['ObjectURL'];

        return $fileUrl; // return file url as string to store it to db or do any action
    }

    public function generateAndStoreToS3()
    {
        $data = $this->getDynamicParams();
        $html = view('pdf.example-2',$data)->render();
        $gpdf = app(Gpdf::class);
        $file = $gpdf->generateWithStoreToS3($html, null, 'test-store-pdf-fle', true, true);

        return $file['ObjectURL']; // return file url as string
    }

    public function generateAndStoreMultiplePages()
    {
        $data = $this->getDynamicParams();

        // generate from many html pages in same pdf file
        $html = collect(['pdf.example-1', 'pdf.example-2', 'pdf.example-3'])
            ->map(fn($view) => view($view, $data)->render())
            ->implode('');

        $gpdf = app(Gpdf::class);
        $file = $gpdf->generateWithStore($html, null, 'test-store-pdf-fle'); // file name optionals
        $fileUrl = $file['ObjectURL'];

        Log::info($fileUrl);
    }

    public function generatePdfWithArabicContent()
    {
        $data = $this->getDynamicParams();

        $html = view('pdf.example-2-with-arabic', $data)->render();
        $pdfContent = GpdfFacAde::generate($html);
        return response($pdfContent, 200, ['Content-Type' => 'application/pdf']);
    }

    public function generateAdvanceWithFixedHeader()
    {
        $pages = $this->generateData(10);
        $html = view('pdf.advance-example', compact('pages'))->render();

        $gpdf = app(Gpdf::class);
        $file = $gpdf->generateWithStore($html, null, 'complex-advance-pdf', true, false);
        $fileUrl = $file['ObjectURL'];

        Log::info($fileUrl);
    }

}
