<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
     /**
      * Display addmoney page
      *
      * @return \Illuminate\View\View
      */
 public function addmoney()
     {
         return view('pages.agent.addmoney');
     }

    // /**
    //  * Display maps page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function maps()
    // {
    //     return view('pages.maps');
    // }

    /**
     * Display transactionlist page
     *
     * @return \Illuminate\View\View
     */
    public function transactionlist()
    {
        return view('pages.agent.transactionlist');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    // /**
    //  * Display rtl page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function rtl()
    // {
    //     return view('pages.rtl');
    // }

    // /**
    //  * Display typography page
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function typography()
    // {
    //     return view('pages.typography');
    // }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    /**
     * Display Feedback page
     *
     * @return \Illuminate\View\View
     */

    public function feedback()
    {
        return view('pages.agent.feedback');
    }

    /**
     * Display adduser page
     *
     * @return \Illuminate\View\View
     */

    public function adduser()
    {
        return view('pages.agent.adduser');
    }


    /**
     * Display profile view page
     *
     * @return \Illuminate\View\View
     */
    public function view()
    {
        return view('pages.agent.view');
    }


    /**
     * Display chat page
     *
     * @return \Illuminate\View\View
     */
    public function chat()
    {
        return view('pages.agent.chat');
    }

    
}
