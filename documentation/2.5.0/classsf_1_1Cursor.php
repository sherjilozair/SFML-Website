<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Cursor Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Cursor.php">Cursor</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Cursor-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Cursor Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Cursor.php" title="Cursor defines the appearance of a system cursor. ">Cursor</a> defines the appearance of a system cursor.  
 <a href="classsf_1_1Cursor.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Cursor_8hpp_source.php">Cursor.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Cursor:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1Cursor__inherit__graph.png" border="0" usemap="#sf_1_1Cursor_inherit__map" alt="Inheritance graph"/></div>
<map name="sf_1_1Cursor_inherit__map" id="sf_1_1Cursor_inherit__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for sf::Cursor:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1Cursor__coll__graph.png" border="0" usemap="#sf_1_1Cursor_coll__map" alt="Collaboration graph"/></div>
<map name="sf_1_1Cursor_coll__map" id="sf_1_1Cursor_coll__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:ab9ab152aec1f8a4955e34ccae08f930a"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a">Type</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa8d9a9cd284dabb4246ab4f147ba779a3">Arrow</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa16c3acb967f2175434d6bbad7f1300bf">ArrowWait</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aabeb51ea58e48e4477ab802d46ad2cbdd">Wait</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa1a9979392de58ff11d5b4ab330e6393d">Text</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aae826935374aa0414723918ba79f13368">Hand</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa0131508eaa8802dba34b8c9b41aec6e9">SizeHorizontal</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aab3cefa56d3a0fe9fe64680c7ec11eab5">SizeVertical</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa934ddc380262a94358ccb5a4ab7bbe1c">SizeTopLeftBottomRight</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aac047cea5795b6074fbb4d6479452e8ef">SizeBottomLeftTopRight</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa256a64be04f0347e6a44cbf84e5410bd">SizeAll</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aaf3b3213aad68863c7dec96587681fecd">Cross</a>, 
<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aaf2c0ed3674b334ebf8365aee243186f5">Help</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aadb1ec726725dd81ec9906cbe06fec805">NotAllowed</a>
<br />
 }</td></tr>
<tr class="memdesc:ab9ab152aec1f8a4955e34ccae08f930a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumeration of the native system cursor types.  <a href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a">More...</a><br /></td></tr>
<tr class="separator:ab9ab152aec1f8a4955e34ccae08f930a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a6a36a0a5943b22b77b00cac839dd715c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Cursor.php#a6a36a0a5943b22b77b00cac839dd715c">Cursor</a> ()</td></tr>
<tr class="memdesc:a6a36a0a5943b22b77b00cac839dd715c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a6a36a0a5943b22b77b00cac839dd715c">More...</a><br /></td></tr>
<tr class="separator:a6a36a0a5943b22b77b00cac839dd715c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a777ba6a1d0d68f8eb9dc85976a5b9727"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Cursor.php#a777ba6a1d0d68f8eb9dc85976a5b9727">~Cursor</a> ()</td></tr>
<tr class="memdesc:a777ba6a1d0d68f8eb9dc85976a5b9727"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a777ba6a1d0d68f8eb9dc85976a5b9727">More...</a><br /></td></tr>
<tr class="separator:a777ba6a1d0d68f8eb9dc85976a5b9727"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac24ecf82ac7d9ba6703389397f948b3a"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Cursor.php#ac24ecf82ac7d9ba6703389397f948b3a">loadFromPixels</a> (const Uint8 *pixels, <a class="el" href="classsf_1_1Vector2.php">Vector2u</a> size, <a class="el" href="classsf_1_1Vector2.php">Vector2u</a> hotspot)</td></tr>
<tr class="memdesc:ac24ecf82ac7d9ba6703389397f948b3a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a cursor with the provided image.  <a href="#ac24ecf82ac7d9ba6703389397f948b3a">More...</a><br /></td></tr>
<tr class="separator:ac24ecf82ac7d9ba6703389397f948b3a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad41999c8633c2fbaa2364e379c1ab25b"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Cursor.php#ad41999c8633c2fbaa2364e379c1ab25b">loadFromSystem</a> (<a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a">Type</a> type)</td></tr>
<tr class="memdesc:ad41999c8633c2fbaa2364e379c1ab25b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a native system cursor.  <a href="#ad41999c8633c2fbaa2364e379c1ab25b">More...</a><br /></td></tr>
<tr class="separator:ad41999c8633c2fbaa2364e379c1ab25b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a553f958a25683445088050a69d3de8e9"><td class="memItemLeft" align="right" valign="top"><a id="a553f958a25683445088050a69d3de8e9"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>Window</b></td></tr>
<tr class="separator:a553f958a25683445088050a69d3de8e9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Cursor.php" title="Cursor defines the appearance of a system cursor. ">Cursor</a> defines the appearance of a system cursor. </p>
<dl class="section warning"><dt>Warning</dt><dd>Features related to <a class="el" href="classsf_1_1Cursor.php" title="Cursor defines the appearance of a system cursor. ">Cursor</a> are not supported on iOS and Android.</dd></dl>
<p>This class abstracts the operating system resources associated with either a native system cursor or a custom cursor.</p>
<p>After loading the cursor the graphical appearance with either <a class="el" href="classsf_1_1Cursor.php#ac24ecf82ac7d9ba6703389397f948b3a" title="Create a cursor with the provided image. ">loadFromPixels()</a> or <a class="el" href="classsf_1_1Cursor.php#ad41999c8633c2fbaa2364e379c1ab25b" title="Create a native system cursor. ">loadFromSystem()</a>, the cursor can be changed with <a class="el" href="classsf_1_1Window.php#aab7a05baece72b08ad120063b143d19b" title="Set the displayed cursor to a native system cursor. ">sf::Window::setMouseCursor()</a>.</p>
<p>The behaviour is undefined if the cursor is destroyed while in use by the window.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><a class="code" href="classsf_1_1Window.php">sf::Window</a> window;</div><div class="line"></div><div class="line"><span class="comment">// ... create window as usual ...</span></div><div class="line"></div><div class="line"><a class="code" href="classsf_1_1Cursor.php">sf::Cursor</a> cursor;</div><div class="line"><span class="keywordflow">if</span> (cursor.<a class="code" href="classsf_1_1Cursor.php#ad41999c8633c2fbaa2364e379c1ab25b">loadFromSystem</a>(<a class="code" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aae826935374aa0414723918ba79f13368">sf::Cursor::Hand</a>))</div><div class="line">    window.<a class="code" href="classsf_1_1Window.php#aab7a05baece72b08ad120063b143d19b">setMouseCursor</a>(cursor);</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Window.php#aab7a05baece72b08ad120063b143d19b" title="Set the displayed cursor to a native system cursor. ">sf::Window::setMouseCursor</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Cursor_8hpp_source.php#l00046">46</a> of file <a class="el" href="Cursor_8hpp_source.php">Cursor.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="ab9ab152aec1f8a4955e34ccae08f930a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab9ab152aec1f8a4955e34ccae08f930a">&#9670;&nbsp;</a></span>Type</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a">sf::Cursor::Type</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumeration of the native system cursor types. </p>
<p>Refer to the following table to determine which cursor is available on which platform.</p>
<table class="markdownTable">
<tr class="markdownTableHead">
<th class="markdownTableHeadNone">Type  </th><th class="markdownTableHeadCenter">Linux  </th><th class="markdownTableHeadCenter">Mac OS X  </th><th class="markdownTableHeadCenter">Windows<ul>
<li></li>
</ul>
</th></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa8d9a9cd284dabb4246ab4f147ba779a3" title="Arrow cursor (default) ">sf::Cursor::Arrow</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa16c3acb967f2175434d6bbad7f1300bf" title="Busy arrow cursor. ">sf::Cursor::ArrowWait</a>  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aabeb51ea58e48e4477ab802d46ad2cbdd" title="Busy cursor. ">sf::Cursor::Wait</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa1a9979392de58ff11d5b4ab330e6393d" title="I-beam, cursor when hovering over a field allowing text entry. ">sf::Cursor::Text</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aae826935374aa0414723918ba79f13368" title="Pointing hand cursor. ">sf::Cursor::Hand</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa0131508eaa8802dba34b8c9b41aec6e9" title="Horizontal double arrow cursor. ">sf::Cursor::SizeHorizontal</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aab3cefa56d3a0fe9fe64680c7ec11eab5" title="Vertical double arrow cursor. ">sf::Cursor::SizeVertical</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa934ddc380262a94358ccb5a4ab7bbe1c" title="Double arrow cursor going from top-left to bottom-right. ">sf::Cursor::SizeTopLeftBottomRight</a>  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aac047cea5795b6074fbb4d6479452e8ef" title="Double arrow cursor going from bottom-left to top-right. ">sf::Cursor::SizeBottomLeftTopRight</a>  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aa256a64be04f0347e6a44cbf84e5410bd" title="Combination of SizeHorizontal and SizeVertical. ">sf::Cursor::SizeAll</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aaf3b3213aad68863c7dec96587681fecd" title="Crosshair cursor. ">sf::Cursor::Cross</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowEven">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aaf2c0ed3674b334ebf8365aee243186f5" title="Help cursor. ">sf::Cursor::Help</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">no  </td><td class="markdownTableBodyCenter">yes   </td></tr>
<tr class="markdownTableBody" class="markdownTableRowOdd">
<td class="markdownTableBodyNone"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930aadb1ec726725dd81ec9906cbe06fec805" title="Action not allowed cursor. ">sf::Cursor::NotAllowed</a>  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes  </td><td class="markdownTableBodyCenter">yes   </td></tr>
</table>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa8d9a9cd284dabb4246ab4f147ba779a3"></a>Arrow&#160;</td><td class="fielddoc"><p>Arrow cursor (default) </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa16c3acb967f2175434d6bbad7f1300bf"></a>ArrowWait&#160;</td><td class="fielddoc"><p>Busy arrow cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aabeb51ea58e48e4477ab802d46ad2cbdd"></a>Wait&#160;</td><td class="fielddoc"><p>Busy cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa1a9979392de58ff11d5b4ab330e6393d"></a>Text&#160;</td><td class="fielddoc"><p>I-beam, cursor when hovering over a field allowing text entry. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aae826935374aa0414723918ba79f13368"></a>Hand&#160;</td><td class="fielddoc"><p>Pointing hand cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa0131508eaa8802dba34b8c9b41aec6e9"></a>SizeHorizontal&#160;</td><td class="fielddoc"><p>Horizontal double arrow cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aab3cefa56d3a0fe9fe64680c7ec11eab5"></a>SizeVertical&#160;</td><td class="fielddoc"><p>Vertical double arrow cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa934ddc380262a94358ccb5a4ab7bbe1c"></a>SizeTopLeftBottomRight&#160;</td><td class="fielddoc"><p>Double arrow cursor going from top-left to bottom-right. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aac047cea5795b6074fbb4d6479452e8ef"></a>SizeBottomLeftTopRight&#160;</td><td class="fielddoc"><p>Double arrow cursor going from bottom-left to top-right. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aa256a64be04f0347e6a44cbf84e5410bd"></a>SizeAll&#160;</td><td class="fielddoc"><p>Combination of SizeHorizontal and SizeVertical. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aaf3b3213aad68863c7dec96587681fecd"></a>Cross&#160;</td><td class="fielddoc"><p>Crosshair cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aaf2c0ed3674b334ebf8365aee243186f5"></a>Help&#160;</td><td class="fielddoc"><p>Help cursor. </p>
</td></tr>
<tr><td class="fieldname"><a id="ab9ab152aec1f8a4955e34ccae08f930aadb1ec726725dd81ec9906cbe06fec805"></a>NotAllowed&#160;</td><td class="fielddoc"><p>Action not allowed cursor. </p>
</td></tr>
</table>

<p class="definition">Definition at line <a class="el" href="Cursor_8hpp_source.php#l00073">73</a> of file <a class="el" href="Cursor_8hpp_source.php">Cursor.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a6a36a0a5943b22b77b00cac839dd715c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6a36a0a5943b22b77b00cac839dd715c">&#9670;&nbsp;</a></span>Cursor()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Cursor::Cursor </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor doesn't actually create the cursor; initially the new instance is invalid and must not be used until either <a class="el" href="classsf_1_1Cursor.php#ac24ecf82ac7d9ba6703389397f948b3a" title="Create a cursor with the provided image. ">loadFromPixels()</a> or <a class="el" href="classsf_1_1Cursor.php#ad41999c8633c2fbaa2364e379c1ab25b" title="Create a native system cursor. ">loadFromSystem()</a> is called and successfully created a cursor. </p>

</div>
</div>
<a id="a777ba6a1d0d68f8eb9dc85976a5b9727"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a777ba6a1d0d68f8eb9dc85976a5b9727">&#9670;&nbsp;</a></span>~Cursor()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Cursor::~Cursor </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>This destructor releases the system resources associated with this cursor, if any. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ac24ecf82ac7d9ba6703389397f948b3a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac24ecf82ac7d9ba6703389397f948b3a">&#9670;&nbsp;</a></span>loadFromPixels()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Cursor::loadFromPixels </td>
          <td>(</td>
          <td class="paramtype">const Uint8 *&#160;</td>
          <td class="paramname"><em>pixels</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Vector2.php">Vector2u</a>&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Vector2.php">Vector2u</a>&#160;</td>
          <td class="paramname"><em>hotspot</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a cursor with the provided image. </p>
<p><em>pixels</em> must be an array of <em>width</em> by <em>height</em> pixels in 32-bit RGBA format. If not, this will cause undefined behavior.</p>
<p>If <em>pixels</em> is null or either <em>width</em> or <em>height</em> are 0, the current cursor is left unchanged and the function will return false.</p>
<p>In addition to specifying the pixel data, you can also specify the location of the hotspot of the cursor. The hotspot is the pixel coordinate within the cursor image which will be located exactly where the mouse pointer position is. Any mouse actions that are performed will return the window/screen location of the hotspot.</p>
<dl class="section warning"><dt>Warning</dt><dd>On Unix, the pixels are mapped into a monochrome bitmap: pixels with an alpha channel to 0 are transparent, black if the RGB channel are close to zero, and white otherwise.</dd></dl>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">pixels</td><td>Array of pixels of the image </td></tr>
    <tr><td class="paramname">size</td><td>Width and height of the image </td></tr>
    <tr><td class="paramname">hotspot</td><td>(x,y) location of the hotspot </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>true if the cursor was successfully loaded; false otherwise </dd></dl>

</div>
</div>
<a id="ad41999c8633c2fbaa2364e379c1ab25b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad41999c8633c2fbaa2364e379c1ab25b">&#9670;&nbsp;</a></span>loadFromSystem()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Cursor::loadFromSystem </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a">Type</a>&#160;</td>
          <td class="paramname"><em>type</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a native system cursor. </p>
<p>Refer to the list of cursor available on each system (see <a class="el" href="classsf_1_1Cursor.php#ab9ab152aec1f8a4955e34ccae08f930a" title="Enumeration of the native system cursor types. ">sf::Cursor::Type</a>) to know whether a given cursor is expected to load successfully or is not supported by the operating system.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">type</td><td>Native system cursor type </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>true if and only if the corresponding cursor is natively supported by the operating system; false otherwise </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Cursor_8hpp_source.php">Cursor.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
