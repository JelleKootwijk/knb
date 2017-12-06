<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllocatePointsRequest;
use Illuminate\Http\Request;

class PointsController extends Controller
{

    /**
     * allocate
     *
     * @param AllocatePointsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function allocate(AllocatePointsRequest $request)
    {

        \DB::transaction(function() use ($request){

            \App\ScoreLog::write($request->user_id, [
                'reason'    => $request->reason,
                'points'    => $request->points,
                'type'      => $request->type
            ]);

            if ( $request->type == 'deassign' )
            {
                $request->points = -abs($request->points);
            }

            $user = \App\User::find($request->user_id);
            $user->points += intval($request->points);
            $user->save();

            echo json_encode(['name' => $user->name]);

        });


    }
}
