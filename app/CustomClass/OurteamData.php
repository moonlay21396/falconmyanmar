<?php


namespace App\CustomClass;


use App\Ourteam;

class OurteamData
{

    private $id;
    private $team_data;

    function __construct($team_id) {
        $team=Ourteam::findOrFail($team_id);
        $this->id=$team->id;
        $this->setTeamData($team);
    }

    /**
     * @return mixed
     */
    public function getTeamData()
    {
        $this->team_data['photo_url']=Path::$domain_url.'/upload/our_team/'.$this->team_data['photo'];

        return $this->team_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setTeamData($team_data)
    {
        $this->team_data = $team_data;
    }

}