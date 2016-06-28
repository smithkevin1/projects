    <div class="xsl_v2"><?php
    // Load XML file
    $xml = new DOMDocument;
    $xml->load(dirname(__FILE__) . '/../_xml/' .$id. '_p' .$proj. '.xml');

    // Load XSL file
    $xsl = new DOMDocument;
    $xsl->load(dirname(__FILE__) . '/../_xsl/normal_format.xsl');

    // Configure the transformer
    $proc = new XSLTProcessor;

    // Attach the xsl rules
    $proc->importStyleSheet($xsl);

    echo $proc->transformToXML($xml);
    ?></div>
