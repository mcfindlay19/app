Markers definition:

* \x7f-01-XXXX (RTEMarker::PLACEHOLDER) - Placeholders for images, templates, etc. Generated in RTE::getPlaceholderMarker.
* \x7f-02-XXXX (RTEMarker::EXTERNAL_WIKITEXT) - Used for marking external links wikitext in Preprocessor and then handling those links in Parser.
* \x7f-03-XXXX (RTEMarker::INTERNAL_WIKITEXT) - Used for marking internal links wikitext in Preprocessor and then handling those links in Parser.
* \x7f-04-XXXX (RTEMarker::IMAGE_DATA) - Used for marking images in Parser and then handling in makeImage function of RTEParser.
* \x7f-05-XXXX (RTEMarker::INTERNAL_DATA) - Used for marking internal links data in Parser and then handling in RTELinker.
* \x7f-06-XXXX (RTEMarker::EXTERNAL_DATA) - Used for marking external links data in Parser and then handling in RTELinker.

* \x7f-ENTITY-XXX-\x7f - Used for marking HTML entities (used internally in RTEParser and RTEReverseParser during parsing).
* \x7f-FF - Used to encode double quotes (") in JSON-encoded strings.


Edgecases description:

* COMMENT - comment found in the middle of wikitext line - foo <!-- test --> bar
* COMPLEX.01 - wikitext marker found in original wikitext (triggered in RTEData::replaceIdxByData)
* COMPLEX.02 - data marker found in original wikitext (triggered in RTEData::replaceIdxByData)
* COMPLEX.03 - template found within template call - {{Foo|{{bar}}}}
* COMPLEX.04 - marker found in table's attributes - {|{{foo}}
* COMPLEX.05 - marker found in row attributes - |- {{foo}}
* COMPLEX.06 - marker found in table's caption
* COMPLEX.07 - marker found in original wikitext (triggered in RTEData::replaceIdxByData)
* COMPLEX.08 - marker found in HTML tag attributes - <div {{foo}}></div>
* COMPLEX.09 - double brackets found in image/video caption - [[Image:Foo.png|{{foo}}]]
* COMPLEX.10 - table cell line begin with a comment
* COMPLEX.11 - parser hook found inside HTML table - <table><staff /></table>
* COMPLEX.12 - unclosed <table>, <tr> or <td> tag found


Custom HTML5 data-* attributes used by RTE:

* data-rte-attibs - stores original list of HTML attributes and their values (to preserve their order and formatting)
* data-rte-empty-lines-before - number of empty lines of wikitext before given node
* data-rte-entity - used in entities' wrapping spans (contains "name" of wrapped entity)
* data-rte-filler - marks paragraphs added between headings
* data-rte-fromparser - marks paragraphs rendered by MW parser
* data-rte-instance - stores instance ID of editor in which given element is (used by paste tracking code)
* data-rte-line-start - marks HTML node at the beginning of wikitext line
* data-rte-meta - JSON-encoded meta data of current node (used by placeholders, images, ...)
* data-rte-new-node - marks paragraphs nodes added in wysiwyg mode
* data-rte-shift-enter - marks <br /> tags added by Shift+Enter in wysiwyg mode
* data-rte-short-row-markup - marks <td> / <th> tags rendered using short / "one line" wikitext markup
* data-rte-spaces-after - number of spaces at the end of given node text content (table cell)
* data-rte-spaces-after-last-cell - number of spaces between current and next table cell
* data-rte-spaces-before - number of spaces at the beginning of given node text content (list item, table cell)
* data-rte-style - stores original value of style attribute (to preserve their order and formatting)
* data-rte-washtml - indicates whether given node was HTML node in wikitext
* _rte_wikitextidx - used internally be RTEParser
* _rte_dataidx - used internally be RTEParser


i18n files:

* RTE.i18n.php - messages used by RTE backend
* CK.core.i18n.php - core CKeditor messages imported into MW from JS files (file is generated by generate_i18n.php script, please do not edit this file)
* CK.wikia.i18n.php - messages for wikia plugins for CKeditor and changes to default CKeditor messages (this file can be edited)


How JS/CSS is served:

* JS is served by AssetsManager
* CSS is served by SASS
* add "allinone=0" to URL of edit page to use development version of RTE (using separated JS files)
