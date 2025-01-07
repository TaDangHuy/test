<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Station Master
 *
 * APIs for the Station Master Group Screens
 */
class StationMasterController extends Controller
{
    /**
     * Create Station master
     * 
     * @bodyParam [] object[] List of Stations Master
     * @bodyParam [].station_name string Station name.
     * @bodyParam [].station_name_kana string Station name (Kana).
     * @bodyParam [].train_line_ids int[] List of train lines through the station.
     * @bodyParam [].train_line_ids[].train_line_id int Train Line ID.
     * 
     * @response 201 {
     *     "status": "success",
     *     "code": 201,
     *     "data": [
     *         {
     *             "station_id": 123,
     *             "station_code": "ATT00000009",
     *             "station_name": "東京", 
     *             "station_name_kana": "トウキョウ",
     *             "priority": 9,
     *             "train_lines": [
     *                 {
     *                     "train_line_id": 1,
     *                     "line": "JR中央線",     
     *                 },
     *                 {
     *                     "train_line_id": 2,
     *                     "line": "JR総武線",     
     *                 },
     *             ],
     *          },
     *     ],
     * }
     * 
     * @response 422 {
     *     "status": "error",
     *     "code": 422,
     *     "message": "Validation failed.",
     *     "errors": {
     *         "stations.0.train_line_ids.0": [
     *             "The train line field is invalid."
     *         ],
     *     }
     * }
     * 
     * @response 500 {
     *     "status": "error",
     *     "code": 500,
     *     "message": "Internal Server Error"   
     * }
     * 
     */
    public function create()
    {
        return [];
    }
}
