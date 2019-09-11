<?php


namespace App\CustomClass;


use App\Project;

class ProjectData
{

    private $id;
    private $project_data;

    function __construct($project_id) {
        $project=Project::findOrFail($project_id);
        $this->id=$project->id;
        $this->setProjectData($project);
    }

    /**
     * @return mixed
     */
    public function getProjectData()
    {
        $this->project_data['photo_url']=Path::$domain_url.'/upload/project/'.$this->project_data['photo'];

        return $this->project_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setProjectData($project_data)
    {
        $this->project_data = $project_data;
    }

}