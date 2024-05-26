<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasViewDynamicParams;
use Omaralalwi\Gpdf\Gpdf;
use Omaralalwi\Gpdf\Facade\Gpdf as GpdfFacAde;

class GpdfController extends Controller
{
    use HasViewDynamicParams;

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
        $storePath = storage_path('/app/downloads/users/');
        $gpdf->generateWithStore($html, $storePath, 'test-store-pdf-fle'); // file name optionals

        $pdfFile = $gpdf->generate($html); // optional
        return response($pdfFile, 200, ['Content-Type' => 'application/pdf']);
    }

    public function generatePdfWithArabicContent()
    {
        $data = $this->getDynamicParams();

        $html = view('pdf.example-2-with-arabic', $data)->render();
        $pdfContent = GpdfFacAde::generate($html);
        return response($pdfContent, 200, ['Content-Type' => 'application/pdf']);
    }

}
