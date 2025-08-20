<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function showHomeHeroForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.hero', compact('title'));
    }
    public function showHomeServicesForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.services', compact('title'));
    }
    public function showHomeFeaturesForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.features', compact('title'));
    }
    public function showHomeStatsForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.stats', compact('title'));
    }
    public function showHomePricingForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.pricing', compact('title'));
    }
    public function showHomeCtaForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.cta', compact('title'));
    }
    public function showHomeFaqForm()
    {
        $title = "Edit Konten Home Hero";
        return view('edit.home.faq', compact('title'));
    }
}
