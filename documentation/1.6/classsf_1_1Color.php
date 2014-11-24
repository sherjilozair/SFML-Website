<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Color Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Color.php">Color</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#pub-static-attribs">Static Public Attributes</a> &#124;
<a href="classsf_1_1Color-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Color Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> is an utility class for manipulating 32-bits RGBA colors.  
 <a href="classsf_1_1Color.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Color_8hpp_source.php">Color.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ac2eb4393fb11ad3fa3ccf34e92fe08e4"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#ac2eb4393fb11ad3fa3ccf34e92fe08e4">Color</a> ()</td></tr>
<tr class="memdesc:ac2eb4393fb11ad3fa3ccf34e92fe08e4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#ac2eb4393fb11ad3fa3ccf34e92fe08e4"></a><br/></td></tr>
<tr class="separator:ac2eb4393fb11ad3fa3ccf34e92fe08e4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a35b792f22f04696b82a93e36530ca32c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a35b792f22f04696b82a93e36530ca32c">Color</a> (Uint8 R, Uint8 G, Uint8 B, Uint8 A=255)</td></tr>
<tr class="memdesc:a35b792f22f04696b82a93e36530ca32c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the color from its 4 RGBA components.  <a href="#a35b792f22f04696b82a93e36530ca32c"></a><br/></td></tr>
<tr class="separator:a35b792f22f04696b82a93e36530ca32c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa482bfd0d43f85b3bb45c080c95f5023"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#aa482bfd0d43f85b3bb45c080c95f5023">operator+=</a> (const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;Other)</td></tr>
<tr class="memdesc:aa482bfd0d43f85b3bb45c080c95f5023"><td class="mdescLeft">&#160;</td><td class="mdescRight">Operator += overload to add a color.  <a href="#aa482bfd0d43f85b3bb45c080c95f5023"></a><br/></td></tr>
<tr class="separator:aa482bfd0d43f85b3bb45c080c95f5023"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a4241b8a8970c593cda5e28d2e9baa8"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a9a4241b8a8970c593cda5e28d2e9baa8">operator*=</a> (const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;Other)</td></tr>
<tr class="memdesc:a9a4241b8a8970c593cda5e28d2e9baa8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Operator *= overload to modulate a color.  <a href="#a9a4241b8a8970c593cda5e28d2e9baa8"></a><br/></td></tr>
<tr class="separator:a9a4241b8a8970c593cda5e28d2e9baa8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a67a77ba62d5ce56aa618b5117f26e955"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a67a77ba62d5ce56aa618b5117f26e955">operator==</a> (const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;Other) const </td></tr>
<tr class="memdesc:a67a77ba62d5ce56aa618b5117f26e955"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compare two colors (for equality)  <a href="#a67a77ba62d5ce56aa618b5117f26e955"></a><br/></td></tr>
<tr class="separator:a67a77ba62d5ce56aa618b5117f26e955"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a058388f4f0cd47b93c08c545d6ac39c5"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a058388f4f0cd47b93c08c545d6ac39c5">operator!=</a> (const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;Other) const </td></tr>
<tr class="memdesc:a058388f4f0cd47b93c08c545d6ac39c5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compare two colors (for difference)  <a href="#a058388f4f0cd47b93c08c545d6ac39c5"></a><br/></td></tr>
<tr class="separator:a058388f4f0cd47b93c08c545d6ac39c5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a6a5256ca24a4f9f0e0808f6fc23e01e1"><td class="memItemLeft" align="right" valign="top">Uint8&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1">r</a></td></tr>
<tr class="memdesc:a6a5256ca24a4f9f0e0808f6fc23e01e1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Red component.  <a href="#a6a5256ca24a4f9f0e0808f6fc23e01e1"></a><br/></td></tr>
<tr class="separator:a6a5256ca24a4f9f0e0808f6fc23e01e1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a591daf9c3c55dea830c76c962d6ba1a5"><td class="memItemLeft" align="right" valign="top">Uint8&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5">g</a></td></tr>
<tr class="memdesc:a591daf9c3c55dea830c76c962d6ba1a5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Green component.  <a href="#a591daf9c3c55dea830c76c962d6ba1a5"></a><br/></td></tr>
<tr class="separator:a591daf9c3c55dea830c76c962d6ba1a5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6707aedd0609c8920e12df5d7abc53cb"><td class="memItemLeft" align="right" valign="top">Uint8&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb">b</a></td></tr>
<tr class="memdesc:a6707aedd0609c8920e12df5d7abc53cb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Blue component.  <a href="#a6707aedd0609c8920e12df5d7abc53cb"></a><br/></td></tr>
<tr class="separator:a6707aedd0609c8920e12df5d7abc53cb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a56dbdb47d5f040d9b78ac6a0b8b3a831"><td class="memItemLeft" align="right" valign="top">Uint8&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">a</a></td></tr>
<tr class="memdesc:a56dbdb47d5f040d9b78ac6a0b8b3a831"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alpha (transparency) component.  <a href="#a56dbdb47d5f040d9b78ac6a0b8b3a831"></a><br/></td></tr>
<tr class="separator:a56dbdb47d5f040d9b78ac6a0b8b3a831"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-attribs"></a>
Static Public Attributes</h2></td></tr>
<tr class="memitem:a77c688197b981338f0b19dc58bd2facd"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">Black</a></td></tr>
<tr class="memdesc:a77c688197b981338f0b19dc58bd2facd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Black predefined color.  <a href="#a77c688197b981338f0b19dc58bd2facd"></a><br/></td></tr>
<tr class="separator:a77c688197b981338f0b19dc58bd2facd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4fd874712178d9e206f53226002aa4ca"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca">White</a></td></tr>
<tr class="memdesc:a4fd874712178d9e206f53226002aa4ca"><td class="mdescLeft">&#160;</td><td class="mdescRight">White predefined color.  <a href="#a4fd874712178d9e206f53226002aa4ca"></a><br/></td></tr>
<tr class="separator:a4fd874712178d9e206f53226002aa4ca"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a127dbf55db9c07d0fa8f4bfcbb97594a"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a">Red</a></td></tr>
<tr class="memdesc:a127dbf55db9c07d0fa8f4bfcbb97594a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Red predefined color.  <a href="#a127dbf55db9c07d0fa8f4bfcbb97594a"></a><br/></td></tr>
<tr class="separator:a127dbf55db9c07d0fa8f4bfcbb97594a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a95629b30de8c6856aa7d3afed12eb865"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865">Green</a></td></tr>
<tr class="memdesc:a95629b30de8c6856aa7d3afed12eb865"><td class="mdescLeft">&#160;</td><td class="mdescRight">Green predefined color.  <a href="#a95629b30de8c6856aa7d3afed12eb865"></a><br/></td></tr>
<tr class="separator:a95629b30de8c6856aa7d3afed12eb865"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab03770d4817426b2614cfc33cf0e245c"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c">Blue</a></td></tr>
<tr class="memdesc:ab03770d4817426b2614cfc33cf0e245c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Blue predefined color.  <a href="#ab03770d4817426b2614cfc33cf0e245c"></a><br/></td></tr>
<tr class="separator:ab03770d4817426b2614cfc33cf0e245c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af8896b5f56650935f5b9d72d528802c7"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7">Yellow</a></td></tr>
<tr class="memdesc:af8896b5f56650935f5b9d72d528802c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Yellow predefined color.  <a href="#af8896b5f56650935f5b9d72d528802c7"></a><br/></td></tr>
<tr class="separator:af8896b5f56650935f5b9d72d528802c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6fe70d90b65b2163dd066a84ac00426c"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c">Magenta</a></td></tr>
<tr class="memdesc:a6fe70d90b65b2163dd066a84ac00426c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Magenta predefined color.  <a href="#a6fe70d90b65b2163dd066a84ac00426c"></a><br/></td></tr>
<tr class="separator:a6fe70d90b65b2163dd066a84ac00426c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a64ae9beb0b9a5865dd811cda4bb18340"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340">Cyan</a></td></tr>
<tr class="memdesc:a64ae9beb0b9a5865dd811cda4bb18340"><td class="mdescLeft">&#160;</td><td class="mdescRight">Cyan predefined color.  <a href="#a64ae9beb0b9a5865dd811cda4bb18340"></a><br/></td></tr>
<tr class="separator:a64ae9beb0b9a5865dd811cda4bb18340"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> is an utility class for manipulating 32-bits RGBA colors. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00040">40</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="ac2eb4393fb11ad3fa3ccf34e92fe08e4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Color::Color </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="a35b792f22f04696b82a93e36530ca32c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Color::Color </td>
          <td>(</td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>R</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>G</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>B</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>A</em> = <code>255</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the color from its 4 RGBA components. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">R</td><td>: Red component (0 .. 255) </td></tr>
    <tr><td class="paramname">G</td><td>: Green component (0 .. 255) </td></tr>
    <tr><td class="paramname">B</td><td>: Blue component (0 .. 255) </td></tr>
    <tr><td class="paramname">A</td><td>: Alpha component (0 .. 255) (255 by default) </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a058388f4f0cd47b93c08c545d6ac39c5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Color::operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Compare two colors (for difference) </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: <a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> to compare</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if colors are different </dd></dl>

</div>
</div>
<a class="anchor" id="a9a4241b8a8970c593cda5e28d2e9baa8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Color.php">Color</a>&amp; sf::Color::operator*= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Operator *= overload to modulate a color. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: <a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> to modulate</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Component-wise multiplication of the two colors </dd></dl>

</div>
</div>
<a class="anchor" id="aa482bfd0d43f85b3bb45c080c95f5023"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Color.php">Color</a>&amp; sf::Color::operator+= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Operator += overload to add a color. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: <a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> to add</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Component-wise saturated addition of the two colors </dd></dl>

</div>
</div>
<a class="anchor" id="a67a77ba62d5ce56aa618b5117f26e955"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Color::operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Compare two colors (for equality) </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: <a class="el" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> to compare</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if colors are equal </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="a56dbdb47d5f040d9b78ac6a0b8b3a831"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint8 sf::Color::a</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Alpha (transparency) component. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00119">119</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a6707aedd0609c8920e12df5d7abc53cb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint8 sf::Color::b</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Blue component. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00118">118</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a77c688197b981338f0b19dc58bd2facd"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Black</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Black predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00104">104</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="ab03770d4817426b2614cfc33cf0e245c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Blue</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Blue predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00108">108</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a64ae9beb0b9a5865dd811cda4bb18340"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Cyan</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Cyan predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00111">111</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a591daf9c3c55dea830c76c962d6ba1a5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint8 sf::Color::g</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Green component. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00117">117</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a95629b30de8c6856aa7d3afed12eb865"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Green</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Green predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00107">107</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a6fe70d90b65b2163dd066a84ac00426c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Magenta</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Magenta predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00110">110</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a6a5256ca24a4f9f0e0808f6fc23e01e1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint8 sf::Color::r</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Red component. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00116">116</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a127dbf55db9c07d0fa8f4bfcbb97594a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Red</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Red predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00106">106</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a4fd874712178d9e206f53226002aa4ca"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::White</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>White predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00105">105</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="af8896b5f56650935f5b9d72d528802c7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Color.php">Color</a> sf::Color::Yellow</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Yellow predefined color. </p>

<p>Definition at line <a class="el" href="Color_8hpp_source.php#l00109">109</a> of file <a class="el" href="Color_8hpp_source.php">Color.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Color_8hpp_source.php">Color.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>