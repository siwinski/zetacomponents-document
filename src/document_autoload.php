<?php
/**
 * Autoloader definition for the Document component.
 *
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Document
 */

return array(
    'ezcDocumentException'                        => 'Document/exceptions/exception.php',
    'ezcDocumentErrnousXmlException'              => 'Document/exceptions/errnous_xml.php',
    'ezcDocumentMissingVisitorException'          => 'Document/exceptions/missing_visitor.php',
    'ezcDocumentParserException'                  => 'Document/exceptions/parser.php',
    'ezcDocumentRstTokenizerException'            => 'Document/exceptions/rst_tokenizer.php',
    'ezcDocumentVisitException'                   => 'Document/exceptions/visitor.php',
    'ezcDocument'                                 => 'Document/interfaces/document.php',
    'ezcDocumentConverter'                        => 'Document/interfaces/converter.php',
    'ezcDocumentOptions'                          => 'Document/options/document.php',
    'ezcDocumentRstDirective'                     => 'Document/document/rst/directive.php',
    'ezcDocumentRstNode'                          => 'Document/document/rst/node.php',
    'ezcDocumentRstVisitor'                       => 'Document/document/rst/visitor.php',
    'ezcDocumentRstXhtmlDirective'                => 'Document/interfaces/rst_xhtml_directive.php',
    'ezcDocumentValidation'                       => 'Document/interfaces/validation.php',
    'ezcDocumentConverterOptions'                 => 'Document/options/converter.php',
    'ezcDocumentParser'                           => 'Document/interfaces/parser.php',
    'ezcDocumentRstBlockNode'                     => 'Document/document/rst/nodes/block.php',
    'ezcDocumentRstImageDirective'                => 'Document/document/rst/directive/image.php',
    'ezcDocumentRstLinkNode'                      => 'Document/document/rst/nodes/link.php',
    'ezcDocumentRstMarkupNode'                    => 'Document/document/rst/nodes/markup.php',
    'ezcDocumentRstXhtmlVisitor'                  => 'Document/document/rst/visitor/xhtml.php',
    'ezcDocumentXhtmlBaseFilter'                  => 'Document/document/xml/xhtml/filter/base.php',
    'ezcDocumentXhtmlConversion'                  => 'Document/interfaces/conversion_xhtml.php',
    'ezcDocumentXhtmlElementBaseFilter'           => 'Document/document/xml/xhtml/filter/element/base.php',
    'ezcDocumentXmlBase'                          => 'Document/document/xml_base.php',
    'ezcDocumentXmlOptions'                       => 'Document/options/document_xml.php',
    'ezcDocumentXsltConverter'                    => 'Document/converters/xslt.php',
    'ezcDocumentDocbook'                          => 'Document/document/xml/docbook.php',
    'ezcDocumentDocbookOptions'                   => 'Document/options/document_docbook.php',
    'ezcDocumentEzp3ToEzp4Converter'              => 'Document/converters/xslt/ezp3_ezp4.php',
    'ezcDocumentEzp3ToEzp4ConverterOptions'       => 'Document/options/converter_ezp3_ezp4.php',
    'ezcDocumentEzp3Xml'                          => 'Document/document/xml/ezp3.php',
    'ezcDocumentEzp3XmlOptions'                   => 'Document/options/document_ezp3.php',
    'ezcDocumentEzp4Xml'                          => 'Document/document/xml/ezp4.php',
    'ezcDocumentEzp4XmlOptions'                   => 'Document/options/document_ezp4.php',
    'ezcDocumentHtmlConversion'                   => 'Document/interfaces/conversions/html.php',
    'ezcDocumentManager'                          => 'Document/document_manager.php',
    'ezcDocumentParserOptions'                    => 'Document/options/document_parser.php',
    'ezcDocumentRelaxNgValidator'                 => 'Document/validator/realxng.php',
    'ezcDocumentRst'                              => 'Document/document/rst.php',
    'ezcDocumentRstAnonymousLinkNode'             => 'Document/document/rst/nodes/link_anonymous.php',
    'ezcDocumentRstAnonymousReferenceNode'        => 'Document/document/rst/nodes/anon_reference.php',
    'ezcDocumentRstAttentionDirective'            => 'Document/document/rst/directive/attention.php',
    'ezcDocumentRstBlockquoteAnnotationNode'      => 'Document/document/rst/nodes/blockquote_annotation.php',
    'ezcDocumentRstBlockquoteNode'                => 'Document/document/rst/nodes/blockquote.php',
    'ezcDocumentRstBulletListListNode'            => 'Document/document/rst/nodes/bullet_list_list.php',
    'ezcDocumentRstBulletListNode'                => 'Document/document/rst/nodes/bullet_list.php',
    'ezcDocumentRstCommentNode'                   => 'Document/document/rst/nodes/comment.php',
    'ezcDocumentRstContentsDirective'             => 'Document/document/rst/directive/contents.php',
    'ezcDocumentRstDangerDirective'               => 'Document/document/rst/directive/danger.php',
    'ezcDocumentRstDefinitionListListNode'        => 'Document/document/rst/nodes/definition_list_list.php',
    'ezcDocumentRstDefinitionListNode'            => 'Document/document/rst/nodes/definition_list.php',
    'ezcDocumentRstDirectiveNode'                 => 'Document/document/rst/nodes/directive.php',
    'ezcDocumentRstDocbookVisitor'                => 'Document/document/rst/visitor/docbook.php',
    'ezcDocumentRstDocumentNode'                  => 'Document/document/rst/nodes/document.php',
    'ezcDocumentRstEnumeratedListListNode'        => 'Document/document/rst/nodes/enumerated_list_list.php',
    'ezcDocumentRstEnumeratedListNode'            => 'Document/document/rst/nodes/enumerated_list.php',
    'ezcDocumentRstExternalReferenceNode'         => 'Document/document/rst/nodes/link_reference.php',
    'ezcDocumentRstFieldListNode'                 => 'Document/document/rst/nodes/field_list.php',
    'ezcDocumentRstFigureDirective'               => 'Document/document/rst/directive/figure.php',
    'ezcDocumentRstFootnoteNode'                  => 'Document/document/rst/nodes/footnote.php',
    'ezcDocumentRstIncludeDirective'              => 'Document/document/rst/directive/include.php',
    'ezcDocumentRstLineBlockLineNode'             => 'Document/document/rst/nodes/line_block_line.php',
    'ezcDocumentRstLineBlockNode'                 => 'Document/document/rst/nodes/line_block.php',
    'ezcDocumentRstLiteralBlockNode'              => 'Document/document/rst/nodes/literal_block.php',
    'ezcDocumentRstLiteralNode'                   => 'Document/document/rst/nodes/literal.php',
    'ezcDocumentRstMarkupEmphasisNode'            => 'Document/document/rst/nodes/markup_emphasis.php',
    'ezcDocumentRstMarkupInlineLiteralNode'       => 'Document/document/rst/nodes/markup_inline_literal.php',
    'ezcDocumentRstMarkupInterpretedTextNode'     => 'Document/document/rst/nodes/markup_interpreted_text.php',
    'ezcDocumentRstMarkupStrongEmphasisNode'      => 'Document/document/rst/nodes/markup_strong_emphasis.php',
    'ezcDocumentRstMarkupSubstitutionNode'        => 'Document/document/rst/nodes/markup_substitution.php',
    'ezcDocumentRstNamedReferenceNode'            => 'Document/document/rst/nodes/named_reference.php',
    'ezcDocumentRstNoteDirective'                 => 'Document/document/rst/directive/note.php',
    'ezcDocumentRstNoticeDirective'               => 'Document/document/rst/directive/notice.php',
    'ezcDocumentRstOptions'                       => 'Document/options/document_rst.php',
    'ezcDocumentRstParagraphNode'                 => 'Document/document/rst/nodes/paragraph.php',
    'ezcDocumentRstParser'                        => 'Document/document/rst/parser.php',
    'ezcDocumentRstReferenceNode'                 => 'Document/document/rst/nodes/reference.php',
    'ezcDocumentRstSectionNode'                   => 'Document/document/rst/nodes/section.php',
    'ezcDocumentRstSubstitutionNode'              => 'Document/document/rst/nodes/substitution.php',
    'ezcDocumentRstTableBodyNode'                 => 'Document/document/rst/nodes/table_body.php',
    'ezcDocumentRstTableCellNode'                 => 'Document/document/rst/nodes/table_cell.php',
    'ezcDocumentRstTableHeadNode'                 => 'Document/document/rst/nodes/table_head.php',
    'ezcDocumentRstTableNode'                     => 'Document/document/rst/nodes/table.php',
    'ezcDocumentRstTableRowNode'                  => 'Document/document/rst/nodes/table_row.php',
    'ezcDocumentRstTargetNode'                    => 'Document/document/rst/nodes/target.php',
    'ezcDocumentRstTextLineNode'                  => 'Document/document/rst/nodes/text_line.php',
    'ezcDocumentRstTitleNode'                     => 'Document/document/rst/nodes/title.php',
    'ezcDocumentRstToken'                         => 'Document/document/rst/token.php',
    'ezcDocumentRstTokenizer'                     => 'Document/document/rst/tokenizer.php',
    'ezcDocumentRstTransitionNode'                => 'Document/document/rst/nodes/transition.php',
    'ezcDocumentRstWarningDirective'              => 'Document/document/rst/directive/warning.php',
    'ezcDocumentRstXhtmlBodyVisitor'              => 'Document/document/rst/visitor/xhtml_body.php',
    'ezcDocumentXhtml'                            => 'Document/document/xml/xhtml.php',
    'ezcDocumentXhtmlBlockquoteElementFilter'     => 'Document/document/xml/xhtml/filter/element/blockquote.php',
    'ezcDocumentXhtmlDefinitionListElementFilter' => 'Document/document/xml/xhtml/filter/element/definitionlist.php',
    'ezcDocumentXhtmlDomElement'                  => 'Document/document/xml/xhtml/element.php',
    'ezcDocumentXhtmlElementFilter'               => 'Document/document/xml/xhtml/filter/element.php',
    'ezcDocumentXhtmlElementMappingFilter'        => 'Document/document/xml/xhtml/filter/element/mapping.php',
    'ezcDocumentXhtmlEnumeratedElementFilter'     => 'Document/document/xml/xhtml/filter/element/enumerated.php',
    'ezcDocumentXhtmlFootnoteElementFilter'       => 'Document/document/xml/xhtml/filter/element/footnote.php',
    'ezcDocumentXhtmlHeaderElementFilter'         => 'Document/document/xml/xhtml/filter/element/header.php',
    'ezcDocumentXhtmlImageElementFilter'          => 'Document/document/xml/xhtml/filter/element/image.php',
    'ezcDocumentXhtmlLineBlockElementFilter'      => 'Document/document/xml/xhtml/filter/element/lineblock.php',
    'ezcDocumentXhtmlLinkElementFilter'           => 'Document/document/xml/xhtml/filter/element/link.php',
    'ezcDocumentXhtmlLiteralElementFilter'        => 'Document/document/xml/xhtml/filter/element/literal.php',
    'ezcDocumentXhtmlOptions'                     => 'Document/options/document_xhtml.php',
    'ezcDocumentXhtmlStrongElementFilter'         => 'Document/document/xml/xhtml/filter/element/strong.php',
    'ezcDocumentXhtmlTableCellElementFilter'      => 'Document/document/xml/xhtml/filter/element/tablecell.php',
    'ezcDocumentXhtmlTableElementFilter'          => 'Document/document/xml/xhtml/filter/element/table.php',
    'ezcDocumentXhtmlToDocbookConverter'          => 'Document/converters/xslt/xhtml_docbook.php',
);
?>
