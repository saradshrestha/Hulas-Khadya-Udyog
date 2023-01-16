<?php

namespace Team\Repositories;

use Exception;

use Files\Repositories\FileInterface;
use Team\Models\Team;

class TeamRepository implements TeamInterface
{

    public $files;
    public function __construct(FileInterface $files)
    {
        $this->files = $files;
    }

    public function store($request)
    {       
        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->position = $request->position;
        $team->fb_link = $request->fb_link;
        $team->twitter_link = $request->twitter_link;
        $team->insta_link = $request->insta_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->status = $request->status;
        if ($request->hasFile('image')) {
            $uploaded = $this->files->storeFile($request->image);
            if ($uploaded) {
                $team->image = $uploaded->id;
            }
        }
        $team->save();   
        return true;  
        
    }

    public function update($id, $request)
    {
     
      
        $team = Team::where('id', $id)->first();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->position = $request->position;
        $team->fb_link = $request->fb_link;
        $team->twitter_link = $request->twitter_link;
        $team->insta_link = $request->insta_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->status = $request->status;
        if ($request->hasFile('image')) {
            $uploaded = $this->files->storeFile($request->image);
            if ($uploaded) {
                $team->image = $uploaded->id;
            }
        }
        $team->update();           
        return $team;
    }
    public function delete($id)
    {
        $team = Team::where('id', $id)->first();
        if ($team) {
            $team->delete();
            return true;
        }
    }


    public function changestatus($request)
    {
        $team = Team::where('id',$request->team_id)->first();
        if($team){
            if ($team->status == "Active") {
                $team->status = "Inactive";
            } else {
                $team->status = "Active";
            }
            $team->update();
            return $team;
        }
        throw new Exception('Team Not Found');
       
    }

}
