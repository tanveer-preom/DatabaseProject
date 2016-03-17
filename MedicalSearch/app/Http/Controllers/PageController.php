<?php namespace App\Http\Controllers;


class PageController extends Controller {

    public function search()
    {
        $search = $_POST['search'];
        $searchedRows = \App\Diag_center::all();
        $decoded=json_decode($searchedRows,true);
        return view('search');
        

    }
    
}

?>