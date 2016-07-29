<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns="http://www.w3.org/1999/xhtml"   xmlns:a="http://relaxng.org/ns/compatibility/annotations/1.0"
>
    <xsl:output method="xml" indent="yes"/>
    
   <!-- this template is not needed because the XML is added to a div in an already-existing HTML5 document
       
       <xsl:template match="DOC">
        <html>
            <head>
                <title></title>
                <link rel="stylesheet" type="text/css" href="abstract_style.css"/>
            </head>
            <body>
                <div id="container">
                    <xsl:apply-templates/>
                </div>
            </body>
        </html>
    </xsl:template>-->
    
    <xsl:template match="DOC/docHead">
        <div id="head">
            <h3>Title: <xsl:value-of select="./title"/></h3>
            <h3>Author: <xsl:value-of select="./author"/></h3>
            <h4>Date: <xsl:value-of select="version"/></h4>
            
        </div>
    </xsl:template>
    
    <xsl:template match="body">
        <div id="text">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="body/div">
        <xsl:variable name="attribute-value" select="./@type"/>
        <div id="{$attribute-value}">
            
            <xsl:apply-templates/>
        </div>
    </xsl:template>
 
 <!--templates specific to annotated bib assignment-->
    <xsl:template match="DOC//annotated_bib">
        <div id="text">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="annotated_bib//problem_stmt">
        <p class="problem">
            <xsl:apply-templates/>
        </p>
    </xsl:template>
    
    <xsl:template match="annotated_bib//citation">
        <p class="citation">
            <strong><xsl:apply-templates/></strong>
        </p>
    </xsl:template>
    
    <xsl:template match="annotated_bib//title">
        <xsl:choose>
            <xsl:when test="./@level='a'">
            <xsl:apply-templates/>
        </xsl:when>
        <xsl:otherwise>
            <span class="italics"><xsl:apply-templates></xsl:apply-templates></span>
        </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
    
    <xsl:template match="annotated_bib//author">
        <span class="author"><xsl:apply-templates/></span>
    </xsl:template>
    
    <xsl:template match="annotated_bib//annotation">
        <p class="annotation">
            <xsl:apply-templates/>
        </p>
    </xsl:template>
    
    <xsl:template match="annotated_bib//p">
        <p>
            <xsl:apply-templates/>
        </p>
    </xsl:template>
    <xsl:template match="note">
        <xsl:variable name="attribute-value" select="./@type"/>
       <xsl:choose> <xsl:when test="$attribute-value='instructor'">
            <sup>
                <a href="#" data-tooltip="Instructor note: {text()}" data-tooltip-position="bottom">[i.n.]</a>
                    
                    <!--<span class="{$attribute-value}">K.Smith: <xsl:apply-templates/></span>-->
            </sup>
        </xsl:when>
           <xsl:when test="$attribute-value!='instructor'">
               <xsl:variable name="get_id" select="//docReview/reviewer"/>
               <sup>
                   <a href="#" data-tooltip="{$get_id}: {text()}" data-tooltip-position="bottom">[p.n.]</a>
               </sup>
               <!--<span class="{$attribute-value}"><xsl:value-of select="//docReview/reviewer"/>: <xsl:apply-templates/></span>-->
               
           </xsl:when>
       </xsl:choose>        
    </xsl:template>
    
    <xsl:template match="docFoot">
        <div id="foot">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="listBibl">
        <h3>References</h3>
        <ol>
            <xsl:apply-templates select="bibl"/>
        </ol>
    </xsl:template>
    <xsl:template match="bibl">
        <li><xsl:apply-templates/></li>
    </xsl:template>
   <!-- templates for blog posts -->
    <xsl:template match="DOC//blog_post">
        <div id="text">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="blog_post//visual">
        
        <img src="{@url}" alt="{child::text()}" />
    </xsl:template>
    <xsl:template match="blog_post//ref">       
        <a href="{@url}" alt="{@type}" ><xsl:apply-templates/></a>
    </xsl:template>
    
   <!-- templates for feasibility reports -->
    <xsl:template match="DOC//fsb_rpt">
        <div id="text">
            <xsl:for-each select="./page">
                <xsl:variable name="type" select="@type"/>
                <div class="page {$type}">
                    <xsl:apply-templates/>
                </div>
            </xsl:for-each>
        </div>
    </xsl:template>
   
   <!-- templates for public initiative proposals -->
    <xsl:template match="pub_init_proposal">
        <div id="text">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="pub_init_proposal//p">
        <p><xsl:apply-templates/></p>
    </xsl:template>
    
    <!-- templates for cover letters -->
    <xsl:template match="cover_letter">
        <div id="text">
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    <xsl:template match="cover_letter/header">
        <div class="header">
            <ul style="list-style-type:none;"><xsl:apply-templates/></ul>
        </div>
    </xsl:template>
    <xsl:template match="cover_letter/header/name">
        <li><strong><xsl:apply-templates/></strong></li>
    </xsl:template>
    <xsl:template match="cover_letter//contact">
        <li><xsl:apply-templates/></li>
    </xsl:template>
    
    <xsl:template match="cover_letter//greeting">
        <p class="greeting"><xsl:apply-templates/></p>
    </xsl:template>
    <xsl:template match="cover_letter//intro_para">
        <p class="intro"><xsl:apply-templates/></p>
    </xsl:template>
    <xsl:template match="cover_letter//para_background">
        <p class="background"><xsl:apply-templates/></p>
    </xsl:template>
    <xsl:template match="cover_letter//para_closing">
        <p class="closing"><xsl:apply-templates/></p>
    </xsl:template>
    <xsl:template match="cover_letter//signature">
        <ul style="list-style-type:none;">
            <xsl:apply-templates/>
        </ul>
    </xsl:template>
    <xsl:template match="cover_letter//signature/*">
        <li><xsl:apply-templates/></li>
    </xsl:template>
    
    <!-- This section processes the reviews/end notes for the document -->
    <xsl:template match="docReview">
        <div id="reviews">
            <xsl:apply-templates select="report"/>
        </div>
    </xsl:template>
    
    <xsl:template match="docReview//report">
        <div class="report">
            <xsl:choose>
                <xsl:when test="@type='peer'">
                    <h3>Peer review</h3>
                    <h4><xsl:value-of select="//docReview/reviewer"/></h4>
                    
                </xsl:when>
                <xsl:when test="@type='instructor'">
                    <h3>Instructor Note</h3>
                </xsl:when>
            </xsl:choose>
            <xsl:apply-templates/>
        </div>
    </xsl:template>
    
</xsl:stylesheet>