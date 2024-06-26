<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type','technologies')->paginate(4);

        return response()->json([
            'success' => true,
            'projects' => $projects
        ]);
    }

    public function show($slug){
        $project = Project::with('type','technologies')->where('slug',$slug)->first();

        if ($project){
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'The project does not exist'
            ]);
        }
    }
}
