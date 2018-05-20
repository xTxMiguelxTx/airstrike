<?php

class DetalleVuelo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(column="tipo_clase_id", type="integer", length=32, nullable=false)
     */
    public $tipo_clase_id;

    /**
     *
     * @var integer
     * @Column(column="itinerario_id", type="integer", length=32, nullable=false)
     */
    public $itinerario_id;

    /**
     *
     * @var integer
     * @Column(column="numero_asiento", type="integer", length=32, nullable=false)
     */
    public $numero_asiento;

    /**
     *
     * @var integer
     * @Column(column="programacion_vuelo_id", type="integer", length=32, nullable=false)
     */
    public $programacion_vuelo_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("public");
        $this->setSource("detalle_vuelo");
        $this->belongsTo('tipo_clase_id', '\TipoClase', 'id', ['alias' => 'TipoClase']);
        $this->belongsTo('itinerario_id', '\Itinerario', 'id', ['alias' => 'Itinerario']);
        $this->belongsTo('programacion_vuelo_id', '\ProgramacionVuelo', 'id', ['alias' => 'ProgramacionVuelo']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'detalle_vuelo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DetalleVuelo[]|DetalleVuelo|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DetalleVuelo|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
