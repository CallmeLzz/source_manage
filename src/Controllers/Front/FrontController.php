<?php namespace Source\Manage\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Illuminate\Support\Facades\Input;
/**
 * Validators
 */

class FrontController extends Controller {

    public $data_view = array();

    public function __construct() {
        
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {
        // var_dump(123);
        return view('manage::front.page.home.index', $this->data_view);
    }

    public function detail(Request $request){
        return view('manage::front.page.detail.index', $this->data_view);
    }
}