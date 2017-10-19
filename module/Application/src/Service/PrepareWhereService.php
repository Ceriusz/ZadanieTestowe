<?php
namespace Application\Service;

class PrepareWhereService
{
    
    public function prepareWhere($data)
    {
        $where = '';
        foreach ($data as $key => $value)
        {
            if($value != '' && $key != 'submit')
            {
                $prefix = $this->preparePrefix($key)[0];
                $key = $this->preparePrefix($key)[1];
                $where .= $prefix.$key.'='."'".$value."'".' AND ';
            }
        }
        if($where != '')
        {
            $where = substr($where, 0, -5);
        }

        return $where;
    }
    
    private function preparePrefix($key)
    {
        if($key == 'countryLanguage')
        {
            $prefix = 'cl.';
            $key = 'language';
        }
        elseif($key == 'country')
        {
            $prefix = 'co.';
            $key = 'name';
        }
        else
        {
            $prefix = 'c.';
        }
        
        $return[] = $prefix;
        $return[] = $key;
        
        return $return;
        
    }
}