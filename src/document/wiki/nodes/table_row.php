<?php
/**
 * File containing the ezcDocumentWikiTableRowNode struct
 *
 * @package TableRow
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Struct for Wiki document abstract syntax tree table row item nodes
 * 
 * @package TableRow
 * @version //autogen//
 */
class ezcDocumentWikiTableRowNode extends ezcDocumentWikiLineLevelNode
{
    /**
     * Set state after var_export
     * 
     * @param array $properties 
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $nodeClass = __CLASS__;
        $node = new $nodeClass( $properties['token'] );
        $node->nodes = $properties['nodes'];
        return $node;
    }
}

?>
