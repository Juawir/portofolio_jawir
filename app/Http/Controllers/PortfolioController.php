<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Generate and download the portfolio as a PDF.
     */
    public function downloadPortfolio(Request $request)
    {
        $lang = $request->query('lang', 'id');
        if (!in_array($lang, ['id', 'en', 'ar'])) {
            $lang = 'id';
        }

        $data = [
            'personal'      => config('portfolio.personal'),
            'education'     => config('portfolio.education'),
            'projects'      => config('portfolio.projects'),
            'experience'    => config('portfolio.experience'),
            'organizations' => config('portfolio.organizations'),
            'skills'        => config('portfolio.skills'),
            'lang'          => $lang,
        ];

        // Try to encode the photo as base64 for embedding in PDF
        $photoPath = public_path($data['personal']['photo']);
        $data['photoBase64'] = '';
        if (file_exists($photoPath)) {
            $ext = pathinfo($photoPath, PATHINFO_EXTENSION);
            $mime = $ext === 'png' ? 'image/png' : 'image/jpeg';
            $data['photoBase64'] = 'data:' . $mime . ';base64,' . base64_encode(file_get_contents($photoPath));
        }

        /** @var \Barryvdh\DomPDF\PDF $pdf */
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf.portfolio', $data);
        $pdf->setPaper('a4', 'portrait');

        $filename = 'Portfolio_' . str_replace(' ', '_', $data['personal']['name']) . '.pdf';

        return $pdf->download($filename);
    }
}
