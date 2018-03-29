<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\Log;

class LogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logs = Log::orderBy('id', 'asc')->paginate(20);

        return view('logs.index', compact('logs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   $request
     * @return \Illuminate\Http\Response
     */
    public function store($action, $description, $userId)
    {
        $log = new Log([
            'action'     => $action,
            'description'   => $description,
            'user_id' => $userId,
        ]);

        $log->save();
    }
}
