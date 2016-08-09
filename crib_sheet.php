<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Elements for AWD 3302</h1>
                <nav>
                    <ul>
                        <li><a href="http://su16awd.kevingeraldsmith.com">Course Site</a></li>
                        <li><a href="http://su16awd.kevingeraldsmith.com/projects/students.php">Project Page</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="main-container">
            <div class="main wrapper clearfix">
              <article>
                    <header>
                      <h2>General elements:</h2>
                    </header>
                    <section>
                      <h3>&lt;ref&gt;</h3>
                      <p>
                        (reference) defines a reference to another location; can contain any URI
                      </p>
                    </section>
                    <section>
                      <h3>&lt;pb/&gt;</h3>
                      <p>
                        (paragraph break) empty element, indicates a new paragraph of text, use
                to delineate individual paragraphs where necessary, such as in background or answer
                material
                      </p>
                    </section>
                    <section>
                      <h3>&lt;note&gt;</h3>
                      <p>
                        (note) contains a note made on the text intended to provide additional
                information or comment upon the text; requires a @type attribute and a @resp
                (responsible party) attribute with your id for peer reviewer note
                      </p>
                    </section>
                    <section><h3>&lt;q&gt;</h3><p>(quote) quoted text.</p></section>
                    <section>
                      <h3>&lt;visual&gt;</h3>
                      <p>
                        Visuals are any variety of in line imagery used to break up long
                lengths of text, and/or aid in the understanding of a topic. Comics, pictures and
                graphics are a few of the possible visuals that can be
                used [requires @url].
                      </p>
                    </section>
                    <header>
                      <h2>Annotated bibliography:</h2>
                    </header>
                    <section>
                      <h3>&lt;annotated_bib&gt;</h3>
                      <p>
                        (annotated bibliography) container element for writing project 1; includes a problem statement and at least one group of citation and annotation elements
                      </p>
                    </section>
                    <section>
                    <h3>&lt;annotation&gt;</h3>
                    <p>
                      (annotation) must follow a citation element; contains required background, summary, and relevance element(s)
                    </p>
                  </section>
                  <section>
                    <h3>&lt;author&gt;</h3>
                    <p>
                      (author) contains author of work (either assignment of source) [use @n for ordering; use @xml:id for assignment authoring]
                    </p>
                  </section>
                  <section>
                    <h3>&lt;background&gt;</h3>
                    <p>
                      (background information) anything that could help provide context or information with regard to the source you are using; can contain text, and optional q elements [requires @type element]
                    </p>
                  </section>
                    <section>
                      <h3>&lt;citation&gt;</h3>
                      <p>
                        (citation) a properly cited document [use @n attribute for
                ordering; @style attribute for citation style]
                      </p>
                    </section>
                    <section>
                      <h3>&lt;problem_stmt&gt;</h3>
                      <p>
                        (problem statement) contains the problem statement for which the citations and annotations are relevant
                      </p>
                    </section>
                    <section>
                      <h3>&lt;ref&gt;</h3>
                      <p>
                        (reference) defines a reference to another location; can contain any URI
                      </p>
                    </section>

                    <section>
                      <h3>&lt;relevance&gt;</h3>
                      <p>
                        (relevance) where the source can be used and why the text may be pertinent to the problem statement; can contain text [requires @type attribute]
                      </p>
                    </section>
                    <section>
                      <h3>&lt;summary&gt;</h3>
                      <p>
                        (summary) summarization of the source, can be general information, interpretive summary, and/or summary of the research approach; can contain text, notes, and optional q elements [requires @type element]
                      </p>
                    </section>
                    <header>
                      <h2>'Edutainment' Blogs:</h2>
                    </header>
                    <section><h3>&lt;blog_post&gt;</h3><p>Root element for Science Blog genre</p></section>
                    <section><h3>&lt;analogy&gt;</h3><p>Analogies should be used to better illustrate important and difficult
                            to understand topics put forth by the other elements.</p></section>
                    <section><h3>&lt;important_idea&gt;</h3><p>Major points of interest relating to the topic [takes @n
                            attribute].</p></section>
                            <section><h3>&lt;list&gt;</h3><p>A multipurpose list element. [required @type; values can be: "generic" or
                                    "roadmap"]</p></section>
                    <section><h3>&lt;misconception&gt;</h3><p>Lists any common misconceptions the public has about the topic, or
                            includes quoted material from the community that highlights the existing (false)
                            notions about the answer; optional [takes @n attribute]</p></section>
                            <section><h3>&lt;section_header&gt;</h3><p>'background' and ‘answer’ are best broken into modular digestible
                                    sections consisting of several paragraphs. ‘section_header’ should be titled in a
                                    way such that the following paragraphs either work in concert to make the point
                                    specified by ‘section_header’, or answer a question put forth by
                                    ‘section_header’.</p></section>
                            <h3>&lt;visual&gt;</h3><p>Visuals are any variety of in line imagery used to break up long
                                    lengths of text, and/or aid in the understanding of a topic. Comics, pictures and
                                    graphics are a few of the possible visuals that can be
                                    used [require @url].</p></section>

                            <section><h3>&lt;ref&gt;</h3><p>Hyperlink around a phrase that directs to a source or resource, can be
                                    found throughout the post depending on author's preference</p></section>
                                <section><h3>&lt;pb&gt;</h3><p>(paragraph break) empty element, indicates a new paragraph of text, use
                                        to delineate individual paragraphs where necessary, such as in background or answer
                                        material</p></section>
                    <section><h3>&lt;background&gt;</h3><p>The sectionintroduces the main topic.</p></section>
                    <section><h3>&lt;question&gt;</h3><p>The question or topic that we are trying to answer or simplify to a
                            general audience.</p></section>


                    <section><h3>&lt;technical_principle&gt;</h3><p>Fundamental theory and concepts involved (such as gravity, matter and
                            energy, fluid dynamics, acid-base reactions, etc.). Required in both "background"
                            and "answer," must come before "specific_topic" in "background" [takes @n
                            attribute]</p></section>
                    <section><h3>&lt;answer&gt;</h3><p>Body of text that moves towards the answer of the question, presenting
                            topics, ideas, analogies, and explanations that lead towards the ultimate
                            conclusion</p></section>
                    <section><h3>&lt;sources&gt;</h3><p>Contains sources the author used to answer the question. Can include
                                    optional &lt;citation&gt; sub-elements</p></section>




                                            <section><h3>&lt;specific_topic&gt;</h3><p>Specific scientific principles that are directly relevant to the
                                                    explanation of the question. Ex. A description of the chemistry behind acid-base
                                                    reactions. [takes @n attribute]</p></section>


                                            <section><h3>&lt;explanation&gt;</h3><p>An in-depth reply to the question proposed in the “background” section.
                                                    Typically, the author will use common vernacular and devices such as analogies and
                                                    visuals in order to clearly convey concepts to readers.</p></section>


                                            <section><h3>&lt;conclusion&gt;</h3><p>A conclusion that sums up what was just explained. It acts as a concise
                                                    response to the question asked in the “background” section</p></section>

                    <header>
                      <h2>Feasibility Reports:</h2>
                    </header>
                    <section>
                      <h3>&lt;fsb_rpt&gt;</h3>
                      <p>(Feasibility Report) container element for writing project 2. Contains any number of pages. Cannot contain text by itself. Can only contain text in pages.
</p>
                    </section>
                    <section>
                      <h3>&lt;page&gt;</h3>
                      <p>Representing any page of the feasibility report. [required @type attribute] Available types: @ttl, @tbl_contents, @exec_sum, @pre_req_ana, @fsb, @sccs_crt, @dsn, @cost, @rpt, @rsk_ana, @fnc, and @conc.

                        <ul>
                          <h4>possible @type values:</h4>
                        <li>ttl: (Title) contains a mandatory Title, date of submission, and list of contributors. Logo and sub-title optional.
</li>
                        <li>tbl_contents: (Table of Contents) contains any number of <sect> elements.
</li>
                        <li>exec_sum: (Executive Summary) [Requires @type attribute] a quick summary of the whole presentation. From these paragraphs you should be able to understand whether or not the author supports the project, the most critical limitations / benefits where applicable. Can use <pb /> as a paragraph break.
</li>
                        <li>pre_req_ana: (Preliminary requirements analysis) This page type contains the evaluation of the environment for the project before beginning it. Contains any number of <app_ovr> elements.
</li>
                        <li>fsb: (feasibility) This page type Contains any number of <fsb_stud> elements. Bulk of the total report.</li>
                        <li>sccs_crt: (Success criteria). This pages contains the pre-defined requirements for the project to be declared successful. Contains any number of <req_sect> elements. Easy to confuse with the page @pre_req_ana, or the preliminary requirements analysis. This page contains the technical aspects describing the actual project rather than the environment surrounding the project and it’s success.
</li>
                        <li>dsn: (Design or Diagram). This type of page is a diagram or image that shows a quick highlight of the system / structure. Usually outline interconnecting parts. Must be an <img> element with the url attribute.
</li>
                        <li>cost: (Cost Estimates) The Cost estimates page contains any number of <est> elements
</li>
                        <li>rpt: (Report page) Not to be mistake with an estimate, this page is about outlining how you show or prove progress on your project and how you will report that progress. Examples include the medium / genre for your report. Who you are reporting too, and what deliverables you will have. Deliverables could include a tour a facility / physical project, or an interactive demo of software. Includes any number of <tmln> elements.
</li>
                        <li>rsk_ana: (Risk Analysis) chart/graphics/paragraph dedicated to covering certain risks and how your project will avoid them
</li>
                        <li>fnc: (Financial) This page is for a detailed financing plan if necessary. May be covered already by previous sections if not as detailed. Examples for this page include:
</li>
                        <li>conc: (Conclusion) The conclusion page consists of a body of writing that is three parts. It contains one of each of the following elements. This page should be very direct and to the point.
</li>
                      </ul>
                      </p>
                    </section>
                    <section>
                      <h3>&lt;sect&gt;</h3>
                      <p>(Section) is an element for each listing in the <tbl_contents> [requires a mandatory @num attribute and an optional @lvl (level) attribute denoting its level in the hierarchy]. A <sect> element with @lvl=1 will be numbered with a roman numeral corresponding to its native @num attribute. A <sect> element which has @lvl=2 will be lettered corresponding to its native @num attribute (@num=1 shows A, @num=2 shows  B, etc) and indented below its parent. A <sect> element @lvl=3 will be denoted with its native @num attribute and indented twice below its parent. Each use of a sub level begins again at @num=1.
</p>
                    </section>
                    <section>
                      <h3>&lt;app_ovr&gt;</h3>
                      <p>(Application overview) a highlight of certain element of the project/idea. This can be anything from you/your team's goals to how it interacts with other products, projects, and systems. [requires an @type attribute, optional @title attribute]. Available types: obj (referencing a personal, team, social, or business objective), synergy (referencing the way your project will interact with any type of existing infrastructure), rls (referencing the any rules or regulations the project will encounter whether for better or worse).
</p>
                    </section>
                    <section>
                      <h3>&lt;fsb_hlgt&gt;</h3>
                      <p>(feasibility highlight) Body of this element is the general summary of this aspect of feasibility [required @type attribute and @num attribute] available types: @tcnl (technical), @econ (economic), @tfrm (timeframe), @socl (public reception), @suits (legality), or @envr (environmental)).
</p>
                    </section>
                    <section>
                      <h3>&lt;req_sect&gt;</h3>
                      <p>(requirement section) details a sections of requirements. Strictly related to the project’s components. For example an appropriate <req_sect> element would be “userinterface”, “Database/database interaction”, or “construction”. A <req_sect> element is simple an italicized and underlined above each of its requirement.
</p>
                    </section>
                    <section>
                      <h3>&lt;req&gt;</h3>
                      <p>(requirement). This is a requirement. [required @num attribute, optional @title attribute]. Title will appear at the beginning of this element italicized followed by a colon.
</p>
                    </section>
                    <section>
                      <h3>&lt;est&gt;</h3>
                      <p>The <est> element represents an estimated cost [required @type attribute]. Available @types: inst (institutional), @envr (environmental), @lgl (legal), @fnc (financial).
</p>
                    </section>
                    <section>
                      <h3>&lt;tmln&gt;</h3>
                      <p>(Timeline) The tmln element is an optional element design to provide a timeline entry [required @date (written in mm/dd/yyyy) and @num] attribute. Date will be highlighted in bold with the text following it. Each <tmln> will have a line between them of blank space.
</p>
                    </section>
                    <section>
                      <h3>&lt;fnc&gt;</h3>
                      <p>(financial highlight). [required @num, and @type attribute] example @types:  @fund (Funding), @lns (loans), @exp (expenses), @brdn (Burden to company / organization).
</p>
                    </section>
                    <section>
                      <h3>&lt;Fsb&gt;</h3>
                      <p>This element is used to answer your thoughts on the question “Is it feasible” and why.
</p>
                    </section>
                    <section>
                      <h3>&lt;cond&gt;</h3>
                      <p>This element is used to identify the key conditions for feasibility. Such as meeting a timeframe or extended financial support. Maybe even address certain doubts on the feasibility.</p>
                    </section>
                    <section>
                      <h3>&lt;sum&gt;</h3>
                      <p>This element summarizes the whole report. </p>
                    </section>
                    <section>
                      <h3>&lt;ref&gt;</h3>
                      <p>(Reference) This element is global, and allows the user to include an outside source. Citation includes [Required @author, @title attribute]. Body consists of URL.
</p>
                    </section>

                    <header>
                      <h2>Public Initiative Proposals:</h2>
                    </header>
                    <section><h3>&lt;pub_init_proposal&gt;</h3><p/></section>
                    <section><h3>&lt;cover_page&gt;</h3><p/></section>
                    <section><h3>&lt;submit_date&gt;</h3><p/></section>
                    <section><h3>&lt;audience&gt;</h3><p>Who this proposal is directed towards/aiming to
                            convince</p></section>
                    <section><h3>&lt;tbl_cont&gt;</h3><p>(table of contents)</p></section>
                    <section><h3>&lt;section&gt;</h3><p>Section: Name of section of proposal</p></section>
                    <section><h3>&lt;intro&gt;</h3><p>Brief synopsis of the project being proposed <ul>
                        Brief synopsis of the project being proposed </p></section>
                        <section><h3>&lt;crnt_cond&gt;</h3><p>Current Conditions: Information about the subject matter that
                                establishes a need in the reader’s mind for the change suggested by the
                                proposal</p></section>
                        <section><h3>&lt;subj_hist&gt;</h3><p>Subject History: relevant material that has lead to the current
                                conditions or the current </p></section>
                        <section><h3>&lt;background&gt;</h3><p>General information providing context for the problem</p></section>
                        <section><h3>&lt;scope&gt;</h3><p></section>
                          <section><h3>&lt;objective&gt;</h3><p>Objective: What the purpose of the project is</p></section>
                          <section><h3>&lt;goal&gt;</h3><p>Goal: Improvements that would be achieved upon completion of the
                                  objective.</p></section>
                          <section><h3>&lt;purpose&gt;</h3><p>Point of background requiring action and proposed
                                  solution</p></section>
                          <section><h3>&lt;action&gt;</h3><p>Action: Executable item that will lead to goal
                                  completion</p></section>
                          <section><h3>&lt;execution&gt;</h3><p>Execution: Tactic employed to achieve goal</p></section>
                          <section><h3>&lt;approach&gt;</h3><p>How the project will be achieved </p></section>
                          <section><h3>&lt;environmental&gt;</h3><p>Environmental: Initial and long-term implications or obstacles as they
                                  relate to the surrounding environment</p></section>
                        <section><h3>&lt;social&gt;</h3><p>Social: Initial and long-term implications or obstacles as they relate
                                  to members of the community</p></section>
                          <section><h3>&lt;economic&gt;</h3><p>Economic: Initial and long-term financial implications of project
                                  compared to do-nothing alternative</p></section>
                      <section><h3>&lt;feasibility&gt;</h3><p>Initial and long-term implications or obstacles in the implementation
                                  of the project</p></section>


                          <section><h3>&lt;conclu&gt;</h3><p>Conclusion: Brief description of the benefits potentially provided by
                                  the proposed project</p></section> <section><h3>&lt;references&gt;</h3><p>References:
                          List of cited works used in research</p></section>

                    <header>
                      <h2>Cover Letters:</h2>
                    </header>
                    <section>
                      <h3>&lt;cover_letter&gt;</h3>
                      <p>
                        Container element for cover letter
                      </p>
                    </section>
                    <section>
                      <h3>&lt;header&gt;</h3>
                      <p>
                        Container element for applicants basic contact information
                      </p>
                    </section>
                    <section>
                      <h3>&lt;name&gt;</h3>
                      <p>
                        First and last name of applicant; necessary in both the signature and header of document
                      </p>
                    </section>
                    <section>
                      <h3>&lt;contact_info&gt;</h3>
                      <p>
                        Container element for contact info, must be filled with at least one type of contact</p>
                    </section>
                    <section>
                      <h3>&lt;contact&gt;</h3>
                      <p>
                        Element for contact information, must include at least one attribute from an open list (with address, phone number, and email as suggestions)</p>
                    </section>
                    <section>
                      <h3>&lt;greeting&gt;</h3>
                      <p>Contains formal greeting to reader such as “Dear”, as well as an identifier for the intended audience
                      </p>
                    </section>
                    <section>
                      <h3>&lt;intro_para&gt;</h3>
                      <p>
                        (Introductory paragraph) Container element for first paragraph of cover letter; has intent and proposition as necessary sub-elements but may contain other text as well as optional sub-elements, cover letter may only contain one introductory paragraph
                      </p>
                    </section>
                    <section>
                      <h3>&lt;intent&gt;</h3>
                      <p>
                        Statement regarding the purpose of the cover letter

                      </p>
                    </section>
                    <section>
                      <h3>&lt;reason&gt;</h3>
                      <p>
                        Statement of reason for applying for this particular or a job in this field, may include applicant's interests or passions in the field they are seeking a job in, optional sub-element in introductory paragraph
                      </p>
                    </section>
                    <section>
                      <h3>&lt;proposition&gt;</h3>
                      <p>
                        General statement for why applicant is deserving of job, closing statement for introductory paragraph
                      </p>
                    </section>
                    <section>
                      <h3>&lt;para_background&gt;</h3>
                      <p>
                        (Background Paragraph) Container element for paragraph including information about candidate experience, cover letter must include one or more background paragraphs
                      </p>
                    </section>
                    <section>
                      <h3>&lt;experience&gt;</h3>
                      <p>
                        Container element for types of relevant experience talked about in cover letter, must include at least one attribute (school, work, personal)
                      </p>
                    </section>
                    <section>
                      <h3>&lt;languages&gt;</h3>
                      <p>
                        Sub-element of experience, known languages of the applicant

                      </p>
                    </section>
                    <section>
                      <h3>&lt;skills&gt;</h3>
                      <p>
                        Sub-element of experience, applicant skills, preferably ones that match skills listed in the job posting
                      </p>
                    </section>
                    <section>
                      <h3>&lt;accomplishments&gt;</h3>
                      <p>
                        Sub-element of experience, applicant accomplishments relevant to the job description
                      </p>
                    </section>
                    <section>
                      <h3>&lt;certifications&gt;</h3>
                      <p>
                        Sub-element of experience, applicant certification relevant to the job description
                      </p>
                    </section>
                    <section>
                      <h3>&lt;programs&gt;</h3>
                      <p>
                        Sub-element of experience, known program languages of the applicant
                      </p>
                    </section>
                    <section>
                      <h3>&lt;closing_statements&gt;</h3>
                      <p>
                        (Closing Paragraph) Container element for compatibility and next step, mandatory element, cover letter must include (only) one closing paragraph
                      </p>
                    </section>
                    <section>
                      <h3>&lt;compatibility&gt;</h3>
                      <p>Sub-element to closing paragraph; briefly, why applicant fits into the company and what he or she has to offer.  Must be first element in closing statement.
                      </p>
                    </section>
                    <section>
                      <h3>&lt;next_step&gt;</h3>
                      <p>
                        Sub-element to closing paragraph; Invitation to further discuss qualifications and details of position, closing statement for closing paragraph.  Must come after compatibility statement.
                      </p>
                    </section>
                    <section>
                      <h3>&lt;acknowledgment&gt;</h3>
                      <p>
                        Optional element for saying thank you to the reader for their time/consideration etc.
                      </p>
                    </section>
                    <section>
                      <h3>&lt;signature&gt;</h3>
                      <p>
                        Mandatory element in cover letter, container element for signing off of cover letter; includes salutation and name.
                      </p>
                    </section>
                    <section>
                      <h3>&lt;salutation&gt;</h3>
                      <p>
                        Sub-element to signature; Sincerely, Best, Cheers, etc…
                      </p>
                    </section>

              </article> <aside> <h3>Element List</h3> <p>This is a list of XML
              elements for AWD3302. This is not an exhaustive list, but should
              provide a nice reference to consult while composing. This page
              will be updated as additional genre models are produced in
              projects 2 and 3.</p> </aside> </div> <!-- #main --> </div> <!--
              #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3></h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
