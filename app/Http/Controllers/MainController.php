<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.main');
    }

    public function chartsD3charts()
    {
        return view('pages.charts-d3charts');
    }

    public function chartsStatistics()
    {
        return view('pages.charts-statistics');
    }

    public function chartsStatisticsInteractive()
    {
        return view('pages.charts-statistics-interactive');
    }

    public function chartsStatisticsRealTime()
    {
        return view('pages.charts-statistics-real-time');
    }

    public function componentsCalendar()
    {
        return view('pages.components-calendar');
    }

    public function componentsGallery()
    {
        return view('pages.components-gallery');
    }

    public function componentsMaps()
    {
        return view('pages.components-maps');
    }

    public function componentsWizard()
    {
        return view('pages.components-wizard');
    }

    public function formBootstrapElements()
    {
        return view('pages.form-bootstrap-elements');
    }

    public function formElements()
    {
        return view('pages.form-elements');
    }

    public function formFileUpload()
    {
        return view('pages.form-file-upload');
    }

    public function formInplaceEditing()
    {
        return view('pages.form-inplace-editing');
    }

    public function formLayouts()
    {
        return view('pages.form-layouts');
    }

    public function formTextEditor()
    {
        return view('pages.form-text-editor');
    }

    public function formValidations()
    {
        return view('pages.form-validations');
    }

    public function page404()
    {
        return view('pages.page-404');
    }

    public function pageBlank()
    {
        return view('pages.page-blank');
    }

    public function pageInbox()
    {
        return view('pages.page-inbox');
    }

    public function pageInvoice()
    {
        return view('pages.page-invoice');
    }

    public function pageKnowledgebase()
    {
        return view('pages.page-knowledgebase');
    }

    public function pageLogin()
    {
        return view('pages.page-login');
    }

    public function pageRegister()
    {
        return view('pages.page-register');
    }

    public function tablesDynamicTable()
    {
        return view('pages.tables-dynamic-table');
    }

    public function tablesStaticTable()
    {
        return view('pages.tables-static-table');
    }

    public function typography()
    {
        return view('pages.typography');
    }

    public function uiElementsButtons()
    {
        return view('pages.ui-elements-buttons');
    }

    public function uiElementsFlashMessage()
    {
        return view('pages.ui-elements-flash-message');
    }

    public function uiElementsGeneral()
    {
        return view('pages.ui-elements-general');
    }

    public function uiElementsIcons()
    {
        return view('pages.ui-elements-icons');
    }

    public function widgets()
    {
        return view('pages.widgets');
    }

    public function pageProfile()
    {
        return view('pages.page-profile');
    }


}
