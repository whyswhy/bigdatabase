<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{

    public static  function getType()
  {   
  	    $leftCatesParents = self::where('pid', 0)->limit(10)->get();
        $showLeftCates = [];
        foreach ($leftCatesParents as $key => $topType)
        {
            if (count($topType->types) == 0) {  continue;
            }
            $showLeftCates[$key]['goods'] = [];
            $showLeftCates[$key]['cates'] = [];
            foreach ($topType->types as $type)
            {
                $showLeftCates[$key]['cates'][] = $type->types_name;
                $showLeftCates[$key]['goods'] = array_merge($showLeftCates[$key]['goods'], $type->goods->toArray());
            }
        }
        return $showLeftCates;

  }

    public function types()
  {
  	return $this->hasMany('App\Type','pid','tid');
  }

    public function goods()
  {
    return $this->hasMany('App\Good','tid','tid');
  }

    public static function getlist($types_name)
    {
        $tid = self::where("types_name",$types_name)->first()->tid;
        return Good::getlist($tid);
        
    }



}








?>




