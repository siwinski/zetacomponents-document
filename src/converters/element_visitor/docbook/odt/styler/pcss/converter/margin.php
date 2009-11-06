<?php

class ezcDocumentOdtPcssMarginConverter implements ezcDocumentOdtPcssConverter
{
    /**
     * Converts CSS 'margin' style.
     *
     * This method receives a $targetProperty DOMElement and converts the given 
     * style with $styleName and $styleValue to attributes on this 
     * $targetProperty.
     * 
     * @param DOMElement $targetProperty 
     * @param string $styleName 
     * @param ezcDocumentPcssStyleValue $styleValue 
     */
    public function convert( DOMElement $targetProperty, $styleName, ezcDocumentPcssStyleValue $styleValue )
    {
        foreach ( $styleValue->value as $type => $measure )
        {
            $targetProperty->setAttributeNS(
                ezcDocumentOdt::NS_ODT_FO,
                "fo:margin-{$type}",
                ( $measure === null ? '0mm' : "{$measure}mm" )
            );
        }
    }
}

?>
