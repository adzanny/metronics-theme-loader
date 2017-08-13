<?php

/**
 * Description of SysJsCssHelper
 *
 * @author Adzanny Rivaldo Amri <adzanny@hendevane.co.id>
 */

class SysJsCssHelper extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=41, nullable=true)
     */
    public $modul;

    /**
     *
     * @var string
     * @Column(type="string", length=3, nullable=true)
     */
    public $jscss;

    /**
     *
     * @var string
     * @Column(type="string", length=89, nullable=true)
     */
    public $url;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */

    public $assets;
    
    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $rank;
    
    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $loaded;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("abm_hce");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sys_js_css_helper';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SysJsCssHelper[]|SysJsCssHelper
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SysJsCssHelper
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}


