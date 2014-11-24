<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Selector&lt; Type &gt; Class Template Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Selector.php">Selector</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pri-methods">Private Member Functions</a> &#124;
<a href="classsf_1_1Selector-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Selector&lt; Type &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Selector.php" title="Selector allow reading from multiple sockets without blocking.">Selector</a> allow reading from multiple sockets without blocking.  
 <a href="classsf_1_1Selector.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Selector_8hpp_source.php">Selector.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Selector&lt; Type &gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Selector.png" usemap="#sf::Selector&lt; Type &gt;_map" alt=""/>
  <map id="sf::Selector&lt; Type &gt;_map" name="sf::Selector&lt; Type &gt;_map">
<area href="classsf_1_1SelectorBase.php" title="Private base class for selectors." alt="sf::SelectorBase" shape="rect" coords="0,0,127,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a3c164bc6a0e397e069cdba2a29c75d71"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Selector.php#a3c164bc6a0e397e069cdba2a29c75d71">Add</a> (Type Socket)</td></tr>
<tr class="memdesc:a3c164bc6a0e397e069cdba2a29c75d71"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a socket to watch.  <a href="#a3c164bc6a0e397e069cdba2a29c75d71"></a><br/></td></tr>
<tr class="separator:a3c164bc6a0e397e069cdba2a29c75d71"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a20ea502da25dcb9610effab8a91bcbc6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Selector.php#a20ea502da25dcb9610effab8a91bcbc6">Remove</a> (Type Socket)</td></tr>
<tr class="memdesc:a20ea502da25dcb9610effab8a91bcbc6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove a socket.  <a href="#a20ea502da25dcb9610effab8a91bcbc6"></a><br/></td></tr>
<tr class="separator:a20ea502da25dcb9610effab8a91bcbc6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a92dcaf012e8effb02262717b10b1c6f4"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Selector.php#a92dcaf012e8effb02262717b10b1c6f4">Clear</a> ()</td></tr>
<tr class="memdesc:a92dcaf012e8effb02262717b10b1c6f4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove all sockets.  <a href="#a92dcaf012e8effb02262717b10b1c6f4"></a><br/></td></tr>
<tr class="separator:a92dcaf012e8effb02262717b10b1c6f4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac259fdd26dd0fb2a29a73b1f08093e0b"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Selector.php#ac259fdd26dd0fb2a29a73b1f08093e0b">Wait</a> (float Timeout=0.f)</td></tr>
<tr class="memdesc:ac259fdd26dd0fb2a29a73b1f08093e0b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wait and collect sockets which are ready for reading.  <a href="#ac259fdd26dd0fb2a29a73b1f08093e0b"></a><br/></td></tr>
<tr class="separator:ac259fdd26dd0fb2a29a73b1f08093e0b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac9000a3e909b4db03961e220d4c6f9d9"><td class="memItemLeft" align="right" valign="top">Type&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Selector.php#ac9000a3e909b4db03961e220d4c6f9d9">GetSocketReady</a> (unsigned int Index)</td></tr>
<tr class="memdesc:ac9000a3e909b4db03961e220d4c6f9d9"><td class="mdescLeft">&#160;</td><td class="mdescRight">After a call to <a class="el" href="classsf_1_1Selector.php#ac259fdd26dd0fb2a29a73b1f08093e0b" title="Wait and collect sockets which are ready for reading.">Wait()</a>, get the Index-th socket which is ready for reading.  <a href="#ac9000a3e909b4db03961e220d4c6f9d9"></a><br/></td></tr>
<tr class="separator:ac9000a3e909b4db03961e220d4c6f9d9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pri-methods"></a>
Private Member Functions</h2></td></tr>
<tr class="memitem:a42b4a3dc10eec94f7c2631f624ea087f"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SelectorBase.php#a42b4a3dc10eec94f7c2631f624ea087f">Add</a> (SocketHelper::SocketType Socket)</td></tr>
<tr class="memdesc:a42b4a3dc10eec94f7c2631f624ea087f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a socket to watch.  <a href="#a42b4a3dc10eec94f7c2631f624ea087f"></a><br/></td></tr>
<tr class="separator:a42b4a3dc10eec94f7c2631f624ea087f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a319664dddf8c2170ef5b6908c39de80e"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SelectorBase.php#a319664dddf8c2170ef5b6908c39de80e">Remove</a> (SocketHelper::SocketType Socket)</td></tr>
<tr class="memdesc:a319664dddf8c2170ef5b6908c39de80e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove a socket.  <a href="#a319664dddf8c2170ef5b6908c39de80e"></a><br/></td></tr>
<tr class="separator:a319664dddf8c2170ef5b6908c39de80e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename Type&gt;<br/>
class sf::Selector&lt; Type &gt;</h3>

<p><a class="el" href="classsf_1_1Selector.php" title="Selector allow reading from multiple sockets without blocking.">Selector</a> allow reading from multiple sockets without blocking. </p>
<p>It's a kind of multiplexer </p>

<p>Definition at line <a class="el" href="Selector_8hpp_source.php#l00044">44</a> of file <a class="el" href="Selector_8hpp_source.php">Selector.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a3c164bc6a0e397e069cdba2a29c75d71"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Type &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="classsf_1_1Selector.php">sf::Selector</a>&lt; Type &gt;::Add </td>
          <td>(</td>
          <td class="paramtype">Type&#160;</td>
          <td class="paramname"><em>Socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add a socket to watch. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Socket</td><td>: Socket to add </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a92dcaf012e8effb02262717b10b1c6f4"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Type &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="classsf_1_1Selector.php">sf::Selector</a>&lt; Type &gt;::Clear </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove all sockets. </p>

</div>
</div>
<a class="anchor" id="ac9000a3e909b4db03961e220d4c6f9d9"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Type &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">Type <a class="el" href="classsf_1_1Selector.php">sf::Selector</a>&lt; Type &gt;::GetSocketReady </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>Index</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>After a call to <a class="el" href="classsf_1_1Selector.php#ac259fdd26dd0fb2a29a73b1f08093e0b" title="Wait and collect sockets which are ready for reading.">Wait()</a>, get the Index-th socket which is ready for reading. </p>
<p>The total number of sockets ready is the integer returned by the previous call to <a class="el" href="classsf_1_1Selector.php#ac259fdd26dd0fb2a29a73b1f08093e0b" title="Wait and collect sockets which are ready for reading.">Wait()</a></p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Index</td><td>: Index of the socket to get</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The Index-th socket </dd></dl>

</div>
</div>
<a class="anchor" id="a20ea502da25dcb9610effab8a91bcbc6"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Type &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="classsf_1_1Selector.php">sf::Selector</a>&lt; Type &gt;::Remove </td>
          <td>(</td>
          <td class="paramtype">Type&#160;</td>
          <td class="paramname"><em>Socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove a socket. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Socket</td><td>: Socket to remove </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ac259fdd26dd0fb2a29a73b1f08093e0b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Type &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">unsigned int <a class="el" href="classsf_1_1Selector.php">sf::Selector</a>&lt; Type &gt;::Wait </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>Timeout</em> = <code>0.f</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wait and collect sockets which are ready for reading. </p>
<p>This functions will return either when at least one socket is ready, or when the given time is out</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Timeout</td><td>: Timeout, in seconds (0 by default : no timeout)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Number of sockets ready to be read </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Selector_8hpp_source.php">Selector.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>