<?php 
/*
 * FouleFactoryApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 09/14/2016
 */

namespace FouleFactoryApiLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class TemplateQuestionWriterServiceModel implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps Title
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Require
     * @var bool $mrequire public property
     */
    public $mrequire;

    /**
     * @todo Write general description for this property
     * @required
     * @maps IdTemplateObjectQuestionType
     * @var integer $idTemplateObjectQuestionType public property
     */
    public $idTemplateObjectQuestionType;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Order
     * @var integer $order public property
     */
    public $order;

    /**
     * @todo Write general description for this property
     * @maps Option
     * @var string $option public property
     */
    public $option;

    /**
     * @todo Write general description for this property
     * @maps Choices
     * @var array $choices public property
     */
    public $choices;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $title                          Initialization value for the property $this->title                       
     * @param   bool              $mrequire                       Initialization value for the property $this->mrequire                    
     * @param   integer           $idTemplateObjectQuestionType   Initialization value for the property $this->idTemplateObjectQuestionType
     * @param   integer           $order                          Initialization value for the property $this->order                       
     * @param   string            $option                         Initialization value for the property $this->option                      
     * @param   array             $choices                        Initialization value for the property $this->choices                     
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->title                        = func_get_arg(0);
            $this->mrequire                     = func_get_arg(1);
            $this->idTemplateObjectQuestionType = func_get_arg(2);
            $this->order                        = func_get_arg(3);
            $this->option                       = func_get_arg(4);
            $this->choices                      = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Title']                        = $this->title;
        $json['Require']                      = $this->mrequire;
        $json['IdTemplateObjectQuestionType'] = $this->idTemplateObjectQuestionType;
        $json['Order']                        = $this->order;
        $json['Option']                       = $this->option;
        $json['Choices']                      = $this->choices;

        return $json;
    }
}