<?php

namespace Team\Http\Controllers\Admin;

use App\GlobalService\ResponseService;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Team\Http\Requests\TeamRequest;
use Team\Http\Requests\TeamUpdateRequest;
use Team\Models\Team;
use Team\Repositories\TeamInterface;

class TeamController extends Controller
{
    public $team, $response;
    public function __construct(TeamInterface $team, ResponseService $response)
    {
        $this->team = $team;
        $this->response = $response;
    }

    public function index()
    {
        try {
            $teams = Team::paginate(10);
            return view('Team::admin.index',compact('teams'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function create()
    {
        try {
            return view('Team::admin.create');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function store(TeamRequest $request)
    {
        try {
  
            $this->team->store($request);
            Toastr::success('Successfuly created.');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id){
        try {
            $team =  Team::where('id',$id)->first();
            if($team){
                return view('Team::admin.edit', compact('team'));
            }
            Toastr::error('Team Not Found');
            return redirect()->back();

        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(TeamUpdateRequest $request, $id)
    {
        try {
            // dd($request->all());
            $team = $this->team->update($id, $request);
            if ($team) {
                Toastr::success('Successfully Updated');
                return redirect()->route('admin.team.index');
            }
            Toastr::error('Something Went Wrong');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }


    public function delete($id)
    {
        try {
            $deletedcategory = $this->team->delete($id);
            if ($deletedcategory === true) {
                Toastr::success("Successfully Deleted.");
                return redirect()->back();
            } else {
                Toastr::error("Somethig Went Wrong.");
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function changeStatus(Request $request)
    {
        try {
            $category = $this->team->changestatus($request);
            if (!$category) {
                return $this->response->responseError('File not found!', 400);
            }
            return $this->response->responseSuccessMsg("Successfully Updated.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage(), 400);
        }
    }
}
