<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Shape.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Shape.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SHAPE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_SHAPE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="code" href="classsf_1_1Shape.php">   43</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php" title="Abstract base class for every object that can be drawn into a render window.">sf::Drawable</a></div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a>();</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keywordtype">void</span> AddPoint(<span class="keywordtype">float</span> X, <span class="keywordtype">float</span> Y, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(255, 255, 255), <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="keywordtype">void</span> AddPoint(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Position, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(255, 255, 255), <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetNbPoints() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keywordtype">void</span> EnableFill(<span class="keywordtype">bool</span> Enable);</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    <span class="keywordtype">void</span> EnableOutline(<span class="keywordtype">bool</span> Enable);</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">void</span> SetPointPosition(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Position);</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    <span class="keywordtype">void</span> SetPointPosition(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index, <span class="keywordtype">float</span> X, <span class="keywordtype">float</span> Y);</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;    <span class="keywordtype">void</span> SetPointColor(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col);</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;    <span class="keywordtype">void</span> SetPointOutlineColor(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol);</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;    <span class="keywordtype">void</span> SetOutlineWidth(<span class="keywordtype">float</span> Width);</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; GetPointPosition(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; GetPointColor(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; GetPointOutlineColor(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Index) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;    <span class="keywordtype">float</span> GetOutlineWidth() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Line(<span class="keywordtype">float</span> P1X, <span class="keywordtype">float</span> P1Y, <span class="keywordtype">float</span> P2X, <span class="keywordtype">float</span> P2Y, <span class="keywordtype">float</span> Thickness, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Line(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P2, <span class="keywordtype">float</span> Thickness, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Rectangle(<span class="keywordtype">float</span> P1X, <span class="keywordtype">float</span> P1Y, <span class="keywordtype">float</span> P2X, <span class="keywordtype">float</span> P2Y, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div>
<div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Rectangle(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P2, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;</div>
<div class="line"><a name="l00242"></a><span class="lineno">  242</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Circle(<span class="keywordtype">float</span> X, <span class="keywordtype">float</span> Y, <span class="keywordtype">float</span> Radius, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00243"></a><span class="lineno">  243</span>&#160;</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Shape.php" title="Shape defines a drawable convex shape ; it also defines helper functions to draw simple shapes like l...">Shape</a> Circle(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Center, <span class="keywordtype">float</span> Radius, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col, <span class="keywordtype">float</span> Outline = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineCol = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">sf::Color</a>(0, 0, 0));</div>
<div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;</div>
<div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;<span class="keyword">protected</span> :</div>
<div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;</div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> Render(<a class="code" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, image, ...)">RenderTarget</a>&amp; Target) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00263"></a><span class="lineno">  263</span>&#160;</div>
<div class="line"><a name="l00264"></a><span class="lineno">  264</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;</div>
<div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;    <span class="keywordtype">void</span> Compile();</div>
<div class="line"><a name="l00271"></a><span class="lineno">  271</span>&#160;</div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> ComputeNormal(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; P2, <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Normal);</div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;</div>
<div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;    <span class="keyword">struct </span>Point</div>
<div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;    {</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;        Point(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Pos = <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>(0, 0), <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; C = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(255, 255, 255), <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; OutlineC = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(255, 255, 255));</div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;</div>
<div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160;        <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> Position;   </div>
<div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;        <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> Normal;     </div>
<div class="line"><a name="l00293"></a><span class="lineno">  293</span>&#160;        <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>    Col;        </div>
<div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;        <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>    OutlineCol; </div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;    };</div>
<div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;</div>
<div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;<span class="comment"></span>    std::vector&lt;Point&gt; myPoints;           </div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;    <span class="keywordtype">float</span>              myOutline;          </div>
<div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;    <span class="keywordtype">bool</span>               myIsFillEnabled;    </div>
<div class="line"><a name="l00303"></a><span class="lineno">  303</span>&#160;    <span class="keywordtype">bool</span>               myIsOutlineEnabled; </div>
<div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;    <span class="keywordtype">bool</span>               myIsCompiled;       </div>
<div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;};</div>
<div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;</div>
<div class="line"><a name="l00307"></a><span class="lineno">  307</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;</div>
<div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;</div>
<div class="line"><a name="l00310"></a><span class="lineno">  310</span>&#160;<span class="preprocessor">#endif // SFML_SHAPE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>