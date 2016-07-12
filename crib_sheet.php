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
                      <h2></h2>
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

              </article>
              <aside>
              <h3>Element List</h3>
              <p>This is a list of XML elements for AWD3302. This is not an exhaustive list, but should provide a nice reference to consult while composing. This page will be updated as additional genre models are produced in projects 2 and 3.</p>
          </aside>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

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
