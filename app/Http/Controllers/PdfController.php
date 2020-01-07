<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use PDF;

class PdfController extends Controller
{
    //
	public function printPDF(){
  // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'Demo Pdf',
          'heading' => 'Hello',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'        
            ];
        
        $pdf = PDF::loadView('pdf_view', $data);  
        return $pdf->download('test-pdf.pdf');

	}
	
	public function downloadFile(){
		
		 //PDF file is stored under project/public/download/info.pdf
		$file= public_path(). "\downloads\info.txt";
		$headers = array(
              'Content-type' => 'text/plain', 
            );
		return Response::download($file, 'filename.txt', $headers);
		
	}
}
