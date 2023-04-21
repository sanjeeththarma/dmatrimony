<?php
namespace Phppot;

use Phppot\DataSource;

class Pagination
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    public function getPage()
    {
        // adding limits to select query
        require_once __DIR__ . './../Common/Config2.php';
        $limit = Config::LIMIT_PER_PAGE;

        // Look for a GET variable page if not found default is 1.
        if (isset($_GET["page"])) {
            $pn = $_GET["page"];
        } else {
            $pn = 1;
        }
        $startFrom = ($pn - 1) * $limit;
        global $query;
        $gender = $_SESSION["gender"];
        
        $ageMin = $_SESSION["searchagemin"];
        $ageMax = $_SESSION["searchagemax"];
        $ageMin1 = (date("Y") - $ageMin) ;
        $ageMax1 = (date("Y") - $ageMax) ;

        $heightMin = $_SESSION["searchheightmin"];
        $heightMax = $_SESSION["searchheightmax"];
        $heightMin = $heightMin - 0.1;
        $heightMax = $heightMax + 0.1;
        $martial = $_SESSION["searchmartial"];
        $religion = $_SESSION["searchreligion"];
        $country = $_SESSION["searchcountry"];
        $hasChild = $_SESSION["searchhaschild"];

        if($gender=='male' && $hasChild == 'checked'){
            $query = "SELECT * FROM profile WHERE gender = 'female' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children != 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC LIMIT ? , ?";
        }
        if($gender=='male' && $hasChild == 'unchecked'){
            $query = "SELECT * FROM profile WHERE gender = 'female' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children = 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC LIMIT ? , ?";
        }
        if($gender=='female' && $hasChild == 'checked'){
            $query = "SELECT * FROM profile WHERE gender = 'male' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children != 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC LIMIT ? , ?";
        }
        if($gender=='female' && $hasChild == 'unchecked'){
            $query = "SELECT * FROM profile WHERE gender = 'male' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children = 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC LIMIT ? , ?";
        }
        
        //$query = "SELECT * FROM profile ORDER BY id DESC LIMIT ? , ?";
        $paramType = 'ii';
        $paramValue = array(
            $startFrom,
            $limit
        );
        $result = $this->ds->select($query, $paramType, $paramValue);
        return $result;
    }

    public function getAllRecords()
    {
        global $query;
        $gender = $_SESSION["gender"];
        
        $ageMin = $_SESSION["searchagemin"];
        $ageMax = $_SESSION["searchagemax"];
        $ageMin1 = (date("Y") - $ageMin) ;
        $ageMax1 = (date("Y") - $ageMax) ;
        
        $heightMin = $_SESSION["searchheightmin"];
        $heightMax = $_SESSION["searchheightmax"];
        $heightMin = $heightMin - 0.1;
        $heightMax = $heightMax + 0.1;
        $martial = $_SESSION["searchmartial"];
        $religion = $_SESSION["searchreligion"];
        $country = $_SESSION["searchcountry"];
        $hasChild = $_SESSION["searchhaschild"];

        if($gender=='male' && $hasChild == 'checked'){
            $query = "SELECT * FROM profile WHERE gender = 'female' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children != 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC";
        }
        if($gender=='male' && $hasChild == 'unchecked'){
            $query = "SELECT * FROM profile WHERE gender = 'female' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children = 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC";
        }
        if($gender=='female' && $hasChild == 'checked'){
            $query = "SELECT * FROM profile WHERE gender = 'male' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children != 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC";
        }
        if($gender=='female' && $hasChild == 'unchecked'){
            $query = "SELECT * FROM profile WHERE gender = 'male' AND YEAR(bday) BETWEEN '$ageMax1' AND '$ageMin1' AND height BETWEEN '$heightMin' AND '$heightMax' AND children = 0 AND mstatus = '$martial' AND religion = '$religion' AND country = '$country' ORDER BY id DESC";
        }
        
        //$query = "SELECT * FROM profile ORDER BY id DESC";
        $totalRecords = $this->ds->getRecordCount($query);
        return $totalRecords;
    }
}
?>