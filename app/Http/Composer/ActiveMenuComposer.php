<?php
 namespace App\Http\Composer;

 use View;
 use Illuminate\Http\Request;

 class ActiveMenuComposer
 {
     protected $request;

     /**
      * ActiveMenuComposer constructor.
      * @param Request $request
      */
     public function __construct(Request $request)
     {
         $this->request = $request;
     }

     public function compose(View $view)
     {
        $routeAction = $this->request->route()->getAction();

        if (array_key_exists('active_menu', $routeAction)) {
            $view->with('active_menu', $routeAction['active_menu']);
        } else {
            $view->with('active_menu', 'default');
        }
     }
 }