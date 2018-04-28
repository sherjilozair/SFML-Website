<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::NonCopyable Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="inherits.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1NonCopyable.php">NonCopyable</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1NonCopyable-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::NonCopyable Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Utility class that makes any derived class non-copyable.  
 <a href="classsf_1_1NonCopyable.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::NonCopyable:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1NonCopyable__inherit__graph.png" border="0" usemap="#sf_1_1NonCopyable_inherit__map" alt="Inheritance graph"/></div>
<map name="sf_1_1NonCopyable_inherit__map" id="sf_1_1NonCopyable_inherit__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a2110add170580fdb946f887719da6860"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1NonCopyable.php#a2110add170580fdb946f887719da6860">NonCopyable</a> ()</td></tr>
<tr class="memdesc:a2110add170580fdb946f887719da6860"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a2110add170580fdb946f887719da6860">More...</a><br /></td></tr>
<tr class="separator:a2110add170580fdb946f887719da6860"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8274ffbf46014f5f7f364befb52c7728"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1NonCopyable.php#a8274ffbf46014f5f7f364befb52c7728">~NonCopyable</a> ()</td></tr>
<tr class="memdesc:a8274ffbf46014f5f7f364befb52c7728"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default destructor.  <a href="#a8274ffbf46014f5f7f364befb52c7728">More...</a><br /></td></tr>
<tr class="separator:a8274ffbf46014f5f7f364befb52c7728"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Utility class that makes any derived class non-copyable. </p>
<p>This class makes its instances non-copyable, by explicitly disabling its copy constructor and its assignment operator.</p>
<p>To create a non-copyable class, simply inherit from <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. ">sf::NonCopyable</a>.</p>
<p>The type of inheritance (public or private) doesn't matter, the copy constructor and assignment operator are declared private in <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. ">sf::NonCopyable</a> so they will end up being inaccessible in both cases. Thus you can use a shorter syntax for inheriting from it (see below).</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MyNonCopyableClass : <a class="code" href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="line">{</div><div class="line">    ...</div><div class="line">};</div></div><!-- fragment --><p>Deciding whether the instances of a class can be copied or not is a very important design choice. You are strongly encouraged to think about it before writing a class, and to use <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. ">sf::NonCopyable</a> when necessary to prevent many potential future errors when using it. This is also a very important indication to users of your class. </p>

<p class="definition">Definition at line <a class="el" href="NonCopyable_8hpp_source.php#l00041">41</a> of file <a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a2110add170580fdb946f887719da6860"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2110add170580fdb946f887719da6860">&#9670;&nbsp;</a></span>NonCopyable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::NonCopyable::NonCopyable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Because this class has a copy constructor, the compiler will not automatically generate the default constructor. That's why we must define it explicitly. </p>

<p class="definition">Definition at line <a class="el" href="NonCopyable_8hpp_source.php#l00053">53</a> of file <a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>.</p>

</div>
</div>
<a id="a8274ffbf46014f5f7f364befb52c7728"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8274ffbf46014f5f7f364befb52c7728">&#9670;&nbsp;</a></span>~NonCopyable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::NonCopyable::~NonCopyable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default destructor. </p>
<p>By declaring a protected destructor it's impossible to call delete on a pointer of <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. ">sf::NonCopyable</a>, thus preventing possible resource leaks. </p>

<p class="definition">Definition at line <a class="el" href="NonCopyable_8hpp_source.php#l00063">63</a> of file <a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
