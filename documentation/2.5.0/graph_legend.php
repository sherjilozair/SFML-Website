<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Graph Legend'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Graph Legend</div>  </div>
</div><!--header-->
<div class="contents">
<p>This page explains how to interpret the graphs that are generated by doxygen.</p>
<p>Consider the following example: </p><div class="fragment"><div class="line">/*! Invisible class because of truncation */</div><div class="line">class Invisible { };</div><div class="line"></div><div class="line">/*! Truncated class, inheritance relation is hidden */</div><div class="line">class Truncated : public Invisible { };</div><div class="line"></div><div class="line">/* Class not documented with doxygen comments */</div><div class="line">class Undocumented { };</div><div class="line"></div><div class="line">/*! Class that is inherited using public inheritance */</div><div class="line">class PublicBase : public Truncated { };</div><div class="line"></div><div class="line">/*! A template class */</div><div class="line">template&lt;class T&gt; class Templ { };</div><div class="line"></div><div class="line">/*! Class that is inherited using protected inheritance */</div><div class="line">class ProtectedBase { };</div><div class="line"></div><div class="line">/*! Class that is inherited using private inheritance */</div><div class="line">class PrivateBase { };</div><div class="line"></div><div class="line">/*! Class that is used by the Inherited class */</div><div class="line">class Used { };</div><div class="line"></div><div class="line">/*! Super class that inherits a number of other classes */</div><div class="line">class Inherited : public PublicBase,</div><div class="line">                  protected ProtectedBase,</div><div class="line">                  private PrivateBase,</div><div class="line">                  public Undocumented,</div><div class="line">                  public Templ&lt;int&gt;</div><div class="line">{</div><div class="line">  private:</div><div class="line">    Used *m_usedClass;</div><div class="line">};</div></div><!-- fragment --><p> This will result in the following graph:</p>
<center><div class="image">
<img src="graph_legend.png"/>
</div>
</center><p>The boxes in the above graph have the following meaning: </p>
<ul>
<li>
A filled gray box represents the struct or class for which the graph is generated. </li>
<li>
A box with a black border denotes a documented struct or class. </li>
<li>
A box with a gray border denotes an undocumented struct or class. </li>
<li>
A box with a red border denotes a documented struct or class forwhich not all inheritance/containment relations are shown. A graph is truncated if it does not fit within the specified boundaries. </li>
</ul>
<p>The arrows have the following meaning: </p>
<ul>
<li>
A dark blue arrow is used to visualize a public inheritance relation between two classes. </li>
<li>
A dark green arrow is used for protected inheritance. </li>
<li>
A dark red arrow is used for private inheritance. </li>
<li>
A purple dashed arrow is used if a class is contained or used by another class. The arrow is labelled with the variable(s) through which the pointed class or struct is accessible. </li>
<li>
A yellow dashed arrow denotes a relation between a template instance and the template class it was instantiated from. The arrow is labelled with the template parameters of the instance. </li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
