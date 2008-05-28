<?php
/**
 * File containing the ezcDocumentRstSubstitutionNode struct
 *
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * The substitution target AST node
 * 
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
class ezcDocumentRstSubstitutionNode extends ezcDocumentRstNode
{
    /**
     * Substitution target name
     * 
     * @var array
     */
    public $name;

    /**
     * Construct RST document node
     * 
     * @param ezcDocumentRstToken $token 
     * @param array $name
     * @return void
     */
    public function __construct( ezcDocumentRstToken $token, array $name )
    {
        // Perhaps check, that only node of type section and metadata are
        // added.
        parent::__construct( $token, self::SUBSTITUTION );
        $this->name = $name;
    }

    /**
     * Set state after var_export
     * 
     * @param array $properties 
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $node = new ezcDocumentRstSubstitutionNode(
            $properties['token'],
            $properties['name']
        );

        $node->nodes = $properties['nodes'];
        return $node;
    }
}

?>
