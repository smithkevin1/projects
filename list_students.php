<?php
if(isset($proj)) {
  echo
  '<li><a href=\'p' .$proj. '.php?id=test_doc&proj=' .$proj. '\'>Template file</a></li>
  <li><a href=\'p' .$proj. '.php?id=b11&proj=' .$proj. '\'>Seth Bakes</a></li>
  <li><a href=\'p' .$proj. '.php?id=b29&proj=' .$proj. '\'>Joseph Beaudreault</a></li>
  <li><a href=\'p' .$proj. '.php?id=c12&proj=' .$proj. '\'>Brent Christy</a></li>
  <li><a href=\'p' .$proj. '.php?id=d13&proj=' .$proj. '\'>Daniel Doherty</a></li>
  <li><a href=\'p' .$proj. '.php?id=g14&proj=' .$proj. '\'>Benjamin Gincley</a></li>
  <li><a href=\'p' .$proj. '.php?id=h15&proj=' .$proj. '\'>Tammy Huynh</a></li>
  <li><a href=\'p' .$proj. '.php?id=k16&proj=' .$proj. '\'>Gurtaj Khatra</a></li>
  <li><a href=\'p' .$proj. '.php?id=l17&proj=' .$proj. '\'>Samuel Lazer</a></li>
  <li><a href=\'p' .$proj. '.php?id=l18&proj=' .$proj. '\'>Daniel Lieman</a></li>
  <li><a href=\'p' .$proj. '.php?id=m19&proj=' .$proj. '\'>Sydnee Mizuno</a></li>
  <li><a href=\'p' .$proj. '.php?id=m20&proj=' .$proj. '\'>Chi Mo</a></li>
  <li><a href=\'p' .$proj. '.php?id=m21&proj=' .$proj. '\'>Christopher Murphy</a></li>
  <li><a href=\'p' .$proj. '.php?id=p22&proj=' .$proj. '\'>Matthew Parlon</a></li>
  <li><a href=\'p' .$proj. '.php?id=s23&proj=' .$proj. '\'>Monica Salas</a></li>
  <li><a href=\'p' .$proj. '.php?id=s24&proj=' .$proj. '\'>Oliver Scott</a></li>
  <li><a href=\'p' .$proj. '.php?id=s25&proj=' .$proj. '\'>Leonid Stolov</a></li>
  <li><a href=\'p' .$proj. '.php?id=v26&proj=' .$proj. '\'>Michael Van Wickle</a></li>
  <li><a href=\'p' .$proj. '.php?id=v27&proj=' .$proj. '\'>Djordje Vlajkovic</a></li>
  <li><a href=\'p' .$proj. '.php?id=w28&proj=' .$proj. '\'>Samantha Wagner</a></li>';
  }
elseif(isset($_GET['proj'])) {
  $proj = $_GET['proj'];
  echo
  '<li><a href=\'p' .$proj. '.php?id=test_doc&proj=' .$proj. '\'>Template file</a></li>
  <li><a href=\'p' .$proj. '.php?id=b11&proj=' .$proj. '\'>Seth Bakes</a></li>
  <li><a href=\'p' .$proj. '.php?id=b29&proj=' .$proj. '\'>Joseph Beaudreault</a></li>
  <li><a href=\'p' .$proj. '.php?id=c12&proj=' .$proj. '\'>Brent Christy</a></li>
  <li><a href=\'p' .$proj. '.php?id=d13&proj=' .$proj. '\'>Daniel Doherty</a></li>
  <li><a href=\'p' .$proj. '.php?id=g14&proj=' .$proj. '\'>Benjamin Gincley</a></li>
  <li><a href=\'p' .$proj. '.php?id=h15&proj=' .$proj. '\'>Tammy Huynh</a></li>
  <li><a href=\'p' .$proj. '.php?id=k16&proj=' .$proj. '\'>Gurtaj Khatra</a></li>
  <li><a href=\'p' .$proj. '.php?id=l17&proj=' .$proj. '\'>Samuel Lazer</a></li>
  <li><a href=\'p' .$proj. '.php?id=l18&proj=' .$proj. '\'>Daniel Lieman</a></li>
  <li><a href=\'p' .$proj. '.php?id=m19&proj=' .$proj. '\'>Sydnee Mizuno</a></li>
  <li><a href=\'p' .$proj. '.php?id=m20&proj=' .$proj. '\'>Chi Mo</a></li>
  <li><a href=\'p' .$proj. '.php?id=m21&proj=' .$proj. '\'>Christopher Murphy</a></li>
  <li><a href=\'p' .$proj. '.php?id=p22&proj=' .$proj. '\'>Matthew Parlon</a></li>
  <li><a href=\'p' .$proj. '.php?id=s23&proj=' .$proj. '\'>Monica Salas</a></li>
  <li><a href=\'p' .$proj. '.php?id=s24&proj=' .$proj. '\'>Oliver Scott</a></li>
  <li><a href=\'p' .$proj. '.php?id=s25&proj=' .$proj. '\'>Leonid Stolov</a></li>
  <li><a href=\'p' .$proj. '.php?id=v26&proj=' .$proj. '\'>Michael Van Wickle</a></li>
  <li><a href=\'p' .$proj. '.php?id=v27&proj=' .$proj. '\'>Djordje Vlajkovic</a></li>
  <li><a href=\'p' .$proj. '.php?id=w28&proj=' .$proj. '\'>Samantha Wagner</a></li>';
  }
?>
