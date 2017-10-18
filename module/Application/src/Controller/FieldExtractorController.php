<?php

namespace Application\Controller;

class FieldExtractorController
{
    
    public function ajaxGetCitiesAction()
    {
        return new JsonModel($this->jsonExtractFields($this->em->getRepository(City::class)->findBy([], ['name' => 'desc'], 10)));
    }
    
    public function extractFields($className)
    {
        $classMethods = get_class_methods($className);

        foreach ($classMethods as $classMethod)
        {
            if ((strpos($classMethod, 'get') > -1) && $classMethod != 'getId')
            {
                $fields['methods'][] = $classMethod;
                $fields['headers'][] = substr($classMethod, 3);
            }
        }

        return $fields;
    }
    
    public function jsonExtractFields($objectArray)
    {
        $fields = $this->extractFields(get_class($objectArray[0]));
        foreach ($objectArray as $object)
        {
            foreach ($fields['methods'] as $field)
            {
                $jsonExtractFields[$object->getId()][substr($field, 3)] = $object->$field(); 
            }
        }
       
        return $jsonExtractFields;
    }
}